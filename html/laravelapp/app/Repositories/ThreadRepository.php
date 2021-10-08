<?php

namespace App\Repositories;

use App\Models\Thread;
use App\Repositories\ThreadRepositoryInterface;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function insert($user_id, $title, $ip_address)
    {
        $thread = Thread::create([
            'user_id'    => $user_id,
            'title'      => $title,
            'ip_address' => $ip_address,
        ]);
        $thread->save();
        return $thread;
    }
}
