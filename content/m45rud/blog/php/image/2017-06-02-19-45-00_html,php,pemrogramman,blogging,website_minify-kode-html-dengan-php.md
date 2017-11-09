<!--t Minify Kode HTML Menggunakan PHP t-->
<!--d Cara mengkompres kode HTML menggunakan PHP agar ukurannya lebih kecil. d-->
<!--tag html,php,pemrogramman,blogging,website tag-->
<!--image https://masrud.com/content/images/php.png image-->

Saya adalah seorang yang sangat memperhatikan performa website. Contohnya adalah blog ini. Meskipun saya harus mengorbankan desain tetapi saya cukup puas dengan kecepatan blog ini.

Hampir 90% pengunjung blog ini dari perangkat seluler yang lebih mengutamakan konten dibandingkan desain web. Nah, karena mayoritas pengunjung blog ini dari perangkat seluler yang notabene akses internet tidak secepat melalui desktop, maka halaman web harus dioptimasi agar dapat diakses dengan cepat meskipun perangkat seluler masih berjaringan 2G/EDGE.

Selain itu, apalah gunanya jika tampilan menarik penuh dengan animasi namun loadingnya sangat lambat jika di akses oleh pengguna seluler, bahkan lebih lambat dari siput berjalan :D

Blog ini telah saya optimasi secara penuh diberbagai aspek, salah satunya adalah memperkecil ukuran HTML. Meskipun tidak begitu terasa efeknya tapi paling tidak dapat membantu mengurangi ukuran halaman web.

Berikut adalah kode PHP yang saya dapatkan dari Internet dan saya gunakan untuk meminify kode HTML pada blog ini.

<amp-iframe width="720" height="720" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://pastebin.com/embed_iframe/5fHKwFP4"></amp-iframe>

Perhatikan bagian kode pada baris ke empat. Itu adalah elemen tag HTML yang tidak diminify. Jika tag `<pre></pre>` ikut diminify, maka kode yang tampil tidak akan rapi dan menjadi terkompres.

Cara menggunakannya kode PHP di atas adalah dengan memanggil fungsi minify

```
<?php ob_start("minify") ?>
```

dan meletakkannya di atas kode deklarasi dokumen HTML serta meletakkan kode

```
<?php ob_end_flush() ?>
```
di bawah tag penutup HTML (perhatikan kode di atas secara menyeluruh).

Fungsi ini hanya untuk meminify kode HTML, meskipun juga bisa untuk CSS namun tidak efektif. Untuk hasilnya silakan lihat kode sumber blog ini.

Satu lagi, fungsi ini juga dapat diterpakan pada website WordPress selfhosted. Semoga bermanfaat.