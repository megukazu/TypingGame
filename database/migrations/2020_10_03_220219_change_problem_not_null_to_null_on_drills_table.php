<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProblemNotNullToNullOnDrillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drills', function (Blueprint $table) {
            $table->String('problem1')->nullable()->change();
            $table->String('problem2')->nullable()->change();
            $table->String('problem3')->nullable()->change();
            $table->String('problem4')->nullable()->change();
            $table->String('problem5')->nullable()->change();
            $table->String('problem6')->nullable()->change();
            $table->String('problem7')->nullable()->change();
            $table->String('problem8')->nullable()->change();
            $table->String('problem9')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drills', function (Blueprint $table) {
            $table->String('problem1')->nullable(false)->change();
            $table->String('problem2')->nullable(false)->change();
            $table->String('problem3')->nullable(false)->change();
            $table->String('problem4')->nullable(false)->change();
            $table->String('problem5')->nullable(false)->change();
            $table->String('problem6')->nullable(false)->change();
            $table->String('problem7')->nullable(false)->change();
            $table->String('problem8')->nullable(false)->change();
            $table->String('problem9')->nullable(false)->change();
        });
    }
}
