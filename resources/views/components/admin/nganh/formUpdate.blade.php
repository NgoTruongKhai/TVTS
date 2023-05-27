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
            <div class="row  me-auto offset-1">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center fs-4"></h5>
                            @if (Session::has('err'))
                                <div class="err text-danger text-center mb-1">{{ Session::get('err') }}</div>
                            @endif

                            <form action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="code" class="col-sm-2 col-form-label">Mã Ngành</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="code" name='ma_nganh'
                                            @isset($nganh->ma_nganh)
                                            value="{{ $nganh->ma_nganh }}" 
                                        @endisset>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Tên ngành</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="code" name='ten_nganh'
                                            @isset($nganh)
                                            value="{{ $nganh->ten_nganh }}"
                                        @endisset>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Nhóm Ngành</label>
                                    <div class="col-sm-10">
                                        <select name="nhom_nganh" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            @isset($nhomnganh)
                                                @foreach ($nhomnganh as $item)
                                                    <option value="{{ $item->ma_nhom }}"
                                                        @if ($item->ma_nhom == $nganh->ma_nhom_nganh) {{ 'selected' }} @endif>
                                                        {{ $item->ten_nhom_nganh }}
                                                    </option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Mô tả</label>
                                    <div class="col-sm-10">
                                        <textarea name="mo_ta" id="" cols="auto" class="col-sm-12" rows="5">
@isset($nganh)
{{ $nganh->thong_tin_nganh_hoc }}
@endisset
</textarea>
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
