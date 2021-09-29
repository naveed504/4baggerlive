<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableGeneralSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('general_settings', function (Blueprint $table) {
            $table->string('facebook')->after('secondary_phoneno');
            $table->string('twitter')->after('facebook');
            $table->string('instagram')->after('twitter');
            $table->string('google')->after('instagram');
            $table->string('mission_title')->after('google');
            $table->string('mission_bgimg')->after('mission_title');
            $table->string('mission_bgimgtitle')->after('mission_bgimg');
            $table->string('mission_statment')->after('mission_bgimgtitle');
            $table->string('mission_bgimgcontent')->after('mission_statment');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { 
        Schema::table('matches', function (Blueprint $table) {     
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('instagram');
            $table->dropColumn('google');
            $table->dropColumn('mission_title');
            $table->dropColumn('mission_bgimg');
            $table->dropColumn('mission_bgimgtitle');
            $table->dropColumn('mission_statment');
            $table->dropColumn('mission_bgimgcontent');
        });
    }
}
