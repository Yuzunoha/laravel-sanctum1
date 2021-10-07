<?php

namespace App\Http\Controllers;

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

    public function test(Request $request)
    {
        return $this->replyService->create(2, 2, 'テキストです。', 'IPアドレスです。');
    }
}
