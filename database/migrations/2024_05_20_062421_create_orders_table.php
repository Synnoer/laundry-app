<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade')->default(2);
            $table->foreignId('membership_id')->constrained('memberships')->onDelete('cascade')->nullable();
        });
        Schema::table('memberships', function (Blueprint $table) {
            $table->foreignId('membership_type_id')->constrained('membership_types')->onDelete('cascade');;
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->json('product_details');
            $table->decimal('total_weight', 8, 2);
            $table->string('service');
            $table->string('fragrance');
            $table->date('order_date');
            $table->date('completion_estimation_date');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
            $table->dropForeign('users_membership_id_foreign');
        });
        Schema::table('memberships', function (Blueprint $table) {
            $table->dropForeign('memberships_membership_type_id_foreign');
        });
        Schema::dropIfExists('orders');
    }
}
