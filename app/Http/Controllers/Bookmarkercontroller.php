<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Bookmarkercontroller extends Controller
{
    public function bookmark($id)
    {
        Auth::user()->Bookmark()->toggle($id);
        return back()->with('success', 'تمت اضافه الموقع الى المفضله');
    }

    public function getByUser()
    {
        $bookmarks = auth()->user()->bookmark()->get();
        return view('user_bookmarks', compact('bookmarks'));
    }
}
