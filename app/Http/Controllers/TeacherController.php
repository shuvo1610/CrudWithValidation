<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function home()
    {
        return view('dashboard');
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:6',
            'phone' => 'required|unique:teachers|min:11|max:13',
            'email' => 'required|email|unique:teachers',
            'salary' => 'required|integer|between:5000,50000',
        ]);

        $teacher=Teacher::create($request->all());
        return redirect()->route('teacher.index');
    }

    public function show()
    {
        $data=[
            'teachers'=>Teacher::all()
        ];
        return view('teacher.index',$data);
    }

    public function edit($id)
    {
        $data=[

            'teacher'=>Teacher::find($id)
        ];


        return view('teacher.update',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|min:6',
            'phone' => 'required|min:11|max:13|unique:teachers,phone,'.$id,
            'email' => 'required|email|unique:teachers,email,'.$id,
            'salary' => 'required|integer|between:5000,50000',
        ]);
        $teacher = Teacher::find($id);


        $teacher->update($request->all());

        return redirect()->route('teacher.index');
    }

    public function profile($id)
    {
        $data=[
            'teacher'=>Teacher::find($id)
        ];
        return view('teacher.profile',$data);
    }

    public function destroy($id)
    {
         Teacher::destroy($id);

        return back();
    }

}
