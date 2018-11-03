<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarMakeTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMakeType()
    {
        $getCar = Car::inRandomOrder()->first();
        $this->assertContains($getCar->make, ['Ford', 'Honda', 'Toyota']);
    }
}
