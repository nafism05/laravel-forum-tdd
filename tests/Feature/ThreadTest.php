<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_browse_threads()
    {
        $thread = Thread::factory()->create();
        $response = $this->get('/threads');

        // $response->assertStatus(200);

        $response->assertSee($thread->title);
    }
}
