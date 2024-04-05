<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CalculateFinancingActionTest extends TestCase
{
    public function it_correctly_calculates_installment_value()
    {
        $action = new CalculateFinancingAction();

        $installmentValue = $action->execute(50000, 10000, 12);

        $this->assertEquals(3981.6666666666665, $installmentValue);
    }
}
