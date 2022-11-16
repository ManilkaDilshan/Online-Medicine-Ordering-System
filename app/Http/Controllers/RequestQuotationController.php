<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use App\Models\RequestQuotation;
use App\Models\Medicine;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\MailNotify;

class RequestQuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestQuotation = new RequestQuotation([
            'note'=>$request->note,
            'address'=>$request->address,
            'delivery_time'=>$request->delivery_time,
            'user_id'=>Auth::user()->id,
        ]);
        $requestQuotation->save();

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['request_quotation_id']=$requestQuotation->id;
                $request['image']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                Image::create($request->all());

            }
        }

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestQuotation  $requestQuotation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requestQuotation=RequestQuotation::find($id);

        $user=User::find($requestQuotation->user_id);

        $drugs=Medicine::all();

        $quotations=Quotation::where('request_quotation_id', $id)->get();

        $images = RequestQuotation::find($id)->images;

        return view('admin.quotation', compact('requestQuotation', 'user', 'drugs', 'quotations', 'images'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestQuotation  $requestQuotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $requestQuotation=RequestQuotation::find($request->request_quotation_id);
        $requestQuotation->status='Recieved Quotation';
        $requestQuotation->save();

        $user=User::find($requestQuotation->user_id);
        $data = [
            'subject'=>'Pharmacy Mail Service',
            'body' => 'The Quotation is Recieved'
        ];
        try {
            Mail::to($user->email)->send(new MailNotify($data));
        } catch (Exception $th) {
            return response()->json(['Sorry something went wrong']);
        }

        return redirect('home');

        return redirect('home');
    }

    public function accept(Request $request)
    {
        $requestQuotation=RequestQuotation::find($request->request_quotation_id);
        $requestQuotation->status='Accepted';
        $requestQuotation->save();

        $data = [
            'subject'=>'Pharmacy Mail Service',
            'body' => 'The Quotation was Accepted'
        ];
        try {
            Mail::to('ishanijayasekara04@gmail.com')->send(new MailNotify($data));
        } catch (Exception $th) {
            return response()->json(['Sorry something went wrong']);
        }

        return redirect('home');

        return redirect('home');
    }

    public function delete(Request $request)
    {
        $requestQuotation=RequestQuotation::find($request->request_quotation_id);
        $requestQuotation->status='Rejected';
        $requestQuotation->save();

        $data = [
            'subject'=>'Pharmacy Mail Service',
            'body' => 'The Quotation was rejected'
        ];
        try {
            Mail::to('ishanijayasekara04@gmail.com')->send(new MailNotify($data));
        } catch (Exception $th) {
            return response()->json(['Sorry something went wrong']);
        }

        return redirect('home');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestQuotation  $requestQuotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestQuotation $requestQuotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestQuotation  $requestQuotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestQuotation $requestQuotation)
    {
        //
    }
}
