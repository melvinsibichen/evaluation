<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\addfacultymodel;
use App\Models\uploadmodel;
use Illuminate\Support\Facades\Hash;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=addfacultymodel::all();
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];       
        return view('facultyview',compact('user'),$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
        return view('admin',$data);
   
    }

    public function adminlogin()
    {
        return view('adminlogin');
    }

    public function upload(Request $request)
    {
        $getfile=$request->file('file');        
        $name=$getfile->getClientOriginalName();        
        $getfile->move(public_path('assets/file'),$name);
        $getcourse=request('course');
        $getgrade="nil";


        $user=new uploadmodel();
        $user->emailid=session('emailid');
        $user->file=$name;
        $user->course=$getcourse;
        $user->grade=$getgrade;


        $user->save();


        if($user)         
        {             
         echo "success";     
        }         
        else        
        {             
             echo "fail";      
        }

 
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
            'fid' => 'required|unique:App\Models\addfacultymodel,fid',
            'fname' => 'required',
            'fusername' => 'required|unique:App\Models\addfacultymodel,fusername',
            'fcourse' => 'required',  
            'fpassword' => 'required',        

        ]);

        $getid=request('fid');
        $getname=request('fname');
        $getusername=request('fusername');
        $getcourse=request('fcourse');
        $getpassword=request('fpassword');
        $getpimage=$request->file('pimage');        
        $name=$getpimage->getClientOriginalName();        
        $getpimage->move(public_path('assets/project_img'),$name);

        
        $user=new addfacultymodel();
        $user->fid=$getid;
        $user->fname=$getname;
        $user->fusername=$getusername;
        $user->fcourse=$getcourse;
        $user->fpassword=Hash::make($request->fpassword);
        $user->pimage=$name;
        

        $user->save();

        if($user)         
        {             
            return back()->with('success','New faculty has been successfuly added');         
        }         
        else        
        {             
            return back()->with('fail','Something wrong,try again later');         
        }

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
               
                    return redirect('/adminhome');
            
                }
            else
            {
                return back()->with('fail','Error: Invalid Login');
            } 
       }
     }
public function adminhome()
{
    $data=['LoggedUserinfo'=>addfacultymodel::where('id','=',session('loggeduser'))->first()];
     return view('adminhome',$data);

}


public function adminlogout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/adminlogin');
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
