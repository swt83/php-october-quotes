<?php namespace Travis\Quotes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisQuotesCollection extends Migration
{
    public function up()
    {
        Schema::table('travis_quotes_collection', function($table)
        {
            $table->string('source', 100);
        });
    }
    
    public function down()
    {
        Schema::table('travis_quotes_collection', function($table)
        {
            $table->dropColumn('source');
        });
    }
}
