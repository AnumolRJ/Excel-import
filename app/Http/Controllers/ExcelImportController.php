<?php

namespace App\Http\Controllers;

use App\Models\GoldLoan;
use Illuminate\Http\Request;

class ExcelImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $upiId = 'kappilarunmohan-1@okhdfcbank';
        $description = 'UPI';
        $amount = 100;

        // UPI Payment URL
        $upiPaymentURL = "upi://pay?pa=$upiId&pn=Recipient&tn=$description&am=$amount";

        return view('bill',compact('upiPaymentURL'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('excel_import.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = fastexcel()->import($request->file, function ($line) {
            return GoldLoan::create([
                'start_date' => $line['date'],
                'end_date' => $line['date'],
                'customer_name' => $line['name'],
                'address' => $line['address'],
                'loan_id' => $line['gl_no'],
                'amount' => $line['amount'],
                'total_amount' => $line['amount'],
                'gram' => $line['weight'],
                'status' => 1,
                'contact_no' => $line['phno'],
            ]);
        });

        return Redirect()->back()->with('success','Excel Imported successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
