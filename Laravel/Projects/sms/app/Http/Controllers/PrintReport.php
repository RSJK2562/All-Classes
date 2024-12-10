<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class PrintReport extends Controller
{
    public function index(string $id)
    {
        // $payment = Payment::find($id);

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->setPaper('A4', 'landscape');
        // $print = "<div style='margin:20px; padding:20px'>";

        // $print .= "<h1 align='center'>Payment Receipt</h1>";
        // $print .= "<hr />";

        // $print .= "<p>Receipt No: <b>ST0" . $id . "</b></p>";
        // $print .= "<p>Date: <b>" . $payment->paid_date . "</b></p>";
        // $print .= "<p>Enrollment No: <b>" . $payment->enrollment->enroll_no . "</b></p>";
        // $print .= "<p>Student Name: <b>" . $payment->enrollment->student->name . "</b></p>";

        // $print .= "<hr />";

        // $print .= "<table style='width: 100%'>";

        // $print .= "<tr>";
        // $print .= "<td>Description</td>";
        // $print .= "<td>Amount</td>";
        // $print .= "</tr>";

        // $print .= "<tr>";
        // $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
        // $print .= "<td><h3>" . $payment->amount . "</h3></td>";
        // $print .= "</tr>";

        // $print .= "</table>";

        // $print .= "<hr />";

        // $print .= "<span>Printed By: <b>" . Auth::user()->name . "</b></span><br />";
        // $print .= "<span>Printed Date: <b>" . date('Y-m-d') . "</b></span>";

        // $print .= "</div>";

        // $pdf->loadHTML($print);
        // return $pdf->stream();

        $payment = Payment::find($id);

        // Create PDF instance and set orientation to landscape
        $pdf = App::make('dompdf.wrapper');
        $pdf->setPaper('A4', 'landscape');

        // Add CSS styles
        $print = "
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #333;
            }
            .container {
                margin: 20px;
                padding: 20px;
            }
            h1 {
                text-align: center;
                color: #4CAF50;
                margin-bottom: 20px;
            }
            hr {
                border: none;
                height: 1px;
                background-color: #ddd;
                margin: 10px 0;
            }
            p {
                font-size: 14px;
                line-height: 1.6;
                margin: 5px 0;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            table, th, td {
                border: 1px solid #ddd;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            .footer {
                margin-top: 20px;
                font-size: 12px;
                color: #777;
            }
        </style>
        ";

        // HTML Content with CSS applied
        $print .= "<div class='container'>";

        $print .= "<h1>Payment Receipt</h1>";
        $print .= "<hr />";

        $print .= "<p>Receipt No: <b>ST0" . $id . "</b></p>";
        $print .= "<p>Date: <b>" . $payment->paid_date . "</b></p>";
        $print .= "<p>Enrollment No: <b>" . $payment->enrollment->enroll_no . "</b></p>";
        $print .= "<p>Student Name: <b>" . $payment->enrollment->student->name . "</b></p>";

        $print .= "<hr />";

        $print .= "<table>";
        $print .= "<tr>";
        $print .= "<th>Description</th>";
        $print .= "<th>Amount</th>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
        $print .= "<td><h3>" . $payment->amount . "</h3></td>";
        $print .= "</tr>";
        $print .= "</table>";

        $print .= "<hr />";

        $print .= "<div class='footer'>";
        $print .= "<span>Printed By: <b>" . Auth::user()->name . "</b></span><br />";
        $print .= "<span>Printed Date: <b>" . date('Y-m-d') . "</b></span>";
        $print .= "</div>";

        $print .= "</div>";

        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}
