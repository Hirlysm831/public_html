<!--t Aplikasi Sederhana Manajemen Surat Menyurat dengan PHP dan MySQLi t-->
<!--d Aplikasi sederhana manajemen surat dengan PHP, MySQLi dan Materializecss. Sebuah aplikasi sederhana untuk mengelola surat menyurat dengan tampilan material design. d-->
<!--tag source code tag-->
<!--image https://masrud.com/content/images/sc.png image-->

Halo, pada posting kali ini saya akan berbagi source code sebuah aplikasi sederhana untuk memanajemen surat menyurat.

Aplikasi ini dibuat dengan [PHP][1] dan  menggunakan style prosedural dalam penulisan kodenya sehingga lebih mudah dipelajari untuk pemula.

Untuk databasenya menggunakan MySQLi  yang merupakan pengembangan dari MySQL yang sudah tidak disupport lagi oleh pihak pengembang.

Sedangkan pada sektor tampilan, menggunakan framework [Materializecss][2] yang menghasilkan tampilan keren ala Google yaitu material design.

Aplikasi sederhana manajemen surat menyurat ini memiliki beberapa fitur, antara lain:

  - Membuat dan mencetak disposisi surat masuk.
  - Membuat dan mencetak buku agenda surat masuk dan keluar berdasarkan tanggal tertentu.
  - Upload lampiran file surat, baik file scan/gambar(JPG dan PNG) maupun file dokumen (DOC, DOCX dan PDF).
  - Galeri file lampiran yang telah diupload ke dalam aplikasi.
  - Upload kode klasifikasi surat (file excel berformat CSV).
  - Multi user.
  - Edit password.
  - Backup dan restore database.

Untuk menggunakan aplikasi ini ada beberapa pengaturan yang harus dilakukan, antara lain:

<h5>1. Pengaturan database aplikasi</h5>

 - Buka folder **include** lalu edit file **config.php**.
 - Kemudian atur nama host, nama database, user database dan password database sesuai dengan yang Anda gunakan.

```
<?php
    $host = "localhost";  //hostname
    $username = "root";   //username database
    $password = "root";   //password database
    $database = "ams";    //nama database
    $config = mysqli_connect($host, $username, $password, $database);

    if(!$config){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
```

<h5>2. Pengaturan database kode surat</h5>

Untuk menggunakan fitur auto complete kode surat, kita harus mengatur databasenya terlebih dahulu. Caranya:

 - Edit file **kode.php** lalu sesuaikan pengaturan database sesuai dengan yang Anda gunakan.

Cara menggunakan fitur ini yaitu ketika menambahkan data surat baru, tuliskan nomor kode surat sehingga muncul pilihan kode surat yang ada pada daftar kode klasifikasi surat.

<h5>3. Pengaturan fitur backup database</h5>
Untuk menggunakan fitur backup database, kita harus mengatur konfigurasi database yang ingin dibackup. Caranya:

 - Edit file **backup.php** lalu sesuaikan pengaturan database sesuai dengan yang Anda gunakan.

```
backup("nama_host", "username", "password", "nama_database", $file, "*");
```

<div class="warning"><b>Catatan:</b> Fitur backup database ini tidak berfungsi pada PHP versi 7.</div>

<h5>4. Pengaturan fitur restore database</h5>
Sama halnya dengan fitur backup database, fitur restore database juga harus di setting terlebih dahulu.

 - Edit file **restore.php** sesuaikan dengan dengan pengaturan yang Anda gunakan.

```
$koneksi = mysqli_connect("nama_host", "username", "password", "nama_database");
```

Setelah melakukan beberapa setting database di atas, aplikasi sudah dapat digunakan.

Berikut beberapa screenshoot tampilan aplikasi.

<amp-img src="https://masrud.com/content/images/20170417105239-dashboard.jpg" width="800" height="450" layout="responsive" alt="Dashboard"></amp-img>
<figcaption>Dashboard</figcaption>

<amp-img src="https://masrud.com/content/images/20170417105536-tsm.jpg" width="800" height="450" layout="responsive" alt="Transaksi Surat Masuk"></amp-img>
<figcaption>Transaksi Surat Masuk</figcaption>

<amp-img src="https://masrud.com/content/images/20170417105605-tambah_sm.jpg" width="800" height="450" layout="responsive" alt="Form Tambah Surat Masuk"></amp-img>
<figcaption>Form Tambah Surat Masuk</figcaption>

<amp-img src="https://masrud.com/content/images/20170417105626-agenda.jpg" width="800" height="450" layout="responsive" alt="Daftar Agenda Surat"></amp-img>
<figcaption>Daftar Agenda Surat</figcaption>

<amp-img src="https://masrud.com/content/images/20170417105655-cetak%20disposisi.jpg" width="800" height="450" layout="responsive" alt="Cetak Disposisi Surat"></amp-img>
<figcaption>Cetak Disposisi Surat</figcaption>

<amp-img src="https://masrud.com/content/images/20170417105733-kode%20klasifikasi.jpg" width="800" height="450" layout="responsive" alt="Kode Klasifikasi Surat"></amp-img>
<figcaption>Kode Klasifikasi Surat</figcaption>

<amp-img src="https://masrud.com/content/images/20170417105753-instansi.jpg" width="800" height="450" layout="responsive" alt="Pengaturan Instansi"></amp-img>
<figcaption>Pengaturan Instansi</figcaption>

<amp-img src="https://masrud.com/content/images/20170417105811-galeri%20file.jpg" width="800" height="450" layout="responsive" alt="Galeri File"></amp-img>
<figcaption>Galeri File</figcaption>

Aplikasi ini masih sangat banyak kekurangan dan masih perlu penyempurnaan dan pengembangan. Meskipun demikian aplikasi ini sudah dapat digunakan.

Aplikasi ini juga dapat digunakan untuk tugas akhir sekolah atau kuliah, tentunya dengan pengembangan.

Untuk source code aplikasi ini bisa di download <u>**<a href="https://goo.gl/8ckM3B" target="_blank">disini</a>**</u>

Semoga bermanfaat.

<div class="warning"><b>PENTING:</b> Aplikasi ini bebas untuk dipelajari dan digunakan, namun SANGAT TIDAK DISARANKAN untuk digunakan dalam ujian tugas akhir/UKK/skripsi bagi siswa/mahasiswa.</div>

  [1]: https://masrud.com/tag/php
  [2]: http://materializecss.com/