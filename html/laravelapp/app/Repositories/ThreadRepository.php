<?php

namespace App\Repositories;

use App\Models\Thread;
use App\Repositories\ThreadRepositoryInterface;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function insert($title)
    {
        $thread = new Thread();
        $thread->title = $title;
        $thread->save();
        return $thread;
    }
}
