<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $insertCar = factory(Car::class)->create([
            'make' => 'Toyota',
            'model' => 'SUV',
            'year' => '2050',

        ]);

        $findInsertedCar = Car::where(['make' => 'Toyota', 'model' => 'SUV', 'year' => '2050'])->first();
        $insertedCarIsPresent = false;

        if($findInsertedCar)
        {
            $insertedCarIsPresent = true;
        }
        $this->asserttrue($insertedCarIsPresent);



        if($findInsertedCar){
            $findInsertedCar->delete();
        }
    }
}
