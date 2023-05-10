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
                            <a class="btn btn-success float-end me-5 mt-2" href="{{ route('add-nhom-nganh') }}">Thêm</a>
                        </div>
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Mã Nhóm</th>
                                        <th scope="col">Tên Nhóm</th>
                                        <th scope="col">Mô Tả</th>
                                        <th scope="col">Cập nhật</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($err))
                                        {{ $err }}
                                    @endif
                                    @if (isset($result))
                                        @php
                                            $index = 1;
                                        @endphp
                                        @foreach ($result as $item)
                                            <tr>
                                                <th scope="row">{{ $index++ }}</th>
                                                <td>{{ $item->ma_nhom }}</td>
                                                <td>{{ $item->ten_nhom }}</td>
                                                <td>{{ $item->mo_ta }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <button class="btn btn-danger rounded-pill">Xóa</button>
                                                    <button class="btn btn-warning rounded-pill">Sửa</button>
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

    </main><!-- End #main -->
@endsection
