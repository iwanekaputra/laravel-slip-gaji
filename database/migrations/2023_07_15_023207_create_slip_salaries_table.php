<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlipSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slip_salaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->string('file_pdf')->nullable();
            $table->string('jumlah_potongan')->nullable();
            $table->string('gaji_bersih')->nullable();
            $table->string('bank_bjb')->nullable();
            $table->string('ukan_korpri')->nullable();
            $table->string('iuran_korpri')->nullable();
            $table->string('bjb_syariah')->nullable();
            $table->string('simp_kop_insp')->nullable();
            $table->string('shr_kop_insp')->nullable();
            $table->string('potongan_kop_insp')->nullable();
            $table->string('arisan_kop_insp')->nullable();
            $table->string('simp_kokar')->nullable();
            $table->string('koperasi_ciremai')->nullable();
            $table->string('arisan_dharma_wanita')->nullable();
            $table->string('iuran_dharma_wanita')->nullable();
            $table->string('rereongan_sarupi')->nullable();
            $table->string('zakat_infak')->nullable();
            $table->string('konsumsi')->nullable();
            $table->string('btn')->nullable();
            $table->string('zakat_fitrah')->nullable();
            $table->string('dana_pendidikan_dan_pmi')->nullable();
            $table->string('bpr_kuningan')->nullable();
            $table->string('shr_kokar')->nullable();
            $table->string('potongan_kokar')->nullable();
            $table->string('ang_barang_koperasi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slip_salaries');
    }
}
