<?php

namespace App\Http\Controllers;

use App\Models\SlipSalary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;


class Tes extends Controller
{
    public function tes($id) {
        // retreive all records from db
        $data = SlipSalary::find($id);
        $pdf = PDF::loadView('pdf.slip-gaji', ['slip' => $data]);
        $namePdf = time() .'.pdf';
        $pdf->save('pdf/' . $namePdf);

        $data->update([
            'file_pdf' => $namePdf
        ]);

        return $pdf->stream();

    }
}
