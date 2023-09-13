<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms;

class TestLW extends Component implements HasForms
{
    use InteractsWithForms;

    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\MarkdownEditor::make('content'),

        ];
    } 

    public function submit(): void
    {
    }
    

    public function render()
    {
        return view('livewire.test-l-w');
    }
}
