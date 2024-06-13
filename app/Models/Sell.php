<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'cedula', 'id_product'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

}
