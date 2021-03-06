<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFacultyIdToPublications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publications', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->foreign('faculty_id')
                    ->references('id')->on('faculties')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            //
            $table->dropColumn('faculty_id');
            $table->dropForeign('faculty_id');
        });
    }
}
