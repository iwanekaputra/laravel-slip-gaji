<div>
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Slip Gaji</h1>
          </div>

          <div class="section-body">
              <div class="row">
                  <div class="col-12 col-md-6 col-lg-12">
                      <div class="card">
                        <div class="card-header">
                                <a href="{{ route('admin.slip-gaji.create') }}" class="btn btn-primary">+ Tambah Slip Gaji</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label>Bulan</label>
                                    <select class="form-control" wire:model="month">
                                        <option value="07">Juli 2023</option>
                                        <option value="08">Agustus 2023</option>
                                        <option value="09">September 2023</option>
                                        <option value="10">Oktober 2023</option>
                                        <option value="11">November 2023</option>\
                                        <option value="12">Desember 2023</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <button class="btn btn-success" wire:click="sendWa">Kirim wa -></button>
                        </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>No wa</th>
                          <th>Pdf</th>
                          <th>Action</th>
                        </tr>
                        @forelse ($slipSalaries as $slipSalary)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $slipSalary->employee->nama }}</td>
                            <td>{{ $slipSalary->employee->nowa }}</td>
                            <td><a href="{{ asset("pdf/" . $slipSalary->file_pdf) }}" target="_blank">{{ $slipSalary->file_pdf }}</a></td>
                            <td>
                                <a href="{{ route('admin.slip-gaji.show', $slipSalary->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('admin.slip-gaji.edit', $slipSalary->id) }}" class="btn btn-secondary">Edit</a>
                                <button type="button" class="btn btn-danger" wire:click="delete({{ $slipSalary->id }})">Hapus</button>
                            </td>

                          </tr>
                        @empty

                        @endforelse

                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    {{ $slipSalaries->links() }}
                    {{-- <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
</div>
