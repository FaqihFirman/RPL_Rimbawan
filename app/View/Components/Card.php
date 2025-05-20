<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $namaUmum;
    public $namaLatin;
    public $imageUrl;
    

    public function __construct($namaUmum, $namaLatin, $imageUrl)
    {
        $this->namaUmum = $namaUmum;
        $this->namaLatin = $namaLatin;      
        $this->imageUrl = $imageUrl;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }

}
