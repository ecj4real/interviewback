<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function calculate($input){
        $result = $input * 50 / 12;
        return $result;
    }

    public function questions(){
        $question_array = [
            "How old are you?" => "Old Enough",
            "Your favourite Color?" => "Best color ever"
        ];

        return response()->json($question_array);
    }
}
