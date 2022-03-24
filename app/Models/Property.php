<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['qr_code'];

    // public function images(){
    //     return $this->morphToMany(Image::class , 'imageable');
    // }


    public function getQrCodeAttribute() {
        $qr= QrCode::size(200)->generate('W3Adda dsLaravel Tutorial');
        // dd($qr);
        // return 'hello';
        return $qr;
    }

    
}
