<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-bold fs-4 text-danger ms-5">Kết quả</h5>

        <!-- Pie Chart -->
        <div id="pieChart"></div>
        @isset($result)
            @foreach ($result as $key => $val)
                <?php $labels[] = $key;
                $series[] = $val;
                ?>
            @endforeach
        @endisset
        <script type="text/javascript">
            let labels = <?php echo json_encode($labels); ?>;
            let series = <?php echo json_encode($series); ?>;
            document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#pieChart"), {
                    colors: ['#FF6045', '#FEB019', '#00E396', '#008FFB', '#775DD0', '#4576b5'],
                    series: series,
                    chart: {
                        height: 350,
                        type: 'pie',
                        toolbar: {
                            show: false
                        }
                    },
                    labels: labels
                }).render();
            });
        </script>
        <!-- End Pie Chart -->
    </div>
</div>
<table class="table table-striped border-1">
    <thead>
        <tr>
            <th>Mã nhóm</th>
            <th>Tên Nhóm</th>
            <th>Thuộc nhóm người</th>
            <th>Mô tả</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nhom_nganh as $item)
            <tr>
                <td>{{ $item->ma_nhom }}</td>
                <td>{{ $item->ten_nhom_nganh }}</td>
                <td>{{ $item->ten_nhom_nguoi }}</td>
                <td>{{ $item->mo_ta }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
