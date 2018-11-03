<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $insertUser = factory(User::class)->create([
            'name' => 'Mike gail',
            'email' => str_random(5).'@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
            'remember_token' => str_random(10),

        ]);

        $findInsertedUser = User::where('name', 'Mike gail')->first();

        $this->assertTrue($findInsertedUser->delete());

    }
}
