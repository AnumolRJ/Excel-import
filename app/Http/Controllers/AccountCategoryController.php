<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountCategory;
use App\Models\GoldLoan;
use App\Log;
use Auth;
use Rap2hpoutre\FastExcel\FastExcel;

class AccountCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = AccountCategory::latest()->get();
        return view('account_categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = fastexcel()->import($request->lm, function ($line) {
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
        // $category = new AccountCategory;
        // $category->account_category = $request->account_category;
        // $category->save();
         return Redirect()->back()->with('success','Account Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = AccountCategory::find($id);
        return view('account_categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = AccountCategory::find($id);
        $category->account_category = $request->account_category;
        $category->save();
        
        return Redirect('/account_categories')->with('success','Account Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
