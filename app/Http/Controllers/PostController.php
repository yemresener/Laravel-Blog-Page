<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=category::get();
        $query = post::query();

        if (request()->has('search')){
            $query->where('main_title','like','%'.request()->get('search','').'%');    
        }
        
        $posts=$query->paginate(4);
        return view('post.home')->with('posts',$posts)->with('categories',$categories);
        
       // return view('post.home')->with('posts',$posts)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=category::get();
        return view('admin/create_post')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model=new post();
        
        if ($request->hasFile('home_image')) {
        $imagePath = $request->file('home_image')->store('images', 'public'); // Depolama
        $imageUrl = asset('storage/' . $imagePath);
        $model->home_image=$imageUrl;
        }

        
        $model->category_id=$request->category_id;
        $model->main_title=$request->main_title;
        $model->main_article=$request->main_article;
        $model->low_title1=$request->low_title1;
        $model->low_article1=$request->low_article1;
        $model->low_title2=$request->low_title2;
        $model->low_article2=$request->low_article2;
        $model->low_title3=$request->low_title3;
        $model->low_article3=$request->low_article3;
        $model->low_title4=$request->low_title4;
        $model->low_article4=$request->low_article4;
        
        $model->save();
    
        return redirect()->route('home')->with('success','Post added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        $categories=category::get();
        return view('admin.update_post')->with('post',$post)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        if ($request->hasFile('home_image')) {
            $imagePath = $request->file('home_image')->store('images', 'public'); 
            $imageUrl = asset('storage/' . $imagePath);
            $post->home_image=$imageUrl;
        }
        $post->category_id=$request->category_id;
        $post->main_title=$request->main_title;
        $post->main_article=$request->main_article;
        $post->low_title1=$request->low_title1;
        $post->low_article1=$request->low_article1;
        $post->low_title2=$request->low_title2;
        $post->low_article2=$request->low_article2;
        $post->low_title3=$request->low_title3;
        $post->low_article3=$request->low_article3;
        $post->low_title4=$request->low_title4;
        $post->low_article4=$request->low_article4;
        $post->save();
        return redirect()->route('home')->with('success','Başarı ile güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('home')->with('success','Başarı ile Silindi');
    }

    public function view_post(post $post){
        $categories=category::get();
        return view('post.post')->with('post',$post)->with('categories',$categories);
    }

    public function categories(Request $request){
        $categories=category::get();
        $posts=post::where('category_id','=',$request->id)->paginate(4);
        return view('post.home')->with('posts',$posts)->with('categories',$categories);
    }

    public function about(){
        $categories=category::get();
        return view('post.about')->with('categories',$categories);
    }

}
