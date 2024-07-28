@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bond Offer Details</h1>
        <p><strong>Name:</strong> {{ $bondOffer->name }}</p>
        <p><strong>Description:</strong> {{ $bondOffer->description }}</p>
        <!-- Add more fields as necessary -->
    </div>
@endsection
