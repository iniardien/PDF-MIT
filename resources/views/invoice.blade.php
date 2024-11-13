<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        @font-face {
            font-family: 'Tahoma';
            src: url('{{ public_path('fonts/tahoma.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Tahoma';
            src: url('{{ public_path('fonts/tahomabd.ttf') }}') format('truetype');
            font-weight: bold;
            font-style: normal;
        }


        body {
            font-family: 'Calibri';
            font-weight: 700;
            font-size: 9pt;
            margin: 0;
            padding: 0;
        }

        .header,
        .details {
            width: 100%;
            text-align: right;

        }

        .header {
            margin-top: 9pt;
        }

        .details {
            margin-top: 15pt;
            color: #482f8a;
        }

        .details td {
            padding: 1.5pt 0;
        }

        .details td:first-child {
            font-weight: bold;
        }

        .details td:nth-child(2) {
            padding: 0 0pt;
            text-align: left;
        }

        .tbl_head {
            margin-left: 350.7pt;
        }

        .tbl_details {
            margin-left: 351.5pt;
        }

        .tbl_details td {

            padding: 1.5pt 0;
            line-height: 5.4pt;
            font-size: 10pt;
            margin: 0;

        }

        .tbl_data {
            width: 100%;
            margin-top: 7.5pt;
            border-collapse: collapse;
            font-size: 9.75pt;
            font-weight: bolder;

        }

        .tbl_data th {
            border: 0.08rem solid #000000;
            text-align: center;
            font-size: 9.86pt;
            padding: 0pt;
            
        }

        .tbl_data td {
            border: 0.08rem solid #000000;
            text-align: center;
            font-size: 8.96pt;
            padding: 0pt;
        }

        .tbl_footer th,
        .tbl_footer td {
            border: 0.08rem solid #000000;
            padding: 1pt;
            text-align: center;
            font-size: 9pt;
            line-height: 10pt;

        }

        .tbl_footer_2 th,
        .tbl_footer_2 td {

            padding: 1pt;
            text-align: center;
            font-size: 9pt;
            line-height: 10.75pt;


        }

        .tbl_signature th,
        .tbl_signature td {
            padding: 1.5pt;
            text-align: center;
            font-size: 9.95pt;


        }



        .tbl_data tbody tr:nth-child(even) {
            background-color: #000000;
        }

        .tbl_data tbody tr:hover {
            background-color: #000000;
        }

        .footer {
            bottom: 15pt;
        }

        .footer {
            width: 100%;
            font-weight: bold;
            text-align: left;
            position: fixed;
        
            font-size: 8pt;
        }


        .footer-table {
            width: 100%;
            border-collapse: collapse;
        }

       
    </style>
</head>

<body>

    <div class="header">
        <table class="tbl_head">
            <tr>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td style="padding-top: 0.8pt">{{ $address }}</td>
            </tr>
        </table>
    </div>
    <div class="details" style="padding-top: 8.75pt">
        <table class="tbl_details">
            <tr>
                <td>Phone</td>
                <td style="font-size: 8.4pt; padding-left:8.2pt; padding-top: 1pt; font-weight: normal; font-family: Calibri">:</td>
                <td style="color:black; padding-left:5.6pt; font-size: 9pt;  ">{{ $phone }}</td>
            </tr>
            <tr>
                <td style="padding-top: 1.8pt">Mobile</td>
                <td style="font-size: 8.4pt; padding-left:8.2pt; padding-bottom: 1pt; font-weight: normal; font-family: Calibri">:</td>
                <td style="color:black; padding-left:5.6pt; font-size: 9pt;">{{ $mobile }}</td>
            </tr>
            <tr>
                <td style="padding-top: 1.75pt">Email</td>
                <td style="font-size: 8.4pt; padding-left:8.2pt; padding-bottom: 1pt; font-weight: normal; font-family: Calibri">:</td>
                <td style="color:black; padding-left:5.6pt; font-size: 9pt;">{{ $email }}</td>
            </tr>
            <tr>
                <td style="padding-top: 2.1pt">NPWP</td>
                <td style="font-size: 8.4pt; padding-left:8.2pt; padding-bottom: 0pt; font-weight: normal; font-family: Calibri">:</td>
                <td style="color:black; padding-left:5.6pt; padding-top:3.7pt; font-size: 9pt;">{{ $npwp }}</td>
            </tr>
            <tr>
                <td style="padding-top: 2pt">No. PO</td>
                <td style="font-size: 8.4pt; padding-left:8.2pt; padding-bottom: 0pt; font-weight: normal; font-family: Calibri">:</td>
                <td style="color:black; padding-left:5.6pt; font-size: 9pt;">{{ $nopo }}</td>
            </tr>
        </table>
    </div>
    <table style="width: 100%; margin-top: 5.5pt; border-collapse: collapse;" class="tbl_data">
        <thead>
            <tr>
                <th style="width: 18%;">No. Inv</th>
                <th style="width: 13.3%;">Inv Date</th>
                <th style="width: 13%;">Due Date</th>
                <th style="width: 12.1%;">Payment Te</th>
                <th style="width: 12.2%;">Delivery Ty</th>
                <th style="width: 12.7%;">Salesman</th>
                <th style="width: 20%;">Remark</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data1 as $d1)
                <tr>
                    <td>{{ $d1->no_invoice }}</td>
                    <td>{{ $d1->inv_date }}</td>
                    <td>{{ $d1->due_date }}</td>
                    <td>{{ $d1->payment_te }}</td>
                    <td>{{ $d1->delivery_ty }}</td>
                    <td>{{ $d1->salesman }}</td>
                    <td style="text-align: left; padding-left: 2pt">{{ $d1->remark }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table style="width: 100%; margin-top: 2.85pt; border-collapse: collapse;" class="tbl_data">
        <thead>
            <tr>
                <th style="width: 5% ;height: 20px">No.</th>
                <th style="width: 29.3%">Item</th>
                <th style="width: 9%">Qty</th>
                <th style="width: 9.7%">Uom</th>
                <th style="width: 11%">Unit Price</th>
                <th style="width: 9%">Disc %</th>
                <th style="width: 9%">Taxes %</th>
                <th style="width: 14%">Netto Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data2 as $d2)
                <tr>
                    <td>{{ $d2->no }}</td>
                        <td style="text-align: left ; padding-left: 2pt; padding-top: 1pt; line-height: 8.55pt">{{ $d2->item }}</td>
                    <td>{{ $d2->qty }}</td>
                    <td>{{ $d2->uom }}</td>
                    <td style="text-align: right; padding-right: 2pt">{{ $d2->unit_price }}</td>
                    <td>{{ $d2->disc }}</td>
                    <td>{{ $d2->taxes }}</td>
                    <td style="text-align: right ; padding-right: 2pt">{{ $d2->netto_price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="footer">
        <table cellspacing="0" cellpadding="0" align="right" class="tbl_footer" style="width: 33.3%">
            <tr>
                <td style="text-align: left; width: 55%; padding-bottom: 0pt; line-height: 10pt">Sub Total</td>
                <td style="text-align: right; width: 41%; line-height: 10pt">{{ $subtotal }}</td>
            </tr>
        </table>
        <table cellspacing="0" cellpadding="0" align="right" class="tbl_footer_2"
            style="width: 33.3% ;margin-top:3pt; border-collapse: collapse; border: 0.08rem solid #000000">
            <tr>
                <td style="text-align: left; width: 55%; border-right: 0.08rem solid #000000;">Diskon</td>
                <td style="text-align: right; width: 41%">{{ $diskon }}</td>
            </tr>
            <tr>
                <td style="text-align: left; width: 55%; border-right: 0.08rem solid #000000">PPN (11%)</td>
                <td style="text-align: right; width: 41%">{{ $ppn }}</td>
            </tr>
            <tr>
                <td style="text-align: left; width: 55%; border-right: 0.08rem solid #000000">PPN Dibebaskan</td>
                <td style="text-align: right; width: 41%">-{{ $ppn_dibebaskan }}</td>
            </tr>
            <tr>
                <td style="text-align: left; width: 55%; border-right: 0.08rem solid #000000">Total</td>
                <td style="text-align: right; width: 41%">{{ $total }}</td>
            </tr>
        </table>
        <table cellspacing="0" cellpadding="0" align="right" style="margin-top:2.75pt; width: 40%; margin-right: 22pt" class="tbl_signature">
            <tr>
                <td style="width: 42%; text-align: center;">TTD/Printed by :</td>
                <td style="width: 1%;"></td>
                <td style="width: 47%; text-align: center; padding-left: 32pt">Received by :</td>
            </tr>
            <tr>
                <td style="line-height: 8pt; width: 42%;">Sales Admin,</td>
                <td style="width: 1%;"></td> <!-- Kolom kosong untuk jarak -->
                <td style="line-height: 8pt; width: 47%; padding-left: 32pt">Customer</td>
            </tr>
            <tr>
                <td style="height: 38pt; vertical-align: bottom; width: 42%;">
                    <span style="font-size: 9pt; margin-bottom: 0;">{{ $bulan }}</span>
                    <hr style="height: 0.75pt; border-width: 0; background-color: black; margin: 2px 0 0 0; width: 100%;">
                </td>
                <td style="width: 1%;"></td> <!-- Kolom kosong untuk jarak -->
                <td style="height: 38pt; vertical-align: bottom; width: 47%; padding-left: 32pt">
                    <hr style="height: 0.75pt; border-width: 0; background-color: black; margin: 2px 0 0 0; width: 100%;">
                </td>
            </tr>
            <tr>
                <td style="line-height: 8.5pt; font-size: 9pt; width: 42%;">{{ $tgl }}</td>
                <td style="width: 1%;"></td> <!-- Kolom kosong untuk jarak -->
                <td style="line-height: 8.5pt; font-size: 9pt; width: 47%; padding-left: 32pt"></td>
            </tr>
        </table>
        
        <div
            style="text-align: left; font-family: sans-serif ; font-style: italic; font-weight:normal;font-size:8.25pt; position: fixed; margin-top:7.5pt;" class="footer_num">
            &nbsp;
            
        </div>




    </div>
</body>


</html>
