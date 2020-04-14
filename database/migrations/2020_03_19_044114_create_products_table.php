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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code')->unique();
            $table->float('price', 8, 2)->nullable();
            $table->smallInteger('category_id');
            $table->mediumInteger('subcategory_id')->nullable();
            $table->string('short_desc')->nullable();
            $table->longtext('long_desc')->nullable();
            $table->string('featured_image');
            $table->json('other_images')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_latest')->default(false);
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });

        // Schema::create('module_product',function(Blueprint $table)
        // {
        //     // $table->bigIncrements('id');
        //     $table->integer('module_id');
        //     $table->integer('product_id');
        //     $table->timestamps();
        // });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('products');
        // Schema::dropIfExists('module_product');
    }

}
