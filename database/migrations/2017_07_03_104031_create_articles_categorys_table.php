<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_categorys', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');//id
            $table->char('name');//分类名称
            $table->char('parent_id');//父id  默认为0，否则为子分类
            $table->string('description');//描述
            $table->boolean('enable');//是否启用
            $table->tinyInteger('sort');//排序
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
        Schema::dropIfExists('articles_categorys');
    }
}
