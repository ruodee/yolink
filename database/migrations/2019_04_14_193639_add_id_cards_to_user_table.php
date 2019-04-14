<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCardsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_card_side_front')->nullable()->after('avatar');
            $table->string('id_card_side_back')->nullable()->after('id_card_side_front');
            $table->text('id_card_info')->nullable()->after('id_card_side_back');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_card_side_front');
            $table->dropColumn('id_card_side_back');
            $table->dropColumn('id_card_info');
        });
    }
}