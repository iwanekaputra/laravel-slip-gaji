<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;


class Tes extends Controller
{
    public function tes() {
        // retreive all records from db
        $data = ['d'];
        $pdf = PDF::loadView('pdf.slip-gaji', $data);
        return $pdf->stream();
    }
}
