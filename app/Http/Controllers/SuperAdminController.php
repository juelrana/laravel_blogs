<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
session_start();
use Redirect;
use DB;
use Symfony\Component\HttpFoundation\File\File;
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authCheck();
        $admin_home=view('admin.pages.admin_home_post');
        return view('admin.admin_master')
        ->with('admin_main_content',$admin_home);
    }
    public function logOut(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        Session::put('logout_msg','You are logout!');
        return Redirect::to('/admin');
    }
    public function addCategory(){
        $this->authCheck();
        $add_category_form=view('admin.pages.category_add_form');
        return view('admin.admin_master')
        ->with('admin_main_content',$add_category_form);
    }
    public function saveCategoryData(Request $request){
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;
        DB::table('category')->insert($data);
        Session::put('msg','Save Data Succesfully!!');
        return Redirect::to('/add-category');
    }
    public function viewCategoryData(){
       $this->authCheck();
       $all_category = DB::table('category')->select('*')->get();
       $view_category_page=view('admin.pages.view_category_data')
       ->with('all_category_info',$all_category);
       return view('admin.admin_master')
       ->with('admin_main_content',$view_category_page);
   }
   public function unpublishCategoryById($id){
    DB::table('category')
    ->where('category_id', $id)
    ->update(['publication_status' => 0]);
    return Redirect::to('/view-category');
}
public function publishCategoryById($id){
    DB::table('category')
    ->where('category_id', $id)
    ->update(['publication_status' => 1]);
    return Redirect::to('/view-category');
}
public function deleteCategoryById($id){

    DB::table('category')
    ->where('category_id', '=', $id)
    ->delete();
    Session::put('delete_msg','Delete Data Succesfully!!');
    return Redirect::to('/view-category');
}
public function editCategoryById($id){
    $categoryByIDInfo = DB::table('category')
    ->where('category_id',$id)
    ->first();
    $edit_category_page=view('admin.pages.category_edit_form')
    ->with('category_info_by_id',$categoryByIDInfo);
    return view('admin.admin_master')
    ->with('admin_main_content',$edit_category_page);
}
public function updateCategoryData(Request $request){
    $data=array();
    $data['category_name']=$request->category_name;
    $data['category_description']=$request->category_description;
    $data['publication_status']=$request->publication_status;
    $category_id=$request->category_id;
    DB::table('category')
    ->where('category_id',$category_id)
    ->update($data);
    Session::put('msg','Update Data Succesfully!!');
    return Redirect::to('/view-category');
}
public function add_blog(){
    $all_category = DB::table('category')->select('*')->get();
    $blog_add_form=view('admin.pages.blog_add_form')
    ->with('all_category_info',$all_category);
    return view('admin.admin_master')
    ->with('admin_main_content',$blog_add_form);   
}
public function saveBlogData(Request $request){
    
    $data=array();
    $data['blog_name']=$request->blog_name;
    $data['category_id']=$request->category_id;
    $data['short_description']=$request->short_description;
    $data['long_description']=$request->long_description;
    $data['publication_status']=$request->publication_status;    
    $data['author_name']=Session::get('admin_name');


    $files=$request->file('image');
    $filename=$files->getClientOriginalName();
    $extension=$files->getClientOriginalExtension();
    $image=date('his').$filename;
    $image_url='public/blog_images/'.$image;
    $destinationPath=base_path().'\public\blog_images';
    //echo $destinationPath;
    //exit();
    $sucess=$files->move($destinationPath,$image);

    if ($sucess) {
        $data['image']=$image_url;
        DB::table('blog')->insert($data);
        Session::put('msg','Save Data Succesfully!!');
        return Redirect::to('/add-blog');
    }

   else
   {
    $error=$files->getErrorMessage();
   }
    
}

public function viewBlogData(){
   $this->authCheck();
   $all_blog = DB::table('blog')->select('*')->get();
   $view_blog_page=view('admin.pages.view_blog_data')
   ->with('all_blog_info',$all_blog);
   return view('admin.admin_master')
   ->with('admin_main_content',$view_blog_page);
}

public function unpublishBlogById($id){
    DB::table('blog')
    ->where('blog_id', $id)
    ->update(['publication_status' => 0]);
    return Redirect::to('/view-blog');
}
public function publishBlogById($id){
    DB::table('blog')
    ->where('blog_id', $id)
    ->update(['publication_status' => 1]);
    return Redirect::to('/view-blog');
}
public function deleteBlogById($id){

    DB::table('blog')
    ->where('blog_id', '=', $id)
    ->delete();
    Session::put('delete_msg','Delete Data Succesfully!!');
    return Redirect::to('/view-blog');
}

public function authCheck(){
    $admin_id=Session::GET('admin_id');
    if($admin_id){
        return;
    }else{
        return Redirect::to('/admin')->send();
    }
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
