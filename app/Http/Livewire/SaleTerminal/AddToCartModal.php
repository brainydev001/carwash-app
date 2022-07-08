<?php

namespace App\Http\Livewire\SaleTerminal;

use Livewire\Component;
use App\Models\Price;

class AddToCartModal extends Component
{
    public $service;

    // array of selected tags (checked checkboxes)
    public $selectedBodyType = [];

    // get just the id and body type of each servie selected
    public function getItems()
    {
        return Price::select('id', 'body_type_id')->get();
    }

    public function getPostsProperty()
    {
        $tags = array_filter($this->selectedTags);

        // if no tags are selected, return all posts
        // you might decide to return nothing, up to you
        if (!$tags) {
            return Post::all();
        }

        // if there are some selected tags
        // query the database for posts with the selectedTags
        // this is an `OR` operation on tags
        // if you want `AND` you'll need to change it
        return Post::whereHas('tags', function ($query) use ($tags) {
            $query->whereIn('tags.id', $tags);
        })->get();
    }

    public function render()
    {
        return view('livewire.sale-terminal.add-to-cart-modal');
    }
}
