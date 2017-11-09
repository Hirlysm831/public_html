<!--t Download Aplikasi Arsip Data Siswa dengan PHP CodeIgniter t-->
<!--d Download aplikasi sederhana manajemen arsip data siswa (ijazah, skhun, dll) dengan PHP, CodeIgniter, Datatables dan Bootstrap. d-->
<!--tag source code tag-->
<!--image https://masrud.com/content/images/20170809112827-ardis%20home.png image-->

Administrasi merupakan salah satu kegiatan yang pasti dilakukan pada setiap instansi, termasuk instansi pendidikan/sekolah. Kegiatan administrasi dilakukan agar suatu instansi tersebut dapat berjalan sebagimana mestinya.

Salah kegiatan adminitrasi di sekolah adalah **pengarsipan data dokumen siswa**. Pengarsipan adalah suatu proses mengumpulkan, mengelola dan menyimpan data secara teratur dan terstruktur yang jika dibutuhkan sewaktu-waktu dapat dilihat/digunakan kembali.

Pengarsipan data dokumen siswa dapat dilakukan secara manual maupun secara digital.

Pengarsipan secara manual dilakukan dengan mengumpulkan semua data dokumen siswa kemudian mendatanya dan mengkategorikan berkas serta indeks dokumen siswa kemudian menyimpan dokumen tersebut kedalam lemari arsip.

Sedangkan pengarsipan digital hampir sama dengan manual, bedanya sebelum dokumen disimpan pada lemari arsip, data dokumen tersebut diinputkan terlebih dahulu ke dalam sistem arsip digital.

Untuk mengarsipkan data siswa secara digital maka diperlukan suatu aplikasi. Nah, berikut ini saya bagikan sebuah aplikasi sederhana untuk mengarsipkan data dokumen siswa.

Aplikasi ini dibuat menggunakan framework [CodeIgniter][1], MySQL, jQuery, Ajax, Datatables dan Bootstrap untuk tampilannya. Sebenarnya aplikasi ini terdiri dari dua aplikasi yaitu ARDIS dan ARDOS serta menggunakan satu database.

ARDIS dapat digunakan tanpa ARDOS, namun ARDOS tidak dapat digunakan tanpa ARDIS. Alasannya karena data siswa yang digunakan dalam ARDOS harus diinputkan terlebih dahulu melalui ARDIS.

**Kenapa tidak satu aplikasi saja?**

Sebenarnya aplikasi ini adalah permintaan teman yang minta untuk dibuatkan aplikasi sederhana untuk mendata siswa yang sudah mengumpulan ijazah atau belum saat pendaftaran siswa baru (ARDIS).

Kemudian selang beberapa hari minta lagi untuk dibuatkan aplikasi yang mengelola lokasi arsip data dokumen siswa (ARDOS). Nah, karena repot menggunakan dua aplikasi yang hampir sama secara bersamaan, akhirnya kedua aplikasi tersebut digabung menjadi satu (Namun itu tidak saya bagikan).

### 1. ARDIS
Arsip Digital Siswa (ARDIS) adalah aplikasi sederhana untuk mengelola data administrasi siswa secara digital, dilengkapi dengan beberapa fitur, antara lain:

- Import data siswa (format *.CSV)
- Upload data administrasi siswa berupa:
    - Kartu Keluarga
    - KTP Ayah
    - KTP Ibu
    - KIP / KPS
    - SKTM (Surat Keterangan Tidak Mampu)
    - Ijazah
    - SKHUN
- Rekap kelengkapan data siswa berdasarkan kelas, jurusan dan status kelengkapan data
- Arsip siswa berdasarkan status siswa yang tidak aktif
- Cetak detail siswa
- Multiuser
- Ajax search pada homepage
- Fitur search, filter, pagging dan show perpage pada halaman list data
- Notifikasi error input berbahsa Indonesia
- Reset password oleh admin (password default setelah reset: mberu3)
- Ubah nama dan password

**Link demo:**

<a href="https://ardis.smkmuh3nganjuk.sch.id/" target="_blank">https://ardis.smkmuh3nganjuk.sch.id/</a>

Username dan password : <u>admin</u>

#### Tampilan ARDIS
<amp-img src="https://masrud.com/content/images/20170809112827-ardis%20home.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardis Homepage</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213235-ardis%20dashboard.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardis Dashboard</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213250-ardis%20data%20siswa.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardis Siswa</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213309-ardis%20detail%20data%20siswa.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardis Detail Siswa</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213338-ardis%20rekap.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardis Rekap Data Siswa</figcaption>

### 2. ARDOS
Arsip Dokumen Siswa (ARDOS) adalah aplikasi sederhana untuk mengelola arsip / penempatan lokasi dokumen data siswa, dilengkapi dengan beberapa fitur, antara lain:

- Menggunakan database yang sama dengan ARDIS
- Cek list kelengkapan data:
    - Kartu Keluarga
    - KTP Ayah
    - KTP Ibu
    - KIP / KPS
    - SKTM (Surat Keterangan Tidak Mampu)
    - Ijazah
    - SKHUN
- Lokasi dokumen berdasarkan lemari, bendel, map serta kode map
- Otomatis mengubah status siswa menjadi tidak serta mengarsipkan data siswa jika dokumen siswa diambil karena lulus/keluar
- Pinjam dan kembalikan ijazah
- Rekap jumlah data pinjaman (ijazah dan skhun)
- Multiuser
- Ajax search pada homepage
- Fitur search, filter, pagging dan show perpage pada halaman list data
- Notifikasi error input berbahsa Indonesia

**Link demo:**

<a href="https://ardos.smkmuh3nganjuk.sch.id/" target="_blank">https://ardos.smkmuh3nganjuk.sch.id/</a>

Username dan password : <u>admin</u>

#### Tampilan ARDOS
<amp-img src="https://masrud.com/content/images/20170809213401-ardos%20home.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardos Homepage</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213437-ardos%20dashboard.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardos Dashboard</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213453-ardos%20data%20dokumen.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardos Dokumen</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213510-ardos%20detail%20data%20dokumen.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardos Detail Dokumen</figcaption>

<amp-img src="https://masrud.com/content/images/20170809213523-ardos%20arsip.png" alt="Download aplikasi arsip data siswa dengan CodeIgniter" height="675" width="1200" layout="responsive"></amp-img><figcaption>Ardos Arsip</figcaption>

#### Kebutuhan Sistem
 1. PHP versi 5.5 atau lebih baru 
 2. XAMPP versi 3.2.1 atau lebih baru

#### Konfigurasi
Untuk menggunakan kedua aplikasi ini, silakan setting databasenya terlebih dahulu.
Silakan buka folder **application** -> **config** lalu ubah file **database.php** dan sesuaikan nama hostname, username, password serta database dengan yang Anda gunakan.

<u>**<a href="https://goo.gl/fqopGn" target="_blank">Download</a>**</u>

Semoga aplikasi sederhana ini dapat bermanfaat bagi Anda, jangan lupa share ke teman-teman Anda dan like fanspage blog ini.

Jika masih bingung dengan cara setting maupun alur aplikasi ini, silakan hubungi saya via kontak yang tertera di bagian bawah blog ini.

  [1]: https://masrud.com/category/codeigniter