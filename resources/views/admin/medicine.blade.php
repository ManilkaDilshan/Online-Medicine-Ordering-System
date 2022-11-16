@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Drugs</h6>
        <form action="{{ route('add_drug') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="drug_code" class="col-sm-2 col-form-label">Drug Code</label>
                <div class="col-sm-10">
                    <input type="text" name="drug_code" class="form-control" id="drug_code">
                </div>
            </div>
            <div class="row mb-3">
                <label for="drug_name" class="col-sm-2 col-form-label">Drug Name</label>
                <div class="col-sm-10">
                    <input type="text" name="drug_name" class="form-control" id="drug_name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="unit_price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="text" name="unit_price" class="form-control" id="unit_price">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Drug</button>
        </form>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Drug List</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Drug Code</th>
                        <th scope="col">Drug Name</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($medicines as $medicine)
                    <tr>
                        <td>{{ $medicine->drug_code }}</td>
                        <td>{{ $medicine->drug_name }}</td>
                        <td>{{ $medicine->unit_price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
