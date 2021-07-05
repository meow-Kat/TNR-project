<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   // 使用者
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('會員姓名');
            $table->string('email')->unique();
            $table->string('nick_name')->comment('會員暱稱');
            $table->number('phone')->comment('會員手機');
            $table->text('address')->comment('會員地址');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
