<nav class="navbar navbar-expand-lg bg-dark bg-opacity-75 shadow sticky-top">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ route('home') }}">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white me-2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tư vấn chọn ngành học
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('TVTS-diem') }}">Tư vấn theo điểm thi</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('TVTS-holland') }}">Tư vân theo thuyết Holland</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('TVTS-kethop') }}">Tư vấn theo sở thích và khả
                                năng</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Tuyển sinh đại học quốc
                        tế</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Tư vấn tuyển sinh</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
