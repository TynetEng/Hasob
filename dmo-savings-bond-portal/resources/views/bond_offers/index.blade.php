@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bond Offers</h1>
        <a href="{{ route('bond_offers.create') }}" class="btn btn-primary">Create New Bond Offer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bondOffers as $bondOffer)
                    <tr>
                        <td>{{ $bondOffer->id }}</td>
                        <td>{{ $bondOffer->name }}</td>
                        <td>
                            <a href="{{ route('bond_offers.show', $bondOffer) }}" class="btn btn-info">View</a>
                            <a href="{{ route('bond_offers.edit', $bondOffer) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('bond_offers.destroy', $bondOffer) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
