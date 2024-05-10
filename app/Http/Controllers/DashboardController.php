<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quiz;


class DashboardController extends Controller
{
    public function index() {
        $quiz=Quiz::where('user_id',auth()->user()->id)->latest()->first();
        if ($quiz==null || $quiz->date!=date('Y-m-d')) {
            return redirect('/questionnare');
        }
        return view('user.dashboard');
        
    }
    public function meditation() {
        return view('user.meditationGuide');
    }
    public function meditationtrack() {
        return view('user.meditationTrack');
    }
    public function moodhistory() {
        $quiz=Quiz::where("user_id",auth()->user()->id)->latest()->get();

        foreach($quiz as $q) {
            switch($q->score) {
                case 1:
                    $q->score="Sangat stress";
                    break;
                case 2:
                    $q->score="Stress";
                    break;
                case 3:
                    $q->score="Baik";
                    break;
                case 4:
                    $q->score="Sangat baik";
                    break;
            }
        }
        return view('user.moodhistory',compact('quiz'));
    }
    public function questionnare() {
        return view('user.questionnare');
    }
}
