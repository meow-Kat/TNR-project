<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   // 申請救助資料表(登入後填寫)
        Schema::create('helps', function (Blueprint $table) {
            $table->id();
            $table->integer('help_category_id')->comment('申請種類ID');
            $table->string('name')->comment('收據姓名');
            $table->string('address')->comment('收據地址');
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
        Schema::dropIfExists('helps');
    }
}
