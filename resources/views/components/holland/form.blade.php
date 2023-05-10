@extends('index')
@section('content')
    <div class="container p-3 mb-2 bg-white rounded w-75 shadow">
        <div class="text-danger fs-4 fw-bold text-center">Tư vấn tuyển sinh theo thuyết Holland</div>
        {{-- Form --}}
        <form action="" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="fs-4 fw-bold text-center mb-3">Nhom R</div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn là người như thế nào ?</div>
                    <input type="checkbox" name='R[]' value="0" hidden checked>
                    <input type="checkbox" name='R[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Hoạt động
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Thích hoạt làm việc với máy móc, dụng cụ
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Thích sự cụ thể
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Khép kín
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='R[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe đạp,
                    …
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='R[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe đạp,
                    …
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='R[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
            </div>
            <div class="row mt-3">
                <div class="fs-4 fw-bold text-center mb-3">Nhom I</div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn là người như thế nào ?</div>
                    <input type="checkbox" name='I[]' value="0" hidden checked>

                    <input type="checkbox" name='I[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Hoạt động
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Thích hoạt làm việc với máy móc, dụng cụ
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Thích sự cụ thể
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Khép kín
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='I[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp,
                    …
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='I[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='I[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
            </div>
            <div class="row mt-3">
                <div class="fs-4 fw-bold text-center mb-3">Nhom A</div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn là người như thế nào ?</div>
                    <input type="checkbox" name='A[]' value="0" hidden checked>

                    <input type="checkbox" name='A[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Hoạt động
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Thích hoạt làm việc với máy móc, dụng cụ
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Thích sự cụ thể
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Khép kín
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='A[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='A[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='A[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
            </div>
            <div class="row mt-3">
                <div class="fs-4 fw-bold text-center mb-3">Nhom S</div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn là người như thế nào ?</div>
                    <input type="checkbox" name='S[]' value="0" hidden checked>

                    <input type="checkbox" name='S[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Hoạt động
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Thích hoạt làm việc với máy móc, dụng cụ
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Thích sự cụ thể
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Khép kín
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='S[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='S[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='S[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
            </div>
            <div class="row mt-3">
                <div class="fs-4 fw-bold text-center mb-3">Nhom E</div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn là người như thế nào ?</div>
                    <input type="checkbox" name='E[]' value="0" hidden checked>

                    <input type="checkbox" name='E[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Hoạt động
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Thích hoạt làm việc với máy móc, dụng cụ
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Thích sự cụ thể
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Khép kín
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='E[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox"name='E[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='E[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='E[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
            </div>
            <div class="row mt-3">
                <div class="fs-4 fw-bold text-center mb-3">Nhom C</div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn là người như thế nào ?</div>
                    <input type="checkbox" name='C[]' value="0" hidden checked>

                    <input type="checkbox" name='C[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Hoạt động
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Thích hoạt làm việc với máy móc, dụng cụ
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Thích sự cụ thể
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Yêu thích vân động
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Khép kín
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='C[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
                <div class="col-md-4">
                    <div class="fs-6 fw-bolder">Bạn có thể làm gì ?</div>
                    <input type="checkbox" name='C[]' value="1"> Sửa chữa các thiết bị điện/ ô tô, xe máy, xe
                    đạp, …
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Chơi 1 môn thể thao
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Đọc bản vẽ/ bản thiết kế
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Sử dụng/ vận hành/ bảo trì máy móc, thiết bị
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Sử dụng công cụ để tạo kiểu tóc mới cho mình
                    <br>
                    <input type="checkbox" name='C[]' value="1"> Tự may áo/váy/đầm cho mình
                </div>
            </div>
            <div class="text-center mt-4">
                <input type="submit" value="Tư vấn" name='submit' class="btn-primary btn">
            </div>
        </form>
        @isset($result)
            @include('components.holland.holland')
        @endisset
    </div>
@endsection
