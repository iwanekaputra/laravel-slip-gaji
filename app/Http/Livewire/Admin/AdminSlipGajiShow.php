<?php

namespace App\Http\Livewire\Admin;

use App\Models\SlipSalary;
use Livewire\Component;

class AdminSlipGajiShow extends Component
{

    public $slipSalary;

    public function mount(SlipSalary $slipSalary)
    {
        $this->slipSalary = $slipSalary;
    }

    public function render()
    {
        return view('livewire.admin.admin-slip-gaji-show')->extends('layouts.admin');
    }
}
