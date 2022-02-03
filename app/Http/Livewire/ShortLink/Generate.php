<?php

namespace App\Http\Livewire\ShortLink;

use App\ShortLink\Actions\GenerateLink;
use Illuminate\View\View;
use Livewire\Component;

class Generate extends Component
{
    public $link;
    public $shortLink;

    protected array $rules = [
        'link' => ['required', 'url'],
    ];

    public function render(): View
    {
        return view('livewire.short-link.generate');
    }

    public function submit(): void
    {
        $this->validate();

        $this->shortLink = (new GenerateLink($this->link))->link();
    }
}
