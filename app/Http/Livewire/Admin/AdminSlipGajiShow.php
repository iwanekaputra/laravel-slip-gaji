<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminSlipGajiShow extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-slip-gaji-show')->extends('layouts.admin');
    }
}
