<?php

namespace App\Services;

interface ReplyServiceInterface
{
    public function create($thread_id, $user_id, $text, $ip_address);
}
