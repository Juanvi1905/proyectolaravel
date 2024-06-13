<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'valor',
        'cantidad',
    ];
    public function sells()
    {
        return $this->hasMany(Sell::class, 'id_product');
    }
}
