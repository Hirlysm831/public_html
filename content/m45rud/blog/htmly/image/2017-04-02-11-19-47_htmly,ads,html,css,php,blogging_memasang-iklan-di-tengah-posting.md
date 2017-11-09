<!--t Cara Memasang Iklan di Tengah Posting pada HTMLy t-->
<!--d Cara Memasang Iklan di Tengah Posting pada HTMLy d-->
<!--tag htmly,ads,html,css,php,blogging tag-->
<!--image https://masrud.com/content/images/htmly.png image-->

Untuk mendapatkan penghasilan dari sebuah blog, salah satunya adalah dengan memasang iklan pada blog. Salah satunya iklan dari publisher seperti Google AdSense.

Pemilik blog akan mendapatkan penghasilan jika iklan tersebut diklik oleh pengunjung. Istilahnya bayar per klik atau lebih sering disebut pay per click (PPC).

Semakin sering iklan diklik oleh pengunjung, maka akan semakin besar penghasilan pemilik blog.

Agar iklan mendapatkan klik yang banyak, maka penempatan iklan harus jelas, mudah dilihat dan mudah dijangkau oleh pengunjung.

Salah satu penempatan iklan yang sangat bagus adalah posisi **iklan di tengah posting**.

Posisi iklan di tengah posting akan mudah dilihat oleh pengunjung sehingga dapat meningkatkan potensi klik iklan yang sah.

Dengan begitu maka penghasilan bisa semakin meningkat.

###Bagaimana cara memasang iklan di tengah posting?

Untuk memasang iklan di tengah posting pada [HTMLy][1] caranya cukup mudah, hanya dengan menambahkan sedikit kode saja.

Berikut tata caranya:

 - Silakan login ke cPanel.
 - Kemudian buka folder **public_html**  ->  **themes** lalu buka folder tema yang Anda gunakan.
 - Setelah itu silakan edit file **post.html.php**.
 - Cari Kode

```
<?php echo $p->body; ?>
```
 - Ganti dengan kode di bawah ini.

<amp-iframe height="520" layout="fixed-height" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://pastebin.com/embed_iframe/zaEtSGZZ">
</amp-iframe>

 - Setelah itu simpan dan bersihkan cache di admin panel HTMLynya.

Perhatikan angka **3** pada kode di atas. Angka tersebut menunjukkan bahwa iklan akan muncul **setelah paragraf ketiga** posting. Jadi posting harus terdiri dari minimal **4** paragraf agar iklan tersebut muncul.

Anda juga bisa menambahkan css agar iklan berada di posisi sebelah kiri atau kanan.

Jika ingin iklan berada di kiri tambahkan kode css berikut 

```
.ads {
    display: block;
    float: left;
    padding: 0 20px 20px 0
}
```

Dan jika ingin di sebelah kanan kode cssnya seperti ini

```
.ads {
    display: block;
    float: right;
    padding: 0 0 20px 20px
}
```

Cara ini sudah saya terapkan pada blog ini. Anda bisa melihat iklan yang terdapat dalam tengah posting yang sedang Anda baca.

Selamat mencoba dan semoga bermanfaat :)

  [1]: https://masrud.com/post/htmly