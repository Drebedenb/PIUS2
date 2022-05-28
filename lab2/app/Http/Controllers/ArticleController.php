<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    private function getQuery($key, $command_string, $query, $request) {
        $query->when($request->filled($key), function ($q, $key, $command_string) use ($request) {
            $q->where($key, $command_string , $request->$key);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Article::query();
        $this->getQuery('title', 'like',$query,$request);
        $this->getQuery('code', 'like',$query,$request);

        $filterParam = $request->filled('tags');

        if ($filterParam) {
            $filteredArticles = Article::whereHas('tags', function($q) use ($filterParam) {
                $q->where('title', '=', $filterParam);
            });
            $query = $filteredArticles;
        }

        $articles = $query->simplePaginate(10);
        $tags = DB::table('tags')->simplePaginate(10);

        return view('articles', ['articles' => $articles, 'tags' => $tags]);
    }

    public function curArticle($id){

        $articles = DB::table('articles')->where('id', '=', $id)->get();
        $tags = DB::table('tags')->join('bonds',function($join){
            $join->on('tags.id', '=', 'bonds.id_tag');
        })->where('bonds.id_article','=', $id)->orderBy('title')->get();


        return view('curArticle', ['articles' => $articles, 'tags' => $tags]);
    }


}
