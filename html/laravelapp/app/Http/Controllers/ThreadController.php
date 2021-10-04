<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(Request $request)
    {
        $items = Thread::all();
        return ($items);
    }

    public function add(Request $request)
    {
        return $request;
    }
}
