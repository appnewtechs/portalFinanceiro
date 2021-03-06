<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',20);
            $table->string('CNPJ',20);
            $table->string('empresa');
            $table->string('cidade');
            $table->char('estado',2);
            $table->date('emissao');
            $table->date('vencimento');
            $table->date('prorrogacao');
            $table->float('valor_original',8,2);
            $table->float('valor_saldo',8,2);
            $table->float('valor_atualizado',8,2);
            $table->biginteger('id_usuario')->unsigned();
            $table->biginteger('id_titulo')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletos');
    }
}
