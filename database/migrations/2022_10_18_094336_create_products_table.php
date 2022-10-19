<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('item_id', 150)->nullable();
            $table->string('title', 150)->nullable();
            $table->string('item_type', 150)->nullable();
            $table->integer('catgory_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('country',50)->nullable();
            $table->string('address 1',50)->nullable();
            $table->string('address 2',50)->nullable();
            $table->string('city',50)->nullable();
            $table->string('state',50)->nullable();
            $table->string('zone',50)->nullable();
            $table->integer('lat')->nullable();
            $table->integer('lang')->nullable();
            $table->string('type', 50)->nullable();
            $table->integer('added_by')->nullable();
            $table->string('zip_code',50)->nullable();
            $table->integer('user_id');
            $table->float('price',20,2)->default(0.00);
            $table->string('condition', 50)->nullable();
            $table->text('description')->nullable();
            $table->integer('min_quantity')->nullable();
            $table->date('validity')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('1=>Active, 0=>Inactive');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
