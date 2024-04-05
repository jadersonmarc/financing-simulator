<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SimulateFinancingTest extends TestCase
{
    public function test_it_calculates_financing_correctly()
    {
        $response = $this->postJson('/api/simulate-financing', [
            'vehiclePrice' => 50000,
            'downPayment' => 10000,
           
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'installmentValue' => [
                    ['installments' => 6, 'installmentValue' => 7705.833333333333],
                    ['installments' => 12, 'installmentValue' => 3981.6666666666665],
                    ['installments' => 48, 'installmentValue' => 1028.0208333333333]
                ]
            ]);
    }
}
