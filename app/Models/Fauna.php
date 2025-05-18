<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fauna extends Model
{

    protected $primaryKey = 'fauna_id'; // Karena primary key kita custom

    protected $fillable = [
        'admin_id',
        'nama_fauna',
        'nama_latin',
        'habitat',
        'status_konservasi',
        'gambar_fauna',
        'deskripsi_fauna',
    ];

    // Set relasi Fauna ➔ belongsTo Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
