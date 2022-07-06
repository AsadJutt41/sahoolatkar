<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('product_name');
            $table->text('product_image');
            $table->text('additional_information');
            $table->text('discount_price');
            $table->text('code');
            $table->text('department');
            $table->text('type');
            $table->text('category');
            $table->text('subCategory');
            $table->text('salePrice');
            $table->text('vendorDetail');
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
        Schema::dropIfExists('product_definitions');
    }
}
