<!--t Tutorial Membuat Site Map pada WordPress t-->
<!--d Panduan mudah membuat sitemap/peta situs untuk user dengan memanfaatkan plugin wp sitemap page pada WordPress. d-->
<!--tag wordpress,sitemap,plugin,seo tag-->
<!--image https://masrud.com/content/images/wordpress.png image-->

Sudah lama rasanya masrud tidak menulis artikel mengenai WordPress, kebetulan kemarin pada mata kuliah cms ada pembahasan seputar cms WordPress, akhirnya muncul keinginan untuk menulis kembali tutorial seputar WordPress.

Nah pada tulisan ini masrud bagikan satu tutorial seputar WordPress. Tutorialnya adalah cara membuat sitemap page untuk user/pengunjung.

Sitemap page ini berbeda dengan sitemap untuk search engine yang disubmit ke webmaster tool, sitemap page ini diperuntukkan bagi user atau pengguna untuk memudahkan dalam menjelajahi situs, seperti misalnya siapa saja penulisnya, kategorinya apa saja, lamannya apa saja dan juga postingnya.

Contohnya seperti gambar dibawah ini.

<amp-img src="https://masrud.com/content/images/20151116110829-Cara-membuat-sitemap-page-for-user.png"
     width="632"
     height="539"
     layout="responsive"
     alt="Membuat Sitemap Page pada WordPress dengan Plugin WP Sitemap Page"></amp-img>

Untuk membuat sitemap page seperti ini tidak sulit, hanya perlu menginstall plugin WP Sitemap Page dan sedikit pengaturan sudah selesai.

 - Silakan login ke dashboard situs WordPress .
 - Kemudian tambahkan plugin dengan membuka menu **Plugin** lalu pilih submenu **Tambah baru**.
 - Selanjutnya tuliskan **WP Sitemap Page** pada kotak pencarian. 
 - Setelah ketemu lalu **install**.
Setelah proses instalasi plugin selesai, maka akan muncul submenu **WP Sitemap Page** pada menu **Pengaturan**.

Kemudian untuk menampilkan sitemap page ini pada laman maupun halaman pos caranya sangat mudah, silakan copy kode dibawah ini (hilangkan tanda petiknya) lalu paste-kan pada laman atau halaman posting yang diinginkan.

```
[wp_sitemap_page]
```

Setelah selesai lalu simpan dan reload website , jika belum tampil silakan bersihkan cache pada browser dan pada plugin cache blog WordPress.