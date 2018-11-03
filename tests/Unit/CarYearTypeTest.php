<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarYearTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearType()
    {
        $getCar = Car::inRandomOrder()->first();

        $this->assertInternalType('int', $getCar->year);
    }
}
