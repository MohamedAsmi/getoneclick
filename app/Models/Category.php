<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const ISACTIVE = "Active";
    const ISDEACTIVE = "DEACTIVE";

    public static function name($id)
    {
        $model = self::find($id);
        return $model->name; 
    }

    public static function status($id)
    {
        if($id == 1){
            return self::ISACTIVE;
        }else{
            return self::ISDEACTIVE;
        }
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'cat_id');
    }
    
}
