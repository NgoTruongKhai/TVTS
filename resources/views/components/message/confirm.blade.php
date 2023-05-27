<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc là muốn xóa ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                {{-- <a type="button" class="btn btn-primary" id="btn-submit">Đồng ý</a> --}}

                <form method="post" action="" id="form-delete">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-primary" id="btn-submit">Đồng ý</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function follow(item) {
        document.getElementById("form-delete").action = item.href;
    }
</script>
