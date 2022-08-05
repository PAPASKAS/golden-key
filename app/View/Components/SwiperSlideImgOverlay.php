<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SwiperSlideImgOverlay extends Component
{
    public $title;
    public $description;
    public $imgUri;

    public function __construct(string $title, string $description, string $imgUri)
    {
        $this->title = $title;
        $this->description = $description;
        $this->imgUri = $imgUri;
    }

    // @return \Illuminate\Contracts\View\View|\Closure|string
    public function render()
    {
        return view('components.swiper-slide-img-overlay');
    }
}
