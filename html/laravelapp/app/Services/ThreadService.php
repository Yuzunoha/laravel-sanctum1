<?php

namespace App\Services;

use App\Repositories\ThreadRepositoryInterface;

class ThreadService implements ThreadServiceInterface
{
    protected $threadRepository;

    public function __construct(ThreadRepositoryInterface $threadRepository)
    {
        $this->threadRepository = $threadRepository;
    }

    public function create($user_id, $title, $ip_address)
    {
        /* TODO: チェックする */
        return $this->threadRepository->insert($user_id, $title, $ip_address);
    }
}
