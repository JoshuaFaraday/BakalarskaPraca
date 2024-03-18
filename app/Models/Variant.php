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

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('images/' . $this->image);
    }

}
