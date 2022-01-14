<?php

namespace Tests\Feature;

use App\Models\Dog;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DogApiTest extends TestCase
{
    use RefreshDatabase;
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
        $dog=Dog::factory()->count(2)->create();
        //$dog=Dog::first();
        $response=$this->deletejson('/api/dogs/1');
       
        $response->assertStatus(200)
                 ->assertSuccessful();
                // ->assertJsonCount(1);
                 
    }

  

}

