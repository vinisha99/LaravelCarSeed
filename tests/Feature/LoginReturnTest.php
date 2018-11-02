<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginReturnTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoginTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
