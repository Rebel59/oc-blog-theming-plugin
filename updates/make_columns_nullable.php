<?php namespace Rebel59\Blogthemes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class MakeColumnsNullable extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_categories', function(Blueprint $table) {
            $table->string('color')->nullable()->change();
            $table->longText('css')->nullable()->change();
        });
    }

    public function down()
    {

    }
}
