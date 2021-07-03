<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategory  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//$table->string("name");
//$table->string("image")-> nullable();
//$table->text("description")->nullable();
//$table->decimal("price",14,2)->default(0);
//$table->unsignedInteger("qty")->default(0);
//$table->string("name_category");
////            $table->string("name_brand");
//$table->unsignedBigInteger("category_id");
////            $table->unsignedBigInteger("brand_id");
//$table->timestamps();
//$table->foreign("category_id")->references("id")->on("categories");
////            $table->foreign("brand_id")->references("id")->on("brands");
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); //tạo khóa chính là id kiểu dữ liệu big int 20 auto increment
            $table->string("name");
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
        Schema::dropIfExists('categories');
    }
}
