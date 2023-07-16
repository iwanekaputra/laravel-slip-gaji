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


        //Getting image
// $image=public_path('images/logo.png');
// $imagedata=base64_encode($image);
// $imgpath='<img src="'. public_path('images/logo.png') .'">';

// $HTML='<body><div>'.$imgpath.'</div></body>';


// // dompdf=new Dompdf($options);
// $pdf = PDF::loadHTML($HTML);
//         return $pdf->stream();

    }
}
