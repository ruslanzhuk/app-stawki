<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_football_matches', function (Blueprint $table) {
            $table->id("match_id");
            $table->string("team_first");
            $table->string("team_second");
            $table->string("season");
            $table->string("tour");
            $table->date("match_date");
            $table->float("coefficient_team_first");
            $table->float("coefficient_draw");
            $table->float("coefficient_team_second");
            $table->smallInteger("team_first_goals")->unsigned();
            $table->smallInteger("team_second_goals")->unsigned();
            $table->string("result");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_football_matches');
    }
};
