<?php

namespace App\Http\Controllers;

use App\Models\FootballMatch;

class HomeController
{
    public function index()
    {
        return view('home.index');
    }

    public function calculate()
    {
        $team = $_POST['team'];
        $money = $_POST['money']; //300
        $test_arr = [];
        $result = 0;
        $total_money = 0; //0
        $viktory = true;

        $matches = FootballMatch::where('team_first', $team)
            ->orWhere('team_second', $team)
            ->where('season', "2023/2024")
            //->limit(3)
            ->get();

        foreach ($matches as $fmatch) {
            if($fmatch == $matches[count($matches) - 1] && $total_money > 2) {
                $money = $total_money / 2;
                $result = 0;
                $team_first = $fmatch->team_first;
                if ($team_first == $team) {
                    if ($fmatch->team_first_goals > $fmatch->team_second_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_first); //363 //1487
                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
                    } else {
                        $result += $this->lose_game($money); //-300
                        $total_money += $result; //-237
                    }
                } else {
                    if ($fmatch->team_second_goals > $fmatch->team_first_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_second); //363 //1487
                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
                    } else {
                        $result += $this->lose_game($money); //-300
                        $total_money += $result; //-237
                    }
                }
            } else {
                $money = $_POST['money']; //300 //300 //300
                $result = 0;
                $team_first = $fmatch->team_first;
                if ($team_first == $team) {
                    if (!$viktory && $total_money < 0) {
                        $coefficient = $fmatch->coefficient_team_first; //1.21 //1.21 //1.21
                        $needed_money = 0;
                        for ($i = 1; $i * $coefficient < $i - $total_money; $i++) {
                            $needed_money = $i + 1; // 1129
                        }
                        $money = $needed_money + 100; //1129+100=1229
                    }
                    if ($fmatch->team_first_goals > $fmatch->team_second_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_first); //363 //1487
                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
                        $viktory = true;
                    } else {
                        $result += $this->lose_game($money); //-300
                        $total_money += $result; //-237
                        $viktory = false;
                    }
                } else {
                    if (!$viktory && $total_money < 0) {
                        $coefficient = $fmatch->coefficient_team_second; //1.21 //1.21 //1.21
                        $needed_money = 0;
                        for ($i = 1; $i * $coefficient < $total_money + $i; $i++) {
                            $needed_money = $i; // 1129
                        }
                        $money = $needed_money + 100; //1129+100=1229
                    }
                    if ($fmatch->team_second_goals > $fmatch->team_first_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_second); //363 //1487
                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
                        $viktory = true;
                    } else {
                        $result += $this->lose_game($money); //-300
                        $total_money += $result; //-237
                        $viktory = false;
                    }
                }
            }
            array_push($test_arr, $total_money);
        }

        return view('home.index', ['matches' => $matches, 'team' => $team, 'money' => $money, 'test_arr' => $test_arr, 'result' => $total_money]);
    }

    public function win_game($money, $coefficient)
    {
        $result = $money * $coefficient;
        return $result;

    }

    public function draw($money, $coefficient)
    {
        return $money;
    }

    public function lose_game($money)
    {
        return 0 - $money;
    }
}
