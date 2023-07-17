<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\SlipSalary;
use App\Models\User;
use Livewire\Component;
use PDF;
class AdminSlipGajiCreate extends Component
{

    public $nama, $nip, $npwp, $jabatan, $pendapatan, $nowa;
    public $bank_bjb, $ukan_korpri, $iuran_korpri, $bjb_syariah, $simp_kop_insp, $shr_kop_insp, $potongan_kop_insp, $arisan_kop_insp, $simp_kokar, $koperasi_ciremai, $arisan_dharma_wanita, $iuran_dharma_wanita, $rereongan_sarupi, $zakat_infak, $konsumsi, $btn, $zakat_fitrah, $dana_pendidikan_dan_pmi, $bpr_kuningan, $shr_kokar, $potongan_kokar, $ang_barang_koperasi;

    protected $rules = [
        'nama' => 'required',
        'nip' => 'required',
        'npwp' => 'required',
        'jabatan' => 'required',
        'pendapatan' => 'required',
        'nowa' => 'required'
    ];

    public function store() {
        $this->validate();

        $checkEmployee = Employee::where('nama', $this->nama)->count();

        if(!$checkEmployee) {
            $employee = Employee::create([
                'nama' => $this->nama,
                'nip' => $this->nip,
                'npwp' => $this->npwp,
                'jabatan' => $this->jabatan,
                'pendapatan' => $this->pendapatan,
                'nowa' => $this->nowa
            ]);

            $jumlah_potongan = (int) $this->bank_bjb + (int) $this->ukan_korpri + (int) $this->iuran_korpri + (int) $this->bjb_syariah + (int) $this->simp_kop_insp + (int) $this->shr_kop_insp + (int) $this->potongan_kop_insp + (int) $this->arisan_kop_insp + (int) $this->simp_kokar + (int) $this->koperasi_ciremai + (int) $this->arisan_dharma_wanita + (int) $this->iuran_dharma_wanita + (int) $this->rereongan_sarupi + (int) $this->zakat_infak + (int) $this->konsumsi + (int) $this->btn + (int) $this->zakat_fitrah + (int) $this->dana_pendidikan_dan_pmi + (int) $this->bpr_kuningan + (int) $this->shr_kokar + (int) $this->potongan_kokar + (int) $this->ang_barang_koperasi;


            $slipSalary = SlipSalary::create([
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

            $data = SlipSalary::find($slipSalary->id);
            $pdf = PDF::loadView('pdf.slip-gaji', ['slip' => $data]);
            $namePdf = time() .'.pdf';
            $pdf->save('pdf/' . $namePdf);

            $data->update([
                'file_pdf' => $namePdf
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

    public function searchEmployee() {
        $employee = Employee::where('nama', 'like', "%" . $this->nama . "%")->first();
        $this->nama = $employee->nama;
        $this->nip = $employee->nip;
        $this->npwp = $employee->npwp;
        $this->jabatan = $employee->jabatan;
        $this->pendapatan = $employee->pendapatan;
    }

    public function render()
    {
        return view('livewire.admin.admin-slip-gaji-create')->extends('layouts.admin');
    }
}
