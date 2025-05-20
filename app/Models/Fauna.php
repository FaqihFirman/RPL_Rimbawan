<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fauna extends Model
{

    protected $primaryKey = 'fauna_id'; 

    protected $fillable = [
        'admin_id',
        'nama_fauna',
        'nama_latin',
        'habitat',
        'status_konservasi',
        'gambar_fauna',
        'deskripsi_fauna',
    ];

    
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function scopeSearch($query, $term)
    {
        if ($term) {
            $term = strtolower($term);
            $query->where(function($q) use ($term) {
                $q->whereRaw('LOWER(nama_fauna) LIKE ?', ["%{$term}%"])
                  ->orWhereRaw('LOWER(nama_latin) LIKE ?', ["%{$term}%"]);
            });
        }
        return $query;
    }
}
