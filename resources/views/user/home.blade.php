@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Request Quotation</h6>
        <form action="{{ route('request') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" id="address">
                </div>
            </div>
            <div class="row mb-3">
                <label for="delivery_time" class="col-sm-2 col-form-label">Delivery Time</label>
                <div class="col-sm-10">
                    <select class="form-select" id="delivery_time"
                                    aria-label="label select example" name="delivery_time">
                                    <option selected>Select Time</option>
                                    <option value="2">Two</option>
                                    <option value="4">Four</option>
                                    <option value="6">Six</option>
                                    <option value="8">Eight</option>
                                </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="formFileMultiple" class="col-sm-2 col-form-label">Prescription</label>
                <div class="col-sm-10">
                    <input class="form-control bg-dark" type="file" id="formFileMultiple" name="images[]" multiple>
                </div>
            </div>
            <div class="row mb-3">
                <label for="note" class="col-sm-2 col-form-label">Note</label>
                <div class="col-sm-10">
                    <textarea class="form-control" aria-label="With textarea" id="note" placeholder="Add Note Here" name="note"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">My Requests</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Address</th>
                        <th scope="col">Note</th>
                        <th scope="col">Status</th>
                        <th scope="col">Delivery Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($requestQuotations as $request)
                    <tr>
                        <td>{{ $request->address }}</td>
                        <td>{{ $request->note }}</td>
                        <td>{{ $request->status }}</td>
                        <td>{{ $request->delivery_time }} {{ __('hours') }}</td>
                        <td>
                            @if ($request->status == 'Recieved Quotation')
                            <a class="btn btn-primary" href="{{ route('quotation.view', $request->id) }}">{{ __('View Quotation') }}</a>
                            @else
                            -
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
