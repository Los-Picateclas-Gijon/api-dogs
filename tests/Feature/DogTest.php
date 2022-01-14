<?php

namespace Tests\Feature;

use App\Models\Dog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DogTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_show_dog()
    {
        //Given
        Dog::factory()->count(3)->create();
         //When
        $response = $this->getJson('/api/dogs/2');
        //Then
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }
}
