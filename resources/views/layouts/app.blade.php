<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#0A6DFF">
        <title>{{ isset($title) ? $title.' — Luvia' : 'Dashboard — Luvia' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>[x-cloak]{display:none!important}</style>
    </head>
    <body class="bg-slate-50">
        <div class="min-h-screen">
            @include('layouts.navigation')

            @isset($header)
                <header class="border-b border-slate-200 bg-white">
                    <div class="section-shell py-6">{{ $header }}</div>
                </header>
            @endisset

            <main>{{ $slot }}</main>
        </div>
    </body>
</html>
