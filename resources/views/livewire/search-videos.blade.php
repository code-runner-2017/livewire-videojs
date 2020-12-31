<div>
    <button wire:click="onSearch">Search</button>
    (sends an event to the server to return a new list, to leave things simple it's just shuffling the videos)

    <ul>
    @foreach($videos as $video)
        <li>
            <a href="javascript:void(0)" wire:click="onVideoSelection('{{$video}}')">
                Video {{$video}}
            </a>
        </li>
    @endforeach
    </ul>

    <div wire:ignore wire:key="player">
        <video id="my-player" class="video-js vjs-default-skin" width="640px" height="267px"
               controls preload="none">
            <source src="{{$currentVideo}}" type='video/mp4' />
        </video>
    </div>

    <script>
        Livewire.on('onVideoChanged', url => {
            setVideoSource(url);
        })
    </script>
</div>
