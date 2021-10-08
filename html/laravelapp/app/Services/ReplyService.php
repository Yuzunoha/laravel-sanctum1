<?php

namespace App\Services;

use App\Repositories\ReplyRepositoryInterface;

class ReplyService implements ReplyServiceInterface
{
    protected $replyRepository;
    protected $threadService;

    public function __construct(
        ReplyRepositoryInterface $replyRepository,
        ThreadServiceInterface $threadService
    ) {
        $this->replyRepository = $replyRepository;
        $this->threadService = $threadService;
    }

    public function create($thread_id, $user_id, $text, $ip_address)
    {
        /* thread_id が存在するか確認する */
        if (null === $this->threadService->selectById($thread_id)) {
            UtilService::throwHttpResponseException("thread_id ${thread_id} は存在しません。");
        }

        /* user_id が存在するか確認する */
        if (false) {
            UtilService::throwHttpResponseException("user_id ${user_id} は存在しません。");
        }

        return $this->replyRepository->insert($thread_id, $user_id, $text, $ip_address);
    }

    public function selectAll()
    {
        return $this->replyRepository->selectAll();
    }
}
