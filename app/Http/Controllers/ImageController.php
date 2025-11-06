<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class ImageController extends Controller{

    function view($image){
        $blog = Blog::find($id);
    }
}