<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @filamentStyles

        @vite('resources/css/app.css')
    </head>
    <body>
        {{ $slot }}
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
    <script>
        window.ipcRenderer = require('electron').ipcRenderer
        document.addEventListener('livewire:navigated', () => {
            ipcRenderer.on('log', (event, { level, message, context }) => {
                const match = message.match(/Broadcasting \[(.+)\] on channels \[.*nativephp\]/);
                if (match) {
                    const eventName = match[1];
                    window.Livewire.dispatch(`native:${eventName}`);
                }
            })
        })
    </script>
</html>
