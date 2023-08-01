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

    /*tr, td {*/
    /*        width : 500px;*/
    /*    }*/
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
                    <img src="https://inspektoratkuningan.onlinein.my.id/images/logo.png" alt="" width="120">
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
                    <td style="width: 100px;">
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
                    <th style="text-align: right; width : 370px">Rp. {{ number_format($slip->employee->pendapatan, 0, ',','.') }}</th>
                </tr>
            </table>
            <div style="border: 2px solid black"></div>
        </div>
        <div class="row" style="margin-top : 15px;">
            <div style="border: 2px solid black"></div>

            <table>
                <tr>
                    <th>II. POTONGAN-POTONGAN</th>
                    {{-- <th style="text-align: right">Rp. 7.425.400,00</th> --}}
                </tr>
            </table>
            <div style="border: 2px solid black"></div>
            <table >
                <tr style="border : 1px dashed black">
                    <td style="width : 300px; border-bottom : 1px dashed black;">- Bank BJB</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="width : 160px; border-bottom : 1px dashed black;">{{ $slip->bank_bjb != '-' ? number_format($slip->bank_bjb, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- UKAN KORPRI</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->ukan_korpri != '-' ?  number_format((int) $slip->ukan_korpri, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Iuran Korpri</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->iuran_korpri != '-' ? number_format((int) $slip->iuran_korpri, 0, ',', '.') : '-'}}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- BJB Syariah</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->bjb_syariah != '-' ? number_format((int) $slip->bjb_syariah, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Simp Kop Insp</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->simp_kop_insp != '-' ? number_format((int) $slip->simp_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%"; border-bottom : 1px dashed black;>- SHR Kop Insp</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->shr_kop_insp != '-' ? number_format((int) $slip->shr_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Potongan Kop Insp</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->potongan_kop_insp != '-' ? number_format((int) $slip->potongan_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Arisan Kop Insp</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->arisan_kop_insp != '-' ? number_format((int) $slip->arisan_kop_insp, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Simp Kokar</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->simp_kokar != '-' ? number_format((int) $slip->simp_kokar, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Koperasi Ciremai</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->koperasi_ciremai != '-' ? number_format((int) $slip->koperasi_ciremai, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Arisan Dharma Wanita</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->arisan_dharma_wanita != '-' ? number_format((int) $slip->arisan_dharma_wanita, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Iuran Dharma Wanita</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->iuran_dharma_wanita != '-' ?  number_format((int) $slip->iuran_dharma_wanita, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Rereongan Sarupi</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->rereongan_sarupi != '-' ? number_format((int) $slip->rereongan_sarupi, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- ZAKAT/INFAK</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->zakat_infak != '-' ? number_format((int) $slip->zakat_infak, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Konsumsi</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->konsumsi != '-' ? number_format((int) $slip->konsumsi, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- BTN</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->btn != '-' ? number_format((int) $slip->btn, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Zakat Fitrah</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->zakat_fitrah != '-' ? number_format((int) $slip->zakat_fitrah, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Dana Pendidikan&PMI</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->dana_pendidikan_dan_pmi != '-' ? number_format((int) $slip->dana_pendidikan_dan_pmi, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- BPR Kuningan</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->bpr_kuningan != '-' ? number_format((int) $slip->bpr_kuningan, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- SHR KOKAR</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->shr_kokar != '-' ? number_format((int) $slip->shr_kokar, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Potongan KOKAR</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->potongan_kokar != '-' ? number_format((int) $slip->potongan_kokar, 0, ',', '.') : '-' }}</td>
                </tr>
                <tr style="border-bottom : 1px dashed black">
                    <td style="width : 50%; border-bottom : 1px dashed black;">- Ang Barang Koperasi</td>
                    <td style="width : 20%; border-bottom : 1px dashed black;">Rp</td>
                    <td style="border-bottom : 1px dashed black;">{{ $slip->ang_barang_koperasi != '-' ? number_format((int) $slip->ang_barang_koperasi, 0, ',', '.') : '-' }}</td>
                </tr>
            </table>
            <div style="border : 1px solid  black"></div>
            <table>
                <tr>
                    <th >JUMLAH POTONGAN</th>
                    <th style="width : 330px; text-align : right;">Rp   {{ number_format($slip->jumlah_potongan, 0, ',', '.') }}</th>
                </tr>
            </table>
            <div style="border : 1px solid  black"></div>

        </div>

        <div class="row" style="margin-top : 20px">
            <table>
                <tr>
                    <th style="width : 200px">GAJI BERSIH KE REKENING</th>
                    <th style=" width : 270px; text-align : right;">Rp. {{ number_format($slip->gaji_bersih, 0, ',', '.') }}</th>
                </tr>
            </table>
        </div>

        <div style="float: right; margin-top :20px;" class="mt-3 me-5" >
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
