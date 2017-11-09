<!--t Mengatasi Error the requested URL not found on this server pada Linux t-->
<!--d Solusi mengatasi error 404 the requested URL not found on this server apache2 pada Linux dengan mengatifkan mod_rewrite apache. d-->
<!--tag linux,ubuntu,linux mint,apache2,web server,open source,terminal,command line,gnu,bash,shell tag-->
<!--image https://masrud.com/content/images/linux.png image-->

Ketika pertama kali menggunakan apache2 sebagai web server pada Linux biasanya kita akan menjumpai error,
yaitu **"the requested url not found on this server"**.

Hal ini juga saya alami sendiri ketika menjalankan aplikasi berbasis web (PHP) untuk pertama kalinya. Sebelumnya saya menggunakan LAMPP <small>(xampp untuk Linux)</small> sebagai web servernya, akan tetapi karena cukup merepotkan akhirnya saya menggunakan apache2 sebagai pengganti LAMPP.

Saya memilih apache2 karena web server secara otomatis menyala ketika Linux dinyalakan. Jadi tidak perlu menyalakan web servernya secara manual.

Setelah mencari di stackoverflow, akhirnya saya menemukan solusi mengatasi masalah ini. Berikut cara mengatasi masalah error not found pada apache2 Linux.

 - Buka terminal lalu masuk sebagai user **root** dengan menuliskan perintah

```
sudo su
```

 - Anda akan diminta memasukkan password, silakan isi password user root.
 - Langkah berikutnya edit file **apache2.conf** (konfigurasi apache2). Tuliskan perintah di bawah ini lalu enter.

```
sudoedit /etc/apache2/apache2.conf
```

 - Setelah itu akan muncul isi file konfigurasi apache2.conf pada terminal. Cari tulisan ini

```
<Directory /var/www/>
   Options Indexes FollowSymLinks
   AllowOverride none
   Require all granted
</Directory>
```

 - Ganti `AllowOverride none` dengan `AllowOverride All` sehingga menjadi seperti ini

```
<Directory /var/www/>
   Options Indexes FollowSymLinks
   AllowOverride All
   Require all granted
</Directory>
```

 - Lalu simpan dengan cara menekan **ctrl + x**. Kemudian akan muncul konfirmasi, pilih **yes** dengan menekan **ctrl + y**.
 - Langkah terakhir adalah merestart apache2 dengan menuliskan perintah di bawah ini.

```
sudo systemctl restart apache2.service
```

 - Selesai

Setelah melakukan langkah-langkah di atas, tahap berikutnya adalah kita harus mengaktifkan modul `mod_rewrite` pada apache. Berikut cara untuk mengaktifkan `mod_rewrite` pada apache.

 - Buka terminal kemudian tuliskan perintah di bawah ini
 
```
sudo a2enmod rewrite
```

 - Setelah itu isikan password user Anda.
 - Selanjutnya restart apache2 dengan menuliskan perintah 

```
sudo systemctl restart apache2.service
```

Silakan refresh browser dan lihat apakah ada error atau tidak, jika tidak ada dan url bisa diakses dengan normal, berarti Anda telah berhasil.

Selamat mencoba, semoga bermanfaat.