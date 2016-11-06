<?php namespace Travis\Quotes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTravisQuotesCollection extends Migration
{
    public function up()
    {
        Schema::create('travis_quotes_collection', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('quote', 2000)->nullable();
            $table->string('author', 50)->nullable();
            $table->string('title', 50)->nullable();
            $table->string('organization', 100)->nullable();
            $table->string('date', 50)->nullable();
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('travis_quotes_collection');
    }
}
