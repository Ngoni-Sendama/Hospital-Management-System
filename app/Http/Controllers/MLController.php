<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Classification\KNearestNeighbors;

class MLController extends Controller
{

    /**
     * Make a prediction using static data.
     */
    public function predictPurchase(Request $request)
    {
        // Step 1: Prepare the data (features and labels)
        $samples = [
            [22, 45000],  // Age 22, Income 45000
            [25, 40000],  // Age 25, Income 40000
            [47, 80000],  // Age 47, Income 80000
            [52, 100000], // Age 52, Income 100000
            [46, 32000],  // Age 46, Income 32000
            [56, 120000], // Age 56, Income 120000
            [27, 52000],  // Age 27, Income 52000
        ];

        $labels = ['No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No'];

        // Step 2: Initialize and train the K-Nearest Neighbors (KNN) classifier
        $classifier = new KNearestNeighbors();
        $classifier->train($samples, $labels);

        // Step 3: Get input data from the request or default values
        $age = $request->input('age', 30);         // Default age is 30
        $income = $request->input('income', 60000); // Default income is 60000

        // Step 4: Predict with new data
        $newSample = [$age, $income]; // Age and income from the request
        $prediction = $classifier->predict($newSample);

        // Step 5: Return the prediction result as a JSON response
        return response()->json([
            'age' => $age,
            'income' => $income,
            'prediction' => $prediction
        ]);
    }
}
