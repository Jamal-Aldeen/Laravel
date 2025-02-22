<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index(){
        // DB::table('category')->get()->all();
        // DB::table('category')->insert([]);
        $categoris = Category::all();
        // return view('home', compact('ategories'));
    }
}
