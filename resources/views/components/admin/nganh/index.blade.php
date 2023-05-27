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
                <div class="col-lg-12">
                    <div class="card">
                        <div>
                            <a class="btn btn-success float-end me-5 mt-2" href="{{ route('add-nganh') }}">Thêm</a>
                        </div>

                        @if (Session::has('alert'))
                            @include('components.message.alert')
                        @endif


                        <div class="card-body">

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã ngành</th>
                                        <th scope="col">Tên ngành</th>
                                        <th scope="col">Môt tả</th>
                                        <th scope="col">Cập nhật</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($err))
                                        {{ $err }}
                                    @endif
                                    @if (isset($nganh))
                                        @foreach ($nganh as $item)
                                            <tr>
                                                <td>{{ $item->ma_nganh }}</td>
                                                <td>{{ $item->ten_nganh }}</td>
                                                <td>{{ $item->thong_tin_nganh_hoc }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-nganh', ['id' => $item->ma_nganh]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        onclick="return follow(this);">Xóa</a>
                                                    <a href="{{ route('update-nganh', ['id' => $item->ma_nganh]) }}"
                                                        class="btn btn-warning rounded-pill">Sửa</a>
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
                {{-- <div class="col-lg-5">
                    <div class="container">
                        <div class="card ">
                            <div class="card-body ">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="code" class="col-sm-4 col-form-label">Mã luật</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="ma_luat" name='ma_luat'
                                                @isset($ma_luat)
                                                value="{{ $ma_luat }}"
                                            @endisset
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Nội dung</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="noi_dung" name="noi_dung"
                                                @isset($noi_dung)
                                            value="{{ $noi_dung }}"
                                        @endisset>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                        <button type="button" class="btn btn-primary" onclick="reset()">reset</button>
                                    </div>
                                    <script>
                                        function reset() {
                                            document.getElementById('ma_luat').value = $ma_luat;
                                            document.getElementById('noi_dung').value = '';
                                        }
                                    </script>
                                </form>


                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

        <!--comfirm delete--->
        @include('components.message.confirm')
        <!--comfirm delete--->
    </main><!-- End #main -->
@endsection
