<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card = Card::get();
        return view('cards.index', [
            "card" => $card,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_kartu' => 'required|string',
            'name' => 'required|string',
            'alamat' => 'required|string',
            'lahir' => 'required|string',
            'nik' => 'required|string',
            'fasilitas' => 'required|string',
        ]);
        Card::create($validatedData);

        return to_route('dashboard.cards.index')->with('success', 'tambah data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::find($id);
          // get previous user id
        $previous = Card::where('id', '<', $card->id)->max('id');

        // get next user id
        $next = Card::where('id', '>', $card->id)->min('id');

        return view('cards.details', [
            "card" => $card,
            "next" => $next,
            "previous" => $previous
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = Card::find($id);
        if (!$card) {
            return to_route('dashboard.index')->with('error', 'data tidak ditemukan');
        }
        return view('cards.edit', [
            "card" => $card,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRequest  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nomor_kartu' => 'required|string',
            'name' => 'required|string',
            'alamat' => 'required|string',
            'lahir' => 'required|string',
            'nik' => 'required|string',
            'fasilitas' => 'required|string',
        ]);
        Card::find($id)->update($validatedData);
        return to_route('dashboard.cards.index')->with('success', 'update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = Card::where('id', $id);

        if (!$card) {
            return to_route('dashboard.cards.index')->with('error', 'data tidak ditemukan');
        }

        $card->delete();

        return to_route('dashboard.cards.index')->with('success', 'hapus data berhasil');
    }

    public function count()
    {
        $totalUsers = Card::count();

        return view('dashboard.index', [
            "totalUsers" => $totalUsers,
        ]);
    }
}
