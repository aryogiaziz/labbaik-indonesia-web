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
        Schema::table('paket_umrohs', function (Blueprint $table) {
            $table->string('durasi')->after('jadwal_keberangkatan');
            $table->string('ketersediaan')->after('hotel');
            $table->string('berangkat_dari')->after('ketersediaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paket_umrohs', function (Blueprint $table) {
            $table->drop('durasi');
            $table->drop('ketersediaan');
            $table->drop('berangkat_dari');
        });
    }
};
