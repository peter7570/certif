<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use PDF;

class PostController extends Controller
{
    /**
     * Вывод панели управления приложения.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_certi');
    }

    /**
     * Вывод панели управления приложения.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

   /* public function generate()
    {
        $data = $request->all();
        $pdf = PDF::loadView('preview');
        $pdf = PDF::loadView('preview', compact('data'));
        return $pdf->download('demo.pdf');
    }  */


    public function messages()
    {
        return [
            'name.required' => 'A title BAD',

        ];
    }
}
