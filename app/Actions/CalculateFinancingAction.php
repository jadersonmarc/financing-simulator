<?php

namespace App\Actions;

class CalculateFinancingAction
{
    public static function calculateInstallment($vehiclePrice, $downPayment, $installments)
    {
        $installmentOptions = $installments ? [$installments] : [6, 12, 48];
        $results = [];

        foreach ($installmentOptions as $installments) {
            $interestRate = self::determineInterestRate($installments);
            $finalVehiclePrice = self::calculateFinalPriceWithInterest($vehiclePrice, $interestRate);
            $financedAmount = $finalVehiclePrice - $downPayment;
            $installmentValue = self::calculateMonthlyInstallment($financedAmount, $installments);

            $results[] = [
                'installments' => $installments,
                'installmentValue' => $installmentValue,
            ];
        }

        return $results;
    }

    private static function calculateFinalPriceWithInterest($price, $interestRate)
    {
        return $price * (1 + $interestRate);
    }

    private static function calculateMonthlyInstallment($amount, $installments)
    {
        return $amount / $installments;
    }

    private static function determineInterestRate($installments)
    {
        $interestRates = [
            6 => 0.1247,
            12 => 0.1556,
            48 => 0.1869,
        ];
    
        return $interestRates[$installments] ?? 0;
    }
}