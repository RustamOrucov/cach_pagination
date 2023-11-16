<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use PhpParser\Node\Stmt\Return_;



class NewsController extends Controller
{
    public function index()
    {
        $currentPage = request()->input('page', 1); // Geçerli sayfa numarasını alır, yoksa varsayılan olarak 1

        $paginatedNews = Cache::remember('news_page_' . $currentPage, 60 * 60, function () {
            return News::paginate(15);
        });

        return view('index', ['news' => $paginatedNews]);
    }
}
