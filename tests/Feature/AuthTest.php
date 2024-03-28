<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $token = $user->createToken('foo')->plainTextToken;

        $response = $this->withToken($token)->get('/api/user');
    }
}
