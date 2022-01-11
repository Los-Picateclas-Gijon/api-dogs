<?php

namespace Tests\Feature;

use App\Models\Dog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_route_update_dog()
    {
        //Given
        $dogs = Dog::factory()->count(2)->create();
        //When
        
        $response = $this->json('GET', '/api/dogs');
        
        //Then
        $response->assertStatus(200);
    
    }
}