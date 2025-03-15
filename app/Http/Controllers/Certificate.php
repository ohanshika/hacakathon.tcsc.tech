<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class Certificate extends Controller
{
    public function generate(Request $request)
    {
        // Get participant data from the request
        $participant = json_decode($request->query('data'), true);

        if (!$participant) {
            return redirect()->back()->with('error', 'Invalid participant data');
        }

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('certificate', ['participant' => $participant]);

        // Return the PDF as a download
        return $pdf->download('certificate.pdf');
    }
}
