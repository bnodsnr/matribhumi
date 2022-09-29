<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Category;
use App\Models\Article;
use App\Models\Vidoe;
use Carbon\Carbon;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Category::where('is_menu', 1)->orderBy('menu_position', 'asc')->get();
        $bannerNews = Article::with('author')->whereRaw('find_in_set("banner-news",category_slug)')->where('status', 1)->orderBy('id','desc')->limit(2)->get();
        /*----------------------------- main news.--------------------------------------------------*/
        $mainFNews      = Article::whereRaw('find_in_set("main-news",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();


        $mainNews       = Article::whereRaw('find_in_set("main-news",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        /*----------------------------- rajniti news.--------------------------------------------------*/
        $rajnitiFNews      = Article::whereRaw('find_in_set("rajniti",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();
        $rajnitiNews       = Article::whereRaw('find_in_set("rajniti",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        /*----------------------------- main news.--------------------------------------------------*/
        $interviewFNews      = Article::whereRaw('find_in_set("interview",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();
        $interviewNews       = Article::whereRaw('find_in_set("interview",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        /*----------------------------- economy.--------------------------------------------------*/
        $economyFNews      = Article::whereRaw('find_in_set("economy",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();
        $economyNews       = Article::whereRaw('find_in_set("economy",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        /*----------------------------- sports news.--------------------------------------------------*/
        $sportsFNews      = Article::whereRaw('find_in_set("sports",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();
        $sportsNews       = Article::whereRaw('find_in_set("sports",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        /*----------------------------- world news.--------------------------------------------------*/
        $worldFNews         = Article::whereRaw('find_in_set("world",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();
        $worldNews          = Article::whereRaw('find_in_set("world",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        /*----------------------------- sci-tech news.--------------------------------------------------*/
        $scitechFNews      = Article::whereRaw('find_in_set("sci-tech",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();
        $scitechNews       = Article::whereRaw('find_in_set("sci-tech",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        /*----------------------------- education news.--------------------------------------------------*/
        $educationFNews      = Article::whereRaw('find_in_set("education",category_slug)')->where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->get();
        $educatiosamajnNews       = Article::whereRaw('find_in_set("education",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();

        $kalaFNews          = Article::whereRaw('find_in_set("kala",category_slug)')->where('status', 1)->where('is_feature', 1)->orderBy('id','desc')->limit(10)->get();
        $kalaNews           = Article::whereRaw('find_in_set("kala",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(10)->get();
        $bichar             = Article::with('author')->whereRaw('find_in_set("bichar",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(2)->get();

        $samaj              = Article::whereRaw('find_in_set("samaj",category_slug)')->where('status', 1)->orderBy('id','desc')->limit(3)->get();
        $prabash            = Article::whereRaw('find_in_set("prawas",category_slug)')->where('status', 1)->orderBy('id','desc')->limit(3)->get();
        $newspapper         = Article::whereRaw('find_in_set("newspapper",category_slug)')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(3)->get();

        $fvideos            = Vidoe::where('status', 1)->where('is_feature',1)->orderBy('id','desc')->limit(2)->first();
        $videos           = Vidoe::where('status', 1)->where('is_feature',0)->orderBy('id','desc')->limit(4)->get();

        return view('frontend.index',compact('menus','bannerNews','mainFNews','mainNews','rajnitiFNews','rajnitiNews','interviewFNews','interviewNews','economyFNews','economyFNews','economyNews','sportsFNews','sportsNews','worldFNews','worldNews','scitechFNews','scitechNews','scitechFNews','scitechNews','samaj','kalaFNews','samaj','prabash','newspapper', 'fvideos','videos'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $menus      = Category::where('is_menu', 1)->get();
        $article    = Article::with('author')->where('news_slug',$slug)->first();

        $first      = str::words(strip_tags($article->news_description) , 40, $end = '</p>');
        //dd($first);

        if(!empty($first)) {
            $second     = Str::of(strip_tags($article->news_description))->after($first);
            $secondp    = str::words(strip_tags($second) , 40, $end ="");
        }
 
        if(!empty($secondp)) {
            $third      = Str::of(strip_tags($article->news_description))->after($secondp);
            $thirdp     = str::words(strip_tags($third) , 50, $end ="");
        } else {
            $thirdp = "";
        }
        if(!empty($thirdp)) {
            $fourthp    = Str::of(strip_tags($article->news_description))->after($thirdp);
        } else {
            $fourthp = '';
        }
        $mainNews   = Article::where('category_slug','main-news')->where('status', 1)->whereNull('is_feature')->orderBy('id','desc')->limit(5)->get();
        return view('frontend.single',compact('menus','article','first','secondp','thirdp','fourthp','mainNews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function category($slug)
    {
        $menus          = Category::where('is_menu', 1)->get();
        $bannerNews     = Article::with('author')->whereRaw('find_in_set("banner-news",category_slug)')->where('status', 1)->orderBy('id','desc')->limit(1)->first();
        $articles       = Article::with('author')->whereRaw("find_in_set('".$slug."',category_slug)")->where('status', 1)->orderBy('id','desc')->limit(6)->paginate(6);
        return view('frontend.category',compact('menus','bannerNews','articles','slug'));
    }
}
