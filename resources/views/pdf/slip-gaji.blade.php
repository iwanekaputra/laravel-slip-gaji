<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <link rel="stylesheet" href="{{ public_path('bootstrap/css/bootstrap.min.css') }}">
    <style>
        * {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div style="width: 70%; margin : 0 auto">
        <div class="row">
            <h2>SLIP GAJI <i style="float: right; font-weight: normal;
                ">Agustus 2023</i></h2>
        </div>
        <div class="row bg-danger">
            <table class="mt-3">
                <tr style="width: 25%;">
                    <th rowspan="4">
                    <img src="{{ public_path('images/logo.png') }}" alt="" width="120">
                    </th>
                    <th>INSPEKTORAT KABUPATEN KUNINGAN</th>
                </tr>
                <tr>
                    <td>Jl. RE. Martadinata No. 78 Cijoho</td>
                </tr>
                <tr>
                    <td>Telp. (0232) 871643</td>
                </tr>
                <tr>
                    <td>KUNINGAN 45513</td>
                </tr>

        </div>
        <div style="border: 2px solid black"></div>

        <div class="row mb-2">
            <table class="mt-3">
                <tr>
                    <td style="width: 30%">
                        Nama
                    </td>
                    <td style="width: 2%">:</td>
                    <th>{{ $slip->employee->nama }}</th>
                </tr>
                <tr>
                    <td style="width: 20%">
                        NIP
                    </td>
                    <td style="width: 2%">:</td>
                    <td>{{ $slip->employee->nip }}</td>
                </tr>
                <tr>
                    <td style="width: 20%">
                        NPWP
                    </td>
                    <td style="width: 2%">:</td>
                    <td>{{ $slip->employee->npwp }}</td>
                </tr>
                <tr>
                    <td style="width: 20%">
                        Jabatan
                    </td>
                    <td style="width: 2%">:</td>
                    <td>{{ $slip->employee->jabatan }}</td>
                </tr>
            </table>
        </div>
        <div style="border: 1px solid black"></div>
        <div class="row">
            <table>
                <tr>
                    <th>I. PENDAPATAN</th>
                    <th style="text-align: right">Rp. {{ number_format($slip->employee->pendapatan, 0, ',','.') }}</th>
                </tr>
            </table>
            <div style="border: 2px solid black"></div>
        </div>
        <div class="row mt-3">
            <div style="border: 2px solid black"></div>

            <table>
                <tr>
                    <th>II. POTONGAN-POTONGAN</th>
                    {{-- <th style="text-align: right">Rp. 7.425.400,00</th> --}}
                </tr>
            </table>
            <div style="border: 2px solid black"></div>
            <table >
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Bank BJB</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->bank_bjb != '-' ? number_format($slip->bank_bjb, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- UKAN KORPRI</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->ukan_korpri != '-' ?  number_format((int) $slip->ukan_korpri, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Iuran Korpri</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->iuran_korpri != '-' ? number_format((int) $slip->iuran_korpri, 0, ',', '.') : '-'}}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- BJB Syariah</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->bjb_syariah != '-' ? number_format((int) $slip->bjb_syariah, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Simp Kop Insp</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->simp_kop_insp != '-' ? number_format((int) $slip->simp_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- SHR Kop Insp</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->shr_kop_insp != '-' ? number_format((int) $slip->shr_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Potongan Kop Insp</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->potongan_kop_insp != '-' ? number_format((int) $slip->potongan_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Arisan Kop Insp</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->arisan_kop_insp != '-' ? number_format((int) $slip->arisan_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Simp Kokar</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->simp_kokar != '-' ? number_format((int) $slip->simp_kokar, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Koperasi Ciremai</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->koperasi_ciremai != '-' ? number_format((int) $slip->koperasi_ciremai, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Arisan Dharma Wanita</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->arisan_dharma_wanita != '-' ? number_format((int) $slip->arisan_dharma_wanita, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Iuran Dharma Wanita</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->iuran_dharma_wanita != '-' ?  number_format((int) $slip->iuran_dharma_wanita, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Rereongan Sarupi</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->rereongan_sarupi != '-' ? number_format((int) $slip->rereongan_sarupi, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- ZAKAT/INFAK</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->zakat_infak != '-' ? number_format((int) $slip->zakat_infak, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Konsumsi</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->konsumsi != '-' ? number_format((int) $slip->konsumsi, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- BTN</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->btn != '-' ? number_format((int) $slip->btn, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Zakat Fitrah</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->zakat_fitrah != '-' ? number_format((int) $slip->zakat_fitrah, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Dana Pendidikan&PMI</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->dana_pendidikan_dan_pmi != '-' ? number_format((int) $slip->dana_pendidikan_dan_pmi, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- BPR Kuningan</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->bpr_kuningan != '-' ? number_format((int) $slip->bpr_kuningan, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- SHR KOKAR</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->shr_kokar != '-' ? number_format((int) $slip->shr_kokar, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Potongan KOKAR</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->potongan_kokar != '-' ? number_format((int) $slip->potongan_kokar, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%">- Ang Barang Koperasi</td>
                    <td style="width : 20%">Rp</td>
                    <td>{{ $slip->ang_barang_koperasi != '-' ? number_format((int) $slip->ang_barang_koperasi, 0, ',', '.') : '-' }}</td>
                </tr>
            </table>
            <div style="border : 1px solid  black"></div>
            <table>
                <tr>
                    <th>JUMLAH POTONGAN</th>
                    <th style="text-align: right">Rp   {{ number_format($slip->jumlah_potongan, 0, ',', '.') }}</th>
                </tr>
            </table>
            <div style="border : 1px solid  black"></div>

        </div>

        <div class="row mt-4">
            <table>
                <tr>
                    <th>GAJI BERSIH KE REKENING</th>
                    <th class="text-end"  style="border : 2px solid black; width : 20%">Rp. {{ number_format($slip->gaji_bersih, 0, ',', '.') }}</th>
                </tr>
            </table>
        </div>

        <div style="float: right" class="mt-3 me-5">
            <div class="row mt-5">
                <p class="">Bendahara,        <span></span></p>
            </div>
            <div class="row mt-5">
                <p class="text-center fw-bold"><u>Nuraeni, A.Ma.</u></p>
            </div>
        </div>

    </div>


<script src="{{ public_path("bootstrap/js/bootstrap.min.js") }}"></script>
</body>
</html>
