<?php

namespace App\Http\Controllers;
use App\models\BookInfo;

use Illuminate\Http\Request;

class BookInfoController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'books' => BookInfo::All()
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }

    public function info(BookInfo $BookInfo)
    {
        return view('info', [
            'title' => 'Info',
            'book' => $BookInfo
        ]);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
