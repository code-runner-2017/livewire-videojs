<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Livewire with Video.js Example

In this example I'm using Video.js with Laravel Livewire.
The video component is inside a Livewire view (`search-video.blade.php`) and I'm using `wire:ignore`
to avoid that it's affected when the DOM changes.

Clicking on on the Search button, the component is updated with a shuffled list of videos (to keep things simple).
When clicking on a video URL, the information is sent to the server, that updates the current video, and an event
server -> client is sent using Livewire `emit()`. A listener in the Livewire component is changing the video URL.
