<?php

namespace G3ru1a\LivewireUIComponents\Livewire\Form;

use Livewire\Component;

class PlainInput extends Component
{
    public string $border_style, $focus_ring, $configured_style, $shadow_style;
    public ?bool $border = null, $outline = null, $shadow = null;
    public ?string $style = null;
    public ?string $error = null;
    public ?string $warn = null;
    public ?string $success = null;

    public string $name = 'name';

    public function mount(){
        $border_check = $this->border ?? config('lwc.border');
        $outline_check = $this->outline ?? config('lwc.focus-outline');
        $shadow_check = $this->shadow ?? config('lwc.shadow');
        $this->border_style = $border_check ? 'bordered' : 'borderless';
        $this->shadow_style = $shadow_check ? 'shadowed' : '';
        $this->focus_ring = $outline_check ? '' : 'no-focus-outline';
        $this->configured_style = $this->style == null ? config('lwc.style') : $this->style;
    }

    public function render()
    {
        return view('lwc-views::form.plain-input', [
            'error_style' => $this->error ? 'error': '',
            'warn_style' => $this->warn ? 'warn': '',
            'success_style' => $this->success ? 'success': '',
        ]);
    }
}
