<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\sale;

use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $product['product'] = DB::table('product')->get();
        return view('pages.index',$product);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function buy($id)
    {
        //
          $id=\Crypt::decrypt($id);

         $product['product']=product::where('id',$id)->first();

        return view('pages.buy',$product);

        //return view('pages.product');
    }
    public function product($id)
    {
        //
          $id=\Crypt::decrypt($id);

         $product['product']=product::where('id',$id)->first();

        return view('pages.product',$product);

        //return view('pages.product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sale=new sale;
        $sale->name=$request->name;
        $sale->email=$request->email;
        $sale->mob=$request->contact;
        $sale->add=$request->add;
        $sale->pid=$request->pid;

        if($sale->save())
        {
        
            return redirect('/')->with('status', 'Successfully seller Contact soon');

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
