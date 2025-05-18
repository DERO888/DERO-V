<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="kos omk 3li omk/VvV.css">

<div class="row justify-content-center">
    <div class="row">
        <div class="col-lg-12">
            <?= $this->include('Layout/msgStatus') ?>
                                            </div>
                <div class="col-lg-12">
        <div class="bg-warning text-center">

                                            <i class=""></i> قائمة المفاتيح
                                    </div>
                                    </div>
        <div class="col-lg-12">
            <div class="card shadow-sm">
            <div class="card-header p3 bg-dark text-white">
                

                    <div class="row">
                        <div class="col pt-1">
                           <button class="btn btn-secondary btn-sm ms-1" id="blur-out" data-bs-toggle="tooltip" data-bs-placement="top" title="Eye Protect"><i class="bi bi-eye-slash"></i></button>
                                                         <a class="btn btn-outline-light btn-sm" href="<?= site_url('keys/generate') ?>"><i class="bi bi-person-plus"></i></a>
                        </div>
                        <div class="col text-end">

                        <div class="float-right">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-file-arrow-down-fill"></i> القائمة
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                                 <div class="card-header bg-light text-white h6 p-3">
                                     
                                     
                                        <li>
                                            <a class="dropdown-item" href="<?= site_url('keys/generate') ?>">
                                                <i class="bi bi-people style="color: red"></i> انشاء المفاتيح
                                            
                                            </a>
                                        </li>
                                         <br>
                                        <li>
                                 
                                  <a class="dropdown-item" href="<?= site_url('/keys/download/all') ?>">
                                                <i class="bi bi-bootstrap-reboot"></i> تحميل جميع المفاتيح
                                            </a>
                                        </li>
                                         <br>
                                    <li>
                                  <a class="dropdown-item" href="<?= site_url('/keys/download/new') ?>">
                                                <i class="bi bi-bootstrap-reboot"></i> تحميل المفاتيح الجديدة
                                            </a>
                                        </li>
                                         <br>
                                    <li>
                                  <a class="dropdown-item" href="<?= site_url('/keys/start') ?>">
                                                <i class="bi bi-bootstrap-reboot"></i> حذف المفتاح غير المستخدمة 
                                            </a>
                                        </li>
                                         <br>
                                    <li>
                                     <a class="dropdown-item" href="<?= site_url('/keys/alter') ?>">
                                                <i class="bi bi-bootstrap-reboot"></i> حذف المفاتيح المنتهي صلاحية
                                            </a>
                                        </li>
                                         <br>
                                    <li>                                                                   
                                </ul>
                                </ul>
                            </li>
                        </ul>
                    </div>
 </div>
 </div>
 </div>
                        
                        
<div class="bg-warning text-center">
                                                       
                                    </div>
           </div>
                    </div>
                </div>

                
                <div class="card-body">
                    <?php if ($keylist) : ?>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-hover text-white text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اللعبة</th>
                                        <th>المفاتيح</th>
                                        <th>الاجهزة</th>
                                        <th>الايام</th>
                                        <th>استخدام</th>
                                        <th>حول</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    <?php else : ?>
                        <p class="text-center">لا توجد مفاتيح حاليآ</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<?= link_tag("https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css") ?>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<?= script_tag("https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js") ?>

<?= script_tag("https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js") ?>
<script>
    $(document).ready(function() {
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, "desc"]
            ],
            ajax: "<?= site_url('keys/api') ?>",
            columns: [{
                    data: 'id',
                    name: 'id_keys'
                },
                {
                    data: 'game',
                },
                {
                    data: 'user_key',
                    render: function(data, type, row, meta) {
                        var is_valid = (row.status == 'Active') ? "text-success" : "text-danger";
                        return `<span class="${is_valid} keyBlur key-sensi">${(row.user_key ? row.user_key : '&mdash;')}</span> `;
                    }
                },
                {
                    data: 'devices',
                    render: function(data, type, row, meta) {
                        var totalDevice = (row.devices ? row.devices : 0);
                        return `<span id="devMax-${row.user_key}">${totalDevice}/${row.max_devices}</span>`;
                    }
                },
                {
                    data: 'duration',
                    render: function(data, type, row, meta) {
                        return row.duration;
                    }
                },
                {
                    data: 'expired',
                    name: 'expired_date',
                    render: function(data, type, row, meta) {
                        return row.expired ? `<span class="badge text-white">${row.expired}</span>` : '( غير مسجل )';
                    }
                },
                {
                      data: null,
                    render: function(data, type, row, meta) {
                        var btnReset = `<button class="btn btn-outline-danger btn-sm" onclick="resetUserKey('${row.user_key}')"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Reset key?"><i class="bi bi-bootstrap-reboot"></i></button>`;
                        var btnalterOne = `<button class="btn btn-outline-warning btn-sm" onclick="resetUserKey1('${row.user_key}')"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="DELETE KEY?"><i class="bi bi-trash-fill"></i></button>`;
                        var btnEdits = `<a href="${window.location.origin}/keys/${row.id}" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Edit key information?"><i class="bi bi-person"></i></a>`;
                        return `<div class="d-grid gap-2 d-md-block">${btnReset} ${btnalterOne} ${btnEdits}</div>`;
                    }
                }
            ]
        });

        $("#blur-out").click(function() {
            if ($(".keyBlur").hasClass("key-sensi")) {
                $(".keyBlur").removeClass("key-sensi");
                $("#blur-out").html(`<i class="bi bi-eye"></i>`);
            } else {
                $(".keyBlur").addClass("key-sensi");
                $("#blur-out").html(`<i class="bi bi-eye-slash"></i>`);
            }
        });
    });
    
    
    function resetUserKey1(keys) {
        Swal.fire({
            title: 'ملاحظة',
            text: "هل انت متاكد ان تريد حذف المفتاح ؟",
            icon: 'warning',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'نعم'
        }).then((result) => {
            if (result.isConfirmed) {
                Toast.fire({
                    icon: 'info',
                    title: 'الرجاء الانتظار ...'
                })

                var base_url = window.location.origin;
                var api_url = `${base_url}/keys/resetAll`;
                $.getJSON(api_url, {
                        userkey: keys,
                        reset: 1
                    },
                    function(data, textStatus, jqXHR) {
                        if (textStatus == 'success') {
                            if (data.registered) {
                                if (data.reset) {
                                    $(`#devMax-${keys}`).html(`0/${data.devices_max}`);
                                    Swal.fire(
                                        'بنجاح!',
                                        'تمت إعادة ضبط مفتاح جهازك.',
                                        'success'
                                    )
                                } else {
                                    Swal.fire(
                                        'فشل!',
                                        data.devices_total ? "ليس لديك أي حق الوصول إلى هذا المستخدم" : "تم إعادة ضبط جهاز مفتاح المستخدم بالفعل",
                                        data.devices_total ? 'error' : 'warning'
                                    )
                                }
                            } else {
                                Swal.fire(
                                    'فشل ❌',
                                    "مفتاح المستخدم لم يعد موجودآ",
                                    'error'
                                )
                            }
                        }
                    }
                );
            }
        });
    }
    
    function resetUserKey(keys) {
        Swal.fire({
            title: 'ملاحظة',
            text: "هل انت متاكد ان تريد اعادة تعيين المفتاح ؟",
            icon: 'warning',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'نعم',
        }).then((result) => {
            if (result.isConfirmed) {
                Toast.fire({
                    icon: 'info',
                    title: 'الرجاء الانتظار ...'
                })

                var base_url = window.location.origin;
                var api_url = `${base_url}/keys/reset`;
                $.getJSON(api_url, {
                        userkey: keys,
                        reset: 1
                    },
                    
                    function(data, textStatus, jqXHR) {
                        if (textStatus == 'success') {
                            if (data.registered) {
                                if (data.reset) {
                                    $(`#devMax-${keys}`).html(`0/${data.devices_max}`);
                                    Swal.fire(
                                        'بنجاح!',
                                        'تمت إعادة ضبط مفتاح جهازك.',
                                        'success'
                                    )
                                } else {
                                    Swal.fire(
                                        '❌ فشل',
                                        data.devices_total ? "ليس لديك أي حق الوصول إلى هذا المستخدم" : "تم إعادة ضبط جهاز مفتاح المستخدم بالفعل",
                                        data.devices_total ? 'error' : 'warning'
                                    )
                                }
                            } else {
                                Swal.fire(
                                    'فشل!',
                                    "مفتاح المستخدم لم يعد موجودآ",
                                    'error'
                                )
                            }
                        }
                    }
                );
            }
        });
    }
</script>

<?= $this->endSection() ?>