<!--t Cara Membackup Website Lewat FTP dan FileZilla t-->
<!--d Tutorial membackup website dengan filezilla. d-->
<!--tag backup,ftp,filezilla,wordpress,website,hosting,cpanel tag-->
<!--image https://masrud.com/themes/masrud/img/img.png image-->

Untuk merawat dan menjaga sebuah situs blog maupun website, ada berbagai macam cara baik [memeriksa apakah ada link yang rusak][1], memantau server hosting, memperbaiki tampilan yang rusak, membackup data dan masih banyak lagi.

Pada kesempatan kali ini saya akan mengulas seputar membackup blog. 

Membackup atau membuat cadangan data blog merupakan suatu hal yang wajib dilakukan oleh setiap blogger maupun webmaster agar memiliki cadangan data website yang sewaktu - waktu bisa digunakan kembali.

Dengan membackup blog berarti kita sudah mengantisipasi terhadap kemungkinan - kemungkinan yang akan terjadi, seperti diserang oleh hacker, kesalahan teknis sehingga mengakibatkan kehilangan data dan sebagainya. Intinya membackup data website sangatlah penting.

Frekuensi setiap blogger/webmaster untuk melakukan backup data berbeda - beda, ada yang satu hari sekali, tiga hari sekali, satu minggu sekali, satu bulan sekali dan bahkan bisa lebih lama. 

Akan tetapi lebih baik jika kita lebih sering membackup blog/website karena file - file yang ada pada web merupakan file - file terbaru sehingga tidak ada file baru yang hilang akibat tidak ikut terbackup.

Untuk membackup data blog/website ada berbagai macam cara, salah satunya dengan menggunakan fasilitas FTP dan software FTP Client FileZilla. Cara ini sangat mudah dilakukan dan aman. Untuk langkah - langkah membackup data blog/website silakan simak dibawah ini.

 - Langkah pertama, pastikan di komputer Anda telah terinstall Aplikasi FileZilla Client. Jika belum, silakan download dan install dulu aplikasi FileZilla Client. Untuk mendownload, silakan kunjungi link berikut **[https://filezilla-project.org/download.php?type=client][2]**
 - Setelah selesai mendownload, silakan install aplikasi tersebut.
 - Langkah selanjutnya silakan login ke cPanel yang Anda gunakan.
 - Kemudian buka menu **FTP Accounts**. 
 <amp-img src="https://masrud.com/content/images/20151116221916-FTP-Account.png"
      width="772"
      height="486"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Setelah itu kita akan dibawa ke halaman FTP Accounts. Dibagian paling bawah akan ada 2 akun FTP Sepsial. Klik pada **Configure FTP Client** seperti pada gambar dibawah ini.
 <amp-img src="https://masrud.com/content/images/20151116222547-Spesial-FTP-Account.png"
      width="793"
      height="405"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Setelah diklik maka akan muncul beberapa pengaturan dan detail tentang akun FTP seperti FTP Username, FTP Server, FTP & explicit FTPS port dan SFTP port. Klik pada **FTP Configuration File** untuk mendownload konfigurasi FTP Client pada komputer.
 <amp-img src="https://masrud.com/content/images/20151116222745-FTP%20configure%20file.png"
      width="739"
      height="410"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Setelah file konfigurasi berhasil di download, Langkah selanjutnya adalah menggunakannya pada FileZilla client yang telah terinstall di komputer. Caranya buka FileZilla lalu buka menu **File**.
 <amp-img src="https://masrud.com/content/images/20151116223002-Menu-File.png"
      width="772"
      height="486"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Kemudian akan muncul beberapa submenu, lalu pilih **Import.
 <amp-img src="https://masrud.com/content/images/20151116223119-Import.png"
      width="765"
      height="482"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Setelah itu akan muncul window import setting. Silakan cari file konfigurasi yang telah didownload tadi lalu **open**.
 <amp-img src="https://masrud.com/content/images/20151116223251-Open.png"
      width="557"
      height="417"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Berikutnya akan muncul kotak dialog konfirmasi import settiing. Centang/checklist pada **Site Manager entries** lalu klik **Ok **seperti pada gambar dibawah ini.
 <amp-img src="https://masrud.com/content/images/20151116223414-Ok.png"
      width="391"
      height="143"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Kemudian buka menu file lalu pilih **Site Manager.
 <amp-img src="https://masrud.com/content/images/20151116223516-Site-Manager.png"
      width="772"
      height="486"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Selanjutnya akan terbuka window Site Manager. Pilih ftp.domainanda.com lalu klik **Connect**.
 <amp-img src="https://masrud.com/content/images/20151116223633-ftp-masrud.png"
      width="568"
      height="460"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Lalu akan muncul permintaan password. Isikan password sama dengan password Cpanel lalu ok.
 <amp-img src="https://masrud.com/content/images/20151116223750-password.png"
      width="275"
      height="228"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Berikutnya akan muncul proses pembacaan direktori hosting oleh FileZilla, jika berhasil maka akan muncul beberapa folder dibagian kanan bawah seperti pada gambar dibawah ini.
<amp-img src="https://masrud.com/content/images/20151116223959-Berhasil.png"
     width="1366"
     height="768"
     layout="responsive"
     alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>
 - Untuk membackup data blog silakan klik folder **public_html** dibagian kanan lalu **Drag n Drop** ke bagian kiri pada komputer Anda. Jika backup akan disimpan di Local Disk D, maka drag n drop ke Local Disk D dan tunggu hingga proses selesai.
 <amp-img src="https://masrud.com/content/images/20151116224046-Sukses.png"
      width="1366"
      height="768"
      layout="responsive"
      alt="Cara Membackup Blog/Website Lewat FTP dan FileZilla"></amp-img>

</ul>

**Cukup mudah bukan ?**

**Catatan**: Ini hanya untuk membackup data blog/website berupa file - file html, css, javascript, gambar, audio, video dan file -file lainnya, jadi tidak termasuk databasenya. 

  [1]: https://masrud.com/post/cara-mudah-mengetahui-broken-link
  [2]: https://filezilla-project.org/download.php?type=client