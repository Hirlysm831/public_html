<!--t Cara Mengubah Permisi Folder htdocs pada Linux t-->
<!--d Cara mengatasi error htdocs pada Linux. d-->
<!--tag linux,xampp,htdocs tag-->
<!--image https://masrud.com/content/images/linux.png image-->

Ketika pertama kali menggunakan lampp (xampp untuk linux) dan mencoba untuk memasukkan file kedalam folder htdocs dengan cara copy paste, maka kita akan menemui masalah. 

Masalah tersebut berupa tidak munculnya menu paste saat klik kanan serta fitur paste tidak bekerja meskipun kita sudah menakan **ctrl + v** pada keyboard.

Ketika menjumpai masalah tersebut kita tidak perlu khawatir, jangan beranggapan bahwa sistem operasi linux kita yang error kemudian langsung melakukan install ulang sistem operasi.

Penyebab tidak bekerjanya fitur paste tersebut adalah karena permission (hak akses) folder htdocs. Agar kita bisa menambahkan file ke dalam folder htdocs dengan cara copy paste maupun merubah file yang sudah ada, maka kita perlu merubah permisi folder htdocs tersebut.

<amp-img src="https://masrud.com/content/images/htdocs_linux.png"
 width="853" height="480" layout="responsive" alt="Linux"></amp-img>

Untuk merubah permisi folder htdocs, caranya sangat mudah. Buka Terminal kemudian tuliskan perintah dibawah ini lalu enter.

```
sudo chmod 777 -R /opt/lampp/htdocs
```

Kemudian sistem akan meminta password. Isikan dengan password linux kita lalu enter. 

Setelah itu, silakan coba masukkan file kedalam folder htdocs.

Dengan cara diatas, semua file dan sub folder yang terdapat dalam folder htdocs akan ikut berubah permissionnya (hak akses). Sehingga kita bisa menambahkan, menghapus dan mengubah file yang ada pada folder htdocs.

Apa yang saya tuliskan diatas berdasarkan pengalaman saya, jadi insyaAllah akan berhasil juga Anda terapkan jika menemui masalah seperti yang saya alami.

Baca juga **[Cara Mempercepat Komputer yang Super Lemot Abisss][1]**

Demikianlah informasi singkat yang bisa saya bagikan, semoga bermanfaat bagi Anda yang membutuhkan. Bila ada kesalahan, mohon koreksinya.


  [1]: https://masrud.com/post/cara-mempercepat-komputer-yang-super-lemot-abisss