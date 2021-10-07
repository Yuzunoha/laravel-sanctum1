<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function test(Request $request)
    {
        $m = new Reply;
        $m->thread_id = 1;
        $m->user_id = 1;
        $m->text = 'テキストです。';
        $m->ip_address = 'IPアドレスです。';

        $m->save();
        return $m;
    }
}
