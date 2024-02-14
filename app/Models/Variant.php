<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    public function product() {
        return $this->belongsTo(Product::class);
    }


    public function size() {
        return $this->belongsTo(Size::class);
    }

    public function color() {
        return $this->belongsTo(Color::class);
    }



    public function cart() {
        return $this->hasMany(Cart::class);
    }

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        // Predpokladajme, že 'image' je stĺpec v tabuľke 'variants' kde je uložený názov obrázku
        // Táto metóda vytvorí celú cestu k obrázku
        return asset('images/' . $this->image);
    }



}
