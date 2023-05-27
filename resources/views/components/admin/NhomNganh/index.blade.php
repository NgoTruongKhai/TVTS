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


                        @if (Session::has('alert'))
                            @include('components.message.alert')
                        @endif


                        <div class="card-body">
                            <div class="card-title mt-0 fw-bold p-0 text-center fs-4">Danh sách nhóm ngành</div>
                            <div>
                                <a class="btn btn-success float-end  mt-2 ms-3 "
                                    href="{{ route('add-nhom-nganh') }}">Thêm</a>
                            </div>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã Nhóm</th>
                                        <th scope="col">Tên Nhóm</th>
                                        <th scope="col">Nhóm người</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Các ngành học liên quan</th>
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
                                                <td>{{ $item->ma_nhom }}</td>
                                                <td>{{ $item->ten_nhom_nganh }}</td>
                                                <td>{{ $item->ten_nhom_nguoi }}</td>
                                                <td>{{ $item->mo_ta }}</td>
                                                <td>{{ $item->nganh }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-nhom-nganh', ['id' => $item->ma_nhom]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        onclick="return follow(this);">Xóa</a>
                                                    <a href="{{ route('form-update-nhom-nganh', ['id' => $item->ma_nhom]) }}"
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
            </div>
        </section>
        <!--comfirm delete--->
        @include('components.message.confirm')
        <!--comfirm delete--->
    </main><!-- End #main -->
@endsection
