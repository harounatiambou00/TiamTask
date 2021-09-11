<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->enum('status', ['Todo', 'Done'])->default('Todo');
            $table->timestamps();


            //Creation de la colonne qui contiendra le foreign key de la table users
            $table->unsignedBigInteger('user_id');
            //Precision de la contrainte qui permet de dire que la colonne va contenir un foreign key venant de la table users
            $table->foreign('user_id')->references('id')->on('users');

            /**
             * On aurait très bien pu remplacer les deux lignes precedents par la ligne suivante
             * $table->foreinId('user_id')->constrained();
             * Mais c'est moins comprehensible
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
