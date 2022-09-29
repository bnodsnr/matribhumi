<?php

namespace App\Http\Controllers;

use App\Models\Article;

use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Article::get();
        return view('news.list',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $authors    = User::get();
        return view('news.add', compact('categories','authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $posts = $request->validated();
        if($request->hasFile('feature_image')) {
            $citFile = fileUpload($request->file('feature_image'));
            $posts['feature_image'] = $citFile;
        }
        
        $maxid = Article::max('id') + 1;
        $posts['news_slug'] = $maxid.date("ymd");

        $posts['category_slug'] = implode(',',$posts['category_slug']);
        // foreach($posts['category_slug'] as $key => $slug) {
        //     $data[] = array(
              
        //     );
        // }
        // PargatiFaram::insert($data);
        Article::create($posts);
        return redirect('/news')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Article::find($id);
        $categories = Category::get();
        $authors    = User::get();
        return view('news.edit',compact('row','categories','authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request,$id)
    {
        $posts = $request->validated();
        if($request->hasFile('feature_image')) {
            $citFile = fileUpload($request->file('feature_image'));
            $posts['feature_image'] = $citFile;
        }
        $posts['category_slug'] = implode(',',$posts['category_slug']);
        Article::where('id', $id)->update($posts);
        return redirect('/news')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
