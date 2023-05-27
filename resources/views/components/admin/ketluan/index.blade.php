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
                <div class="col-lg-7">
                    <div class="card">
                        @if (Session::has('alert'))
                            @include('components.message.alert')
                        @endif
                        <div class="card-body">

                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã Kết Luận</th>
                                        <th scope="col">Nội Dung</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Cập nhật</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($err))
                                        {{ $err }}
                                    @endif
                                    @if (isset($result))
                                        @foreach ($result as $item)
                                            <tr>
                                                <td>{{ $item->ma_kl }}</td>
                                                <td>{{ $item->noi_dung }}</td>
                                                <td>{{ $item->mo_ta }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-ket-luan', ['id' => $item->ma_kl]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        onclick="return follow(this);">Xóa</a>
                                                    <button class="btn btn-warning rounded-pill"
                                                        onclick="setketluan({{ $item }})">Sửa</button>
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
                <div class="col-lg-5">
                    <div class="container mt-5">
                        <div class="card ">

                            <div class="card-body ">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="code" class="col-sm-4 col-form-label">Mã luật</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="ma_kl" name='ma_kl'
                                                @isset($ma_kl)
                                                value="{{ $ma_kl }}"
                                            @endisset
                                                readonly>
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
                                        <button type="button" class="btn btn-primary" onclick="reset()">Reset</button>

                                    </div>
                                </form>
                                <script>
                                    function reset() {
                                        document.getElementById('ma_kl').value = $ma_kl;
                                        document.getElementById('noi_dung').value = '';
                                        document.getElementById('mo_ta').value = '';
                                    }
                                </script>
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
