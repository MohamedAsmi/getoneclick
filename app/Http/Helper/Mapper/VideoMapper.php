<?php 
namespace App\Http\Helper\Mapper;

use App\Models\Upload;
use App\Models\Video;
use Google\Service\ServiceControl\Auth;

class VideoMapper{

    public static function map($request,$filename=null,$isUpdate=false): Video
    {
        if ($isUpdate) {
            $existingProject = video::find($request->id);
            $video = $existingProject ?? new video();
        } else {
            $video = new video();
        }
   
        $video->name = $request->name ?? $video->name;
        $video->page_id = $request->page_id ?? $video->page_id;
        $video->path = $filename ?? $video->path;
        $video->type = $request->type ?? $video->type;
        $video->status = $request->status ?? $video->status;
        return $video;
    }
}