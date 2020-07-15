<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->string('slug')->nullable();
            $table->string('name')->change();
            $table->text('description')->default('null')->change();
            $table->integer('year')->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('slug');
            $table->string('name', 191)->change();
            $table->text('description')->default('NULL')->change();
            $table->integer('year')->nullable()->default(NULL)->change();
        });
    }
}
