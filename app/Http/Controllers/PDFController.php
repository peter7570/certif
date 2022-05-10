<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;



class PDFController extends Controller
{
    public function create()
    {
        return view('create_certi');
    }

    public function preview()
    {
        return view('preview');
    }


    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'course' => 'required',
            'name' => 'required',
            'end_course' => 'required',
        ]);

        $data = $request->all();

        $pdf = PDF::loadView('preview', compact('data'));
       return $pdf->download('demo.pdf')->header('Content-Type','application/pdf');

     //   return back()->with('success', 'certificate created successfully.');
    }



}
