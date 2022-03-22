<?php
namespace App\Http\Traits;

trait ImageUpload {
    public function uploadMany($uploaded_files, $folder, $disk = null){
        
        $paths=[];
        foreach($uploaded_files as $uploaded_file){
            $paths[]=$this->uploadOne($uploaded_file, $folder, null, $disk);
        }
        return $paths;
    }
}