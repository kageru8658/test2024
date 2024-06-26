<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('gender');
            $table->string('email');
            $table->string('tel', 11);
            $table->text('content')->nullable();
            $table->string('address');
            $table->string('build');
            $table->timestamps();
        });
    }
    //'name','gender', 'email', 'tel','address','build','kind','content'

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
