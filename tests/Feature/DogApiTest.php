<?php

namespace Tests\Feature;

use App\Models\Dog;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DogApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_destroy(){
        $user=Dog::factory()->count(1)->make();
        $user=Dog::first();
        //$user=$this->json('DELETE','/api/dogs');
        if($user){
            $user->delete();
        }
       // $this->assertTrue(true);
       $this->assertEquals(200, $user->getStatusCode());
    }
}
