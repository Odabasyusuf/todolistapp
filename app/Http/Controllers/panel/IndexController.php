<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('panel.index');
    }

    public function category($slug){
        $category = Category::query()->where('slug', $slug)->firstOrFail();

        return view('panel.category', compact('category'));
    }
}
