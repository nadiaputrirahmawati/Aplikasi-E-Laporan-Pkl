<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        return view('operator.index');
    }
    public function guru()
    {
        return view('operator.guru');
    }
    public function create_guru()
    {
        return view('operator.create_guru');
    }
    public function create_siswa()
    {
        return view('operator.create_siswa');
    }
    public function siswa()
    {
        return view('operator.siswa');
    }
}
