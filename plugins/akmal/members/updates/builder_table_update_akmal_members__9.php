<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMembers9 extends Migration
{
    public function up()
    {
        Schema::table('akmal_members_', function($table)
        {
            $table->dropColumn('location');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_members_', function($table)
        {
            $table->integer('location');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
