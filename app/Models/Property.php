<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function images(){
    //     return $this->morphToMany(Image::class , 'imageable');
    // }

    
}
