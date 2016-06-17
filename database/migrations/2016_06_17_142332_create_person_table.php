<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id')->unsingned;
            $table->string('name', 100);
            $table->char('gender', 1)->default('m');
            $table->date('birth_date');
            $table->integer('age')->default(0);
            $table->string('address', 255);
            $table->string('photo', 255)->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('phone_commercial', 15);
            $table->string('mobile', 45)->nullable();
            $table->string('email', 70)->nullable();
            $table->text('notes');
            $table->integer('person_type_id');
            $table->char('is_active', 1)->default('1');
            $table->string('cpf', 15)->unique()->nullable();
            $table->string('rg', 15)->nullable();
            $table->string('marital_status', 45)->default('Solteiro(a)')->nullable();
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
        Schema::drop('person');
    }
}
