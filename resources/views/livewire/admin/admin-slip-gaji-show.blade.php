<div>
    <div>
        <!-- Main Content -->
        <div class="main-content">
           <section class="section">
             <div class="section-header">
               <h1>Detail</h1>
             </div>

            <form wire:submit.prevent="store">
             <div class="section-body">
                 <div class="row">
                     <div class="card-body">
                        <hr>
                         <h3>Detail Karyawan</h3>
                        <div class="row mt-3">
                            <div class="col-lg-4 mb-3">
                                <h6>Nama</h6>
                                <p>{{ $slipSalary->employee->nama }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>No WA</h6>
                                <p>{{ $slipSalary->employee->nowa }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>NIP</h6>
                                <p>{{ $slipSalary->employee->nip }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>NPWP</h6>
                                <p>{{ $slipSalary->employee->npwp }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Jabatan</h6>
                                <p>{{ $slipSalary->employee->jabatan }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Pendapatan</h6>
                                <p>{{ $slipSalary->employee->pendapatan }}</p>
                            </div>
                        </div>
                        <hr>
                        <h3>Potongan</h3>
                        <div class="row mt-3">
                            <div class="col-lg-4 mb-3">
                                <h6>Bank BJB</h6>
                                <p>{{ $slipSalary->bank_bjb }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>UKAN KORPRI</h6>
                                <p>{{ $slipSalary->ukan_korpri }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Iuran Korpri</h6>
                                <p>{{ $slipSalary->iuran_korpri }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>BJB Syariah</h6>
                                <p>{{ $slipSalary->bjb_syariah }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Simp Kop Insp</h6>
                                <p>{{ $slipSalary->simp_kop_insp }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>SHR Kop Insp</h6>
                                <p>{{ $slipSalary->shr_kop_insp }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Potongan Kop Insp</h6>
                                <p>{{ $slipSalary->potongan_kop_insp }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Arisan Kop Insp</h6>
                                <p>{{ $slipSalary->arisan_kop_insp }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Simp Kokar</h6>
                                <p>{{ $slipSalary->simp_kokar }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Koperasi Ciremai</h6>
                                <p>{{ $slipSalary->koperasi_ciremai }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Arisan Dharma Wanita</h6>
                                <p>{{ $slipSalary->arisan_dharma_wanita }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Iuran Dharma Wanita</h6>
                                <p>{{ $slipSalary->iuran_dharma_wanita }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Rereongan Sarupi</h6>
                                <p>{{ $slipSalary->rereongan_sarupi }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>ZAKAT/INFAK</h6>
                                <p>{{ $slipSalary->zakat_infak }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Konsumsi</h6>
                                <p>{{ $slipSalary->konsumsi }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>BTN</h6>
                                <p>{{ $slipSalary->btn }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Zakat Fitrah</h6>
                                <p>{{ $slipSalary->zakat_fitrah }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Dana Pendidikan&PMI</h6>
                                <p>{{ $slipSalary->dana_pendidikan_dan_pmi }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>BPR Kuningan</h6>
                                <p>{{ $slipSalary->bpr_kuningan }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>SHR KOKAR</h6>
                                <p>{{ $slipSalary->shr_kokar }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Potongan KOKAR</h6>
                                <p>{{ $slipSalary->potongan_kokar }}</p>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <h6>Ang Barang Koperasi</h6>
                                <p>{{ $slipSalary->ang_barang_koperasi }}</p>
                            </div>
                        </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
            </form>
           </section>
        </div>
   </div>
</div>
