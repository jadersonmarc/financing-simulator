<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CalculateFinancingAction;

class SimulateController extends Controller
{
    public function simulate(Request $request)
    {
        $installmentValue = CalculateFinancingAction::calculateInstallment(
            vehiclePrice: $request->input('vehiclePrice'),
            downPayment: $request->input('downPayment'),
            installments: $request->input('installments')
        );

        return response()->json([
            'installmentValue' => $installmentValue
        ]);
    }
}
