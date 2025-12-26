<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    public function index()
    {
        return view('html101');
    }

    public function info(Request $req)
    {
        $num = $req->input('mynumber');
        return view('myview.info', compact('num'));
    }

    public function calculate(Request $req)
    {
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }

    public function store(Request $req)
    {
        $data = $req->all();
        return view('myview.result', compact('data'));
    }
}
