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
        $test_arr2 = [];
        $test_arr3 = [];
        $test_arr4 = [];
        $result = 0;
        $total_money = 0; //0
        $viktory = true;
        $sum = 0;
        $umhave = 0;

        $matches = FootballMatch::where('team_first', $team)
            ->orWhere('team_second', $team)
            ->where('season', "2023/2024")
            ->orderBy("match_date")
            //->limit(3)
            ->get();

//        foreach ($matches as $fmatch) {
//            if($fmatch == $matches[count($matches) - 1] && $total_money > 2) {
//                $money = $total_money / 2;
//                $result = 0;
//                $team_first = $fmatch->team_first;
//                if ($team_first == $team) {
//                    if ($fmatch->team_first_goals > $fmatch->team_second_goals) {
//                        $result += $this->win_game($money, $fmatch->coefficient_team_first); //363 //1487
//                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
//                    } else {
//                        $result += $this->lose_game($money); //-300
//                        $total_money += $result; //-237
//                    }
//                } else {
//                    if ($fmatch->team_second_goals > $fmatch->team_first_goals) {
//                        $result += $this->win_game($money, $fmatch->coefficient_team_second); //363 //1487
//                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
//                    } else {
//                        $result += $this->lose_game($money); //-300
//                        $total_money += $result; //-237
//                    }
//                }
//            } else {
//                $money = (int)$_POST['money']; //300 //300 //300
//                $result = 0;
//                $team_first = $fmatch->team_first;
//                if ($team_first == $team) {
//                    if (!$viktory && $total_money < 0) {
//                        $coefficient = $fmatch->coefficient_team_first; //1.21 //1.21 //1.21
//                        $needed_money = 0;
//                        for ($i = 1; $i * $coefficient < $i - $total_money; $i++) {
//                            $needed_money = $i + 1; // 1129
//                        }
//                        $money = $needed_money + 100; //1129+100=1229
//                        $sum += $money;
//                    }
//                    if ($fmatch->team_first_goals > $fmatch->team_second_goals) {
//                        $result += $this->win_game($money, $fmatch->coefficient_team_first); //363 //1487
//                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
//                        $viktory = true;
//                    } else {
//                        $result += $this->lose_game($money); //-300
//                        $total_money += $result; //-237
//                        $viktory = false;
//                    }
//                } else {
//                    if (!$viktory && $total_money < 0) {
//                        $coefficient = $fmatch->coefficient_team_second; //1.21 //1.21 //1.21
//                        $needed_money = 0;
//                        for ($i = 1; $i * $coefficient < $i - $total_money; $i++) {
//                            $needed_money = $i; // 1129
//                        }
//                        $money = $needed_money + 100; //1129+100=1229
//                        $sum += $money;
//                    }
//                    if ($fmatch->team_second_goals > $fmatch->team_first_goals) {
//                        $result += $this->win_game($money, $fmatch->coefficient_team_second); //363 //1487
//                        $total_money += $result - $money; //363-300=63 //-237+1487-1229=21
//                        $viktory = true;
//                    } else {
//                        $result += $this->lose_game($money); //-300
//                        $total_money += $result; //-237
//                        $viktory = false;
//                    }
//                }
//            }
//            array_push($test_arr2, $money);
//            array_push($test_arr, $total_money);
//            array_push($test_arr3, $sum);
//        }


        foreach ($matches as $fmatch)    {
            if($fmatch == $matches[count($matches) - 1] && $sum == 0) {
                $money = (int)$_POST["money"];
                $result = 0;
                $team_first = $fmatch->team_first;
                if ($team_first == $team) {
                    if ($fmatch->team_first_goals > $fmatch->team_second_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_first); //363 //1487
                        $total_money += $result - $money + $sum; //363-300=63 //-237+1487-1229=21
                    } else {
                        $result += $this->lose_game($money); //-300
                        $sum += $result; //-237
                    }
                } else {
                    if ($fmatch->team_second_goals > $fmatch->team_first_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_second); //363 //1487
                        $total_money += $result - $money + $sum; //363-300=63 //-237+1487-1229=21
                    } else {
                        $result += $this->lose_game($money); //-300
                        $sum += $result; //-237
                    }
                }
            } else {
                $money = (int)$_POST['money']; //300 //300 //300
                $result = 0;
                $team_first = $fmatch->team_first;
                if ($team_first == $team) {
                    if (!$viktory) {
                        $coefficient = $fmatch->coefficient_team_first; //1.21 //1.21 //1.21
                        $needed_money = 0;
                        for ($i = 1; $i * $coefficient < $i - $sum; $i++) {
                            $needed_money = $i + 1; // 1129
                        }
                        $money = $needed_money + 100; //1129+100=1229
                        $umhave += $money;
                    }
                    if ($fmatch->team_first_goals > $fmatch->team_second_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_first); //363 //1487
                        $total_money += $result - $money + $sum; //363-300=63 //-237+1487-1229=21
                        $viktory = true;
                        array_push($test_arr4, $umhave);
                        $umhave = 0;
                        $sum = 0;
                    } else {
                        $result += $this->lose_game($money); //-300
                        $sum += $result; //-237
                        $viktory = false;
                    }
                } else {
                    if (!$viktory) {
                        $coefficient = $fmatch->coefficient_team_second; //1.21 //1.21 //1.21
                        $needed_money = 0;
                        for ($i = 1; $i * $coefficient < $i - $sum; $i++) {
                            $needed_money = $i; // 1129
                        }
                        $money = $needed_money + 100; //1129+100=1229
                        $umhave += $money;
                    }
                    if ($fmatch->team_second_goals > $fmatch->team_first_goals) {
                        $result += $this->win_game($money, $fmatch->coefficient_team_second); //363 //1487
                        $total_money += $result - $money + $sum; //363-300=63 //-237+1487-1229=21
                        $viktory = true;
                        array_push($test_arr4, $umhave);
                        $umhave = 0;
                        $sum = 0;
                    } else {
                        $result += $this->lose_game($money); //-300
                        $sum += $result; //-237
                        $viktory = false;
                    }
                }
            }
            $test_arr[$fmatch->match_date] = $total_money;
            $test_arr2[$fmatch->match_date] = $money;
            $test_arr3[$fmatch->match_date] = $sum;
//            array_push($test_arr, $total_money);
//            array_push($test_arr2, $money);
//            array_push($test_arr3, $sum);
        }

        $umhave = $umhave + $_POST["money"];

        return view('home.index', ['matches' => $matches, 'team' => $team, 'money' => $money, 'test_arr' => $test_arr, 'test_arr2' => $test_arr2, 'test_arr3' => $test_arr3, 'test_arr4' => $test_arr4, 'result' => $umhave]);
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
