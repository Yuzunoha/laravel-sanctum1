<?php

namespace App\Services;

class ThreadService implements ThreadServiceInterface
{
    public function create($title, $text)
    {
        dd($title, $text);
    }
}
