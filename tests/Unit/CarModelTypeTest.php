<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarModelTypeTest extends TestCase
{

    public function testCarModelType()
    {
        $getCar = Car::inRandomOrder()->first();
        $this->assertInternalType('string', $getCar->model);
    }
}
