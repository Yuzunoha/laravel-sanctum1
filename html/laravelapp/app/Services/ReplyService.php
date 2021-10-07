<?php

namespace App\Services;

class ReplyService implements ReplyServiceInterface
{
    public function create($thread_id, $user_id, $text, $ip_address)
    {
        dd($thread_id, $user_id, $text, $ip_address);
    }
}
