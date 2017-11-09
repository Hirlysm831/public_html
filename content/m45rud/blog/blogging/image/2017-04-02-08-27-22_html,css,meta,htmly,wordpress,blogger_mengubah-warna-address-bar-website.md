<!--t Mengubah Warna Address Bar Website pada Browser Smartphone t-->
<!--d Cara mengubah warna address bar website pada browser Google Chrome Android, Windows Phone dan Safari iOS. d-->
<!--tag html,css,meta,htmly,wordpress,blogger tag-->
<!--image https://masrud.com/content/images/20170227154744-address bar.jpg image-->

Ketika mengunjungi sebuah website menggunakan smartphone, kadang kita menemukan fenomena warna address bar browser mengikuti warna utama website tersebut.

Misalnya warna dominan website hijau, maka warna address bar pada browser menjadi hijau. Padahal warna address bar standar adalah berwarna putih abu-abu.

Contohnya website yang warna address barnya mengikuti warna website adalah <u>www.apkmirror.com</u>.

Beruntung ketika sedang menjelajahi website <u>stackoverflow.com</u> saya menemukan cara membuat warna address bar mengikuti warna utama website <small><i>(Saya lupa url sumbernya)</small></i>.

####Cara mengubah warna address bar website pada browser Google Chrome & Opera

Caranya sangat mudah, cukup menambahkan satu baris kode meta tag pada bagian tag `<head>` yang ada dalam template website.

Kodenya seperti ini.

```
<meta name="theme-color" content="#f77737">
```

####Cara mengubah warna address bar website pada browser Windows Phone

Selain pada browser Android, cara ini juga dapat diterapkan pada browser Windows Phone namun dengan kode yang berbeda.

Kode untuk browser Windows Phone.

```
<meta name="msapplication-navbutton-color" content="#f77737">
```

####Cara mengubah warna address bar website pada browser Safari iOS

Untuk browser Safari iOS caranya juga sama, namun kodenya berbeda dengan Google Chrome Andorid dan Windows Phone.

Jika pada browser Google Chrome Andorid maupun browser Windows Phone menggunakan satu baris kode meta tag, maka pada browser Safari iOS menggunakan dua baris kode meta tag.

Kode untuk browser Safari iOS.

```
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#f77737">
```

###Agar support semua browser

Agar warna address bar tersebut dapat support diberbagai macam browser baik Google Chrome Android, browser Windows Phone maupun Safari iOS maka tambahkan kode lengkap meta tag tersebut.

Berikut kode lengkapnya.

```
<!-- Untuk Google Chrome, Firefox & Opera -->
<meta name="theme-color" content="#f77737">
<!-- Untuk Windows Phone -->
<meta name="msapplication-navbutton-color" content="#f77737">
<!-- Untuk Safari iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#f77737">
```

Perhatikan bagian kode `#f77737`. Itu adalah **kode warna** yang digunakan pada halaman depan blog ini, Anda dapat menggantinya sesuai dengan keinginan.

###Penerapan pada WordPress

Kode meta tag tersebut juga dapat diterapkan pada website yang dibuat dengan [WordPress][1] <small>(selfhosted)</small>. Caranya seperti ini.

 - Silakan login ke halaman admin WordPress.
 - Kemudian buka menu **Appearance** lalu pilih **Editor**.
 - Kemudian cari file **header.php** <small>(Theme Header)</small> pada bagian sebelah kanan.
 - Lalu tambahkan kode meta tag lengkap pada bagian antara tag `<head>` dan tag `</head>`.
 - Kemudian simpan <small>(tekan tombol **Update file**)</small>.

###Penerapan pada Blogger/Blogspot

Cara menerapkan pada blog yang dibuat dengan blogger/blogspot.

 - Login ke halaman dashboard blogger.
 - Kemudian pilih **Tema**.
 - Lalu pada bagian **Seluler** tekan ikon **Gear (gerigi)**.
 - Setelah itu akan muncul pop up pilih tema seluler. Pada bagian ini silakan pilih **"Tidak. Tampilkan tema desktop di perangkat seluler"** lalu simpan.
 - Langkah berikutnya silakan pilih **Edit HTML**.
 - Lalu tambahkan kode meta tag lengkap pada bagian antara tag `<head>` dan tag `</head>`.
 - Kemudian **Simpan Tema**

> Selain WordPress <small>(selfhosted)</small>, Blogger/Blogspot dan [HTMLy][2] <small> (platform yang digunakan blog ini)</small> cara di atas juga dapat diterapkan pada platform website lainnya. Dengan syarat, memiliki akses ke kode sumber template website.

Untuk melihat contoh penerapan kode meta tag diatas, silakan kunjungi [https://masrud.com][3] menggunakan browser Google Chrome pada smartphone Android Anda.

  [1]: https://masrud.com/tag/wordpress
  [2]: https://masrud.com/category/htmly
  [3]: https://masrud.com
