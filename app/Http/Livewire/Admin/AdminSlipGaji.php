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
            $payload = [
                "data" => [
                    [
                        'phone' => $slipSalary->employee->nowa,
                        'document' => asset('pdf/' . $slipSalary->file_pdf),
                    ]
                ]
            ];
            curl_setopt($curl, CURLOPT_HTTPHEADER,
                array(
                    "Authorization: JR4rxGLIeUp3OnoKytualp16oJSPyR1sPgzykPIg60nLn3xGiyfPEy1uKSfh5ODt",
                    "Content-Type: application/json"
                )
            );
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
            curl_setopt($curl, CURLOPT_URL,  "https://solo.wablas.com/api/v2/send-document");
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

            $result = curl_exec($curl);
            curl_close($curl);
            echo "<pre>";
            print_r($result);


            $curl = curl_init();
            $data = [
            'phone' => $slipSalary->employee->nowa,
            'message' => 'Selamat pagi.. Berikut disampaikan slip gaji bulan juli. Terimakasih..',
            ];
            curl_setopt($curl, CURLOPT_HTTPHEADER,
                array(
                    "Authorization: JR4rxGLIeUp3OnoKytualp16oJSPyR1sPgzykPIg60nLn3xGiyfPEy1uKSfh5ODt",
                )
            );
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curl, CURLOPT_URL,  "https://solo.wablas.com/api/send-message");
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
