<?php namespace Travis\Quotes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisQuotesCollection2 extends Migration
{
    public function up()
    {
        Schema::table('travis_quotes_collection', function($table)
        {
            $table->string('author_name', 50)->nullable();
            $table->string('author_title', 50)->nullable();
            $table->renameColumn('organization', 'author_organization');
            $table->dropColumn('author');
            $table->dropColumn('title');
        });
    }
    
    public function down()
    {
        Schema::table('travis_quotes_collection', function($table)
        {
            $table->dropColumn('author_name');
            $table->dropColumn('author_title');
            $table->renameColumn('author_organization', 'organization');
            $table->string('author', 50)->nullable();
            $table->string('title', 50)->nullable();
        });
    }
}
