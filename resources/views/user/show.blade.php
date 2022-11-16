@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
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
            <div class="row w-100">
                <form class="col" method="post" action="{{ route('accept_quotation') }}">
                    @csrf
                    <input type="text" class="d-none form-control" name="request_quotation_id" value="{{ $requestQuotation->id }}">
                    <button type="submit" class="btn btn-success">Accept Quotation</button>
                </form>
                <form class="col" method="post" action="{{ route('reject_quotation') }}">
                    @csrf
                    <input type="text" class="d-none form-control" name="request_quotation_id" value="{{ $requestQuotation->id }}">
                    <button type="submit" class="btn btn-primary">Reject Quotation</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
