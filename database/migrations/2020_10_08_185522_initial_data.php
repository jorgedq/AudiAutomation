<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('types')->insert([
            'name' => 'Ninguno',
            'color' => '#fffff'
        ]);
        DB::table('types')->insert([
            'name' => 'Normal',
            'color' => 'rgb(40,184,0)'
        ]);
        DB::table('types')->insert([
            'name' => 'Important',
            'color' => 'rgb(254,238,22)'
        ]);
        DB::table('types')->insert([
            'name' => 'Muy Importante',
            'color' => 'rgb(254,22,22)'
        ]);
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
