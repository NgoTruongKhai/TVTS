<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <th>Mã Ngành</th>
            <th>Tên Ngành</th>
            <th>Mô tả</th>
        </thead>
        <tbody>
            @if ($nganh->count() != 0)
                @foreach ($nganh as $item)
                    <tr>
                        <td>{{ $item->ma_nganh }}</td>
                        <td>{{ $item->ten_nganh }}</td>
                        <td>{{ $item->thong_tin_nganh_hoc }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="text-center">Không tìm thấy ngành phù hợp</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
