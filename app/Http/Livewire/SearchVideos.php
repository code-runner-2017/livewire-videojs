<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchVideos extends Component
{
    public $videos = [
        'https://vjs.zencdn.net/v/oceans.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/Sintel.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/SubaruOutbackOnStreetAndDirt.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/TearsOfSteel.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WeAreGoingOnBullrun.mp4',
    ];
    // public $currentVideo = 'https://vjs.zencdn.net/v/oceans.mp4';
    public $currentVideo = 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/VolkswagenGTIReview.mp4';

    public function render()
    {
        return view('livewire.search-videos');
    }

    public function onSearch() {
        shuffle($this->videos);
    }

    public function onVideoSelection($url) {
        $this->currentVideo = $url;
        // $this->dispatchBrowserEvent('onVideoChanged', ['url' => $this->currentVideo]);
        $this->emit('onVideoChanged', $this->currentVideo);
    }
}
