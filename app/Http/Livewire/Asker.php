<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use stdClass;

class Asker extends Component
{
    public $elements = [];

    public $title = '';

    public $query = '';

    public function addToDashboard()
    {
        $this->validate();

        $item['title'] = $this->title;

        $item['result'] = DB::ask($this->query);
        // $item['result'] = DB::select(DB::askForQuery($this->query));

        $this->elements[] = $item;

        $this->resetExcept('elements');
    }

    public function render()
    {
        return view('livewire.asker');
    }

    protected function rules()
    {
        return [
            'title' => ['required'],
            'query' => ['required'],
        ];
    }
}
