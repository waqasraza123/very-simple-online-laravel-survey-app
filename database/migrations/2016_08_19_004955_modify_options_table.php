<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('options', function (Blueprint $table) {
            $table->dropColumn('answer');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('options', function (Blueprint $table) {
            $table->dropColumn('option1');
            $table->dropColumn('option2');
            $table->dropColumn('option3');
            $table->dropColumn('option4');
            $table->string('answer');
        });
    }
}
