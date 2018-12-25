<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KnowledgeBaseController extends Controller
{
    public function knwoledgeBase(Request $request){
        $input = Request::all();
        /*                Advance Seach             */
        $position = array_get('position',null);
        $department = array_get('department',null);
        $zip_code = array_get('zip_code',null);
        $under = array_get('under',null);
        ////////////////////////////////////////
        $articles = Article::all();

        return response()->json([
            'success' => true,
            'data' => $articles
        ]);
    }

    public function show($id){
        $article = Article::find($id);

        return response()->json([
            'success' => true,
            'data' => $article
        ]);
    }

    public function edit($id){
        $article = Article::find($id);

        return response()->json([
            'success' => true,
            'data' => $article
        ]);
    }

    public function update(Request $request){
        $input = $request->all();
        $article = Article::find($input['id']);

        $article->title =  $input['title'];
        $article->content =  $input['content'];
        $article->save();

        return response()->json([
            'success' => true
        ]);
    }

    public function store(Request $request){
        $input = $request->all();
        $article = Article::find($input['id']);

        $article->title =  $input['title'];
        $article->content =  $input['content'];
        $article->save();

        return response()->json([
            'success' => true
        ]);
    }
}
