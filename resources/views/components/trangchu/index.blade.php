@extends('index')
@section('content')
    <div class=" mb-4 text-white rounded bg-image container shadow p-0">
        <div class=" px-0 ">
            <img src="{{ asset('/uploads/image3.jpg') }}" alt="" style="width: 100%; height: 400px;" class=" mt-3">
        </div>
    </div>
    <div class="container shadow mt-0 mb-2 position-static">
        <main class="mb-2">
            <div class="row mb-2">
                <div class="col-md-3">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mt-3">
                        <div class="col p-4 d-flex flex-column position-static bg-success-light">
                            <strong class="d-inline-block mb-2 text-primary text-center fs-5">Điểm chuẩn các năm</strong>
                            <p class="card-text mb-auto text-center">
                                <i class="fa-solid fa-chart-simple fa-2xl" style="color: #0255e3;"></i>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mt-3">
                        <div class="col p-4 d-flex flex-column position-static bg-warning">
                            <strong class="d-inline-block mb-2 text-success text-center fs-5">Thông tin tuyển sinh</strong>
                            <p class="mb-auto text-center"><i class="fa-solid fa-circle-info fa-2xl"
                                    style="color: #00b34d;"></i></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mt-3">
                        <div class="col p-4 d-flex flex-column position-static bg-dark-light">
                            <strong class="d-inline-block mb-2 text-info text-center fs-5">Đào tạo quốc tế</strong>
                            <p class="mb-auto text-center"><i class="fa-solid fa-globe fa-2xl" style="color: #518ffb;"></i>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mt-3">
                        <div class="col p-4 d-flex flex-column position-static text-center bg-info">
                            <strong class="d-inline-block mb-2 text-danger fs-5">Câu hỏi thường gặp</strong>
                            <p class="mb-auto text-center"><i class="fa-solid fa-circle-question fa-2xl"
                                    style="color: #f72222;"></i></p>
                        </div>

                    </div>
                </div>
            </div>
            {{-- left --}}
            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="mb-4"><b><u>Tuyển sinh Đại học chính quy</u></b></h3>
                    <ol class="list-unstyled mb-0 row">
                        <li class="col-sm-6"><a href="#">Lịch ôn thi năng khiếu ngành Giáo dục mầm non</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"> <a href="#" class="">Thông báo về việc sử dụng kết quả quy đổi
                                chứng chỉ Tiếng Anh
                                quốc tế thành điểm xét tuyển môn Tiếng Anh trong tuyển sinh đại học chính quy năm 2023</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Quy định nội dung thi năng khiếu ngành Giáo
                                dục Mầm non, ngành
                                Sư phạm Âm nhạc, ngành Sư phạm Mĩ thuật tuyển sinh đại học chính quy năm 2023</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Thông báo về việc ôn thi năng khiếu tuyển sinh
                                đại học chính
                                quy năm 2023 ngành Giáo dục Mầm non</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Thông tin tuyển sinh đại học chính quy năm
                                2023 (dự kiến)</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Tra cứu kết quả trúng tuyển đợt 1 đại học
                                chính quy năm
                                2022</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                    </ol>
                    <hr>
                    <h3 class="mb-4"><b><u>Tuyển sinh Đại học chính quy</u></b></h3>
                    <ol class="list-unstyled mb-0 row">
                        <li class="col-sm-6"><a href="#">Lịch ôn thi năng khiếu ngành Giáo dục mầm non</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"> <a href="#" class="">Thông báo về việc sử dụng kết quả quy đổi
                                chứng chỉ Tiếng Anh
                                quốc tế thành điểm xét tuyển môn Tiếng Anh trong tuyển sinh đại học chính quy năm 2023</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Quy định nội dung thi năng khiếu ngành Giáo
                                dục Mầm non, ngành
                                Sư phạm Âm nhạc, ngành Sư phạm Mĩ thuật tuyển sinh đại học chính quy năm 2023</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Thông báo về việc ôn thi năng khiếu tuyển sinh
                                đại học chính
                                quy năm 2023 ngành Giáo dục Mầm non</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Thông tin tuyển sinh đại học chính quy năm
                                2023 (dự kiến)</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                        <li class="col-sm-6"><a href="#" class="">Tra cứu kết quả trúng tuyển đợt 1 đại học
                                chính quy năm
                                2022</a>
                            <p class="ms-2 opacity-50 mb-1">March 2021</p>
                        </li>
                    </ol>
                    <hr>
                    <h3 class="mb-4"><b><u>Tin tức</u></b></h3>
                    <ol class="list-unstyled mb-0 row">
                        <li class="col-sm-6">
                            <div class="card shadow-none">
                                <img class="card-img-top"
                                    src="https://tuyensinh.sgu.edu.vn/wp-content/uploads/2019/07/SGU_AUNQA-788x1024-231x300.png"
                                    alt="Card image cap" style="height: 200px;">
                                <div class="card-body">
                                    <a class="card-text">Đại học Sài Gòn trở thành Thành viên Liên kết của Mạng lưới Đảm bảo
                                        chất lượng AUN – QA</a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-6">
                            <div class="card shadow-none">
                                <img class="card-img-top"
                                    src="https://tuyensinh.sgu.edu.vn/wp-content/uploads/2019/03/slider2_1240x450-1.jpg"
                                    alt="Card image cap" style="height: 200px;">
                                <div class="card-body">
                                    <a class="card-text">ĐH Sài Gòn công bố điểm sàn 2019, cao nhất là 20 điểm</a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-6">
                            <div class="card shadow-none">
                                <img class="card-img-top"
                                    src="https://tuyensinh.sgu.edu.vn/wp-content/uploads/2019/04/thiet-lap-he-thong-tin-ho-tro-cong-tac-thi-300x183.jpg"
                                    alt="Card image cap" style="height: 200px;">
                                <div class="card-body">
                                    <a class="card-text">Bộ GD-ĐT thiết lập hệ thống thông tin hỗ trợ thi, tuyển sinh</a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-6">
                            <div class="card shadow-none">
                                <img class="card-img-top"
                                    src="https://tuyensinh.sgu.edu.vn/wp-content/uploads/2019/04/thi-sinh-1-300x203.jpg"
                                    alt="Card image cap" style="height: 200px;">
                                <div class="card-body">
                                    <a class="card-text">‘Chuyển hướng’ đáng chú ý về đề thi THPT quốc gia năm 2019</a>
                                </div>
                            </div>
                        </li>

                    </ol>
                </div>

                {{-- right --}}
                <div class="col-md-4">
                    <div class="position-sticky " style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">About</h4>
                            <p class="mb-0">Customize this section to tell your visitors a little bit about your
                                publication, writers, content, or something else entirely. Totally up to you.</p>
                        </div>
                        <hr>
                        <div class="p-4">
                            <h4 class="fst-italic">Liên hệ</h4>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <img src="{{ asset('/uploads/contact.png') }}" alt=""
                                        style="width: fit-content;">
                                </div>
                                <div class="card-body col-lg-12">
                                    <div class="card-title text-danger fw-bold">
                                        Bà Dương Thị Thu Vân
                                    </div>
                                    <p><b>Chức vụ:</b> Chuyên viên phòng Đào tạo</p>
                                    <p><b>Điện thoại:</b> 028.38338975</p>
                                    <p><b>Email:</b> vandt2512@gmail.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <img src="{{ asset('/uploads/contact.png') }}" alt=""
                                        style="width: fit-content;">
                                </div>
                                <div class="card-body col-lg-12">
                                    <div class="card-title text-danger fw-bold">
                                        Bà Dương Thị Thu Vân
                                    </div>
                                    <p><b>Chức vụ:</b> Chuyên viên phòng Đào tạo</p>
                                    <p><b>Điện thoại:</b> 028.38338975</p>
                                    <p><b>Email:</b> vandt2512@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
