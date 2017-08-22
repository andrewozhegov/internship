<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function ($table) {
            $table->foreign('blog_id')->references('id')->on('blogs'); //FK
            $table->foreign('user_id')->references('id')->on('users'); //FK
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function ($table) {
            $table->dropForeign('comments_blog_id_foreign');
            $table->dropForeign('comments_user_id_foreign');
        });
    }
}
