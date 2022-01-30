<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubImage extends Model
{
    use HasFactory;

    protected $fillable=['product_id','image'];

    protected $guarded=[];
    protected static $subImage;
    protected static $imageName;
    protected static $imageDirectory;

    protected static function saveSubImage($subImageFile){
        if ($subImageFile){
                self::$imageName=rand(1,1000).time().'.'.$subImageFile->getClientOriginalExtension();
                self::$imageDirectory= 'product-sub-image/';
                $subImageFile->move(self::$imageDirectory, self::$imageName);
                return self::$imageDirectory.self::$imageName;
        }else{
            return '';
        }

    }

    public static function newSubImage($request, $product){
        if ($request->sub_image){
            foreach ($request->sub_image as $subImageFile){
                self::$subImage = new SubImage();
                self::$subImage->product_id = $product->id;
                self::$subImage->image = self::saveSubImage($subImageFile);
                self::$subImage->save();
            }
        }else{
            return '';
        }


    }


}
