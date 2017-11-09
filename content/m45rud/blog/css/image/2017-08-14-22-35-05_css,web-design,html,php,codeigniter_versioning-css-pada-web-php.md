<!--t Trik Sederhana Versioning CSS pada Website / Aplikasi Berbasis Web PHP t-->
<!--d Trik sederhana versioning css pada website / aplikasi berbasis web PHP untuk membuat perubahan seketika tanpa clear cache. d-->
<!--tag css,web design,html,php,codeigniter tag-->
<!--image https://masrud.com/content/images/css.png image-->

Cascading Style Sheet atau CSS adalah suatu aturan atau mekanisme untuk mengatur komponen dalam sebuah web agar lebih teratur dan terstruktur. CSS tidak termasuk bahasa pemrogramman. 

CSS merupakan salah satu elemen penting dalam membuat website maupun aplikasi berbasis web. CSS berguna untuk mengatur tampilan suatu web agar lebih rapi, terstruktur dan menarik, tanpa [CSS][1] suatu halaman web akan terlihat jelek, tidak terstruktur dan tidak menarik sama sekali.

Terdapat 3 cara dalam menulis CSS pada sebuah web, yaitu *inline*, *embed* dan *eksternal*.

Pada tulisan ini saya tidak akan membahas tentang ke tiga teknik penulisan CSS tersebut, namun saya hanya akan membahas tentang penulisan CSS secara eksternal. Penulisan CSS secara eksternal dilakukan dengan memanggil file CSS tersebut kedalam halaman web dengan tag link dan diletakkan diantara tag <code>&lt;head&gt;</code> dan <code>&lt;/head&gt;</code>. Contoh tag

    <link href="style.css" rel="stylesheet">

Cara penulisan ini paling banyak digunakan dibandingkan dengan penulisan secara inline dan embed. Keuntungan penulisan CSS secara eksternal adalah lebih mudah dimaintenance karena CSS ditulis secara terpisah.

Akan tetapi cara ini juga memiliki satu kekurangan yaitu kadang perubahan pada web tidak langsung terlihat dan harus melakukan crear cache terlebih dahulu agar perubahan tersebut dapat terlihat. Hal ini terjadi karena browser melalukan cache pada file CSS yang dipanggil.

Solusi untuk mengatasi kekurangan ini adalah dengan melakukan **versioning CSS**. Versioning CSS merupakan suatu metode untuk memberi nomor versi pada setiap perubahan yang terjadi pada file CSS.

Versioning CSS dilakukan dengan menambahan nomor versi file CSS pada link tag yang digunakan untuk memanggil file CSS.

Contoh

    <link href="style.css?version=1.0" rel="stylesheet">

Untuk melakukan versioning CSS pada web /aplikasi berbasis web [PHP][2] kita bisa memanfaatkan fungsi bawaan PHP yaitu <code>filemtime()</code> . Cara ini lebih mudah dibandingkan kita menulis versi CSS secara manual pada setiap perubahan yang terjadi. Fungsi <code>filemtime()</code> mengambil waktu modifikasi suatu file, dalam konteks ini adalah file CSS.

Contoh penerapan fungsi <code>filemtime()</code> pada versioning CSS.

    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">

<amp-img src="https://masrud.com/content/images/20170812230909-versioning%20css.png" alt="Trik Sederhana Versioning CSS pada Website / Aplikasi Berbasis Web PHP" height="506" width="900" layout="responsive"></amp-img>
<figcaption>Versioning CSS</figcaption>

<amp-img src="https://masrud.com/content/images/20170812230921-view%20source%20versioning%20css.png
" alt="Trik Sederhana Versioning CSS pada Website / Aplikasi Berbasis Web PHP" height="506" width="900" layout="responsive"></amp-img>
<figcaption>Hasil versioning CSS</figcaption>

Jika file CSS berada dalam sub folder, maka penulisan juga harus mencantumkan lokasi file CSS kemudian diikuti nama file CSS.

Contoh

    <link href="./assets/css/style.css?version=<?php echo filemtime('./assets/css/style.css'); ?>" rel="stylesheet">

> Teknik versioning ini juga dapat diterapkan pada framework PHP seperti
> [CodeIgniter][3], Laravel dan sebagainya.

Dengan menerapkan teknik versioning CSS, maka perubahan yang terjadi pada CSS akan langsung terlihat pada web tanpa kita harus melakukan clear cache pada browser. Hal ini karena file CSS yang direquest oleh browser adalah file CSS yang terbaru dan jika tidak ada perubahan pada file CSS maka browser akan menampilkan file CSS yang sudah tersimpan dalam cache.

Demikianlah trik sederhana melakukan versioning CSS dengan PHP. Semoga dapat menambah wawasan dan pengetahuan kita. 

Jika Anda merasa tulisan ini bermanfaat silakan share ke teman-teman dan jangan lupa like fanspage blog ini.

Have a nice day :)


  [1]: https://masrud.com/tag/css
  [2]: https://masrud.com/category/php
  [3]: https://masrud.com/category/codeigniter