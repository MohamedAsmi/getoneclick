<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    const ISACTIVE = "Active";
    const ISDEACTIVE = "DEACTIVE";


    public static function findByName($filname)
    {
        return self::where('path',$filname)->count();
    }

    public static function status($id)
    {
        if($id == 1){
            return self::ISACTIVE;
        }else{
            return self::ISDEACTIVE;
        }
    }
}
