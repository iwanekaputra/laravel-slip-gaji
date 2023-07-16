<?php

namespace App\Http\Livewire\Admin;

use App\Models\SlipSalary;
use Livewire\Component;

class AdminSlipGaji extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-slip-gaji', [
            'slipSalaries' => SlipSalary::latest()->paginate(10)
        ])->extends('layouts.admin');
    }
}
