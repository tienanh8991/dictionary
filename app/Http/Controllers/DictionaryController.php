<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    protected $arr = [
        'hello' => 'xin chào',
        'book' => 'sách',
        'tree' => 'cây'
    ];
    protected $txt;

    public function __construct(Request $request)
    {
        $this->txt = $request->txt;
    }

    public function show_form()
    {
        return view('form_dictionary');
    }

    public function translate()
    {
        $count = 0;
        foreach ($this->arr as $key => $value) {
            if ($this->txt == $key) {
                $count++;
                echo $key . ' is mean : ' . $value;
            }
        }
        if ($count == 0) {
            echo 'not found ';
        }
    }
}
