<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPalestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('palestras', function (Blueprint $table) {
            $table->longText('palestra');
            $table->longText('mediador');
        });
       Schema::table('palestrantes', function (Blueprint $table) {
            $table->longText('resume');
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
