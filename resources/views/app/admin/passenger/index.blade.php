<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('layouts.preloader')
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('layouts.nav-header')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('layouts.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="header-left">
                                    <h4 class="card-title">Data Penumpang</h4>
                                </div>
                                <div class="header-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i>Tambah</button>
                                    <a class="btn btn-danger" href="{{ route('admin.passenger.pdf') }}">Export PDF</a>
                                    <a class="btn btn-success" href="{{ route('admin.passenger.xlsx') }}">Export Excel</a>
                                </div>
                                <div class="table-responsive">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        {{-- <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                                    <label>Show
                                                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 246.067px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nama Penumpang</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 385.917px;" aria-label="Position: activate to sort column ascending">Alamat Penumpang</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 184.983px;" aria-label="Office: activate to sort column ascending">Tanggal Lahir</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 94.45px;" aria-label="Age: activate to sort column ascending">Jenis Kelamin</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 169.717px;" aria-label="Start date: activate to sort column ascending">Telepon</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 169.717px;" aria-label="Start date: activate to sort column ascending">Aksi</th>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($passenger as $p)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $p->nama_penumpang }}</td>
                                                            <td>{{ $p->alamat_penumpang }}</td>
                                                            <td>{{ $p->tanggal_lahir }}</td>
                                                            <td>{{ $p->jenis_kelamin }}</td>
                                                            <td>{{ $p->telepon }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit"></i></button>
                                                                <a href="{{ route('admin.passenger.edit', $p->id_penumpang) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        {{-- Modal Add --}}
                                        <div class="modal fade" id="modalAdd">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('admin.passenger.create') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="">Username</label>
                                                                <input type="text" class="form-control"  placeholder="Masukkan Username" name="username" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Password</label>
                                                                <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Nama Penumpang</label>
                                                                <input type="text" class="form-control"  placeholder="Masukkan Nama Penumpang" name="nama_penumpang" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Alamat Penumpang</label>
                                                                <input type="text" class="form-control"  placeholder="Masukkan Alamat Penumpang" name="alamat_penumpang" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Tanggal Lahir</label>
                                                                <input type="date" class="form-control"  placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Jenis Kelamin</label>
                                                                <select name="jenis_kelamin" class="form-control" required>
                                                                    <option value="">Pilih Jenis Kelamin</option>
                                                                    <option value="1">Laki-laki</option>
                                                                    <option value="2">Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Telepon</label>
                                                                <input type="tel" class="form-control"  placeholder="Masukkan Telepon" name="telepon" required>
                                                            </div>

                                                            <div class="form-group justify-content-end">
                                                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="modalEdit">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('registration') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="">Username</label>
                                                                <input type="text" class="form-control"  placeholder="Masukkan Username" name="username" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Password</label>
                                                                <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Nama Penumpang</label>
                                                                <input type="text" class="form-control"  placeholder="Masukkan Nama Penumpang" name="nama_penumpang" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Alamat Penumpang</label>
                                                                <input type="text" class="form-control"  placeholder="Masukkan Alamat Penumpang" name="alamat_penumpang" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Tanggal Lahir</label>
                                                                <input type="date" class="form-control"  placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Jenis Kelamin</label>
                                                                <select name="jenis_kelamin" class="form-control" required>
                                                                    <option value="">Pilih Jenis Kelamin</option>
                                                                    <option value="1">Laki-laki</option>
                                                                    <option value="2">Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Telepon</label>
                                                                <input type="tel" class="form-control"  placeholder="Masukkan Telepon" name="telepon" required>
                                                            </div>

                                                            <div class="form-group justify-content-end">
                                                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                                    Showing 1 to 10 of 57 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                        </li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                        </li>
                                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('layouts.footer-script')

</body>

</html>
