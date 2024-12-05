<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $items = Item::latest()->paginate();
        $data['items'] = $items;
        $categories = Category::orderBy('id','ASC')->paginate()->where('status',1)->take(2);
        $data['categories'] = $categories;
        return view('front.home', $data);
    }

    public function create() {
        return view('front.categories.create');
    }

    public function store() {
        
    }

    public function edit() {
        return view('front.categories.edit');
    }

    public function destroy() {
        
    }
}
