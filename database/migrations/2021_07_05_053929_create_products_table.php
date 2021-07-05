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
    {   // 購物車
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_category_id')->comment('產品種類ID');
            $table->string('title')->comment('產品名稱');
            $table->longtext('img')->comment('產品圖片');
            $table->number('price')->comment('產品價格');
            $table->longtext('content')->comment('產品內容');
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
