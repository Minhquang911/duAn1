<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky">
                <form class="p-3" id="searchForm">
                    <h5 class="text-primary">Tìm Kiếm Khuyến Mãi</h5>
                    <div class="mb-3">
                        <label for="searchName" class="form-label">Tìm Theo Tên Khuyến Mãi</label>
                        <input type="text" class="form-control" id="searchName" placeholder="Nhập tên khuyến mãi">
                    </div>
                    <div class="mb-3">
                        <label for="searchCode" class="form-label">Tìm Theo Mã Khuyến Mãi</label>
                        <input type="text" class="form-control" id="searchCode" placeholder="Nhập mã khuyến mãi">
                    </div>
                    <button type="button" class="btn btn-primary w-100" onclick="searchTable()">Tìm Kiếm</button>
                </form>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <section class="khuyen-mai-section py-5 bg-light">
                <div class="container">
                    <h1 class="text-center mb-4" style="color: #c29958;">Danh Sách Khuyến Mãi</h1>
                    <div id="example1_wrapper" class="table-responsive shadow-sm p-3 bg-white rounded">
                        <table id="example1" class="table table-hover align-middle table-striped table-bordered" style="border: 1px solid #c29958; overflow: hidden;">
                            <thead style="background: #c29958; color: white; border-bottom: 2px solid #a47a50;">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Khuyến Mãi</th>
                                    <th>Mô Tả</th>
                                    <th>Giá Trị Giảm (%)</th>
                                    <th>Ngày Bắt Đầu</th>
                                    <th>Ngày Kết Thúc</th>
                                    <th>Mã Khuyến Mãi</th>
                                    <th>Trạng Thái</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <?php if (!empty($khuyenMaiList)): ?>
                                    <?php foreach ($khuyenMaiList as $key => $khuyenMai): ?>
                                        <tr style="border-bottom: 1px solid #c29958;">
                                            <td class="text-center"><?= $key + 1 ?></td>
                                            <td class="text-truncate" style="max-width: 200px; border: 1px solid #c29958;"><?= htmlspecialchars($khuyenMai['ten_khuyen_mai']); ?></td>
                                            <td class="text-truncate" style="max-width: 250px; border: 1px solid #c29958;"><?= htmlspecialchars($khuyenMai['mo_ta']); ?></td>
                                            <td class="text-center" style="border: 1px solid #c29958;"><span class="badge bg-success"><?= htmlspecialchars($khuyenMai['discount_value']); ?>%</span></td>
                                            <td style="border: 1px solid #c29958;"><?= htmlspecialchars($khuyenMai['ngay_bat_dau']); ?></td>
                                            <td style="border: 1px solid #c29958;"><?= htmlspecialchars($khuyenMai['ngay_ket_thuc']); ?></td>
                                            
                                            <td style="border: 1px solid #c29958;">
                                                <div class="d-flex align-items-center">
                                                    <span id="code-<?= $khuyenMai['id']; ?>" class="badge text-white me-2" style="background: #c29958;">
                                                        <?= htmlspecialchars($khuyenMai['ten_khuyen_mai']); ?>
                                                    </span>
                                                    <button class="btn btn-outline-primary btn-sm" 
                                                            onclick="copyToClipboard('code-<?= $khuyenMai['id']; ?>')">
                                                        Copy
                                                    </button>
                                                </div>
                                            </td>
                                            <td style="border: 1px solid #c29958;">
                                                <span class="badge 
                                                    <?= $khuyenMai['trang_thai'] == 'active' ? 'bg-success' : 
                                                    ($khuyenMai['trang_thai'] == 'suspended' ? 'bg-warning text-dark' : 'bg-danger'); ?>">
                                                    <?= $khuyenMai['trang_thai'] == 'active' ? 'Đang hoạt động' : 
                                                    ($khuyenMai['trang_thai'] == 'suspended' ? 'Tạm dừng' : 'Đã hết hạn'); ?>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">Không có khuyến mãi nào.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>

<script>
function copyToClipboard(elementId) {
    const text = document.getElementById(elementId).innerText;
    navigator.clipboard.writeText(text).then(() => {
        alert('Đã sao chép: ' + text);
    }).catch(err => {
        console.error('Lỗi khi sao chép: ', err);
    });
}

function searchTable() {
    let inputName = document.getElementById('searchName').value.toLowerCase();
    let inputCode = document.getElementById('searchCode').value.toLowerCase();
    let table = document.getElementById('example1');
    let tr = table.getElementsByTagName('tr');

    for (let i = 1; i < tr.length; i++) {
        let tdName = tr[i].getElementsByTagName('td')[1];
        let tdCode = tr[i].getElementsByTagName('td')[7];
        if (tdName || tdCode) {
            let textValueName = tdName.textContent || tdName.innerText;
            let textValueCode = tdCode.textContent || tdCode.innerText;
            if ((textValueName.toLowerCase().indexOf(inputName) > -1 || inputName === '') &&
                (textValueCode.toLowerCase().indexOf(inputCode) > -1 || inputCode === '')) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
}

$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>

<style>
    .bg-gradient-primary {
        background: linear-gradient(90deg, #c29958, #a47a50);
    }
    .table-hover tbody tr:hover {
        background-color: #f0f8ff;
        transition: background-color 0.3s;
    }
    .badge {
        font-size: 0.9em;
    }
    .btn-sm {
        font-size: 0.8em;
    }
    #sidebar .form-label {
        font-weight: bold;
    }
    #sidebar .btn-primary {
        background-color: #c29958;
        border-color: #c29958;
    }
</style>
