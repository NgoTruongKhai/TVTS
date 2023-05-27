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
                                    <label for="code" class="col-sm-2 col-form-label">Mã Luật</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="code" name='ma_luat' readonly
                                            @isset($ma_luat)
                                                value="{{ $ma_luat }}"
                                            @endisset>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Nhóm ngành</label>
                                    <div class="col-sm-10">
                                        <select name="nhom_nganh" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            @isset($nhom_nganh)
                                                @foreach ($nhom_nganh as $item)
                                                    <option value="{{ $item->ma_nhom }}">{{ $item->ten_nhom_nganh }}
                                                    </option>
                                                @endforeach
                                            @endisset

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Học lực</label>
                                    <div class="col-sm-10">
                                        <select name="hoc_luc" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            @isset($hoc_luc)
                                                @foreach ($hoc_luc as $item)
                                                    <option value="{{ $item->ma_hl }}">{{ $item->noi_dung }}
                                                    </option>
                                                @endforeach
                                            @endisset

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Sở thích</label>
                                    <div class="col-sm-10">
                                        <select name="so_thich" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            @isset($so_thich)
                                                @foreach ($so_thich as $item)
                                                    <option value="{{ $item->ma_st }}">{{ $item->noi_dung }}
                                                    </option>
                                                @endforeach
                                            @endisset

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Khả năng</label>
                                    <div class="col-sm-10">
                                        <select name="kha_nang" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            @isset($kha_nang)
                                                @foreach ($kha_nang as $item)
                                                    <option value="{{ $item->ma_kn }}">{{ $item->noi_dung }}
                                                    </option>
                                                @endforeach
                                            @endisset

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Khả năng</label>
                                    <div class="col-sm-10">
                                        <select name="kha_nang" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            @isset($kha_nang)
                                                @foreach ($kha_nang as $item)
                                                    <option value="{{ $item->ma_kn }}">{{ $item->noi_dung }}
                                                    </option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Kết luận</label>
                                    <div class="col-sm-10">
                                        <select class="select" multiple data-mdb-placeholder="Example placeholder" multiple>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                        </select>
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
        <script>
            $('#multiple-select-field').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            });
        </script>
    </main>
@endsection
