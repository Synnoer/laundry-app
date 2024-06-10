<x-app-layout>
    </style>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Ongoing Order
            </button>
        </div>
    </x-slot>

    <main">
        <!-- Product Containers -->
        <div class="product-container ">
            <img src="/image/shirt.png" alt="Shirt" class="product-image">
            <div class="product-details">
                <p class="description">Total Weight</p>
                <p class="quantity">{{$order->total_weight}} gram</p>
                <p>Order date</p>
                <p>{{$order->order_date->format('Y-m-d') ?? 'end'}}</p>
                <p>Estimated completion</p>
                <p>{{$order->completion_estimation_date->format('Y-m-d') ?? 'end'}}</p>
            </div>
        </div>

        <div class="flex items-center justify-center px-2 py-0.5 text-xl italic mb-2 text-bold">
            <h3>Order Status</h3>
        </div>
        <!-- Total Pieces -->
        @if($order->status==0)
        <x-green-label>{{ __('Awaiting Pickup') }}</x-green-label>
        @elseif($order->status!=0)
        <x-status-label>{{ __('Awaiting Pickup') }}</x-status-label>
        @endif
        @if($order->status==1)
        <x-green-label>{{ __('Order picked up') }}</x-green-label>
        @elseif($order->status!=1)
        <x-status-label>{{ __('Order picked up') }}</x-status-label>
        @endif
        @if($order->status==2)
        <x-green-label>{{ __('Order arrives at the laudry') }}</x-green-label>
        @elseif($order->status!=2)
        <x-status-label>{{ __('Order arrives at the laudry') }}</x-status-label>
        @endif
        @if($order->status==3)
        <x-green-label>{{ __('Order is being washed') }}</x-green-label>
        @elseif($order->status!=3)
        <x-status-label>{{ __('Order is being washed') }}</x-status-label>
        @endif
        @if($order->status==4)
        <x-green-label>{{ __('Order finished washing') }}</x-green-label>
        @elseif($order->status!=4)
        <x-status-label>{{ __('Order finished washing') }}</x-status-label>
        @endif
        @if($order->status==5)
        <x-green-label>{{ __('Order delivered to destination') }}</x-green-label>
        @elseif($order->status!=5)
        <x-status-label>{{ __('Order delivered to destination') }}</x-status-label>
        @endif
        @if($order->status==6)
        <x-green-label>{{ __('Order arrives at destination') }}</x-green-label>
        @elseif($order->status!=6)
        <x-status-label>{{ __('Order arrives at destination') }}</x-status-label>
        @endif

        @if($order->status==0)
        <div class="flex justify-center">
        <form action="{{ route('cancelOrder', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this order?');">
            @csrf
            @method('delete')
            <button class=" px-2 py-1 bg-red-400 text-black-700 rounded-md shadow-md mt-7">
                <span class="text-white">{{ __('Cancel Order') }}</span>
            </button>
        </div>
        </form>
        @elseif($order->status!=0)
        <div class="flex justify-center">
            <button class=" px-2 py-1 bg-red-200 text-black-700 rounded-md shadow-md mt-7 disable">
                <span class="text-white">{{ __('Cancel Order') }}</span>
            </button>
        </div>
        @endif


        </main>
</x-app-layout>