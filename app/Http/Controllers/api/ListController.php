<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;

class ListController extends Controller
{
    public function show($id){
        $data = Category::where("id","=",$id)->first()->getVideos()->get();
        return $data;
    }
    public function  index(Request $request){
        $data = User::where("id",'=',$request->id)->first()->getCategories()->get();
        return $data;
    }
}
