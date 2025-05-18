<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flora extends Model
{
    protected $primaryKey = 'flora_id'; 

    protected $fillable = [
        'admin_id',
        'nama_flora',
        'nama_latin',
        'habitat',
        'status_konservasi',
        'gambar_flora',
        'deskripsi_flora',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
