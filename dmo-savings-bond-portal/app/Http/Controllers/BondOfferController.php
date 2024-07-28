<?php

namespace App\Http\Controllers;

use App\Models\BondOffer;
use Illuminate\Http\Request;

class BondOfferController extends Controller
{
    /**
     * Display a listing of the bond offers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bondOffers = BondOffer::all();
        return view('bond_offers.index', compact('bondOffers'));
    }

    public function create()
    {
        return view('bond_offers.create');
    }

    public function edit(BondOffer $bondOffer)
    {
        return view('bond_offers.edit', compact('bondOffer'));
    }

    public function show(BondOffer $bondOffer)
    {
        return view('bond_offers.show', compact('bondOffer'));
    }



}
