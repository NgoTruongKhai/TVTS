@extends('index')
@section('content')
    <div class="container p-3 mb-2 bg-white rounded w-75 shadow mt-1">
        @isset($data)
            <div class="text-danger fs-4 fw-bold text-center">Mật mã Holland - Trắc nghiệm Holland</div>
            {{-- Form --}}
            <form action="" method="POST">
                @csrf
                @foreach ($data as $key => $values)
                    <div class="row mt-3">
                        <div class="fs-4 fw-bold text-center mb-3">Nhom {{ $key }}</div>
                        @foreach ($values as $key1 => $value)
                            <div class="col-md-4">
                                <div class="fs-6 fw-bolder">
                                    @foreach ($cauhoi as $cauhoi1)
                                        @if ($cauhoi1->id == $key1)
                                            {{ $cauhoi1->noi_dung }}
                                </div>
                                @foreach ($value as $ite)
                                    @if ($ite->id_cau_hoi == $cauhoi1->id)
                                        <input type="checkbox" name='{{ $key }}[]' value="1"> {{ $ite->noi_dung }}
                                        <br>
                                    @endif
                                @endforeach
                        @endif
                @endforeach

                <input type="checkbox" name='{{ $key }}[]' value="0" hidden checked>
        </div>
        @endforeach
        </div>
        @endforeach
        <div class="text-center mt-4">
            <input type="submit" value="Tư vấn" name='submit' class="btn-primary btn">
        </div>
    @endisset
    </form>
    @isset($result)
        <div>
            @include('components.holland.holland')
        </div>
    @endisset
    </div>
@endsection
