<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\SlipSalary;
use Livewire\Component;
use PDF;

class AdminSlipGajiEdit extends Component
{
    public $employee_id, $nama, $nip, $npwp, $jabatan, $pendapatan, $nowa;
    public $slipSalary_id, $bank_bjb, $ukan_korpri, $iuran_korpri, $bjb_syariah, $simp_kop_insp, $shr_kop_insp, $potongan_kop_insp, $arisan_kop_insp, $simp_kokar, $koperasi_ciremai, $arisan_dharma_wanita, $iuran_dharma_wanita, $rereongan_sarupi, $zakat_infak, $konsumsi, $btn, $zakat_fitrah, $dana_pendidikan_dan_pmi, $bpr_kuningan, $shr_kokar, $potongan_kokar, $ang_barang_koperasi;

    protected $rules = [
        'nama' => 'required',
        'nip' => 'required',
        'npwp' => 'required',
        'jabatan' => 'required',
        'pendapatan' => 'required',
        'nowa' => 'required'
    ];

    public function mount(SlipSalary $slipSalary) {


        $this->employee_id = $slipSalary->employee->id;
        $this->nama = $slipSalary->employee->nama;
        $this->nip = $slipSalary->employee->nip;
        $this->npwp = $slipSalary->employee->npwp;
        $this->jabatan = $slipSalary->employee->jabatan;
        $this->pendapatan = $slipSalary->employee->pendapatan;
        $this->nowa = $slipSalary->employee->nowa;

        $this->slipSalary_id = $slipSalary->id;
        $this->bank_bjb = $slipSalary->bank_bjb;
        $this->ukan_korpri = $slipSalary->ukan_korpri;
        $this->iuran_korpri = $slipSalary->iuran_korpri;
        $this->bjb_syariah = $slipSalary->bjb_syariah;
        $this->simp_kop_insp = $slipSalary->simp_kop_insp;
        $this->shr_kop_insp = $slipSalary->shr_kop_insp;
        $this->potongan_kop_insp = $slipSalary->potongan_kop_insp;
        $this->arisan_kop_insp = $slipSalary->arisan_kop_insp;
        $this->simp_kokar = $slipSalary->simp_kokar;
        $this->koperasi_ciremai = $slipSalary->koperasi_ciremai;
        $this->arisan_dharma_wanita = $slipSalary->arisan_dharma_wanita;
        $this->iuran_dharma_wanita = $slipSalary->iuran_dharma_wanita;
        $this->rereongan_sarupi = $slipSalary->rereongan_sarupi;
        $this->zakat_infak = $slipSalary->zakat_infak;
        $this->konsumsi = $slipSalary->konsumsi;
        $this->btn = $slipSalary->btn ;
        $this->zakat_fitrah = $slipSalary->zakat_fitrah ;
        $this->dana_pendidikan_dan_pmi = $slipSalary->dana_pendidikan_dan_pmi ;
        $this->bpr_kuningan = $slipSalary->bpr_kuningan ;
        $this->shr_kokar = $slipSalary->shr_kokar ;
        $this->potongan_kokar = $slipSalary->potongan_kokar ;
        $this->ang_barang_koperasi = $slipSalary->ang_barang_koperasi ;
    }

    public function update() {
        $this->validate();

        $employee = Employee::find($this->employee_id);

        // update employee
        $employee->update([
            'nama' => $this->nama,
            'nip' => $this->nip,
            'npwp' => $this->npwp,
            'jabatan' => $this->jabatan,
            'pendapatan' => $this->pendapatan,
            'nowa' => $this->nowa
        ]);

        $jumlah_potongan = (int) $this->bank_bjb + (int) $this->ukan_korpri + (int) $this->iuran_korpri + (int) $this->bjb_syariah + (int) $this->simp_kop_insp + (int) $this->shr_kop_insp + (int) $this->potongan_kop_insp + (int) $this->arisan_kop_insp + (int) $this->simp_kokar + (int) $this->koperasi_ciremai + (int) $this->arisan_dharma_wanita + (int) $this->iuran_dharma_wanita + (int) $this->rereongan_sarupi + (int) $this->zakat_infak + (int) $this->konsumsi + (int) $this->btn + (int) $this->zakat_fitrah + (int) $this->dana_pendidikan_dan_pmi + (int) $this->bpr_kuningan + (int) $this->shr_kokar + (int) $this->potongan_kokar + (int) $this->ang_barang_koperasi;

        $slipSalary = SlipSalary::find($this->slipSalary_id);

        $slipSalary->update([
            'employee_id' => $employee->id,
            'jumlah_potongan' => $jumlah_potongan,
            'gaji_bersih' => (int) $this->pendapatan - (int) $jumlah_potongan,
            'bank_bjb' => $this->bank_bjb ?? '-',
            'ukan_korpri' => $this->ukan_korpri ?? '-',
            'iuran_korpri' => $this->iuran_korpri ?? '-',
            'bjb_syariah' => $this->bjb_syariah ?? '-',
            'simp_kop_insp' => $this->simp_kop_insp ?? '-',
            'shr_kop_insp' => $this->shr_kop_insp ?? '-',
            'potongan_kop_insp' => $this->potongan_kop_insp ?? '-' ,
            'arisan_kop_insp' => $this->arisan_kop_insp ?? '-',
            'simp_kokar' => $this->simp_kokar ?? '-',
            'koperasi_ciremai' => $this->koperasi_ciremai ?? '-',
            'arisan_dharma_wanita' => $this->arisan_dharma_wanita ?? '-',
            'iuran_dharma_wanita' => $this->iuran_dharma_wanita  ?? '-',
            'rereongan_sarupi' => $this->rereongan_sarupi  ?? '-',
            'zakat_infak' => $this->zakat_infak  ?? '-',
            'konsumsi' => $this->konsumsi  ?? '-',
            'btn' => $this->btn  ?? '-',
            'zakat_fitrah' => $this->zakat_fitrah  ?? '-',
            'dana_pendidikan_dan_pmi' => $this->dana_pendidikan_dan_pmi  ?? '-',
            'bpr_kuningan' => $this->bpr_kuningan  ?? '-',
            'shr_kokar' => $this->shr_kokar  ?? '-',
            'potongan_kokar' => $this->potongan_kokar  ?? '-',
            'ang_barang_koperasi' => $this->ang_barang_koperasi ?? '-'
        ]);

        $pdf = PDF::loadView('pdf.slip-gaji', ['slip' => $slipSalary]);
        $namePdf = time() .'.pdf';
        $pdf->save('pdf/' . $namePdf);

        $slipSalary->update([
            'file_pdf' => $namePdf
        ]);

        return redirect()->route('admin.slip-gaji');
    }

    public function render()
    {
        return view('livewire.admin.admin-slip-gaji-edit')->extends('layouts.admin');
    }
}
