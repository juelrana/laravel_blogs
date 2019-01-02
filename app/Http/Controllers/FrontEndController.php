<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home=view('pages.home');
        return view('master')
        ->with('main_content',$home);
    }
    public function contact(){
        $contact=view('pages.contact');
        return view('master')
        ->with('main_content',$contact);
    }
    public function about(){
        $about=view('pages.about');
        return view('master')
        ->with('main_content',$about);
    }
    public function blogs(){
        $all_blog = DB::table('blog')->select('*')->get();
        $blogs=view('pages.blogs')
        ->with('all_blog_info',$all_blog);
        return view('master')
        ->with('main_content',$blogs);
    }
    public function portfolio(){
        $portfolio=view('pages.portfolio');
        return view('master')
        ->with('main_content',$portfolio);
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
        //
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
