<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Instagram Lapor Hendi</title>
    <link rel="shortcut icon" href="assets/images/logo-kota-semarang.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">

    <style>

    </style>
</head>

<body>
    <!-- <div id="mdb-preloader" class="flex-center">
        <div class="preloader-wrapper active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark animated slideInDown">
        <!-- Container wrapper -->
        <div class="container-fluid d-flex justify-content-center align-items-center">

            <!-- Navbar brand -->
            <div>
                <img class="img-fluid" src="assets/images/logo-kota-semarang.png" alt="logo kota semarang" style="max-height: 2.5rem;">
                <a class="navbar-brand ml-2" href="https://kecgajahmungkur.semarangkota.go.id/">Kecamatan Gajahmungkur</a>
            </div>

        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container-fluid mt-4">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Card -->
                <div class="card gradient-card animated slideInLeft slow">

                    <div class="card-image rounded" style="background-image: url(assets/images/study.jpg)">

                        <!-- Content -->
                        <a href="#!">
                            <div class="text-white d-flex h-100 mask blue-gradient-rgba rounded">
                                <div class="col-8 first-content align-self-center p-3">
                                    <h5 class="card-title">Total Aduan</h5>
                                    <h3 id="panelTotalAduan" class="mb-0">
                                        <div class="preloader-wrapper small active">
                                            <div class="spinner-layer spinner-blue-only" style="border-color: white;">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="gap-patch">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-4 second-content align-self-center mx-auto text-center">
                                    <i class="far fa-chart-bar fa-3x"></i>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Card -->
                <div class="card gradient-card animated slideInRight slow">

                    <div class="card-image rounded" style="background-image: url(assets/images/study.jpg)">

                        <!-- Content -->
                        <a href="#!">
                            <div class="text-white d-flex h-100 mask purple-gradient-rgba rounded">
                                <div class="col-8 first-content align-self-center p-3">
                                    <h5 class="card-title">Total Aduan Bulanan</h5>
                                    <h3 id="panelTotalAduanBulanan" class="mb-0">
                                        <div class="preloader-wrapper small active">
                                            <div class="spinner-layer spinner-blue-only" style="border-color: white;">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="gap-patch">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-4 second-content align-self-center mx-auto text-center">
                                    <i class="fas fa-chart-line fa-3x"></i>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Card -->
                <div class="card gradient-card animated slideInLeft slow">

                    <div class="card-image rounded" style="background-image: url(assets/images/study.jpg)">

                        <!-- Content -->
                        <a href="#!">
                            <div class="text-white d-flex h-100 mask peach-gradient-rgba rounded">
                                <div class="col-8 first-content align-self-center p-3">
                                    <h5 class="card-title">Total Aduan Keluhan</h5>
                                    <h3 id="panelTotalAduanKeluhan" class="mb-0">
                                        <div class="preloader-wrapper small active">
                                            <div class="spinner-layer spinner-blue-only" style="border-color: white;">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="gap-patch">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-4 second-content align-self-center mx-auto text-center">
                                    <i class="far fa-frown-open fa-3x"></i>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Card -->
                <div class="card gradient-card animated slideInRight slow">

                    <div class="card-image rounded" style="background-image: url(assets/images/study.jpg)">

                        <!-- Content -->
                        <a href="#!">
                            <div class="text-white d-flex h-100 mask aqua-gradient-rgba rounded">
                                <div class="col-8 first-content align-self-center p-3">
                                    <h5 class="card-title">Total Aduan Lainnya</h5>
                                    <h3 id="panelTotalAduanLainnya" class="mb-0">
                                        <div class="preloader-wrapper small active">
                                            <div class="spinner-layer spinner-blue-only" style="border-color: white;">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="gap-patch">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-4 second-content align-self-center mx-auto text-center">
                                    <i class="far fa-grin fa-3x"></i>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <div class="card mb-4 mt-2 animated slideInUp slow delay-1s">
            <div class="card-header white-text aqua-gradient">
                Tabel Data Aduan
            </div>
            <div class="card-body px-4 mb-3">
                <div class="table-responsive text-nowrap">
                    <table id="tabelAduan" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Pelapor</th>
                                <th>Waktu</th>
                                <th>Postingan</th>
                                <th>Kategori</th>
                                <th>Isi Aduan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small" style="background-color: rgba(0, 0, 0, 0.3)">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-2">©
            <script>
                document.write(new Date().getFullYear())
            </script> Copyright:
            <a href="https://kecgajahmungkur.semarangkota.go.id/" style="text-decoration:none;"> Kecamatan Gajahmungkur</a>
            <div>- developed by. <cite title="Thio Van"><a href="https://github.com/thiovan" style="color: inherit;
        text-decoration: inherit;">Thio Van</a></cite>
            </div>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- Full Height Modal Right -->
    <div class="modal fade right" id="modalIsiAduan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-full-height modal-right modal-notify modal-primary" role="document">
            <!-- Content -->
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-header">
                    <p class="heading lead">Isi Aduan</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!-- Body -->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-envelope-open-text fa-4x mb-3 animated rotateIn"></i>
                        <p id="isiAduan">
                            -
                        </p>
                    </div>
                </div>

                <!-- Footer -->
                <div class="modal-footer justify-content-center">
                    <button id="btnCopy" type="button" class="btn btn-primary btn-block" data-clipboard-text="init" data-trigger="click" data-placement="bottom"><i class="far fa-copy mr-1"></i> Salin Teks</button>
                </div>
            </div>
            <!-- Content -->
        </div>
    </div>
    <!-- Full Height Modal Right -->

    <!-- Full Height Modal Right -->
    <div class="modal fade right" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
            <!-- Content -->
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-header">
                    <p class="heading lead">Ubah Kategori Aduan</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!-- Body -->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-edit fa-4x mb-3 animated rotateIn"></i>
                        <div class="row mt-3">
                            <div class="col-12">
                                <select id="selectCategory" class="mdb-select md-form colorful-select dropdown-info">
                                    <option value="">Tanpa Kategori</option>
                                </select>
                                <label class="mdb-main-label">Pilih Kategori Aduan</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="modal-footer justify-content-center">
                    <button id="btnSave" type="button" class="btn btn-info btn-block"><i class="far fa-save mr-1"></i> Simpan</button>
                </div>
            </div>
            <!-- Content -->
        </div>
    </div>
    <!-- Full Height Modal Right -->

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mdb.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script>
        // $(window).on('load', function() {
        //     $('#mdb-preloader').delay(1000).fadeOut(300);
        // });

        toastr.options = {
            positionClass: 'md-toast-bottom-right'
        };

        $(document).ready(function() {
            $('.mdb-select').materialSelect();

            fetchPanel();
            fetchCategory();
        });

        function fetchPanel() {
            $.getJSON("api/panel", function(data) {
                setTimeout(function() {
                    $('#panelTotalAduan').html(data.total.aduan);
                    $('#panelTotalAduanBulanan').html(data.total.bulanan);
                    $('#panelTotalAduanKeluhan').html(data.total.keluhan);
                    $('#panelTotalAduanLainnya').html(data.total.lainnya);
                }, 1000);
            });
        }

        function fetchCategory() {
            $.getJSON("api/category", function(data) {
                setTimeout(function() {
                    for (const category of data) {
                        $('#selectCategory').append(`
                            <option value="${category.id}">${category.label}</option>
                        `);
                    }
                }, 1000);
            });
        }

        var clipboard = new ClipboardJS('.btn', {
            container: document.getElementById('modalIsiAduan')
        });

        clipboard.on('success', function(e) {
            setTooltip(e.trigger, 'Berhasil Disalin!');
            hideTooltip(e.trigger);
        });

        clipboard.on('error', function(e) {
            setTooltip(e.trigger, 'Gagal Disalin!');
            hideTooltip(e.trigger);
        });

        function setTooltip(btn, message) {
            $(btn).tooltip('hide')
                .attr('data-original-title', message)
                .tooltip('show');
        }

        function hideTooltip(btn) {
            setTimeout(function() {
                $(btn).tooltip('hide');
            }, 3000);
        }

        var initCompleteCallback = function() {
            $('.btn-lihat-aduan').unbind('click');
            $('.btn-ubah-kategorin').unbind('click');
            $('#btnSave').unbind('click');

            $('.btn-lihat-aduan').on('click', function() {
                var data = table.row($(this).parents('tr')).data();
                $('#isiAduan').text(data.text);
                $('#btnCopy').attr('data-clipboard-text', data.text);
                $('#modalIsiAduan').modal('show');
            });

            $('.btn-ubah-kategori').on('click', function() {
                var data = table.row($(this).parents('tr')).data();
                $('#btnSave').data('id', data.id);
                $('#modalUbah').modal('show');
            });

            $('#btnSave').on('click', function() {
                updateCategory();
            });

            $('#modalUbah').modal('hide');
        }

        function updateCategory() {
            $('#btnSave').html(`
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>
            `);
            $.post("api/category/update", {
                id: $('#btnSave').data('id'),
                flag_id: $("#selectCategory").val(),
            }, function(data) {
                $('#btnSave').html(`
                    <i class="far fa-save mr-1"></i> Simpan
                `);
                table.ajax.reload(initCompleteCallback);
                fetchPanel();
                toastr.success('Data berhasil disimpan.');
            }).fail(function (xhr) {
                $('#btnSave').html(`
                    <i class="far fa-save mr-1"></i> Simpan
                `);
                toastr.error(xhr.responseText, 'Data gagal disimpan.');
            });

        }

        var table = $('#tabelAduan').DataTable({
            processing: true,
            ajax: {
                url: "api/table",
                dataSrc: "",
                cache: true
            },
            order: [
                [1, "desc"]
            ],
            columns: [{
                    render: function(data, type, row, meta) {
                        return `
                            <a href="https://www.instagram.com/${row.from}/" target="_blank">@${row.from}</a>
                        `;
                    }
                },
                {
                    data: "created_at"
                },
                {
                    render: function(data, type, row, meta) {
                        return `
                            <a href="${row.url}" target="_blank">${row.url}</a>
                        `;
                    }
                },
                {
                    render: function(data, type, row, meta) {
                        if (row.flag_id) {
                            return `
                                <span class="badge badge-pill badge-${row.color}" style="font-size: 0.75rem;">${row.label}</span>
                            `;
                        } else {
                            return `
                                <span class="badge badge-pill badge-dark" style="font-size: 0.75rem;">Belum Dikategorikan</span>
                            `;
                        }
                    }
                },
                {
                    render: function(data, type, row, meta) {
                        return `
                            <button class="btn btn-primary btn-sm btn-lihat-aduan" style="margin-top: -5px; margin-bottom: 0;"><i class="fas fa-eye mr-1"></i> Lihat</button>
                        `;
                    }
                },
                {
                    render: function(data, type, row, meta) {
                        return `
                            <button class="btn btn-info btn-sm btn-ubah-kategori" style="margin-top: -5px; margin-bottom: 0;"><i class="fas fa-edit mr-1"></i> Ubah</button>
                        `;
                    }
                }
            ],
            initComplete: initCompleteCallback
        });
    </script>
</body>

</html>