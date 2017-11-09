<!--t SSL Gratis dari Let’s Encrypt t-->
<!--d SSL gratis dari Lets&#039;s Encrypt untuk mengamankan website maupun blog. d-->
<!--tag https,ssl,htmly,cpanel,terminal,linux,hosting tag-->
<!--image https://masrud.com/themes/masrud/img/img.png image-->

Pada Agustus 2016, Google mengumumkan bahwa SSL merupakan salah satu faktor yang mempengaruhi peringkat suatu website di halaman hasil pencarian. Informasi ini disampikan Google melalui blog webmastertool. 

Lebih jelasnya dapat dilihat di [HTTPS as a ranking signal][1].

SSL merupakan kependekan dari Secure Socket Layer yang merupakan suatu protocol layer transport yang digunakan dalam koneksi internet secara aman. 

Website yang menggunakan SSL akan menampilkan tulisan HTTPS dan gambar gembok berwarna hijau para address bar browser sebelah kiri, contohnya seperti blog masrud.com ini.

Jadi jika kita memiliki website maupun blog yang memiliki peringkat lebih baik, maka sangat disarankan untuk memasang SSL pada website tersebut seperti yang di tuliskan oleh google dalam blog webmastertool

>We’ve also seen more and more webmasters adopting HTTPS (also known as HTTP over TLS, or Transport Layer Security), on their website, which is encouraging.

Saat ini harga SSL cukup murah mulai dari Rp 155.000,- pertahun. Bahkan ada juga lho yang gratis seperti yang saya gunakan ini.

**Kok bisa dapat SSL gratis?** 

Ceritanya begini.

Sudah cukup lama saya tidak mengelola blog dan login ke cPanel. Suatu ketika saya login ke cPanel yaitu sekitar 4 bulan lalu. Saya penasaran dengan adanya menu icon baru pada cPanel hosting saya.

<amp-img src="https://masrud.com/content/images/20161008122428-lets%20encrypt%20ssl.png"
     width="821"
     height="581"
     layout="responsive"
     alt="SSL Gratis dari Let’s Encrypt"></amp-img>

Ternyata menu baru tersebut adalah fitur SSL gratis dari Let's Encrypt. Setelah mengetahui hal tersebut, langsung saya install pada blog ini dan ternyata berhasil. Dan ketika saya tes di **[Qualys Lab tool][2]**, hasilnya **A**.

<amp-img src="https://masrud.com/content/images/20161008123143-hasil%20tes.png"
     width="1325"
     height="743"
     layout="responsive"
     alt="SSL Gratis dari Let’s Encrypt"></amp-img>

Bagi Anda yang <strike>**kere**</strike> untuk membeli SSL, maka SSL gratis dari Let's Encrypt ini adalah solusinya.

SSL ini dapat digunakan untuk subdomain dengan cara menginstallnya pada setiap subdomain yang Anda buat. SSL ini berlaku 3 bulan dan otomatis diperbarui.

Tunggu apalagi, ayo segera gunakan SSL untuk meningkatkan peringkat website Anda.

<div class="notif"><b>Catatan</b>: Saya menggunakan hosting dari <b><a  href="https://goo.gl/mLKTZV" target="_blank">Dewaweb</a></b>, jika Anda menggunakan hosting dari provider lainnya, SSL gratis ini belum tentu tersedia. Hubungi pihak provider untuk lebih jelasnya.</div>


  [1]: https://webmasters.googleblog.com/2014/08/https-as-ranking-signal.html
  [2]: https://www.ssllabs.com/ssltest/analyze.html?viaform=on&d=https://masrud.com