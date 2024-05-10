<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Quiz;


class Modals extends Component
{
    public $q1;
    public $q2;
    public $q3;
    public $q4;
    public $q5;
    public $scoring;

    public function predict_Y(float $x1, float $x2)
    {
        $beta0=0;
        $x1coeff=0.91559766609537;
        $x2coeff=-0.21552508913301066;

        // Indikator
        // 1: Sangat Stress
        // 2: Stress
        // 3: Baik
        // 4: Sangat Baik
        $predicted_Y=floor($beta0+($x1coeff*$x1)+($x2coeff*$x2));
        if ($predicted_Y<=1) {
            $predicted_Y=1;
        }
        return $predicted_Y;
    }
    public function save()
    {
        $x1=($this->q1+$this->q4+$this->q5)/3;
        $x2=($this->q2+$this->q3)/2;

        $this->scoring=$this->predict_Y($x1,$x2);
        $this->scoring=floor($this->scoring);
        $quiz = new Quiz;

        $this->q1=$this->q1==null?3:$this->q1;
        $this->q2=$this->q2==null?3:$this->q2;
        $this->q3=$this->q3==null?3:$this->q3;
        $this->q4=$this->q4==null?3:$this->q4;
        $this->q5=$this->q5==null?3:$this->q5;


        $quiz->q1=$this->q1;
        $quiz->q2=$this->q2;
        $quiz->q3=$this->q3;
        $quiz->q4=$this->q4;
        $quiz->q5=$this->q5;
        $quiz->score=$this->scoring;
        $quiz->user_id=auth()->user()->id;
        $quiz->date=date('Y-m-d');
        $quiz->save();

        return redirect('/dashboard');
    }
    public function render()
    {
        return view('livewire.modals');
    }
}
