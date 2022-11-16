<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\RequestQuotation;
use App\Models\Medicine;
use Illuminate\Support\Facades\Route;

class QuotationController extends Controller
{
    public function store(Request $request)
    {
        $name=$request->drug_name;
        $quantity=$request->quantity;
        $price = Medicine::where('drug_name', $name)->first()->unit_price;
        $quotation = new Quotation([
            'drug_name'=>$name,
            'quantity'=>$quantity,
            'price'=>$quantity * $price,
            'request_quotation_id'=>$request->request_quotation_id,

        ]);
        $quotation->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quotations=Quotation::where('request_quotation_id', $id)->get();
        $requestQuotation=RequestQuotation::find($id);

        return view('user.show', compact('quotations', 'requestQuotation'));

    }
}
