<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    use HasFactory;
    protected $fillable=['type', 'value', 'image'];

    public function getImagenAttribute()
    {
        if($this->image != null)
            return (file_exists('storage/monedas/' . $this->image) ? $this->image : 'noimg.png');
        else
        return 'noimg.png';
        /*if (file_exists('storage/monedas/' .$this->image))
            return $this->image;
            else
            return 'noimg.png';*/
    }
}
