<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registration - Travelerz</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/g3w4CVj/globe-06-svgrepo-com-2.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                <a class="text-center" href="#">
                                    <img class="mx-auto d-block" src="https://i.ibb.co/W0Q3K0B/Group-289382.png" alt="Travelerz" height="50" srcset="">
                                </a>

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

                                    <button type="submit" class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="{{ route('login') }}" class="text-primary">Sign In</a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
</body>
</html>





