<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithPagination;

class SystemImages extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name;

    public function render()
    {

        $images  = Image::where("name", "like", "%$this->name%")->latest()->paginate(10);
        return view('livewire.system-images', ["images" => $images]);
    }
}
