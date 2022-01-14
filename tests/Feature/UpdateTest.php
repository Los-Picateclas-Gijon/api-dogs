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
    // public function test_api_route_get_dog()
    // {
    //     //Given
    //     $dogs = Dog::factory()->count(2)->create();
    //     //When
        
    //     $response = $this->json('GET', '/api/dogs');
        
    //     //Then
    //     $response->assertStatus(200);
    
    // }
    public function test_api_route_update_dog(){

        //Given
        Dog::factory()->count(4)->create();

        $data = [
            'name' => 'NewName',
            'image' => 'newUrl'
        ];

        //When
        $response = $this->putJson('/api/dogs/3', $data);

        //Then
        $response->assertStatus(200);
                // ->assertJsonFragment(['image' => 'newUrl']);
    }
}