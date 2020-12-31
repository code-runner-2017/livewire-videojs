<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../node_modules/video.js/dist/video-js.min.css">

        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito';
                margin: 24px;
            }
        </style>
        <livewire:styles/>
        <livewire:scripts/>
    </head>
    <body class="antialiased">
        <h1>VideoJS</h1>

        <livewire:search-videos/>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="../node_modules/video.js/dist/video.min.js"></script>
        <script>
            var player;

            $(document).ready(function() {
                player = videojs('my-player', {
                    controls: true,
                    autoplay: false,
                    preload: 'auto'
                });
            });

            window.addEventListener('onVideoChanged', (event) => {
                setVideoSource(event.detail.url);
            });

            function setVideoSource(url) {
                console.log(url);
                player.pause();
                player.src( {
                    type: "video/mp4",
                    src: url
                });
                player.play();
            }
        </script>
    </body>
</html>
