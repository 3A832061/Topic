<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = DB::table('information')->where('type','=','teacher')->get();
        return view('information.teacher.index', ['information' => $teacher]);
    }

    public function create()
    {
        return view('information.teacher.createform');
    }

    public function store(StoreInformationRequest $request)
    {

        return view('information.teacher.index', ['information' => $teacher]);
    }

    public function edit($id)
    {
        $teacher=Information::find($id);
        return view('information.form',[$teacher=>'teacher']);
    }


    public function update(UpdateInformationRequest $request, Information $information)
    {
        //
    }

    public function destroy(Information $information)
    {
        //
    }
}
