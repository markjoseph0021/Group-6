<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class ShowController extends Controller
{
    public function show_post(Request $request)
    {
        $details = Post::where('_id',   $request->id)->get();
        echo "The following details" .$details.

    }
}