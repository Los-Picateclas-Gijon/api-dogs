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

    public function test_store()
    {
        $data = [
            'name'=>'Doggy',
            'image'=>'new url'
        ];
        $response = $this->json('POST','/api/dogs',$data);
        $response->assertStatus(200);
            // ->assertJson(['created' => true,])
            // ->assertJsonStructure(['error']);
    }
            
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
               
                
    }

  



    public function test_index()
    {  $dogs = Dog::factory()->count(2)->create();
       // $this->assertTrue($response['index']);
       $response = $this->json('GET','/api/dogs');
       $response->assertStatus(200)
        ->assertJsonCount(2)
        ->assertExactJson($dogs->toArray());
       
     }
    
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
   
