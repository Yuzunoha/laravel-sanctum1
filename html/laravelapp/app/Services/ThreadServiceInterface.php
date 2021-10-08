<?php

namespace App\Services;

interface ThreadServiceInterface
{
    public function create($user_id, $title, $ip_address);
}
