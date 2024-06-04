<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id', 'qty', 'total_price'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'item_id');
    }
}
