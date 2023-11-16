<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsApiController extends Controller
{
    public function index(){
        $news=News::all();
        return response($news,200);
    }
    public function show($id){
        $news=News::find($id);
        return response($news);
    }
    public function store(Request $request){
        $news = News::create([
            'author' => $request->input('author'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return response($news,201);
    }
}
