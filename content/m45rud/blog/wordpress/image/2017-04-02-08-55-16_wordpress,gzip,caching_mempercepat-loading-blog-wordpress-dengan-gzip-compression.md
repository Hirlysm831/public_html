<!--t Mempercepat Loading Blog WordPress dengan Gzip Compression t-->
<!--d Halo, jumpa lagi dengan masrud.com kali ini saya akan berbagi tips mempercepat loading blog wordpress dengan Gzip compression. Gzip compression d-->
<!--tag wordpress,gzip,caching tag-->
<!--image https://masrud.com/content/images/zip.jpg image-->

Halo, jumpa lagi dengan masrud.com kali ini saya akan berbagi tips mempercepat loading blog WordPress dengan Gzip compression. 

Gzip compression merupakan cara yang ampuh untuk mempercepat loading blog dengan memperkecil ukuran HTML dan CSS. 

Dengan mengaktifkan kompresi ini, ukuran  HTML dan CSS blog bisa diperkecil hingga 74% dari ukuran aslinya sehingga efeknya waktu pemuatan situs menjadi lebih cepat, lebih hemat sumberdaya server dan lebih hemat bandwidth.

Untuk mengaktifkan kompresi ini, Anda bisa melakukannya secara manual atau menggunakan plugin cache.  

Jika Anda ingin mengaktifkan kompresi ini dengan menggunakan plugin cache, silakan membaca artikel **[Mempercepat Loading WordPress dengan Plugin WP Fastest Cache][1]**. Disana sudah ada penjelasan tata cara untuk mengaktifkan kompresi Gzip.

Namun jika ingin secara manual, silakan simak panduannya dibawah ini.

**Cara mengaktifkan Gzip compression pada blog**

 - Pertama, silakan login ke cPanel blog Anda.
 - Kemudian buka file manager dan cari file bernama .htaccsess.
 - Setelah ketemu, tambahkan kode di bawah ini pada file . htaccess tadi.

```
<ifModule mod_gzip.c>
mod_gzip_on Yes
mod_gzip_dechunk Yes
mod_gzip_item_include file .(html?|txt|css|js|php|pl)$
mod_gzip_item_include handler ^cgi-script$
mod_gzip_item_include mime ^text/.*
mod_gzip_item_include mime ^application/x-javascript.*
mod_gzip_item_exclude mime ^image/.*
mod_gzip_item_exclude rspheader ^Content-Encoding:.*gzip.*
</ifModule>
```

 - Kemudian simpan file .htaccess lalu muat ulang blog Anda..

Setelah langkah-langkah diatas selesai dilakukan, sekarang periksa blog Anda apakah semuanya berjalan dengan normal. Dan untuk mengetahui apakah compresi Gzip bekerja atau tidak, gunakan **[Gzip compression tool][2].**

Jika kode diatas tidak bekerja, silakan hapus dan ganti dengan kode ini

```
AddOutputFilterByType DEFLATE text/plain
AddOutputFilterByType DEFLATE text/html
AddOutputFilterByType DEFLATE text/xml
AddOutputFilterByType DEFLATE text/css
AddOutputFilterByType DEFLATE application/xml
AddOutputFilterByType DEFLATE application/xhtml+xml
AddOutputFilterByType DEFLATE application/rss+xml
AddOutputFilterByType DEFLATE application/javascript
AddOutputFilterByType DEFLATE application/x-javascript
```

Kode diatas hanya digunakan untuk mengaktifkan Gzip compression pada server Apache. Jika Anda menggunakan webserver lain, caranya mungkin berbeda.

<small>**Sumber : http://www.feedthebot.com/pagespeed/enable-compression.html**</small>


  [1]: https://masrud.com/post/cara-mempercepat-loading-WordPress
  [2]: http://www.feedthebot.com/tools/gzip/