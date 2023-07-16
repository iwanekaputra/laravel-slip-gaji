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
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Kirim Ke Wa</th>
                          <th>Action</th>
                        </tr>
                        @forelse ($slipSalaries as $slipSalary)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $slipSalary->employee->nama }}</td>
                            <td><div class="badge badge-success">Sudah Terkirim</div></td>
                            <td><a href="{{ route('admin.slip-gaji.show', $slipSalary->id) }}" class="btn btn-secondary">Detail</a></td>
                          </tr>
                        @empty

                        @endforelse

                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
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
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
</div>
