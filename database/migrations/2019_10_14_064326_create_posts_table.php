<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('body');
            $table->string('image')->nullable();
            $table->date('deadline')->comment('締め切り日');
            $table->string('material')->comment('原料の有無');
            $table->string('amount')->comment('ロット');
            $table->string('frequency')->comment('使用頻度');
            $table->string('asking_price')->comment('希望価格');
            $table->date('first_delivery_date')->comment('希望初回納品日');
            $table->string('finished_use')->nullable()->comment('いつ頃まで使う');
            $table->integer('user_id');
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
        Schema::dropIfExists('posts');
    }
}
