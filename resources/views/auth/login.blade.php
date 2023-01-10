<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Kelas Industri - AL Ittihad</title>
    <link rel="icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}" />

    {{-- CSS only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    {{-- JQuery --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    {{-- JavaScript Bundle with Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    {{-- Call style --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
</head>

<body>
    <div class="login">
        <img src="{{ url('img/login.jpg') }}" class="card-img" style="min-width: 100%; height: 730px;" alt="...">
        <div class="card-img-overlay">
            <div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
                <div class="container">
                    <div class="container mx-auto mt-5 mb-5">
                        <div class="row" style="justify-content: center;">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div style="padding:8px;"><img src="{{ url('img/logo.png') }}" style="max-width: 90px; max-height: 92px; float:left; margin:0 8px 4px 0;" />
                                    <div class="row mt-3">
                                        <div style="font-size: 20px; font-weight: bold;">
                                            Aplikasi Inventaris
                                        </div>
                                        <div style="font-size: 16px; color: #757575;">
                                            SMK Al - Ittihad - Cianjur
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row mt-5">
                            <h2>
                                Selamat Datang
                            </h2>
                            <p style="font-size: 16px; color: #757575;">
                                Login di bawah ini untuk masuk ke akun anda
                            </p>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label" style="font-weight: bold;">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" style="font-weight: bold;">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn" style="background-color: #0C5045; color: white;" type="button">Login</button>
                            </div>
                        </form>
                        <div style="text-align: right;">
                            <a href="" class="" style="text-decoration: none; font-weight: 600; color: #0C5045;">Reset Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('layouts.partials.footer')

</html>