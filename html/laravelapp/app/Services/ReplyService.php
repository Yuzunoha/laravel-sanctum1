<?php

namespace App\Services;

use App\Repositories\ReplyRepositoryInterface;

class ReplyService implements ReplyServiceInterface
{
    protected $replyRepository;

    public function __construct(
        ReplyRepositoryInterface $replyRepository
    ) {
        $this->replyRepository = $replyRepository;
    }

    public function create($thread_id, $user_id, $text, $ip_address)
    {
        return $this->replyRepository->insert($thread_id, $user_id, $text, $ip_address);
    }
}
