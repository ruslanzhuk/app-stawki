<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;

    protected $table = "table_football_matches";

    protected $fillable = [
        "match_id",
        "team_first",
        'team_second',
        "season",
        "tour",
        "match_date",
        "coefficient_team_first",
        "coefficient_draw",
        "coefficient_team_second",
        "team_first_goals",
        "team_second_goals",
        "result"
    ];


}
