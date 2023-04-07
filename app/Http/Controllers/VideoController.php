<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return response()->json(compact('videos'));
    }


    public function show(Video $video)
    {
        return response()->json(compact('video'));
    }


    public function store(Request $request)
    {
        $video = new Video();
        $video->name = $request->name;
        $video->path = $request->path;
        $video->save();
        return response()->json(['message' => 'Video saved successfully'], 200);
    }


    public function update(Request $request, Video $video)
    {
        $video->name = $request->name;
        $video->path = $request->path;
        $video->update();
        return response()->json(['message' => 'Video updated successfully'], 200);
    }


    public function destroy(Video $video)
    {
        $video->delete();
        return response()->json(['message' => 'Video deleted successfully'], 200);
    }


    public function stream(Video $video)
    {

        $headers = [
            'Content-type' => 'video/mp4',
            // 'Content-Length' => filesize($video->path),
            'Content-Disposition' => 'inline; filename="' . $video->name . '"',
        ];

        return response()->stream(function () use ($video) {
            readfile( __DIR__ . "/../../../" . $video->path);
        }, 200, $headers);
    }
}
