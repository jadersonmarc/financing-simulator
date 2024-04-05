<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Vehicle;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VehicleApiTest extends TestCase
{
    use DatabaseTransactions;
    
    public function test_list_vehicles()
    {
        $vehicles = Vehicle::factory()->count(2)->create();
       
        $response = $this->getJson('/api/vehicles');

        $response->assertOk();
        $response->assertJsonCount(4, 'data'); 
        foreach ($vehicles as $vehicle) {
            $response->assertJsonFragment([
                'id' => $vehicle->id,
                'brand' => $vehicle->brand,
            ]);
        }
    }
}
