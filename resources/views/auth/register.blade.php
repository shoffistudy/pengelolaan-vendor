{{-- @extends('layouts.app')

@section('content')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('img/polinema.png') }}'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
                        <h2 class="text-white mb-1 mt-2">Daftarkan Perusahaanmu disini</h2>
                        <p class="text-lead text-white">Vendor Management System PT. INKA Multi Solusi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Sign Up</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('register.perform') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="mb-3">
                                    <input type="text" name="nama_perusahaan" class="form-control form-control-lg" value="{{ old('nama_perusahaan') }}" aria-label="Nama Perusahaan" placeholder="Nama Perusahaan">
                                    @error('nama_perusahaan') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="alamat_perusahaan" class="form-control form-control-lg" value="{{ old('alamat_perusahaan') }}" aria-label="Alamat Perusahaan" placeholder="Alamat Perusahaan">
                                    @error('alamat_perusahaan') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="npwp_perusahaan" class="form-control form-control-lg" value="{{ old('npwp_perusahaan') }}" aria-label="NPWP Perusahaan" placeholder="NPWP Perusahaan">
                                    @error('npwp_perusahaan') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="dokumen_npwp" class="form-control form-control-lg" aria-label="Dokumen NPWP">
                                    @error('dokumen_npwp') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="mb-3">
                                    <select name="kategori_vendor" class="form-control form-control-lg" aria-label="Kategori Vendor">
                                        <option value="">Pilih Kategori Vendor</option>
                                        <option value="Kategori 1">Kategori 1</option>
                                        <option value="Kategori 2">Kategori 2</option>
                                        <!-- Add other categories as needed -->
                                    </select>
                                    @error('kategori_vendor') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="nomor_perusahaan" class="form-control form-control-lg" value="{{ old('nomor_perusahaan') }}" aria-label="Nomor Perusahaan" placeholder="Nomor Perusahaan">
                                    @error('nomor_perusahaan') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" aria-label="Email" placeholder="Email">
                                    @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" placeholder="Password">
                                    @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign up</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                Already have an account?
                                <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection --}}
