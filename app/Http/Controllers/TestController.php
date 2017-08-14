<?php

namespace App\Http\Controllers;

use App\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function show()
    {
        return view('test');
    }

    public function send(Request $request)
    {
        $rules = [
            'answer1' => 'required|in:1,2,3',
            'answer2' => 'required|numeric',
            'answer31' => 'required_without_all:answer32,answer33,answer34,answer35'/*,
            'answer32' => '',
            'answer33' => '',
            'answer34' => '',
            'answer35' => ''*/
        ];

        $messages = [
            'answer1.in' => 'На вопрос 1 не был дан ответ!',
            'answer2.numeric' => 'Ответом на вопрос 2 должно быть число!',
            'answer31.required_without_all' => 'Необходимо выбрать хотя бы одно значение!'
        ];

        $this->validate($request, $rules, $messages);

        $answers = [
            'answer1' => '2',
            'answer2' => '6',
            'answer32' => '1',
            'answer33' => '1'
        ];

        $val = $this->verify($request, $answers);

        // занесение оценки в базу данных
        if ($val > 0) {
            $value = Value::find($val);
            Auth::user()->getValues()->save($value);
        }

        return view('test', [
            'value' => $val
        ]);
    }

    protected function verify(Request $request, $answers)
    {
        $eq = 0;
        $questions = 0;
        $data = $request->all();

        $answ_keys = array_keys($answers);
        foreach($answ_keys as $answ_key) {
            $questions++;
            if(array_key_exists($answ_key, $data))
                if($data[$answ_key] == $answers[$answ_key]) $eq++;
        }

        $value = round(($eq * 5) / $questions); // оценка

        return $value;
    }

}
