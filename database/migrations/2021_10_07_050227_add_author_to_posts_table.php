<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorToPostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $columnName = 'user_id';
        if ( ! Schema::hasColumn('posts', $columnName)) {
            Schema::table('posts', function (Blueprint $table) use ($columnName) {
                $table->unsignedBigInteger($columnName);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $columnName = 'user_id';
        if (Schema::hasColumn('posts', $columnName)) {
            Schema::table('posts', function (Blueprint $table) use ($columnName) {
                $table->dropColumn($columnName);
            });
        }
    }
}
