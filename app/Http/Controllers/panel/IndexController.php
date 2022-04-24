<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ListHeading;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $categoryQuery = Category::query()->get();
        $categories = $categoryQuery->where('status', 1);
        $categoryCount = $categoryQuery->count();

        $listHeadingQuery = ListHeading::query()->get();
        $listHeadingTaskCount = $listHeadingQuery->where('status', 0)->count();
        $listHeadingDoneCount = $listHeadingQuery->where('status', 1)->count();

        return view('panel.index', compact(['categories', 'categoryCount', 'listHeadingTaskCount', 'listHeadingDoneCount']));
    }

    public function category($slug){
        $category = Category::query()->where('slug', $slug)->firstOrFail();

        return view('panel.category', compact('category'));
    }
}
