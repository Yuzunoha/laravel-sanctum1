<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Services\ReplyServiceInterface;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    protected $replyServiceInterface;

    public function __construct(ReplyServiceInterface $replyServiceInterface)
    {
        $this->replyServiceInterface = $replyServiceInterface;
    }

    public function test(Request $request)
    {
        $this->replyServiceInterface->create(2, 2, 'テキストです。', 'IPアドレスです。');
        return;
        $m = new Reply;
        $m->thread_id = 1;
        $m->user_id = 1;
        $m->text = 'テキストです。';
        $m->ip_address = 'IPアドレスです。';

        $m->save();
        return $m;
    }
}
