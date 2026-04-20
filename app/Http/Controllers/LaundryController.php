<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        return view('index');
    }

    public function dashboard()
    {
        $laundries = Laundry::all();

        return view('admin.dashboard', compact('laundries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createKiloan()
    {
        return view('form.kiloan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->jenis_layanan == 'laundry_kiloan') {
            
            $total = $request->berat * 8000;

            Laundry::create([
                'no_hp' => $request ->no_hp,
                'nama_pelanggan' => $request->nama_pelanggan,
                'berat' => $request->berat,
                'jenis_layanan' => 'laundry_kiloan',
                'catatan' => $request->catatan,
                'total_harga' => $total,
                
            ]);
        }

        return redirect()->route('daftar-layanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
