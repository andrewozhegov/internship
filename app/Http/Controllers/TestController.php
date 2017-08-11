<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // тут будет верификация данных и выставление оценки

        // занесение оценки в базу данных

        return view('test', [
            'value' => 5 // провем результата в виде оценки
        ]);
    }
}
