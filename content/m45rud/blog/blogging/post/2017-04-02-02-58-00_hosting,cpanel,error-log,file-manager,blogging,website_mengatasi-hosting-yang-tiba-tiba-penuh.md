<!--t Cara Mudah Mengatasi Hosting yang Tiba-Tiba Penuh t-->
<!--d Cara mudah mengatasi hosting yang tiba-tiba penuh secara mendadak meskipun kita tidak melakukan apa-apa. d-->
<!--tag hosting,cpanel,error log,file manager,blogging,website tag-->

**Pernahkah Anda mengalami hosting yang tiba-tiba penuh meskipun tidak melakukan apa-apa?**

Hal ini umumnya terjadi pada mereka yang mengelola website atau blog dengan selfhosted. 

Hosting bisa langsung penuh secara tiba-tiba meskipun pemiliknya tidak pernah menyimpan file yang besar dalam hosting tersebut.

Saya sendiri juga pernah mengalami hal ini. 

Untuk mengatasinya saya langsung meminta bantuan kepada pihak penyedia [hosting][1] untuk memecahkan masalah ini, karena jika tidak segera diatasi maka kita tidak akan bisa menambahkan data pada website/blog, baik itu menyimpan file, menulis artikel, menambah tema dan yang lainnya dikarenakan hosting sudah penuh. 

<amp-img src="https://masrud.com/content/images/20150712173017-Cara-Mengatasi-Hosting-Yang-Tiba-tiba-Penuh.png"
     width="790"
     height="188"
     layout="responsive"
     alt="Cara Mudah Mengatasi Hosting yang Tiba-Tiba Penuh"></amp-img>

Namun ternyata jawaban dari pihak penyedia layanan hosting kurang memuaskan sehingga saya mencari solusi sendiri bagaimana mengatasi space hosting yang mendadak penuh.

Ternyata penyebab terjadinya hal ini adalah munculnya file **error_log**. 

Error_log adalah sebuah catatan yang otomatis  dibuat oleh sistem hosting untuk memberitahukan adanya sebuah kesalahan pada kode script yang terdapat dalam website/blog. 

Error_log ini biasanya muncul secara tiba-tiba, bahkan bisa membuat kapasitas hosting menjadi penuh secara mendadak tanpa kita sadari.

Apabila dalam hosting muncul file bernama **error_log**, berarti ada script, plugin, maupun theme yang bermasalah ataupun tidak kompatibel dengan hosting yang digunakan. 

Seperti halnya ketika kita melakukan kesalahan  misalnya error mengistall plugin, maka akan muncul file error_log dan file error_log inilah yang menyebabkan hosting penuh secara mendadak.

<h3>Lalu apa yang perlu kita lakukan agar hosting tidak menjadi penuh?</h3>

Hal yang perlu kita lakukan adalah **menghapus file error_log tersebut**, hanya itu saja. Untuk menghapus file error ini caranya sangat mudah.

- Pertama, silakan masuk ke cpnael hosting.
- Lalu silakan buka **webdisk**.
- Kemudian lihat di bagian folder mana yang kapasitasnya paling besar (folder yang tidak wajar).
- Kemudian kembali ke cpanel dan buka **file manager**.
- Selanjutnya cari file yang bernama **error_log** pada folder yang kapasitasnya paling besar tadi.
- Setelah ketemu, silakan hapus file **error_log** tersebut dan refresh cpanel.

Setelah merefresh cpanel, maka kita akan melihat kapasitas hosting menjadi normal kembali.

Selain karena error-log tersebut, penyebab hosting bisa penuh adalah karena terdapat file-file sampah yang memenuhi hosting, seperti file tmp, log dan sebagainya. 

Untuk membersihkan cukup dengan menghapus file yang berada pada folder **temp, logs dan .trash** di file manager Cpanel.

Demikianlah sedikit tips dari apa yang saya alami, semoga bisa bermanfaat bagi yang mendapati hosting yang mendadak penuh.


  [1]: https://masrud.com/tag/hosting