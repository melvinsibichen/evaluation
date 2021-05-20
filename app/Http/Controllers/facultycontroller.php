<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addfacultymodel;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\bbamodel;
use App\Models\uploadmodel;


class facultycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function facultyh()
    {
        
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
     return view('facultyh',$data);

    }

    public function facultylogin()
    {
        return view('facultylogin');
    }

    public function addquestion()
    {
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
        return view('addquestion',$data);
    }

    public function fviewquestion()
    {
        $user=bbamodel::all();
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
        return view('fviewquestion',$data,compact('user'));
    }

    public function getfile()
    {
        $upload=uploadmodel::all();
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
        return view('facultyhome',$data,compact('upload'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $getbbaq=request('bbaq');
       $getcourse=request('course');
       $user=new bbamodel();
       $user->bbaq=$getbbaq;
       $user->course=$getcourse;
       $user->save();
       return redirect('/addquestion');
    }

    public function check(Request $request)
    {
        $userInfo =addfacultymodel::where('fusername','=',$request->fusername)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->fpassword , $userInfo->fpassword))
            {
                $request-> session()->put('loggeduser', $userInfo->id);
           
                return redirect('/facultyh');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
   }
 }

 public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/facultylogin');
        }

    }


    function fdelete($id)
    {
        $delete=DB::table('addfacultymodels')->where('id',$id)->delete();

        return redirect('/facultyview');
    }

    function qdelete($id)
    {
        $delete=DB::table('bbamodels')->where('id',$id)->delete();

        return redirect('/fviewquestion');
    }


    public function fupdate(Request $request)
    {
       
        $updating=DB::table('addfacultymodels')->where('fid',$request->input('fid'))->update([
            'fid'=>$request->input('fid'),
            'fname'=>$request->input('fname'),
            'fcourse'=>$request->input('fcourse'),
            'fusername'=>$request->input('fusername')
            
        ]);

        return redirect('facultyview');


    }

    public function qupdate(Request $request)
    {
       
        $updating=DB::table('bbamodels')->where('id',$request->input('id'))->update([
            'bbaq'=>$request->input('bbaq')            
            
        ]);

        return redirect('/fviewquestion');

    }
    

    public function fedit($id)
    {
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
        $row=DB::table('addfacultymodels')->where('id',$id)->first();
        $dat=['user'=>$row];
        return view('facultyedit',$data,$dat);
    }

    public function qedit($id)
    {
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
        $row=DB::table('bbamodels')->where('id',$id)->first();
        $dat=['user'=>$row];
        return view('questionedit',$data,$dat);
    }
}



    

