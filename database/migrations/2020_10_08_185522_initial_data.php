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
            'color' => 'card--none'
        ]);
        DB::table('types')->insert([
            'name' => 'Normal',
            'color' => 'card--normal'
        ]);
        DB::table('types')->insert([
            'name' => 'Importante',
            'color' => 'card--warning'
        ]);
        DB::table('types')->insert([
            'name' => 'Muy Importante',
            'color' => 'card--danger'
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
