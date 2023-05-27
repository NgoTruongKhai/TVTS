@extends('layouts.admin.index')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-8">

                    <div class="card">
                        @if (Session::has('alert'))
                            @include('components.message.alert')
                        @endif

                        <div class="card-body">
                            <div class="card-title fw-bold fs-4 mb-0 mt-0 pt-0 text-center">Danh sách sở thích</div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã Sở thích</th>
                                        <th scope="col">Nội Dung</th>
                                        <th scope="col">Cập nhật</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($err))
                                        {{ $err }}
                                    @endif
                                    @if (isset($sothich))
                                        @foreach ($sothich as $item)
                                            <tr>
                                                <td>{{ $item->ma_st }}</td>
                                                <td>{{ $item->noi_dung }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-tieu-chi', ['id' => $item->ma_st]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        onclick="return follow(this);">Xóa</a>
                                                    <button class="btn btn-warning rounded-pill"
                                                        onclick="set({{ $item }})">Sửa</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 ">
                    <div class="position-sticky">
                        <div class="card ">
                            <div class="card-body ">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="code" class="col-sm-4 col-form-label">Mã Sở thích</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="ma_st" name='ma_st'
                                                readonly value="{{ $ma_st }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Nội dung</label>
                                        <div class="col-sm-8">
                                            <input type="text" rows="2" multiple class="form-control"
                                                id="noi_dung" name="noi_dung">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Mô tả</label>
                                        <div class="col-sm-8">
                                            <input type="text" rows="2" multiple class="form-control"
                                                id="mo_ta" name="mo_ta">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">

                    <div class="card">

                        <div class="card-body">
                            <div class="card-title fw-bold fs-4 mb-0 mt-0 pt-0 text-center">Danh sách khả năng</div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã Khả Năng</th>
                                        <th scope="col">Nội Dung</th>
                                        <th scope="col">Cập nhật</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($err))
                                        {{ $err }}
                                    @endif
                                    @if (isset($khanang))
                                        @foreach ($khanang as $item)
                                            <tr>
                                                <td>{{ $item->ma_kn }}</td>
                                                <td>{{ $item->noi_dung }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-tieu-chi', ['id' => $item->ma_kn]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        onclick="return follow(this);">Xóa</a>
                                                    <button class="btn btn-warning rounded-pill"
                                                        onclick="set({{ $item }})">Sửa</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 ">
                    <div class="position-sticky">
                        <div class="card ">
                            <div class="card-body ">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="code" class="col-sm-4 col-form-label">Mã Khả năng</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="ma_kn" name='ma_kn'
                                                readonly value="{{ $ma_kn }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Nội dung</label>
                                        <div class="col-sm-8">
                                            <input type="text" rows="2" multiple class="form-control"
                                                id="noi_dung" name="noi_dung">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Mô tả</label>
                                        <div class="col-sm-8">
                                            <input type="text" rows="2" multiple class="form-control"
                                                id="mo_ta" name="mo_ta">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--comfirm delete--->
        @include('components.message.confirm')
        <!--comfirm delete--->
    </main><!-- End #main -->
@endsection
