<div>
    <div>
        <!-- Main Content -->
        <div class="main-content">
           <section class="section">
             <div class="section-header">
               <h1>Tambah Slip Gaji</h1>
             </div>

            <form wire:submit.prevent="store">
             <div class="section-body">
                 <div class="row">
                     <div class="card-body">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label>Nama</label>
                                    @error('nama')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="nama" wire:model="nama">
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="form-group">
                                    <label>Cari Pegawai</label>
                                    <button class="btn btn-primary form-control" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>NIP</label>
                                    @error('nip')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input type="number" class="form-control" name="nip" wire:model="nip">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>NO WA</label>
                                    @error('nowa')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input type="number" class="form-control" name="nowa" wire:model="nowa">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>NPWP</label>
                                    @error('npwp')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="npwp" wire:model="npwp">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>JABATAN</label>
                                    @error('jabatan')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="jabatan" wire:model="jabatan">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>PENDAPATAN</label>
                                    @error('pendapatan')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input type="number" class="form-control" name="pendapatan" wire:model="pendapatan">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Bank BJB</label>
                                    <input type="number" class="form-control" name="bank_bjb" wire:model="bank_bjb">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>UKAN KORPRI</label>
                                    <input type="number" class="form-control" name="ukan_korpri" wire:model="ukan_korpri">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Iuran Korpri</label>
                                    <input type="number" class="form-control" name="iuran_korpri" wire:model="iuran_korpri">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>BJB Syariah</label>
                                    <input type="number" class="form-control" name="bjb_syariah" wire:model="bjb_syariah">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Simp Kop Insp</label>
                                    <input type="number" class="form-control" name="simp_kop_insp" wire:model="simp_kop_insp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>SHR Kop Insp</label>
                                    <input type="number" class="form-control" name="shr_kop_insp" wire:model="shr_kop_insp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Potongan Kop Insp</label>
                                    <input type="number" class="form-control" name="potongan_kop_insp" wire:model="potongan_kop_insp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Arisan Kop Insp</label>
                                    <input type="number" class="form-control" name="arisan_kop_insp" wire:model="arisan_kop_insp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Simp Kokar</label>
                                    <input type="number" class="form-control" name="simp_kokar" wire:model="simp_kokar">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Koperasi Ciremai</label>
                                    <input type="number" class="form-control" name="koperasi_ciremai" wire:model="koperasi_ciremai">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Arisan Dharma Wanita</label>
                                    <input type="number" class="form-control" name="arisan_dharma_wanita" wire:model="arisan_dharma_wanita">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Iuran Dharma Wanita</label>
                                    <input type="number" class="form-control" name="iuran_dharma_wanita" wire:model="iuran_dharma_wanita">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Rereongan Sarupi</label>
                                    <input type="number" class="form-control" name="rereongan_sarupi" wire:model="rereongan_sarupi">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ZAKAT/INFAK</label>
                                    <input type="number" class="form-control" name="zakat_infak" wire:model="zakat_infak">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Konsumsi</label>
                                    <input type="number" class="form-control" name="konsumsi" wire:model="konsumsi">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>BTN</label>
                                    <input type="number" class="form-control" name="btn" wire:model="btn">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Zakat Fitrah</label>
                                    <input type="number" class="form-control" name="zakat_fitrah" wire:model="zakat_fitrah">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Dana Pendidikan&PMI</label>
                                    <input type="number" class="form-control" name="dana_pendidikan_dan_pmi" wire:model="dana_pendidikan_dan_pmi">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>BPR Kuningan</label>
                                    <input type="number" class="form-control" name="bpr_kuningan" wire:model="bpr_kuningan">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>SHR KOKAR</label>
                                    <input type="number" class="form-control" name="shr_kokar" wire:model="shr_kokar">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Potongan KOKAR</label>
                                    <input type="number" class="form-control" name="potongan_kokar" wire:model="potongan_kokar">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Ang Barang Koperasi </label>
                                    <input type="number" class="form-control" name="ang_barang_koperasi" wire:model="ang_barang_koperasi">
                                </div>
                            </div>
                            <div class="col-lg-12 text-right mb-5">
                                <button class="btn btn-primary w-100" type="submit">Simpan</button>
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
