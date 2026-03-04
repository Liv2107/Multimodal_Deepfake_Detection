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
            <main class="flex max-w-[420px] w-full flex-col lg:max-w-2xl">
                <x-back_button />
                <div class="p-8 lg:p-12 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg w-full min-w-0">
                    <h1 class="mb-6 text-lg font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Input Video</h1>
                    <form action="pages/video" method="POST" class="flex flex-col gap-1 w-full min-w-0">
                        @csrf
                        <input type="file" name="video" accept="video/*" class="w-full min-h-[80px] p-3 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md file:mr-3 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-[#f5f5f4] dark:file:bg-[#2a2a28] file:text-[#1b1b18] dark:file:text-[#EDEDEC]">
                        <button type="submit" class="btn-content-type mt-3">Input Video</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>