<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dasboard
    public function dashboard(){
        return view('admin.dashboard', [
            'categories' => Category::lastCategories(5),
            'articles'   => Article::lastArticles(5),
        ]);
    }
}
