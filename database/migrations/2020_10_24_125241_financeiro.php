<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Financeiro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiro', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('type'); // 0-  CA-contas a recber - CP -  1 -Contas a pagar
            $table->decimal('valor',10,2);
            $table->integer('id_user');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
