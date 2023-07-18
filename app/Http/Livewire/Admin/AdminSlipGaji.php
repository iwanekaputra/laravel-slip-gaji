<?php

namespace App\Http\Livewire\Admin;

use App\Models\SlipSalary;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSlipGaji extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $date;
    public $slipSalary_id;
    public $month;

    protected $listeners = [
        'moveToIndex'
    ];

    public function delete($id) {
        $this->slipSalary_id = $id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => 'Apakah kamu yakin?',
            'text' => 'Jika kamu klik oke maka akan terhapus',
            'timer' => 3000,
            'action' => 'moveToIndex'
        ]);
    }

    public function moveToIndex() {
        $slipSalary = SlipSalary::find($this->slipSalary_id);
        $slipSalary->delete();
    }

    public function render()
    {
        return view('livewire.admin.admin-slip-gaji', [
            'slipSalaries' => SlipSalary::whereMonth('created_at', $this->month ?? '07')->latest()->paginate(1)
        ])->extends('layouts.admin');
    }
}
