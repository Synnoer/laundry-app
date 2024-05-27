<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Fragrance;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function index(): View
    {
        $order_dates = ['2024-05-25', '2024-05-26', '2024-05-27'];
        $fragrances = Fragrance::all();
        $users = User::with('membership.membershiptype')->get();
        $memberships = Membership::with('membershiptype')->get();

        return view('order.laundry', compact('order_dates', 'fragrances', 'users', 'memberships'));
    }

    public function add(Request $request): View
    {
        $order_date = $request->input('order_date');
        $fragrance = $request->input('fragrance');

        $products = [
            ['id' => 1, 'name' => 'Shirt', 'weight' => 350, 'image' => 'shirt.png'],
            ['id' => 2, 'name' => 'Pants', 'weight' => 350, 'image' => 'pants.png'],
            ['id' => 3, 'name' => 'Jacket', 'weight' => 450, 'image' => 'jacket.png'],
            ['id' => 4, 'name' => 'T-Shirt', 'weight' => 350, 'image' => 't-shirt.png'],
            ['id' => 5, 'name' => 'Underwear', 'weight' => 250, 'image' => 'underwear.png'],
        ];

        return view('order.add-laundry', compact('products', 'order_date', 'fragrance'));
    }

    public function detail(Request $request): View
    {
        $validatedData = $request->validate([
            'order_date' => 'required|date',
            'fragrance' => 'required|string',
            'products' => 'required|array',
            'products.*.name' => 'required|string',
            'products.*.weight' => 'required|numeric',
            'products.*.quantity' => 'required|integer|min:0',
            'products.*.image' => 'required|string',
        ]);

        $totalWeight = array_sum(array_map(function($product) {
            return $product['weight'] * $product['quantity'];
        }, $validatedData['products']));

        $order = [
            'products' => $validatedData['products'],
            'total_weight' => $totalWeight,
            'service' => 'Laundry Service',
            'fragrance' => $validatedData['fragrance'],
            'order_date' => $validatedData['order_date'],
            'completion_estimation_date' => now()->addDays(2)->toDateString(),
            'user_id' => auth()->id(),
        ];

        return view('order.details-laundry', compact('order'));
    }

    public function store(Request $request): RedirectResponse
    {
        // Decode JSON string to array
        $request->merge([
            'products' => json_decode($request->input('products'), true),
        ]);

        // Debug: Check incoming request data after decoding
        logger()->debug('Store Order Request Data after decoding:', $request->all());

        $validatedData = $request->validate([
            'products' => 'required|array',
            'products.*.name' => 'required|string',
            'products.*.weight' => 'required|numeric',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.image' => 'required|string',
            'total_weight' => 'required|numeric|max:3000',
            'service' => 'required|string',
            'fragrance' => 'required|string',
            'order_date' => 'required|date',
            'completion_estimation_date' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        logger()->debug('Validated Order Data:', $validatedData);

        Order::create([
            'product_details' => json_encode($validatedData['products']),
            'total_weight' => $validatedData['total_weight'],
            'service' => $validatedData['service'],
            'fragrance' => $validatedData['fragrance'],
            'order_date' => $validatedData['order_date'],
            'completion_estimation_date' => $validatedData['completion_estimation_date'],
            'user_id' => $validatedData['user_id'],
        ]);

        return redirect()->route('dashboard')->with('success', 'Order created successfully.');
    }
}
