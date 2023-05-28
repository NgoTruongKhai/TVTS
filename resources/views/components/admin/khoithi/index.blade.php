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
                        {{-- <div>
                            <a class="btn btn-success float-end me-5 mt-2" href="{{ route('add-luat') }}">Thêm</a>
                        </div> --}}

                        @if (Session::has('alert'))
                            @include('components.message.alert')
                        @endif


                        <div class="card-body">
                            <div class="card-title fw-bold fs-4 text-center p-0">Danh sách Khối thi</div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Mã Khối Thi</th>
                                        <th scope="col">Môn thi 1</th>
                                        <th scope="col">Môn thi 2</th>
                                        <th scope="col">Môn thi 3</th>
                                        <th scope="col">Cập nhật</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (isset($khoithi))
                                        @foreach ($khoithi as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->ten_khoi_thi }}</td>
                                                <td>{{ $item->mon_1 }}</td>
                                                <td>{{ $item->mon_2 }}</td>
                                                <td>{{ $item->mon_3 }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('delete-khoi-thi', ['id' => $item->id]) }}"
                                                        class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        onclick="return follow(this);">Xóa</a>
                                                    <button class="btn btn-warning rounded-pill"
                                                        onclick="setkhoithi({{ $item }})">Sửa</button>
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
                    <div class="container">
                        <div class="card ">
                            <div class="card-body ">
                                @if (Session::has('err'))
                                    <div class="text-center text-danger mb-1">{{ Session::get('err') }}</div>
                                @endif
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="code" class="col-sm-4 col-form-label">ID</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="ID" name='id'
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="code" class="col-sm-4 col-form-label">Mã khối thi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="makhoi" name='makhoi'
                                                @isset($ma_luat)
                                                value="{{ $ma_luat }}"
                                            @endisset>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Môn 1</label>
                                        <div class="col-sm-8">
                                            <select name="mon1" id="mon1" class="form-select">
                                                @foreach ($monthi as $item)
                                                    <option value="{{ $item->ten_mon }}">{{ $item->ten_mon }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Môn 2</label>
                                        <div class="col-sm-8">
                                            <select name="mon2" id="mon2" class="form-select">
                                                @foreach ($monthi as $item)
                                                    <option value="{{ $item->ten_mon }}">{{ $item->ten_mon }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Môn 3</label>
                                        <div class="col-sm-8">
                                            <select name="mon3" id="mon3" class="form-select">
                                                @foreach ($monthi as $item)
                                                    <option value="{{ $item->ten_mon }}">{{ $item->ten_mon }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                        <button type="button" class="btn btn-primary" onclick="reset()">reset</button>
                                    </div>
                                </form>
                                <script>
                                    function setkhoithi(item) {
                                        console.log(item.mon_2);
                                        document.getElementById('ID').value = item.id;
                                        document.getElementById('makhoi').value = item.ten_khoi_thi;
                                        document.getElementById('mon1').value = item.mon_1;
                                        document.getElementById('mon2').value = item.mon_2;
                                        document.getElementById('mon3').value = item.mon_3;
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
