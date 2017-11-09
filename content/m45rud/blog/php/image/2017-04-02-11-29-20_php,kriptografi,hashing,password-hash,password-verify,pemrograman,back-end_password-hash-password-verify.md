<!--t Menggunakan Password_hash dan Password_verify pada Login PHP t-->
<!--d Cara menggunakan fungsi password_hash dan password_verify pada PHP untuk membuat login yang aman dan meningkatkan keamanan data user. d-->
<!--tag php,kriptografi,hashing,password hash,password verify,pemrograman,back end tag-->
<!--image https://masrud.com/content/images/php.png image-->

Akhir-akhri ini semangat ngeblog saya kembali bangkit lagi setelah lama mati <strike>terkubur selama 1000 tahun</strike>.  

Nah, pada kesempatan ini saya akan berbagi sedikit pengetahuan saya tentang pemrograman web. 

Yaitu cara menggunakan fungsi password_hash dan password_verify pada PHP.

Password_hash adalah salah satu fungsi yang dimiliki PHP untuk melakukan hash menggunakan algoritma hashing satu arah (one-way hashing). Password_hash ada pada PHP versi 5.5.0 ke atas.

  >**Hash** adalah suatu mekanisme untuk memetakan suatu data yang diinputkan berupa teks polos (plain text) menjadi output berupa checksum atau fingerprint (kode acak dengan panjang karakter yang tetap).

Karena password_hash menggunakan algoritma hashing satu arah, maka data input yang sudah dihash tidak akan bisa didapatkan lagi data aslinya. Dan meskipun data yang diinputkan sama misalnya kata **'masrud.com'**, hasil yang didapatkan dari hash akan selalu berubah-ubah.

Misalkan kita memiliki data berupa password/kata sandi yang sudah terhash menggunakan fungsi password_hash menjadi kode acak seperti di bawah ini

```
$2y$10$EnIi90KP.0BqCVJgK21BrO3xzArxCZaiAPaUebCw.K2Xw71QOCZv2
```

Nah kode di atas tidak akan bisa diubah lagi ke bentuk aslinya menjadi teks polos. Untuk itulah adanya fungsi password_verify.

Untuk password_verify akan saya bahas setelah pembahasan password_hash selesai.

Contoh password_hash

<amp-iframe 
         height="190"
         layout="fixed-height"
         sandbox="allow-scripts allow-same-origin allow-popups"
         allowfullscreen
         frameborder="0"
         src="https://pastebin.com/embed_iframe/i6vZFBYU">
</amp-iframe>

Kode di atas akan menghasilkan output

```
$2y$10$EnIi90KP.0BqCVJgK21BrO3xzArxCZaiAPaUebCw.K2Xw71QOCZv2
```

Penjelasan kede di atas adalah sebagai berikut :

 - **password_hash** adalah fungsi untuk hash.
 - **secret password** adalah password yang kita buat.
 - **PASSWORD_DEFAULT** adalah algoritma standar untuk melakukan hash yaitu menggunakan <a href="https://en.wikipedia.org/wiki/Bcrypt" target="_blank">BCRYPT</a> dan akan menghasilkan output sepanjang 60 karakter. Sangat disarankan untuk membuat field data pada database sepanjang 255 karakter, sebab output hasil hash dapat lebih panjang sesuai dengan algoritma yang digunakan.
 - **$options** hanya sebuah nama variabel array untuk menampung nilai cost. Nama variabel $options ini dapat kita ganti sesuka hati. Variabel $options ini tidak wajib.
 - **cost** adalah parameter yang digunakan untuk menentukan seberapa banyak hash dilakukan. Untuk bcrypt, jika nilainya 10 maka proses hashing dilakukan sebanyak 2^10 atau 1024 kali.

Kode output hasil dari proses hash tersebut kita simpan dalam database untuk membuat autentikasi login user dengan password_verify.

<h4>Bagaimana, sudah tahukan apa itu password hash?</h4>

Nah, sekarang mari kita bahas password_verify.

Password_verify adalah fungsi PHP yang berguna untuk melakukan verifikasi (mencocokkan) data yang telah terhash (memakai fungsi password_hash) dan data aslinya.

Contohnya password_verify seperti ini

<amp-iframe 
         height="235"
         layout="fixed-height"
         sandbox="allow-scripts allow-same-origin allow-popups"
         allowfullscreen
         frameborder="0"
         src="https://pastebin.com/embed_iframe/vf9KuGx2">
</amp-iframe>

 - **$hash** adalah variabel untuk menampung nilai data yang dihasilkan dari proses hash dengan fungsi password_hash.
 - **password_verify** adalah fungsi untuk mencocokkan data asli dengan data yang sudah terhash.
 - **secret password** adalah password yang kita buat.

Lebih jelasnya begini.

Password_verify akan mencocokkan data asli (secret password) dengan data yang terhash ($hash). Jika data cocok maka akan menampilkan pesan **password is valid!** dan jika data tidak cocok makan akan menampilkan **Invalid password**.

<h3>Bagaimana menerapkan fungsi password_hash dan password_verify?</h3>

Untuk menggunakan fungsi password_hash dan password_verify pada login aplikasi berbasis PHP caranya mudah. Namun saya tidak akan langsung menjelaskannya disini, sebab saya membuat sebuah contoh lengkap dengan penjelasan kodenya.

<amp-iframe 
         height="720"
         layout="fixed-height"
         sandbox="allow-scripts allow-same-origin allow-popups"
         allowfullscreen
         frameborder="0"
         src="https://pastebin.com/embed_iframe/4VP117cR">
</amp-iframe>

Untuk lebih mudah mempelajari cara penerapkan fungsi password_hash dan password_verify, silakan download source code login yang telah saya buat. Tampilan login formnya memang sangat sederhana namun sudah menerapkan fungsi password_hash dan password_verify serta sudah saya sertakan juga dokumentasi kodenya.

Untuk source codenya silakan download **<u>[disini][1]</u>**

Fungsi password_hash sangat direkomendasikan untuk mengenkripsi password karena menggunakan algoritma hashing satu arah. 

Sebab meskipun kita sudah mendapatkan outputnya (password hasil hash yang tersimpan dalam database) maka mustahil kita akan mendapatkan inputnya (password asli user).

Jadi mulai sekarang, jika Anda akan membuat sebuah aplikasi berbasis web dengan php, pastikan untuk menggunakan password_hash dan password_verify untuk keamanan loginnya.

Demikianlah sedikit ilmu yang dapat saya bagikan, semoga dapat membawa manfaat dan keberkahan bagi kita semua. Mohon koreksinya jika ada kesalahan, saya sendiri juga sedang dalam tahap belajar.

Baca juga **[Membuat Notifikasi dengan Sweet Alert pada PHP][2]**

<small>Sumber :

 - <a href="http://php.net/manual/en/function.password-hash.php" target="_blank">http://php.net/manual/en/function.password-hash.php</a>
 - <a href="http://php.net/manual/en/function.password-verify.php" target="_blank">http://php.net/manual/en/function.password-verify.php</a></small>


  [1]: https://goo.gl/EZXRpK
  [2]: https://masrud.com/post/membuat-notifikasi-sweet-alert