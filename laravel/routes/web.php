<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages/text', function () {
    return view('pages.text');
});
Route::post('pages/text', function () {
    $text = request('text');
    $textModel = Text::create([
        'text' => $text,
    ]);
    return redirect()->route('pages.text', $textModel->id);
});
Route::get('pages/image', function () {
    return view('pages.image');
});
Route::post('pages/image', function () {
    $image = request('image');
    $imageModel = Image::create([
        'image' => $image,
    ]);
    return redirect()->route('pages.image', $imageModel->id);
});
Route::get('pages/audio', function () {
    return view('pages.audio');
});
Route::post('pages/audio', function () {
    $audio = request('audio');
    $audioModel = Audio::create([
        'audio' => $audio,
    ]);
    return redirect()->route('pages.audio', $audioModel->id);
});
Route::get('pages/video', function () {
    return view('pages.video');
});
Route::post('pages/video', function () {
    $video = request('video');
    $videoModel = Video::create([
        'video' => $video,
    ]);
    return redirect()->route('pages.video', $videoModel->id);
});
Route::get('pages/video_audio', function () {
    return view('pages.video_audio');
});
Route::post('pages/video_audio', function () {
    $video = request('video');
    $audio = request('audio');
    $videoAudioModel = VideoAudio::create([
        'video' => $video,
        'audio' => $audio,
    ]);
    return redirect()->route('pages.video_audio', $videoAudioModel->id);
});
Route::get('pages/video_audio_text', function () {
    return view('pages.video_audio_text');
});
Route::post('pages/video_audio_text', function () {
    $video = request('video');
    $audio = request('audio');
    $text = request('text');
    $videoAudioTextModel = VideoAudioText::create([
        'video' => $video,
        'audio' => $audio,
        'text' => $text,
    ]);
    return redirect()->route('pages.video_audio_text', $videoAudioTextModel->id);
});