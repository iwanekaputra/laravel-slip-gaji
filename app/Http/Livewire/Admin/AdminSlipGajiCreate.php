<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\SlipSalary;
use App\Models\User;
use Livewire\Component;
use PDF;
class AdminSlipGajiCreate extends Component
{

    public $nama, $nip, $npwp, $jabatan, $pendapatan;
    public $bank_bjb, $ukan_korpri, $iuran_korpri, $bjb_syariah, $simp_kop_insp, $shr_kop_insp, $potongan_kop_insp, $arisan_kop_insp, $simp_kokar, $koperasi_ciremai, $arisan_dharma_wanita, $iuran_dharma_wanita, $reroangan_sarupi, $zakat_infak, $konsumsi, $btn, $zakat_fitrah, $dana_pendidikan_dan_pmi, $bpr_kuningan, $shr_kokar, $potongan_kokar, $ang_barang_koperasi;

    protected $rules = [
        'nama' => 'required',
        'nip' => 'required',
        'npwp' => 'required',
        'jabatan' => 'required',
        'pendapatan' => 'required',
    ];

    public function store() {
        $this->validate();

        $checkEmployee = Employee::where('nama', $this->nama)->count();

        if($checkEmployee) {
            $employee = Employee::create([
                'nama' => $this->nama,
                'nip' => $this->nip,
                'npwp' => $this->npwp,
                'jabatan' => $this->jabatan,
                'pendapatan' => $this->pendapatan
            ]);

            SlipSalary::create([
                'employee_id' => $employee->id,
                'bank_bjb' => $this->bank_bjb,
                'ukan_korpri' => $this->ukan_korpri,
                'iuran_korpri' => $this->iuran_korpri,
                'bjb_syariah' => $this->bjb_syariah,
                'simp_kop_insp' => $this->simp_kop_insp,
                'shr_kop_insp' => $this->shr_kop_insp,
                'potongan_kop_insp' => $this->potongan_kop_insp,
                'arisan_kop_insp' => $this->arisan_kop_insp,
                'simp_kokar' => $this->simp_kokar,
                'koperasi_ciremai' => $this->koperasi_ciremai,
                'arisan_dharma_wanita' => $this->arisan_dharma_wanita,
                'iuran_dharma_wanita' => $this->iuran_dharma_wanita,
                'rereongan_sarupi' => $this->rereongan_sarupi,
                'zakat_infak' => $this->zakat_infak,
                'konsumsi' => $this->konsumsi,
                'btn' => $this->btn,
                'zakat_fitrah' => $this->zakat_fitrah,
                'dana_pendidikan_dan_pmi' => $this->dana_pendidikan_dan_pmi,
                'bpr_kuningan' => $this->bpr_kuningan,
                'shr_kokar' => $this->shr_kokar,
                'potongan_kokar' => $this->potongan_kokar,
                'ang_barang_koperasi' => $this->ang_barang_koperasi
            ]);

            return redirect()->route('admin.slip-gaji');

        }
    }

    public function export() {
        $data = ['pke'];
        // $pdf = PDF::loadView('pdf.slip-gaji', $data)->save(time(). '.pdf');
        $pdf = PDF::loadView('pdf.slip-gaji', $data);

        return redirect()->route('tes');
    }

    public function render()
    {
        return view('livewire.admin.admin-slip-gaji-create')->extends('layouts.admin');
    }
}
