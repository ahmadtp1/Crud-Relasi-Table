<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembeli';
    protected $guarded = ['id'];
    public function fproduk()
    {
        return $this->belongsTo(produk::class, 'produk', 'id');
    }
}
