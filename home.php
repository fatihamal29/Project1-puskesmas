<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Projek 1 - Aplikasi Web Sederhana Puskesmas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <h4 class="text-center mt-4"><b>Selamat Datang Di Aplikasi Web Sederhana Puskesmas FIA</b> <br><i>Projek 1 - Pemrograman Web 2</i></h4>
                        <hr style="border-bottom: 1px solid black;">

                        <fieldset>
                        <legend style="color: black; font-weight: bold;">Pengumuman</legend>
                        <article style="text-align: justify; color: black;"><span style="font-size: 150%;">D</span>iberitahukan kepada seluruh pegawai Forcebit, bahwa terdapat beberapa pembaruan dan informasi penting yang perlu diperhatikan. Mohon untuk membaca dengan seksama dan mengambil tindakan yang diperlukan:
                        <ol>
                        <li>
                            <b>Jadwal Pelayanan:</b> Senin - Jumat:

Pagi (07.00 - 13.00): Pelayanan Umum dan Konsultasi Dokter Umum<br>
Siang (13.00 - 14.00): Istirahat dan Persiapan<br>
Sore (14.00 - 17.00): Pelayanan Umum dan Konsultasi Dokter Umum<br>
Sabtu:

Pagi (07.00 - 13.00): Pelayanan Umum dan Konsultasi Dokter Umum<br>
Siang (13.00 - 14.00): Istirahat dan Persiapan<br>
Sore (14.00 - 16.00): Pelayanan Umum dan Konsultasi Dokter Umum<br>
Minggu & Hari Libur Nasional: Tutup<br>


                        </li>
                        <li>
                            <b>Catatan:</b> Jadwal ini dapat bervariasi tergantung pada kebijakan dan kebutuhan <br>spesifik dari Puskesmas tertentu.
Kadang-kadang, Puskesmas dapat memiliki jadwal khusus untuk layanan-layanan tertentu seperti imunisasi, pemeriksaan kesehatan ibu dan anak, atau layanan kesehatan lainnya.
Selain dokter umum, Puskesmas juga dapat memiliki dokter spesialis tertentu yang memberikan layanan pada hari-hari tertentu. Jadwal ini akan disesuaikan dengan jadwal dokter spesialis tersebut.
                        </li>
                        </ol>    
                        Mohon perhatikan pengumuman ini dengan baik. Terima kasih atas perhatiannya.
                        </article>
                        </fieldset>

                        <!-- KALENDER -->
                        <hr style="border-bottom: 1px solid black;">
                        <fieldset class="mb-3">
                        
                        
                        <legend style="color: black; font-weight: bold;">Calendar</legend>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="calendar calendar-first" id="calendar_first" style="max-width: 750px;">
                                    <div class="calendar_header">
                                        <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                                        <h2></h2>
                                        <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <div class="calendar_weekdays rounded" style="max-width: 750px;"></div>
                                    <div class="calendar_content rounded" style="background-color: #6c757d; max-width: 750px;"></div>
                                    </div>
                                </div>
                            </div>
                        
                        </fieldset>
                        <!-- KALENDER -->
                        
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Projek 1 - Aplikasi Web Sederhana Puskesmas
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>