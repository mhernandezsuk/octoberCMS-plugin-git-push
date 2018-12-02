<?php namespace Msuk\Git\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitLog extends Migration
{
    public function up()
    {
        Schema::create('git_log', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('comment')->nullable();
            $table->integer('user_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('git_log');
    }
}
