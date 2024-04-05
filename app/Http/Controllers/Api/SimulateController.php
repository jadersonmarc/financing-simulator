<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CalculateFinancingAction;

class SimulateController extends Controller
{
    public function simulate(Request $request)
    {
        $vehiclePrice = $request->input('vehiclePrice');
        $downPayment = $request->input('downPayment');
        $installments = $request->input('installments');

        $installmentValue = CalculateFinancingAction::calculateInstallment(
            $vehiclePrice,
            $downPayment,
            $installments,
        );

        return response()->json([
            'installmentValue' => $installmentValue
        ]);
    }
}
