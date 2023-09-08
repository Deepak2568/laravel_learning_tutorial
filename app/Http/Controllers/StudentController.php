<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = DB::select("SELECT * FROM students");
        $datas = DB::table('students')->Paginate(2);
        return view('index',compact('students','datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->input('stud_name');
        // dd($data);
        DB::insert('INSERT INTO students(stud_name) VALUES(?)',[$data]);
        return redirect()->route('student.index')->withMessage('Student name created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $edit_student = DB::select("SELECT * FROM students WHERE id=?",[$id]);
        return view('edit',compact('edit_student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->input('stud_name');
        // dd($data);
        DB::update('update students set stud_name = ? where id = ?', [$data,$id]);
        return redirect()->route('student.index')->withMessage('Student name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::delete('DELETE FROM students WHERE id = ?', [$id]);
        return redirect()->route('student.index')->withMessage('Student name deleted successfully');
    }
}
