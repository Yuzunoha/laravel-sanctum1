<?php

namespace Tests\Unit;

use App\Models\Reply;
use App\Repositories\ReplyRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReplyRepositoryTest extends TestCase
{
    use RefreshDatabase;

    protected $rep;

    public function setUp(): void
    {
        parent::setUp();

        $this->rep = app(ReplyRepository::class);
    }

    public function test_insert()
    {
        [$thread_id, $user_id, $text, $ip_address] = [1, 2, '3', '4'];
        $replyModel = $this->rep->insert($thread_id, $user_id, $text, $ip_address);
        $this->assertDatabaseHas('replies', $replyModel->toArray());
    }
}
