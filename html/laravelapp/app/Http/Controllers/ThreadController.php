<?php

namespace App\Http\Controllers;

use App\Repositories\ThreadRepositoryInterface;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    protected $threadRepository;

    public function __construct(ThreadRepositoryInterface $threadRepository)
    {
        $this->threadRepository = $threadRepository;
    }

    public function index(Request $request)
    {
        $items = Thread::all();
        return ($items);
    }

    public function add(Request $request)
    {
        return $this->threadRepository->insert($request->post_title);
    }
}
