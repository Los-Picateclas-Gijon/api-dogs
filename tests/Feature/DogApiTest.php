<?php

namespace Tests\Feature;

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

    public function test_store()
    {
        $data = [
            'name'=>'Doggy',
            'image'=>'new url'
        ];
        $response = $this->json('POST','/api/dogs',$data);
        $response->assertStatus(201)
            ->assertJson(['created' => true,])
            ->assertJsonStructure(['error']);
    }

}
            
