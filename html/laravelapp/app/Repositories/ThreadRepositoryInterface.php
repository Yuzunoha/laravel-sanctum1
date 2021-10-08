<?php

namespace App\Repositories;

interface ThreadRepositoryInterface
{
    public function insert($user_id, $title, $ip_address);
}
