<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teachers.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function kelas(){
        return view('teachers.class.index');
    }
    public function siswa(){
        return view('teachers.siswa');
    }
    public function detailsiswa(){
        return view('teachers.detailsiswa');
    }
    public function judul_laporan(){
        return view('teachers.title_report');
    }
    public function profile(){
        return view('teachers.profile');
    }
    public function report(){
        return view('teachers.report');
    }
    public function detailreport(){
        return view('teachers.detail_report');
    }
    public function logbook(){
        return view('teachers.logbook');
    }
    public function profile_update(){
        return view('teachers.update_profile');
    }


}
