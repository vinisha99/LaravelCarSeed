<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactReturnTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactTest()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
