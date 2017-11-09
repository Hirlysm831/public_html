<!--t Mempercepat Loading WordPress dengan Plugin WP Fastest Cache t-->
<!--d Cara mempercepat loading website WordPress dengan plugin cache. d-->
<!--tag wordPress,plugin cache,wp fastest cache tag-->
<!--image https://masrud.com/content/images/20170304144542-wp%20fastest%20cache.jpg image-->

Kecepatan loading blog adalah satu dari sekian banyak faktor yang mempengaruhi kenyamanan pengunjung. 

Blog yang cepat diakses akan memberikan kenyaman yang lebih baik dari pada blog yang lambat sehingga blog ini lebih disukai pengunjung dan juga mesin pencari.

Untuk mempercepat loading blog ada banyak cara, salah satunya dengan menambahkan plugin cache. Namun cara ini hanya bisa dilakukan jika kita menggunakan blog dengan platform wordpress selfhosted sehingga untuk pengguna blog dengan paltform lain seperti blogspot tidak bisa.

Ada banyak plugin cache yang bisa digunakan untuk mempercepat loading blog, salah satunya adalah plugin WP Fastest Cache. WP Fastest Cache merupakan plugin cache favorit (saya) dan juga plugin cache terbaik versi masrud.com. 

Simak artikel Plugin Cache Terbaik untuk WordPress.

Plugin WP Fastest Cache ini memiliki banyak fitur yang bisa mengoptimalkan kecepatan blog. Berikut ini adalah fitur-fitur WP Fastest Cache.

####1. Caching system
Untuk membuat cache pada system server.

####2. Minify CSS
Memperkecil ukuran css dengan membuang bagi-bagian element yang tidak penting.

####3. Minify HTM
Memperkecil ukuran html web sehingga ringan untuk diakses.

####4. Combine CSS
Menggabungkan beberapa file css sehingga memperkecil ukuran css agar request tidak terlalu besar. Hampir sama dengan minify css.

####5. Combine JavaScript
Menggabungkan beberapa file javascript sehingga memperkecil request ke server.

####6. Gzip Compression
Fungsinya untuk membuat compressi gzip pada server sehingga memperkecil file request yang dikirimkan oleh server. 

Namun cara ini hanya bisa dilakukan pada server yang mendukung mod_expires.c. Jika terjadi error pada blog setelah mengaktifkan fitur compressi ini, silakan masuk ke cpanel dan buka file .htaccess kemudian hapus kode seperti ini.

```
ExpiresActive On
ExpiresDefault A0
ExpiresByType image/gif A2592000
ExpiresByType image/png A2592000
ExpiresByType image/jpg A2592000
ExpiresByType image/jpeg A2592000
ExpiresByType image/ico A2592000
ExpiresByType text/css A2592000
ExpiresByType text/javascript A2592000
```

Kemudian simpan.

####7. Browser Caching
Untuk membuat cache pada browser sehingga saat blog tersebut dibuka kembali oleh pengunjung yang sebelumnya pernah membuka blog tersebut tidak perlu lagi merequest semua file ke server termasuk css, javascript dan sebagainya. Hasilnya loading blog semakin cepat.

Untuk menggunakan plugin ini Anda bisa langsung menginstalnya langsung melalui dashboard wordpress Anda. 

Untuk pengaturannya sangat mudah, Anda hanya perlu memilih semua opsi yang ada kemudian klik submit. Setelah itu Anda akan langsung merasakan efeknya berupa peningkatan loading blog yang signifikan.

Demikianlah artikel cara mempercepat loading blog wordpress selfhosted menggunakan plugin WP Fastest Cache. 