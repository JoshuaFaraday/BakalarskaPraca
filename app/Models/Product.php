<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function variants() {
        return $this->hasMany(Variant::class);
    }

    public function category() {
        return $this->hasMany(Category::class);
    }

    public function gender()
{
    return $this->belongsTo(Gender::class);
}

public function getImageAttribute()
    {
        // Predpokladajme, že každý variant má stĺpec 'image'.
        // Táto metóda vráti obrázok prvého variantu produktu alebo null, ak produkt nemá žiadne varianty.
        $variant = $this->variants->first();
        return $variant ? asset('images/' . $variant->image) : null;
    }



}
