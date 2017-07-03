<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->tinyInteger('app_id');//app——id
            $table->integer('user_id');//发布人
            $table->integer('article_category_id');//分类ID
            $table->string('title')->comment('标题');//标题
            $table->text('content')->comment('内容');//内容
            $table->string('author')->comment('作者');//作者
            $table->string('source')->comment('来源');//来源  转载、分享、原创
            $table->boolean('is_hot')->comment('是否热门');//是否热
            $table->boolean('is_delete')->comment('是否删除');//是否删除
            $table->timestamp('published_at')->comment('发布时间'); //正式发布时间，再此时间之后显示
            $table->timestamp('lose_at')->comment('失效时间'); //失效时间，再此时间之后隐藏
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
        Schema::dropIfExists('articles');
    }
}
