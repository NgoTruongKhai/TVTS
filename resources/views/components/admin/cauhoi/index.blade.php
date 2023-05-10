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
                        <div class="mt-3">
                            <form action="" method="post">
                                @csrf
                                <div class="row mb-2 float-end">
                                    {{-- <label for="name" class="col-sm-2 col-form-label">Nội dung câu hỏi</label> --}}
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Thêm câu hỏi mới">
                                    </div>
                                    <div class="col-sm-2"><button class="btn btn-success">Thêm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Câu hỏi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope='row'>1</td>
                                        <td>Câu hỏi số 1</td>
                                    </tr>
                                    {{-- @if (isset($result))
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
                                    @endif --}}

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
