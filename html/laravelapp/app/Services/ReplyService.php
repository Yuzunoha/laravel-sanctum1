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
        /* thread_id が存在するか確認する */
        /* user_id が存在するか確認する */
        return $this->replyRepository->insert($thread_id, $user_id, $text, $ip_address);
    }

    public function selectAll()
    {
        return $this->replyRepository->selectAll();
    }
}
