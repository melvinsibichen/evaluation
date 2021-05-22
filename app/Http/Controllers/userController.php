<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signinmodel;
use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Models\bbamodel;
use App\Models\uploadmodel;
use App\Models\addfacultymodel;



class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        
            return view('/login');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/signin');
    }

    public function viewresult()
    {
        $user=uploadmodel::all();
        $data=['LoggedUserinfo'=>signinmodel::where('id','=',session('loggeduser'))->first()];       
        return view('viewresult',compact('user'),$data);
    }


    public function home()
    {

        $data=['loggeduserinfo'=>signinmodel::where('emailid','=',session('loggeduser'))->first()];
        return view('home',$data);
    }

    public function fviewquestion()
    {
        $user=bbamodel::all();
        //$data=['LoggedUserinfo'=>signinmodel::where('id','=',session('loggeduser'))->first()];
        return view('evaluation',$data,compact('user'));
    }
   

    public function bbaevaluation()
    {
        $user = DB::table('bbamodels')->where('course','BBA')->get();
        $data=['LoggedUserinfo'=>signinmodel::where('id','=',session('loggeduser'))->first()];
        return view('evaluation',$data,compact('user'));
    }


    public function bcaevaluation()
    {
        $user = DB::table('bbamodels')->where('course','BCA')->get();
        $data=['LoggedUserinfo'=>signinmodel::where('id','=',session('loggeduser'))->first()];
        return view('evaluation',$data,compact('user'));
    }


    public function bcomevaluation()
    {
        $user = DB::table('bbamodels')->where('course','BCOM')->get();
        $data=['LoggedUserinfo'=>signinmodel::where('id','=',session('loggeduser'))->first()];
        return view('evaluation',$data,compact('user'));
    }


    public function bswevaluation()
    {
        $user = DB::table('bbamodels')->where('course','BSW')->get();
        $data=['LoggedUserinfo'=>signinmodel::where('id','=',session('loggeduser'))->first()];
        return view('evaluation',$data,compact('user'));
    }


    public function grade(Request $request,$id)
    {
       
        $updating=DB::table('uploadmodels')->where('id',$id)->update([
            'grade'=>$request->input('grade')
           
            
        ]);

        return redirect('facultyhome');


    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
       {
        $this->validate($request,[
            'rollno' => 'required|unique:App\Models\signinmodel,rollno',
            'fullname' => 'required',
            'emailid' => 'required|email|unique:App\Models\signinmodel,emailid',
            'phno' => 'required',
            'course' =>'required',
            'password' =>'required|min:5|max:12',

        ]);

        $getrollno=request('rollno');
        $getfullname=request('fullname');
        $getemailid=request('emailid');
        $getphoneno=request('phno');
        $getgender=request('gender');
        $getcourse=request('course');
        $getpassword=request('password');

        echo "<br>";
        echo $getrollno;
        echo "<br>";
        echo $getfullname;
        echo "<br>";
        echo  $getemailid;
        echo "<br>";
        echo $getphoneno;
        echo "<br>";
        echo $getgender;
        echo "<br>";
        echo $getcourse;
        echo "<br>";
        echo  $getpassword;
        echo "<br>";

        $user=new signinModel();
        $user->rollno=$getrollno;
        $user->fullname=$getfullname;
        $user->emailid=$getemailid;
        $user->phno=$getphoneno;
        $user->gender=$getgender;
        $user->course=$getcourse;
        $user->password=$getpassword;
       

        $user->save();


        if($user)
        {
            return back()->with('success','You have registered successfully.');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }
        
        }

   
    public function logs(Request $request)
    {
        $getemailid=$request -> input('emailid');
        $getpassword=$request -> input('password');
        $data = DB::select('select id from signinmodels where emailid=? and password=?',[$getemailid,$getpassword]);

        if(count($data))
        {
                $dat= $request -> input();
                $request-> session()->put('emailid', $dat['emailid']);
                return view('home');
        }
        else
        {
            return back()->withInput();
        }

    }

    public function logout()
    {
        if(session()->has('emailid'))
        {
            session()->pull('emailid');
            return redirect('/');
        }

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
        //
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
        //
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

