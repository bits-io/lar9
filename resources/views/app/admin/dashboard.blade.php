<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('layouts.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                  Tambah
                </button>
              </div>

              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Vertically Centered</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="row g-3 needs-validation" novalidate="">
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Tipe Transportasi</label>
                          <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option selected="">Pilih tipe Transportasi</option>
                            <option value="1">Roda 4</option>
                            <option value="2">Roda 6</option>
                          </select>
                          <div class="invalid-feedback">Please enter your alamat!</div>
                        </div>

                        <div class="col-12">
                          <label class="form-label">Kode</label>
                          <input type="text" name="username" class="form-control" required="">
                          <div class="invalid-feedback">Please, enter your username!</div>
                        </div>

                        <div class="col-12">
                          <label class="form-label">Jumlah Kursi</label>
                          <input type="number" name="password" class="form-control" required="">
                          <div class="invalid-feedback">Please enter a valid Password!</div>
                        </div>

                        <div class="col-12">
                          <label class="form-label">Keterangan</label>
                          <textarea name="alamat_penumpang" class="form-control" style="height: 100px"></textarea>
                          <div class="invalid-feedback">Please enter your alamat!</div>
                        </div>

                      </form>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tipe Transportasi</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Jumlah Kursi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Angkasa Pura</td>
                    <td>AP1012</td>
                    <td>28</td>
                    <td>Ready</td>
                    <td>Dot</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('layouts.footer-script')
  <!-- Template Main JS File -->

</body>

</html>
