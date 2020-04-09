<?php

namespace App\Http\Controllers;

use App\Std_model;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index',['posts'=>Std_model::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
           [
            'name' => 'required|max:255',
            'contact' => 'required',
            'cgpa' => 'required'   
           ]
           );

           $post=Std_model::create($validatedData);
           $request->session()->flash('status', 'Student Added successfully!');
        return  redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Std_model::findOrFail($id);
       return view('posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Std_model::findOrFail($id);
        return view('posts.edit',['post'=>$post]);
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
        $post = Std_model::findOrFail($id);
        $validatedData = $request->validate(
            [
             'name' => 'required|max:255',
             'contact' => 'required',
             'cgpa' => 'required'   
            ]
            );

            $post->fill($validatedData);
            $post->save();
           $request->session()->flash('status', 'Student updated successfully!');
        return  redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post = Std_model::findOrFail($id);
        $post->delete();
        $request->session()->flash('status', 'Student updated successfully!');
        return  redirect()->route('posts.index');


    }
}
