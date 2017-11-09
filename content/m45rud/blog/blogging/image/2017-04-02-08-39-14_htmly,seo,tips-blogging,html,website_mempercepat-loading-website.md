<!--t 10 Tips Ampuh untuk Mempercepat Loading Blog HTMLy t-->
<!--d Cara ampuh mempercepat loading blog/website yang dibuat dengan HTMLy. d-->
<!--tag htmly,seo,tips blogging,html,website tag-->
<!--image https://masrud.com/content/images/htmly.png image-->

Sesuai dengan judul diatas, pada kesempatan ini saya akan berbagi tentang tips-tips bagaimana meningkatkan kecepatan loading sebuah website maupun blog yang menggunakan platform HTMLy.

Jika belum tahu apa itu HTMLy, sebaiknya Anda baca dulu artikel ini **[HTMLy, Platform Blogging Tanpa Database yang Powerfull dan Hemat Resource][1]**

Apa yang dibagikan disini adalah berdasarkan pengalaman pribadi yang telah terbukti. Jadi Anda tidak perlu khawatir bahwa tips ini adalah tipuan belaka.

Sebenarnya tips-tips ini berlaku juga untuk platform blogging lainnya. Namun, akan lebih efektif dan lebih mudah diterapkan pada HTMLy karena kode dasar HTMLy yang sederhana dan mudah dipahami. 

Saya sendiri juga telah menerapkan pada blog ini dan hasilnya sangat ampuh, jika tidak percaya silakan dicek.

- Buka **[https://testmysite.thinkwithgoogle.com/][2]** atau **[https://varvy.com/pagespeed/][3]**
- Kemudian tuliskan url https://masrud.com pada form yang ada pada kedua situs tersebut lalu enter
- Dan lihat hasilnya.

Langsung saja, inilah tips-tips jitu untuk mempercepat loading blog HTMLy.

<h3>1. Hilangkan bagian tertentu pada blog</h3>
Secara default, HTMLy memiliki beberapa widget yaitu recent post, popular post, about, social, archive, recent comments dan cloud tags. Dengan menghilangkan beberapa widget tersebut akan dapat mengurangi ukuran halaman web sehingga meningkatkan kecepatan waktu pemuatan situs.

Contohnya seperti blog ini hanya ada 3 widget yaitu recent post, archive dan category.

Untuk menghilangkan widget ini sangat mudah.

 - Silakan masuk ke cpanel hosting lalu buka folder **themes** > **nama themes**.
 - Disana akan ada file yang bernama **layout.html.php**. Disitulah letak kode penyusun widget-widget tersebut tepatnya dibagian bawah.
 - Silakan edit dan hapus widget yag sekiranya tidak diperlukan.

<h3>2. Kompress html</h3>
Setelah menghilangkan beberapa elemen yang tidak diinginkan, langkah selanjutnya adalah mengecilkan ukuran htmlnya dengan cara mengompressnya. Kompress html adalah metode untuk menghilangkan bagian-bagian yang tidak penting yang terdapat dalam tag html, seperti komentar dan spasi.

Untuk mengompress html, gunakan tool online html compressor dari miniwebtool.

 - Buka **[http://www.miniwebtool.com/html-compressor/][4]**
 - Lalu copy kode yang ada pada file **layout.html.php** mulai dari bagian tag <span class="code"><body></span> sampai  <span class="code"></body></span> dan paste pada tool compressor tersebut.
 - Setelah selesai dikompress, copy hasil kompressan dan paste pada file **layout.html.php** dan simpan.

**Lalu bagaimana jika saya ingin mengedit lagi file yang sudah tercompress tersebut?**

Untuk itu kita kembalikan lagi ke aslinya dengan cara uncompress/unminify agar mudah di edit. Gunakan tool online **[http://unminify.com/][5]**

<h3>3. Hilangkan css (efek) untuk elemen yang dihapus</h3>
Setiap elemen yang ada pada HTMLy termasuk widget pasti memiliki css sendiri. Jika beberapa widget telah dihilangkan maka akan meninggalkan css yang tidak terpakai dan akan mubazir. Untuk itu css tersebut perlu dihapus.

Selain itu, coba hilangkan beberapa efek yang misalnya box-shadow untuk memperkecil css. Dan juga cobalah untuk mengganti bagian tertentu dengan css saja.

Contohnya adalah tombol share bawaan HTMLy. Tombol tersebut menggunakan gambar untuk ikon-ikonnya. Hal ini akan memperlambat loading blog meskipun sedikit karena browser akan melakukan request terhadap gambar-gambar tersebut.

Namun jika diganti dengan css, browser hanya akan merequest css saja dan tentu waku loading web akan lebih cepat.

<h3>4. Kompress css dan embed pada file layout.html.php</h3>
Untuk memperkecil ukuran css secara signifikan, lakukan kompressi pada css tersebut. Gunakan tool online [http://csscompressor.com/][6] dan pada **Compresseion Level** pilih **Highest** untuk mendapatkan ukuran css paling kecil.

Setelah css berhasil dikompress, copy kode css tersebut dan paste dalam file **layout.html.php**. Penulisan css seperti ini dinamakan embeded css. 

Dengan cara ini kecepatan loading blog akan meningkat dibandingkan dengan menggunakan css secara eksternal. Alasannya karena browser hanya melakukan lebih sedikit request ke server sehingga waktu pemuatan laman akan berkurang.

Jika menggunakan eksternal css, browser akan melakukan lebih banyak request ke server dan menunggu semua request terlayani/terpenuhi baru halaman web akan ditampilkan.

Untuk mengembalikan css seperti aslinye, caranya sama dengan mengembalikan html ke aslinya.

<h3>5. Kompress javascript dan embed pada file layout.html.php</h3>
Sama halnya dengan css, javascript juga perlu dikompress dan diembed ke dalam file **layout.html.php** agar ukurannya lebih kecil.

Untuk mengkompress javascript bisa dengan menggunakan **[https://javascript-minifier.com/][7]**

<h3>6. Jangan mengunakan webfont</h3>
Salah satu hal yang umum dilakukan untuk menciptakan tampilan web yang bagus adalah menggunakan webfont. Namun dengan melakukan hal ini akan berdampat pada kecepatan loading web karena webfont menambah jumlah request browser. 

Jika ingin mendapatkan kecepatan loading web yang maksimal, gunakan websafe font seperti arial atau trebuchet ms.

Meskipun webfont tidak baik untuk loading web, ada cara untuk mengatasinya. Kita tetap dapat membuat tampilan web yang bagus dengan webfont dan loading yang cepat. Caranya dengan menggunakan metode asyncronous webfont. 

Tutorialnya dapat Anda lihat di artikel **[Memuat Link Google Font Secara Asynchronous][8]** yang ditulis oleh kang Adhi Suryadi.

<h3>7. Encode gambar menjadi base 64</h3>
Seperti yang telah disebutkan diatas, bawah gambar akan memperbanyak jumlah request browser ke server yang berdampak pada waktu pemuatan halaman. Solusinya masalah ini dengan menghilangkan gambar atau meng-encode gambar menjadi base 64 image.

 - Buka **[https://varvy.com/tools/base64/][9]**
 - Lalu upload gambar dan tekan **Go**
 - Tunggu hingga proses selesai
 - Setelah selesai copy gambar yang telah terencode menjadi base 64 dan paste pada tag src gambar

Meskipun ukuran halaman web menjadi lebih besar karena hal ini, namun jumlah request browser akan berkurang karena gambar tadi dianggap seperti file html biasa.

<h3>8. Matikan fitur komentar</h3>
Komentar yang ada pada HTMLy menggunakan Disqus dan Facebook. Silakan matikan fitur komentar ini untuk meningkatkan kecepatan loading blog. Atau bisa juga dengan menyembunyikannya jika web diakses dengan perangkat seluler.

<h3>9. Gunakan gambar yang memiliki ukuran kecil</h3>
Sebisa mungkin gunakan gambar yang memiliki ukuran kecil maksimal **100 KB** atau lebih kecil lebih baik. Gambar yang berukuran besar akan memperlambat waktu pemuatan halaman web.

<h3>10. Simpan gambar pada hosting yang sama</h3>
Jika menggunakan gambar, usahakan letakkan gambar satu hosting dengan hosting web. Tujuannya agar request browser hanya pada satu server saja.

Selain menggunakan 10 cara diatas, bisa juga menggunakan [gzip compression][10] dan [cache][11]. Namun saya rasa itu tidak perlu karena HTMLy sudah memilik fitur ini dan bekerja dengan sangat baik.


  [1]: https://masrud.com/post/htmly
  [2]: https://testmysite.thinkwithgoogle.com/
  [3]: https://varvy.com/pagespeed/
  [4]: http://www.miniwebtool.com/html-compressor/
  [5]: http://unminify.com/
  [6]: http://csscompressor.com/
  [7]: https://javascript-minifier.com/
  [8]: http://www.kompiajaib.com/2014/12/memuat-link-google-font-secara.html
  [9]: https://varvy.com/tools/base64/
  [10]: https://masrud.com/post/mempercepat-loading-blog-wordpress-dengan-gzip-compression
  [11]: https://masrud.com/post/cara-mempercepat-loading-wordpress