@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            @foreach($images as $image)
            <img style="width: 100px; height:100px;" src="{{ asset('/images/'. $image->image) }}"/>
            @endforeach
        </div>
    </div>
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $user->name }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="email" value="{{ $user->email }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="phone" value="{{ $user->phone }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="address" value="{{ $requestQuotation->address }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="delivery_time" class="col-sm-2 col-form-label">Delivery Time</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="delivery_time" value="{{ $requestQuotation->delivery_time }} hours">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 px-4">
        <div class="row bg-secondary rounded h-100 p-4">
            <div class="col-6 border-end border-light">
                <h6 class="mb-4">Quotation</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Drug</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach($quotations as $quotation)
                            @php
                                $total += $quotation->price;
                            @endphp
                            <tr>
                                <td>{{ $quotation->drug_name }}</td>
                                <td>{{ $quotation->quantity }}</td>
                                <td>{{ $quotation->price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <td></td>
                            <td>Total: </td>
                            <td>{{ $total }}</td>
                        </tfoot>
                    </table>
                    <form method="post" action="{{ route('send_quotation') }}">
                        @csrf
                        <input type="text" class="d-none form-control" name="request_quotation_id" value="{{ $requestQuotation->id }}">
                        <button type="submit" class="btn btn-primary">Send Quotation</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <h6 class="mb-4">Create Quotation</h6>
                <form action="{{ route('add_price') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="selectMed" class="form-label">Medicine</label>
                        <select id="selectMed" class="form-select" aria-label="Default select example" name="drug_name">
                            <option selected>Select From The List</option>
                            @foreach($drugs as $drug)
                                <option value="{{ $drug->drug_name }}">{{ $drug->drug_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity">
                    </div>
                    <input type="text" class="d-none form-control" name="request_quotation_id" value="{{ $requestQuotation->id }}">
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
