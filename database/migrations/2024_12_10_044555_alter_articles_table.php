<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterArticlesTable extends Migration
{
    public function up()
    {
        
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('image');
        });

        
        DB::statement('ALTER TABLE articles ADD image BLOB NULL');
    }

    public function down()
    {
        
        Schema::table('articles', function (Blueprint $table) {
            DB::statement('ALTER TABLE articles DROP COLUMN image');
            $table->string('image')->nullable();
        });
    }
}


; ?>