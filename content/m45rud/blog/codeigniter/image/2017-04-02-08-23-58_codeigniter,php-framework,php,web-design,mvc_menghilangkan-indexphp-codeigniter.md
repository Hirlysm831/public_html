<!--t Cara Menghilangkan index.php pada Codeigniter t-->
<!--d Cara menghapus index.php pada url Codeigniter. d-->
<!--tag codeigniter,php framework,php,web design,mvc tag-->
<!--image https://masrud.com/content/images/codeigniter.png image-->

Ketika pertama kali menggunakan framework CodeIgniter untuk membuat sebuah aplikasi maupun website, pasti kita akan menemukan `index.php` pada setiap urlnya. Contohnya seperti ini:

```
contoh.com/index.php/blog/judul-artikel
```

Hal ini sebenarnya tidak menjadi masalah, toh aplikasi yang kita buat tetap berjalan normal saja. Akan tetapi akan terlihat lebih baik jika url tersebut tanpa `index.php`.

```
contoh.com/blog/judul-artikel
```

Terlihat lebih rapi bukan?

####Bagaimana cara menghilangkan index.php tersebut?

Untuk menghilanghkan `index.php` pada url Codeigniter cukup mudah. Kita hanya perlu menambahkan file **.htaccess** pada direktori root folder aplikasi serta mengaktifkan `mod_rewrite` pada server apache.

Untuk mengaktifkan `mod_rewrite` apache silakan simak panduan di bawah ini.

 - Buka terminal kemudian tuliskan perintah di bawah ini

```
sudo a2enmod rewrite
```

 - Setelah itu isikan password user Anda.
 - Selanjutnya restart apache2 dengan menuliskan perintah

```
sudo systemctl restart apache2.service
```

Kita telah berhasil mengaktifkan `mod_rewrite` pada apache. Saatnya kita ke tahap berikutnya yaitu membuat file .htaccess.

 - Silakan buka code editor, misalnya [Atom text editor][1].
 - Lalu buat file .htaccess dan isi dengan kode di bawah ini.

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```

 - Kemudian simpan dengan nama **.htaccess**
 - Tahap berikutnya silakan buka folder __application__ -> **config** lalu edit file **config.php**.
 - Dalam file config.php cari kode

```
$config['index_page'] = 'index.php';
```

 - Silakan hapus bagian `index.php` menjadi 

```
$config['index_page'] = '';
```
 - Kemudian simpan.

Dengan cara di atas maka url akan terlihat lebih bersih tanpa `index.php`.

Selamat mencoba :)


  [1]: https://masrud.com/post/cara-install-atom-pada-linux