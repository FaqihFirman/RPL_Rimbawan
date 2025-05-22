<?php

namespace App\Http\Controllers;

use App\Models\Flora;
use Illuminate\Http\Request;

class FloraController extends Controller
{
    public function index(Request $request)
    {
        $query = Flora::query();
    
        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('nama_flora', 'like', "%{$search}%")
                  ->orWhere('nama_latin', 'like', "%{$search}%");
            });
        }
    
        $floras = $query->paginate(12);

        if ($request->ajax()) {
            return view('flora.partials.cards', compact('floras'))->render();
        }
        return view('flora.index', compact('floras'));
    }

    public function detail($id)
{
    $flora = Flora::findOrFail($id);
    return view('flora.detail', compact('flora'));
}
    
    
}
