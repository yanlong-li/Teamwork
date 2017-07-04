<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');//应用id
            $table->char('name')->comment('应用名称');//应用名字
            $table->string('description');//描述
            $table->string('url');//前台访问url
            $table->string('admin');//后台访问url
            $table->boolean('is_defalut');//是否默认应用
            $table->tinyInteger('status')->default(1)->comment('状态');//应用状态
            $table->string('author');//作者
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
        Schema::dropIfExists('apps');
    }
}
