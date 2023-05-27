<div class="container">
    <table class="table table-striped">
        <thead>
            <th>Mã Ngành</th>
            <th>Tên Ngành</th>
            <th>Mô tả</th>
        </thead>
        <tbody>
            @foreach ($nganh as $item)
                <tr>
                    <td>{{ $item->ma_nganh }}</td>
                    <td>{{ $item->ten_nganh }}</td>
                    <td>{{ $item->thong_tin_nganh_hoc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
