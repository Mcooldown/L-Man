<?php

namespace App\Http\Controllers;

use App\Models\ClassDetail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function viewListClass(){
        return view('pages.admin.list_class',[
            'classes' => ClassDetail::where('institution_id', auth()->user()->institution_id)->get(),
        ]);
    }

    public function viewCreateClass(){
        return view('pages.admin.create_class',[
            'teachers' => User::select('users.id','users.name')
                        ->join('roles','roles.id','users.role_id')
                        ->where('roles.name','Teacher')
                        ->get()
        ]);
    }

    public function createClass(Request $request){

        $request->validate([
            'class_name' => 'required|string'
        ]);

        ClassDetail::create([
            'name' => $request->class_name,
            'institution_id' => auth()->user()->institution_id,
            'homeroom_id' => $request->homeroom_id,
        ]);

        return redirect()->route('class-view-list')->with('success','New Class Created');
    }

    public function viewClassStudent(ClassDetail $class){
        return view('pages.admin.list_class_student',[
            'students' => User::select('users.id','users.name')
                        ->join('roles','roles.id','users.role_id')
                        ->where([['roles.name','Student'],['class_id',$class->id]])
                        ->get(),
            'class' => $class,
        ]);
    }

    public function viewListStudent(){
        return view('pages.admin.list_student',[
            'students' => User::select('users.id','users.name')
                        ->join('roles','roles.id','users.role_id')
                        ->where([['roles.name','Student'],['institution_id',auth()->user()->institution_id]])
                        ->get()
        ]);
    }

    public function viewCreateStudent(){
        return view('pages.admin.create_student',[
            'classes' => ClassDetail::where('institution_id',auth()->user()->institution_id)->get()
        ]);
    }

    public function createStudent(Request $request){
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'reg_number' => 'required|numeric',
            'phone_number' => 'required|numeric',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'reg_number' => $request->reg_number,
            'phone_number' => $request->phone_number,
            'role_id' => 3,
            'institution_id' => auth()->user()->institution->id,
            'class_id' => $request->class_id,
            'password' => Hash::make('abcd')
        ]);

        return redirect()->route('student-view-list')->with('success','New Student Created');
    }
}
