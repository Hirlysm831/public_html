<!--t Membuat Notifikasi dengan Sweet Alert pada PHP t-->
<!--d Tutorial cara membuat notifikasi dengan Sweet Alert pada PHP. Sweet Alert adalah library untuk mempercantik alert javascript standar pada browser.Tutorial cara membuat notifikasi dengan Sweet Alert pada PHP. Sweet Alert adalah library untuk mempercantik alert javascript standar pada browser. d-->
<!--tag php,css,sweet alert,javascript,web design,pemrograman tag-->
<!--image https://masrud.com/content/images/php.png image-->

Suatu aplikasi yang baik pasti memberikan notifikasi/pemberitahuan. Notifikasi tersebut biasanya muncul setelah pengguna tersebut melakukan interaksi terhadap program aplikasi maupun sebab lainnya.

Notifikasi tersebut bertujuan untuk memberikan informasi kepada pengguna bahwa apa yang mereka lakukan telah berhasil dieksekusi oleh program atau belum, apakah data yang diinputkan salah atau hal-hal lainnya. 

Dengan demikian pengguna akan tahu apa yang harus mereka lakukan sehingga mudah dalam menggunakan aplikasi.

Termasuk aplikasi berbasis web yang dibuat dengan bahasa pemrograman PHP. Sesuatu yang umum digunakan untuk membuat notifikasi pada aplikasi berbasis web PHP adalah dengan Javascript, yaitu berupa alert.

contoh alert dengan javascript standar.

```
<script language="javascript">window.alert("Login Error! Silakan coba lagi");</script>
```

Kode di atas akan menampilkan notifikasi alert seperti ini.

<amp-img src="https://masrud.com/content/images/20161016223749-error%20javascript.jpg"
      width="469"
      height="140"
      layout="responsive"
      alt="Cara Membuat Notifikasi dengan Sweet Alert pada PHP"></amp-img>

Cara pembuatan notifikasi semacam ini mudah, akan tetapi dilihat dari segi tampilannya kurang menarik. Karena itulah muncul sebuah library Javascript untuk mempercantik notifikasi alert javascript ini, namanya **Sweet Alert**.

Coba bandingkan kedua notifikasi alert di bawah ini.

<amp-img src="https://masrud.com/content/images/20161016223749-error%20javascript.jpg"
      width="469"
      height="140"
      layout="responsive"
      alt="Cara Membuat Notifikasi dengan Sweet Alert pada PHP"></amp-img>
<figcaption>Notifikasi Javascript sandart</figcaption>

<amp-img src="https://masrud.com/content/images/20161016223814-sweet%20alert.jpg"
      width="469"
      height="222"
      layout="responsive"
      alt="Cara Membuat Notifikasi dengan Sweet Alert pada PHP"></amp-img>
<figcaption>Notifikasi Sweet Alert</figcaption>

<h4>Bagaimana, lebih keren yang notifikasi Sweet Alert bukan?</h4>

Untuk menggunakan library Sweet Alert, pertama kita kita harus menginstall dan mendownload Sweet Alert terlebih dahulu.

**1. Install melalui bower** <small>(untuk frontend)</small>

```
$ bower install sweetalert
```

**2. Install melalui NPM** <small>(untuk Node.js)</small>

```
$ npm install sweetalert
```

**3. Download file Sweet Alert CSS dan Javascript**

Download file Sweet Alert css dan javascript melalui link di bawah ini <small>*(link ini diambil dari repository Sweet Alert di Github)</small>.*

**<u><a href="https://github.com/t4t5/sweetalert/archive/master.zip">Download</a></u>**

Setelah selesai proses download file Sweet Alert tersebut, langkah berikutnya adalah memasukkan file CSS dan Javascript Sweet Alert ke dalam source kode aplikasi PHP yang kita buat.

Letakkan css Sweet Alert dibagian atas

```
<link rel="stylesheet" type="text/css" href="asset/css/sweetalert.css">
```

Letakkan javascript Sweet Alert dibagian bawah

```
<script src="asset/js/sweetalert.min.js"></script>
```

Kemudian panggil fungsi sweetAlert.

```
swal("Login Gagal! Silakan coba lagi")
```

Untuk lebih jelasnya, masrud telah membuat sebuah contoh penerapan Sweet Alert untuk membuat notifikasi login error. Silakan Anda amati dan pelajari source code di bawah ini.

<amp-iframe height=720 sandbox="allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox" layout="fixed-height" frameborder="0" src="https://pastebin.com/embed_iframe/AycDV99M">
</amp-iframe>

Pada source code diatas, masrud menerapkan Sweet Alert menggunakan session. Jadi Sweet Alert akan dimuat pada saat session error dibuat. Kodenya seperti ini

```
swal({title: "Login Gagal!",
             text: "Silakan coba lagi",
             timer: 3000,
             type: "error",
             showConfirmButton: false
})
```

 - **title** adalah judul pada notifikasi.
 - **text** adalah pesan pada notifikasi.
 - **timer** adalah seberapa lama notifikasi muncul dan akan otomatis menghilang setelah waktu habis.
 - **type** adalah jenis notifikasi yang diinginkan. Terdapat 4 tipe yaitu **success**, **info**, **warning** dan **danger**.
 - **showConfirmButton** adalah tombol untuk menutup notifikasi alert.

Selain beberapa yang masrud sebutkan di atas, masih banyak opsi-opsi lainnya silakan lihat di situs resminya di **<a href="http://t4t5.github.io/sweetalert/" target="_blank">http://t4t5.github.io/sweetalert/</a>**

Inilah screenshoot dari notifikasi error login dengan Sweet Alert.

<amp-img src="https://masrud.com/content/images/20161016223800-Membuat Notifikasi dengan Sweet Alert pada PHP.jpg"
      width="1050"
      height="696"
      layout="responsive"
      alt="Cara Membuat Notifikasi dengan Sweet Alert pada PHP"></amp-img>

<div class="notif">Untuk lebih praktis dan reusable, sweet alert ini dijadikan sebagai fungsi yang bisa dipanggil saat membutuhkan notifikasi.</div>

Demikianlah tutorial singkat yang dapat saya sampaikan, semoga bermanfaat dan selamat mencoba :).