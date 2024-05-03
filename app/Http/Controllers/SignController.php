<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function sign(Request $request)
    {
        $invoice = $request->file('invoice')->get();
        $certificate = $request->file('certificate')->get();
        $invoice = str_replace("\r", '', $invoice);
        // dump($certificate);
        // dump($invoice);

        $command = '';
        $output = [];
        $return_var = 0;
        exec($command, $output, $return_var);
        dump('Codigo: ' . $return_var);
        dump($output);
    }
}
