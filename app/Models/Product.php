<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name', 'barcode', 'cost', 'price', 'stock', 'alerts', 'image','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImagenAttribute()
    {
        if ($this->image != null)
            return (file_exists('storage/productos/' . $this->image) ? $this->image : 'noimg.png');
        else
            return 'noimg.png';
        /*if (file_exists('storage/productos/' .$this->image))
            return $this->image;
            else
            return 'noimg.png';*/
    }
}
