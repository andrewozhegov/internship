<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id'); // PK
            $table->unsignedInteger('user_id');

            $table->unsignedInteger('/')->defaut(0);
            $table->unsignedInteger('aboutme')->defaut(0);
            $table->unsignedInteger('interests')->defaut(0);
            $table->unsignedInteger('study')->defaut(0);
            $table->unsignedInteger('photos')->defaut(0);
            $table->unsignedInteger('contacts')->defaut(0);
            $table->unsignedInteger('blog')->defaut(0);
            $table->unsignedInteger('test')->defaut(0);

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
        Schema::dropIfExists('visitors');
    }
}
