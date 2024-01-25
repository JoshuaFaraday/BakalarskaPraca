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

    public function variants() {
        return $this->belongsToMany(Variant::class);
    }

    public function cart() {
        return $this->hasMany(Cart::class);
    }



}
