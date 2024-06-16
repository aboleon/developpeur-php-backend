<?php

namespace App\View\Components;

use App\Models\Forms;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Form extends Component
{
    public function __construct(
        public string $form,
        public string $label = '',
        public string $btn = ''
    )
    {
        //
    }

    public function render(): ?Renderable
    {
        return $this->form ? view('components.form') : null;
    }
}
