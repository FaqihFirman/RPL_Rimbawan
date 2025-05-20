<?php

namespace App\Http\Controllers;

use App\Models\Fauna;
use Illuminate\Http\Request;

class FaunaController extends Controller
{
    public function index(Request $request)
    {
        $query = Fauna::query();
    
        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('nama_fauna', 'like', "%{$search}%")
                  ->orWhere('nama_latin', 'like', "%{$search}%");
            });
        }
    
        $faunas = $query->paginate(12);

        if ($request->ajax()) {
            return view('fauna.partials.cards', compact('faunas'))->render();
        }
        return view('fauna.index', compact('faunas'));
    }

    public function detail($id)
{
    $fauna = Fauna::findOrFail($id);
    return view('fauna.detail', compact('fauna'));
}
    
    
}
