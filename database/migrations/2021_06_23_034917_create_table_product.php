<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
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
            $table->string("name");
            $table->string("image")-> nullable();
            $table->text("description")->nullable();
            $table->decimal("price",14,2)->default(0);
            $table->unsignedInteger("qty")->default(0);
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("brand_id");
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("categories");
            $table->foreign("brand_id")->references("id")->on("brands");
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
