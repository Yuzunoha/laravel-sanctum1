<?php

namespace App\Http\Controllers;

use App\Repositories\ThreadRepositoryInterface;
use App\Services\ThreadServiceInterface;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    protected $threadRepository;
    protected $threadService;

    public function __construct(
        ThreadServiceInterface $threadService,
        ThreadRepositoryInterface $threadRepository
    ) {
        $this->threadService = $threadService;
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

    public function test(Request $request)
    {
        $this->threadService->create(1, 2);
    }
}
