<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class MultipleUploadsTest extends Component implements HasForms
{
    use InteractsWithForms;

    public $test;

    public function render()
    {
        return view('livewire.multiple-uploads-test');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\MultipleFileUpload::make('test'),
        ];
    }
}
