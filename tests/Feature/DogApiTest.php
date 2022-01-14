<?php

namespace Tests\Feature;

use App\Models\Dog;
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
    public function test_index()
    {  $dogs = Dog::factory()->count(2)->create();
       // $this->assertTrue($response['index']);
       $response = $this->json('GET','/api/dogs');
       $response->assertStatus(200)
        ->assertJsonCount(2)
        ->assertExactJson($dogs->toArray());
       
     }
}
   
