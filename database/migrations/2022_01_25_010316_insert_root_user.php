<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertRootUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $rootEmail = env('ROOT_EMAIL');
        $rootPassword = bcrypt(env('ROOT_PASSWORD'));
        DB::table('users')->insert([
            'name' => 'root',
            'email' =>  $rootEmail,
            'password' => $rootPassword,
            'current_team_id' => 1,
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
