<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//发表人
            $table->integer('auth');//查看权限
            $table->integer('level');//文章等级
            $table->integer('category_id');//分类登陆
            $table->string('title');//标题
            $table->text('content');//内容
            $table->integer('read_total');//阅读数
            $table->integer('laud');//赞
            $table->integer('tread');//踩
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
        Schema::dropIfExists('notices');
    }
}
