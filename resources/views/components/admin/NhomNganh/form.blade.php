@extends('layouts.admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Layouts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Layouts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section ">
            <div class="row  me-auto">
                <div class="col ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center fs-4"></h5>
                            @if (isset($err))
                                <div class="err text-danger text-center mb-1">{{ $err }}</div>
                            @endif

                            <form onsubmit="prepareDiv()" action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="code" class="col-sm-2 col-form-label">Mã Nhóm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="code" name='code'
                                            @isset($data)
                                            value="{{ $data['ma_nhom'] }}"
                                        @endisset>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Tên Nhóm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                            @isset($data)
                                        value="{{ $data['ten_nhom_nganh'] }}"
                                    @endisset>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Nhóm người</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name1"
                                            @isset($data)
                                        value="{{ $data['ten_nhom_nguoi'] }}"
                                    @endisset>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Các ngành liên quan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="nganh"
                                            @isset($data)
                                        value="{{ $data['nganh'] }}"
                                    @endisset>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mô tả</label>
                                    <div class="col-sm-10">
                                        <div class="card">
                                            <div class="card-body">
                                                <textarea name="description" id="description_hidden" hidden></textarea>
                                                <div class="quill-editor-bubble">
                                                    @isset($data)
                                                        {{ $data['mo_ta'] }}
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
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

        </section>

    </main>
@endsection
