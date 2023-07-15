<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminSlipGaji extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-slip-gaji')->extends('layouts.admin');
    }
}
