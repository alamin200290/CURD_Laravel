<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\StudentRequest;


class HomeController extends Controller
{

    public function index(Request $req){

        return view('home.index');
    }

    public function profile(){

        return view('home.profile');
    }

    public function upload(Request $req){

        if($req->hasFile('pic')){

            $file = $req->file('pic');

            echo "File Name: ".$file->getClientOriginalName();
            echo "<br>File Extension: ".$file->getClientOriginalExtension();
            echo "<br>File Size: ".$file->getSize();
            echo "<br>File Mime Type: ".$file->getMimeType();

            $file->move('upload', 'abc.PNG');
        }else{
            echo "File not found!";
        }

    }

    public function details(Request $req, $sid){

        $s = User::find($sid);
        return view('home.details', ['std'=> $s]);
    }

    public function add(){
    	return view('home.add');
    }
	
	public function create(StudentRequest $req){
  
/*        $req->validate([

            'uname'=>'required|unique:users',
            'password'=>'required|max:3',
            'name'=>'required|same:uname',
            'cgpa'=>'required',
            'dept'=>'required'
        ]);*/

/*        $this->validate($req, [

            'uname'=>'required|unique:users',
            'password'=>'required|max:3',
            'name'=>'required|same:uname',
            'cgpa'=>'required',
            'dept'=>'required'
        ]);*/

/*        $validation = Validator::make($req->all(), [

            'uname'=>'required|unique:users',
            'password'=>'required|max:3',
            'name'=>'required|same:uname',
            'cgpa'=>'required',
            'dept'=>'required'
        ])->validate();*/

        //$validation->validate();

        /*if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors());
        } */       

/*    	$user  = new User();
        $user->username = $req->uname; 
        $user->password = $req->password;
        $user->type = 'admin';
        $user->name = $req->name;
        $user->dept = $req->dept;
        $user->cgpa = $req->cgpa;
        $user->save();
    	$user = User::where('username', $req->uname)->where('password', $req->password)->get();
*/
    	//echo $user;
		return redirect()->route('home.details', $user[0]->userId);
    }

    public function show(){

    	$std = User::all();
    	//return view('home.show', ['stdlist'=>$std]);
        return json($s);
    }

    public function edit($sid){

    	$s = User::find($sid);
    	return view('home.edit', ['std'=> $s]);
    }

    public function update(Request $req, $sid){

        $user = User::find($sid);

        $user->name = $req->name;
        $user->dept = $req->dept;
        $user->cgpa = $req->cgpa;
        $user->save();

    	return redirect()->route('home.details', $sid);
	    
    }

    public function delete($sid){
    	
        $s = User::find($sid);
    	return view('home.delete', ['std'=> $s]);
    }

    public function destroy(Request $req, $sid){
    
        User::destroy($sid);
        return redirect()->route('home.stdlist');
    }

    public function studentList(){
    	return [
    		['10-11111-1', 'ABC', 2.5, 'CSSE'],
    		['11-00000-2', 'XYZ', 2.4, 'SE'],
    		['12-33333-3', 'PQR', 2.3, 'CS'],
    		['13-22222-1', 'RTY', 2.2, 'CSE'],
    		['14-66666-2', 'SVC', 2.1, 'CIS']
    	];
    }
}








