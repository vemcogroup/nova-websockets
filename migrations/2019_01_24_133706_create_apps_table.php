<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('key')->nullable();
            $table->string('host')->nullable();
            $table->string('secret')->nullable();
            $table->boolean('client_messages')->default(false);
            $table->boolean('statistics')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['key', 'secret']);
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
