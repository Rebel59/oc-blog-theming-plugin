<?php namespace Rebel59\Blogthemes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddIconColumn extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_categories', function(Blueprint $table) {
            $table->string('custom_classes');
        });
    }

    public function down()
    {
        Schema::table('rainlab_blog_categories', function(Blueprint $table) {
            $table->dropColumn('custom_classes');
        });
    }
}
