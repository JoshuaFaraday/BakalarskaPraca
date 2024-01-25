<?php

namespace App\Models;

use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function variants() {
        return $this->belongsToMany(Variant::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

}
