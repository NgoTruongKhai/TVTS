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
                            <div class="card-title fw-bold fs-4 text-center">Danh sách câu hỏi</div>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Câu hỏi</th>
                                        <th scope="col">Cập nhật</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($result)
                                        @foreach ($result as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->noi_dung }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-cau-hoi', ['id' => $item->id]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" onclick="return follow(this);">Xóa</a>
                                                    <button class="btn btn-warning rounded-pill"
                                                        onclick="setcauhoi({{ $item }})">Sửa</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card ">

                        <div class="card-body ">
                            <form action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="code" class="col-sm-4 col-form-label">ID</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ID" name='id' readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-4 col-form-label">Nội dung</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="noi_dung" name="noi_dung">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <button type="button" class="btn btn-primary" onclick="reset()">reset</button>
                                </div>
                                <script>
                                    function reset() {
                                        document.getElementById('ID').value = $ma_luat;
                                        document.getElementById('noi_dung').value = '';
                                    }
                                </script>
                            </form>
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
