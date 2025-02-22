<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index () {
        return view('students.dashboard');
    }
    public function judul () {
        return view('students.create_judul_laporan');
    }
    public function laporan () {
        return view('students.report.index');
    }
    public function create_laporan () {
        return view('students.report.create');
    }
    public function profile () {
        return view('students.profile');
    }
    public function update_profile () {
        return view('students.update_profile');
    }
    public function jurnal_kegiatan () {
        return view('students.logbook.index');
    }

    public function create_logbook(){
        return view('students.logbook.create');
    }
}
