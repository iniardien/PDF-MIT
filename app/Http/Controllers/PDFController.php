<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Dompdf\Adapter\CPDF;
use Dompdf\FontMetrics;
use Dompdf\Options;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF(PDF $pdf)
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);


        $data1 = [
            (object) [
                'no_invoice' => 'SI.2024.09.01295 ',
                'inv_date' => '04 Sep 2024',
                'due_date' => '04 Okt 2024',
                'payment_te' => 'net 30',
                'delivery_ty' => '8A',
                'salesman' => 'S11',
                'remark' => 'Arcadia(8a)',
            ]
        ];
        $data2 = [
            (object) [
                'no' => '1',
                'item' => 'Meiduck Frozen Peking Duck E 2.60-2.69',
                'qty' => '40,14',
                'uom' => 'Kg',
                'unit_price' => '55.000',
                'disc' => '',
                'taxes' => '11',
                'netto_price' => '2.207.700',
            ]
        ];

        $data = [
            'name' => 'Arcadia Ubud',
            'address' => 'Jl. Raya Tjampuhan Sayan',
            'phone' => '',
            'mobile' => '085695881110',
            'email' => '',
            'npwp' => '921365383906000',
            'nopo' => '',
            'data1' => $data1,
            'data2' => $data2,
            'subtotal' => '2.207.700',
            'diskon' => '0',
            'ppn' => '242.847',
            'ppn_dibebaskan' => '242.847',
            'total' => '2.207.700',
            'bulan' => 'Juni',
            'tgl' => '11/11/2024, 14:17',
        ];


        $pdf = $pdf->loadView('invoice', $data)->setPaper([0, 0, 612, 788], 'portrait')
            ->setOption('isHtml5ParserEnabled', true)
            ->setOption('isPhpEnabled', true)
            ->setOption([
                'fontDir' => public_path('/fonts'),
                'fontCache' => public_path('/fonts'),
                'defaultFont' => 'Tahoma'
            ]);



        // Use the render method to count pages
        $pdf->render();

        $canvas = $pdf->getCanvas();
        $canvas->page_text(32, 764, "Page {PAGE_NUM} Of   {PAGE_COUNT}", null, 8, array(0, 0, 0));

        // Stream the PDF
        return $pdf->stream('invoice.pdf');
    }
}
