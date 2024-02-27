<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    const ISACTIVE = "Active";
    const ISDEACTIVE = "DEACTIVE";

    public static function status($id)
    {
        if($id == 1){
            return self::ISACTIVE;
        }else{
            return self::ISDEACTIVE;
        }
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
