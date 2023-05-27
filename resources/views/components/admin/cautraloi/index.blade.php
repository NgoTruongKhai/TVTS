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
                            <div class="card-title fw-bold fs-4 text-center pb-0 pt-0">Danh sách câu trả lời</div>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Câu hỏi</th>
                                        <th scope="col">Nhóm ngành</th>
                                        <th scope="col">Câu trả lời</th>
                                        <th scope="col">Cập nhật</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($result))
                                        @foreach ($result as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->id_cau_hoi }}</td>
                                                <td>{{ $item->ma_nhom_nganh }}</td>
                                                <td>{{ $item->noi_dung }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-cau-tra-loi', ['id' => $item->id]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        onclick="return follow(this);">Xóa</a>
                                                    <button type="button" class="btn btn-warning rounded-pill"
                                                        onclick="setcautraloi({{ $item }})">Sửa</button>
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
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            @if (Session::has('err'))
                                <div class="err text-danger text-center mb-1">{{ Session::get('err') }}</div>
                            @endif

                            <form action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="code" class="mb-2">ID</label>
                                    <div class="col-sm-12">
                                        <input type="text" readonly class="form-control" name="id" id="ID">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="code" class="mb-2">Nhóm ngành</label>
                                    <div class="col-sm-12">
                                        <select name="nhomnganh" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example" id="nhomnganh">
                                            @isset($nhomnganh)
                                                @foreach ($nhomnganh as $item)
                                                    <option value="{{ $item->ma_nhom }}">{{ $item->ten_nhom_nganh }}
                                                    </option>
                                                @endforeach
                                            @endisset

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="mb-2">Câu hỏi</label>
                                    <div class="col-sm-12">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="cauhoi" id="cauhoi">
                                            @isset($cauhoi)
                                                @foreach ($cauhoi as $item)
                                                    <option value="{{ $item->id }}">{{ $item->noi_dung }}
                                                    </option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="mb-2">Nội dung</label>
                                    <div class="col-sm-12 d-sm-flex field">
                                        <input type="text" class="form-control" id="noi_dung" name="noi_dung[]">
                                        <span onclick="addField(this)" class="btn btn-secondary ms-2 "
                                            id="hidden">+</span>
                                        <span onclick="removeField(this)" class="btn btn-secondary ms-2 ">-</span>
                                    </div>
                                </div>
                                <div class="btn-bottom"></div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <button type="button" class="btn btn-primary" onclick="reset1()">Reset</button>
                                </div>
                            </form>
                            <script>
                                function reset1() {
                                    document.getElementById('ID').value = '';
                                    document.getElementById('noi_dung').value = '';
                                    document.getElementById('hidden').style.display = 'block';
                                }
                            </script>
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
