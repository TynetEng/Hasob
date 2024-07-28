@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Bond Offer</h1>
        <form action="{{ route('bond_offers.update', $bondOffer) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $bondOffer->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
