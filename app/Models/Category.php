<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function filters() {
        return $this->belongsToMany(Filter::class);
    }

    public function sizes() {
        return $this->belongsToMany(Size::class, 'category_size');
    }



    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    protected $appends = ['image_path']; // Pridajte toto, ak to už nie je pridané

    public function getImagePathAttribute()
    {
        if ($this->image) {
            // Vráti celú cestu k obrázku
            return asset('storage/images/' . $this->image); //obrázky sú v storage/app/public
        }

        return null; // alebo predvolenú cestu k obrázku, ak nie je obrázok
    }

}
