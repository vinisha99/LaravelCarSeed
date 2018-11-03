<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $insertCar = factory(Car::class)->create([
            'make' => 'Honda',
            'model' => 'Coupe',
            'year' => '2090',
        ]);

        $findInsertedCar = Car::where(['make' => 'Honda', 'model' => 'Coupe', 'year' => '2090'])->first();

        $this->assertTrue($findInsertedCar->delete());
    }
}
