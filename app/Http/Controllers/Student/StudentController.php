<?php

namespace App\Http\Controllers\Student;

use App\Department;
use App\Http\Controllers\Controller;
use App\Option;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $arr['users'] = User::all();

// DB::enableQueryLog();
        // $role_id = Role::whereRoleName('etudiant')->pluck('role_id')->first();
        $data['students'] = User::with('student')->get();
        // dd($stds);
        // $data['students'] = DB::select('select * from users where user_role = (?)',[$role_id]);
        // dd($data);

        // dd(DB::getQueryLog());

        // return  response()->json($data, 200);
        return view('students.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.std.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {


        $user->user_id = $request->id;
        $user->fname = $request->fname;
        $user->lndame = $request->lname;
        $user->user_cin = $request->cin;
        $user->user_role = 'etudiant';
        $user->email = $request->email;
        $user->password = '12377894';
        $user->dob = $request->dob;


        $user->save();
        return redirect('admin/std');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrfail($id);
        // dd($user->student->option->opt_name);
        $arr['user'] = $user;
        $arr['options']= Option::all();
        $arr['depts']= Department::all();
        return view('students.edit')->with($arr);
        //echo $user->user_id;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        //  dd($user->student->option);
        // $user=User::find($user_id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->user_cin = $request->user_cin;
        $user->email = $request->email;
        $user->dob = $request->dob;


        $user->save();
        dd("student updated");
        return redirect()->route('students.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
