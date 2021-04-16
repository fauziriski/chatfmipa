<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('npm_nisn')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('dosen_pa')->nullable();
            $table->string('dosen_ta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('npm_nisn');
            $table->dropColumn('phone');
            $table->dropColumn('dosen_pa');
            $table->dropColumn('dosen_ta');
        });
    }
}
