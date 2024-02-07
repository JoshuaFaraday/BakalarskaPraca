<?php

namespace App\Models;

use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderVariant extends Model
{
    use HasFactory;
    protected $table = 'orders_variants';
    public $timestamps = false;

    public function variants() {
        return $this->belongsToMany(Variant::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

}
