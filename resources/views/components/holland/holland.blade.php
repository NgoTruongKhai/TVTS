<table class="table">
    <thead>
        <tr>
            <th colspan="3" class="fs-5 fw-bold text-center">Kết quả</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Nhóm</th>
            <th>Mô tả</th>
            <th>Các ngành học phù hợp</th>
        </tr>
        @foreach ($result as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->major }}</td>
                {{-- <td>Đây là những người thích vận động thể thao hoặc có khả năng làm việc tốt với máy móc, vật thể, công
                    cụ, cây cảnh hoặc con vật, hoặc thích làm việc ngoài trời.</td>
                <td>Ngành công nghệ thông tin, Kỹ thuật ô tô, ...</td> --}}
            </tr>
        @endforeach

    </tbody>
</table>
