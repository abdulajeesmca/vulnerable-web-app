<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use DB;
use App\Models\sale;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        //
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
        //Product Store Process

        $product=new product;
        $product->pname=$request->pname;
        $product->price=$request->pprice;
        $product->pdes=$request->pdec;

       $this->validate($request, [
            'image' => 'required',
            'image.*' => 'sometimes|image'
    ]);

           
       $file = $request->file('image');

       $imagess= time().$request->pname.'.'.$file->extension();
           $file->move(public_path().'/images/upload/', $imagess);  
           $product->images=$imagess;
  
        if($product->save())
        {
        
            return redirect('/products')->with('check', 'Successfully Product Added');

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

    public function login(Request $request)
    {
        //
    $user=User::where('name',$request->username)->first();

        if($user)
        {
          $password= $user['password'];

           if(strcmp($password, $request->password) == 0)
            {
        
                $request->session()->put('id',$user['id']);
                $request->session()->put('name',$user['name']);
                $product['product'] = DB::table('product')->get();

                return view('admin.index',$product);

            }
            else
        {
            return back()->with('log_fail', 'Password Incorrect');
        }
            
        }
        else
        {
            return back()->with('log_fail', 'Username and Password Invalid');
            
        }
    }


    public function loginpage()
    {

        $value =session()->get('id');
        $value1 =session()->get('name');
        if($value =='1' && $value1 =='admin')
        {
         $product['product'] = DB::table('product')->get();


            return view('admin.index',$product);
   
        }
        else
        {
        return view('admin.login');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');

    }
    public function products()
    {

        $value =session()->get('id');
        $value1 =session()->get('name');
        if($value =='1' && $value1 =='admin')
        {
         $product['product'] = DB::table('product')->get();

    return view('admin.product');
        }
        else
        {
        return view('admin.login');
        }

    }

    public function salepro()
    {

        $value =session()->get('id');
        $value1 =session()->get('name');
        if($value =='1' && $value1 =='admin')
        {
         $sale['sale'] = DB::table('sales')->get();

        return view('admin.salepro',$sale);
        }
        else
        {
        return view('admin.login');
        }

    }

     public function cin($ip)
    {

        // Command Injection 
        $target =$ip;
       // Determine OS and execute the ping command. 
 if( stristr( php_uname( 's' ), 'Windows NT' ) ) {  // Windows 
    $cmd = shell_exec( 'ping ' . $target ); 
    } 
    else { 
    // *nix 
    $cmd = shell_exec( 'ping -c 4 ' . $target ); 
 } 
   
    
    

        

    }

}
//login
//loginpost

