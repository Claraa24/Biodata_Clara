<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('np');
            $table->string('nama');
            $table->string('ttl');
            $table->string('jk');
            $table->string('tb');
            $table->string('bb');
            $table->string('agama');
            $table->string('telp');
            $table->string('email');
            $table->string('goldar');
            $table->string('alamat');
            $table->string('motivasi');
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
        Schema::dropIfExists('homes');
    }
};
