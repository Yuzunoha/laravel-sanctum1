<?php

namespace App\Repositories;

interface ReplyRepositoryInterface
{
    public function insert($thread_id, $user_id, $text, $ip_address);
}
