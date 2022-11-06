<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Info;
use Illuminate\Http\Request;

class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos= Info::all();
        return view('info',['infos'=>$infos,'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infos= Info::all();
        return view('info',['infos'=>$infos,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info= new Info();
        $info->name = $request->input('name');
        $info->number = $request->input('number');
        $info->paddr = $request->input('paddr');
        $info->ppoliceaddr = $request->input('ppoliceaddr');
        $info->pdist =$request->input('pdist');
        $info->peraddr =$request->input('peraddr');
        $info->perpoliceaddr =$request->input('perpoliceaddr');
        $info->homedist =$request->input('homedist');
        $info->occupation =$request->input('occupation');
        $info->wexp =$request->input('wexp');
        $info->age =$request->input('age');
        $info->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Info::find($id);
        return view('show',['info'=>$info,'layout'=>'show']);


    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Info::find($id);
        $infos = Info::all();
        return  view('info',['infos'=>$infos,'info'=>$info,'layout'=>'edit']);
    }

    // public function form()
    // {
    //     $info= Info::all();
    //     return view(url{{'(/)'}});
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info =Info:: find($id);
        $info->name = $request->input('name');
        $info->number = $request->input('number');
        $info->paddr = $request->input('paddr');
        $info->ppoliceaddr = $request->input('ppoliceaddr');
        $info->pdist =$request->input('pdist');
        $info->peraddr =$request->input('peraddr');
        $info->perpoliceaddr =$request->input('perpoliceaddr');
        $info->homedist =$request->input('homedist');
        $info->occupation =$request->input('occupation');
        $info->wexp =$request->input('wexp');
        $info->age =$request->input('age');
        $info->save();
        return redirect('/');

    }
    public function view()
    {
        $infos= Info::all();
        return view('info',['infos'=>$infos,'layout'=>'view']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info =Info:: find($id);
        $info->delete();
        return redirect('/');
    }
}
