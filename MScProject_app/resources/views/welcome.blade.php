<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Multimodal DeepFake Detection') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center justify-center min-h-screen">
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col lg:max-w-2xl">
                <div class="p-8 lg:p-12 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
                    <h1 class="mb-6 text-lg font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Input content type</h1>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="pages/text" class="btn-content-type">Text</a>
                        <a href="pages/image" class="btn-content-type">Image</a>
                        <a href="pages/audio" class="btn-content-type">Audio</a>
                        <a href="pages/video" class="btn-content-type">Video</a>
                        <a href="pages/video_audio" class="btn-content-type">Video + Audio</a>
                        <a href="pages/video_audio_text" class="btn-content-type">Video + Audio + Text</a>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
