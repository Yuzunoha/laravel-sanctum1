<?php

namespace App\Repositories;

use App\Models\Reply;

class ReplyRepository implements ReplyRepositoryInterface
{
    public function insert($thread_id, $user_id, $text, $ip_address)
    {
        $model = new Reply;
        $model->thread_id = $thread_id;
        $model->user_id = $user_id;
        $model->text = $text;
        $model->ip_address = $ip_address;
        $model->save();
        return $model;
    }
}
