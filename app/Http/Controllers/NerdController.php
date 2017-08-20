<?php

namespace App\Http\Controllers;

use App\Nerd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NerdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $nerds = Nerd::all();
        return view('nerds.index')->with('nerds',$nerds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nerds.create');
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
           'name'=>'required',
           'email'=>'required|email',
           'nerd_level'=>'numeric'
        ]);
        Nerd::create([
           'name'=>$request->name,
            'email'=>$request->email,
            'nerd_level'=>$request->nerd_level
        ]);
        Session::flash('message', 'Successfully created nerd!');
        return redirect('nerds');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nerd = Nerd::findOrFail($id);
        return view('nerds.show')->withNerd($nerd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nerd = Nerd::findOrFail($id);
        return view('nerds.edit')->withHello($nerd);
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
        $this->validate($request,[
           'name'=>'required',
           'email'=>'email|required',
           'nerd_level'=>'numeric'
        ]);
        $nerd=Nerd::find($id);
        $nerd->name = $request->get('name');
        $nerd->email = $request->get('email');
        $nerd->nerd_level = $request->get('nerd_level');
        $nerd->save();
        Session::flash('message','Successfully updated');
        return redirect('nerds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nerd = Nerd::findOrFail($id);
        $nerd->delete();
        Session::flash('flash_message',$id.'deleted successfully');
        return redirect('nerds');
    }
}
