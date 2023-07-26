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
        'moveToIndex',
        'redirectIndex'
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

    public function sendWa() {

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Success Kirim Ke Wa',
            'text' => '',
            'timer' => 1000,
            'action' => 'redirectIndex'
        ]);

    }

    public function redirectIndex() {
        $slipSalaries = SlipSalary::whereMonth('created_at', $this->month ?? '07')->latest()->get();


        foreach($slipSalaries as $slipSalary) {
            $curl = curl_init();
            $token = "JR4rxGLIeUp3OnoKytualp16oJSPyR1sPgzykPIg60nLn3xGiyfPEy1uKSfh5ODt";
            $data = [
            'phone' => $slipSalary->employee->nowa,
            'document' => asset('pdf/' . $slipSalary->file_pdf),
            'caption' => 'Assalamualaikum Wr.Wb.
                            Yth. Bapak/Ibu Pegawai Inspektorat Kabupaten Kuningan.
                            Mohon izin menyampaikan informasi rincian gaji (slip gaji) bulan juli tahun 2023 melalui media elektronik (Whatsapp personal).
                            Bagi Bapak/Ibu yang menghendaki untuk tetap diprint, bisa menghubungi bagian keuangan (Ibu Sri).
                            Demikian informasi yang dapat disampaikan, terimakasih atas perhatiannya.
                            Wassalamualaikum Wr. Wb.',
            ];
            curl_setopt($curl, CURLOPT_HTTPHEADER,
                array(
                    "Authorization: $token",
                )
            );
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curl, CURLOPT_URL,  "https://solo.wablas.com/api/send-document");
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

            $result = curl_exec($curl);
            curl_close($curl);
            echo "<pre>";
            print_r($result);
        }



        return redirect()->route('admin.slip-gaji');
    }

    public function render()
    {
        return view('livewire.admin.admin-slip-gaji', [
            'slipSalaries' => SlipSalary::whereMonth('created_at', $this->month ?? '07')->latest()->paginate(10)
        ])->extends('layouts.admin');
    }
}
