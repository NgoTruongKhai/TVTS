@extends('index')
@section('content')
    <div class="container p-3 mb-2 bg-white rounded mt-2 shadow">
        <div class="text-danger fs-4 fw-bold text-center">Tư vấn tuyển sinh</div>
        {{-- Form --}}
        <div class=" container g-3">
            <section class="section ">
                <div class="row  me-auto">
                    <div class="col ">

                        <h5 class="card-title text-center fs-4"></h5>
                        @if (isset($err))
                            <div class="err text-danger text-center mb-1">{{ $err }}</div>
                        @endif

                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label offset-md-2">Nhóm ngành</label>
                                <div class="col-sm-6">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="nhom_nganh">
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
                                <label for="code" class="col-sm-2 col-form-label offset-md-2">Học lực</label>
                                <div class="col-sm-6 ">
                                    <select name="hoc_luc" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        @isset($hocluc)
                                            @foreach ($hocluc as $item)
                                                <option value="{{ $item->ma_hl }}">{{ $item->noi_dung }}
                                                </option>
                                            @endforeach
                                        @endisset

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="code" class="col-sm-2 col-form-label offset-md-2">Khối thi</label>
                                <div class="col-sm-6 ">
                                    <select name="khoi_thi" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        <option value="A">Khối A</option>
                                        <option value="B">Khối B</option>
                                        <option value="C">Khối C</option>
                                        <option value="C">Khối D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label offset-md-2">Sở thích</label>
                                <div class="col-sm-6">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="so_thich">
                                        @isset($sothich)
                                            @foreach ($sothich as $item)
                                                <option value="{{ $item->ma_st }}">{{ $item->noi_dung }}
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label offset-md-2">Khả năng</label>
                                <div class="col-sm-6">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="kha_nang">
                                        @isset($khanang)
                                            @foreach ($khanang as $item)
                                                <option value="{{ $item->ma_kn }}">{{ $item->noi_dung }}
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Tư vấn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            {{-- kết quaả --}}
            @isset($nganh)
                @include('components.diem.diem')
            @endisset
        </div>
    </div>
@endsection
