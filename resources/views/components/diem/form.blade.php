@extends('index')
@section('content')
    <div class="container p-3 mb-2 bg-white rounded mt-2 shadow">
        <div class="text-danger fs-4 fw-bold text-center">Tư vấn theo điểm</div>
        {{-- Form --}}
        <div class="w-25 container g-3 text-center">
            @if (Session::has('err'))
                <div class="text-danger fw-bold text-center mt-3">{{ Session::get('err') }}</div>
            @endif
            <form action="" method="POST">

                @csrf
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th class="col-md-8">Môn thi</th>
                            <th class="col-md-4">Điểm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Chọn Khối</label>
                                    <div class="col-sm-8">
                                        <Select class="form-select" onchange="setmon()" id="IDsetmon" name="khoithi">
                                            @isset($khoithi)
                                                @foreach ($khoithi as $item)
                                                    <option value="{{ $item->ten_khoi_thi }}">{{ $item->ten_khoi_thi }}</option>
                                                @endforeach
                                            @endisset
                                        </Select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" readonly class="form-control" id="mon1">

                                {{-- 
                                <select id="inputState" class="form-select" name="mon1">
                                    @foreach ($monthi as $item)
                                        <option>{{ $item->ten_mon }}</option>
                                    @endforeach

                                </select> --}}
                            </td>
                            <td>
                                <input type="number" step="0.05" class="form-control" name="diem1" max="10"
                                    min="0" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" readonly class="form-control" id="mon2">
                                {{-- <select id="inputState" class="form-select" name="mon2">
                                    @foreach ($monthi as $item)
                                        <option>{{ $item->ten_mon }}</option>
                                    @endforeach
                                </select> --}}
                            </td>
                            <td>
                                <input type="number" step="0.05" class="form-control" name="diem2" max="10"
                                    min="0" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" readonly class="form-control" id="mon3">

                                {{-- <select id="inputState" class="form-select" name="mon3">
                                    @foreach ($monthi as $item)
                                        <option>{{ $item->ten_mon }}</option>
                                    @endforeach
                                </select> --}}
                            </td>
                            <td>
                                <input type="number" step="0.05" class="form-control" name="diem3" max="10"
                                    min="0" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Tư vấn</button>
                </div>
            </form>
            <script>
                var x = document.getElementById('IDsetmon').value;
                $.get('/getmonthi/' + x, function($data) {
                    document.getElementById('mon1').value = $data.mon_1;
                    document.getElementById('mon2').value = $data.mon_2;
                    document.getElementById('mon3').value = $data.mon_3;
                })

                function setmon() {
                    var x = document.getElementById('IDsetmon').value;
                    $.get('/getmonthi/' + x, function($data) {
                        document.getElementById('mon1').value = $data.mon_1;
                        document.getElementById('mon2').value = $data.mon_2;
                        document.getElementById('mon3').value = $data.mon_3;
                    })
                }
            </script>
        </div>
        {{-- kết quaả --}}
        @isset($nganh)
            @include('components.diem.diem')
        @endisset
    </div>
@endsection
