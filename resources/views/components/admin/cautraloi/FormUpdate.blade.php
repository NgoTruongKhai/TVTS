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

                            <form action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="code" class="col-sm-2 col-form-label">Nhóm ngành</label>
                                    <div class="col-sm-10">
                                        <select name="nhomnganh" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
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
                                    <label for="name" class="col-sm-2 col-form-label">Câu hỏi</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="cauhoi">
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
                                    <label for="name" class="col-sm-2 col-form-label">Nội dung</label>
                                    <div class="col-sm-10 d-sm-flex field">
                                        <input type="text" class="form-control" id="name" name="noi_dung[]">
                                        <span onclick="addField(this)" class="btn btn-secondary ms-2 ">+</span>
                                        <span onclick="removeField(this)" class="btn btn-secondary ms-2 ">-</span>
                                    </div>
                                </div>
                                <div class="btn-bottom"></div>
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
