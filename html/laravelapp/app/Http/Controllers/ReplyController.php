<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyCreatePost;
use App\Models\Reply;
use App\Services\ReplyServiceInterface;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    protected $replyService;

    public function __construct(
        ReplyServiceInterface $replyService
    ) {
        $this->replyService = $replyService;
    }

    public function create(ReplyCreatePost $request)
    {
        return $this->replyService->create(
            $request->thread_id,
            $request->user_id,
            $request->text,
            $request->ip_address
        );
    }

    public function test(Request $request)
    {
        return $this->replyService->create(2, 2, 'テキストです。', 'IPアドレスです。');
    }
}
