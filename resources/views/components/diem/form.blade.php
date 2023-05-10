@extends('index')
@section('content')
    <div class="container p-3 mb-2 bg-white rounded mt-2 shadow">
        <div class="text-danger fs-4 fw-bold text-center">Tư vấn tuyển sinh</div>
        {{-- Form --}}
        <div class="w-25 container g-3 text-center">
            <form action="" method="POST">
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-md-8">Môn thi</th>
                            <th class="col-md-4">Điểm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                                <select id="inputState" class="form-select" name="mon1">
                                    <option selected>Toán</option>
                                    <option>Lý</option>
                                    <option>Hóa</option>
                                    <option>Sinh</option>
                                    <option>Sử</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" step="0.01" class="form-control" name="diem1" max="10"
                                    min="0">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select id="inputState" class="form-select" name="mon2">
                                    <option selected>Toán</option>
                                    <option>Lý</option>
                                    <option>Hóa</option>
                                    <option>Sinh</option>
                                    <option>Sử</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" step="0.01" class="form-control" name="diem2" max="10"
                                    min="0">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select id="inputState" class="form-select" name="mon3">
                                    <option selected>Toán</option>
                                    <option>Lý</option>
                                    <option>Hóa</option>
                                    <option>Sinh</option>
                                    <option>Sử</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" step="0.01" class="form-control" name="diem3" max="10"
                                    min="0">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Tư vấn</button>
                </div>
            </form>
        </div>
        {{-- kết quaả --}}
        @include('components.diem.diem')
    </div>
@endsection
