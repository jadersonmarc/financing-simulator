<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Actions\CalculateFinancingAction;

class CalculateFinancingActionTest extends TestCase
{
    public function test_it_correctly_calculates_installment_value()
    {
        $results =  CalculateFinancingAction::calculateInstallment(50000, 10000, 12);

        $expectedResults = [
            ['installments' => 12, 'installmentValue' => 3981.6666666666665],
        ];
    
        $this->assertEquals($expectedResults, $results);
    }
}
