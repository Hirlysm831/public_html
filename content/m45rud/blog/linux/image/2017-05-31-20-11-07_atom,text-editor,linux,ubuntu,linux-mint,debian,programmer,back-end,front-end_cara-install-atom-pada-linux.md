<!--t Cara Menginstall Atom Text Editor pada Ubuntu/Linux Mint t-->
<!--d Tutorial menginstall Atom text editor pada Linux Mint atau Ubuntu untuk pemula. d-->
<!--tag atom,text editor,linux,ubuntu,linux mint,debian,programmer,back end,front end tag-->
<!--image https://masrud.com/content/images/20170515100603-atom.png image-->

Setiap programmer web baik front end maupun back end pasti membutuhkan text editor. Text editor ini berfungsi sebagai alat untuk menulis dan merangkai kode sehingga terciptalah sebuah aplikasi berbasis web.

Ada banyak text editor yang tersedia, salah satu yang sedang naik daun dan populer adalah Atom. Atom merupakan text editor yang dibuat menggunakan [electron][1] oleh tim GitHub.  

Electron sendiri merupakan sebuah framework untuk menciptakan apliaksi native menggunakan teknologi web seperti HTML, CSS, JavaScript dengan Chromium and Node.js.

Atom text editor memiliki banyak kelebihan dibandingkan text editor lainnya, antara lain:

 - Atom sangat fleksibel sehingga dapat dikostumisasi sesuai dengan keinginan pengguna.
 - Terdapat banyak packages yang membantu mempermudah dalam proses pengembangan web.
 - Ada banyak pilihan theme dan syntax theme sehingga jika kita bosan dengan tampilannya kita dapat menggantinya dengan mudah.
 - Menambahkan serta mengupdate packages dan theme hanya dengan klik klik.
 - Mudah digunakan jika dibandingkan dengan text editor lain.
 - Tersedia diberbagai platform, seperti Linux, Windows dan Mac
 - Gratis dan open source serta masih banyak lagi.

Untuk menggunakan Atom pada Linux kita perlu menginstallnya terlebih dahulu. 

Berikut langkah-langkah menginstall Atom text editor pada pada Linux (Ubuntu, Linux Mint, Elementary OS dan turunan dari Ubuntu/Debian)

###1. Melalui Repository

 1. Tambahkan repository berikut ini ke dalam repository Linux yang kita gunakan. Tekan enter dan masukkan password user root

```
sudo add-apt-repository ppa:webupd8team/atom
```

 2. Selanjutnya update respository yang ada pada Linux dengan menuliskan perintah berikut

```
sudo apt-get update
```
 3. Langkah berikutnya adalah menginstall Atom. Tulisakan perintah berikut dan tekan enter

```
sudo apt-get install atom
```

 4. Tunggu hingga proses intallasi selesai

###2. Melalui File .deb

 1. Pertama kita download file .deb Atom terlebih dahulu di situs resminya **[https://atom.io/][2]**. Pilih yang berekstensi **.deb**
<amp-img src="https://masrud.com/content/images/20170531193739-download-atom.png" alt="Atom text editor" height="506" width="800" layout="responsive"></amp-img>
 2. Setelah proses download selesai, kita buka terminal dan masuk ke lokasi file **atom-amd64.deb** yang telah kita download dengan menuliskan perintah

```
cd Downloads
```

 3. Kemudian kita install Atom dengan menuliskan perintah 

```
sudo dpkg -i atom-amd64.deb
```

 4. Jika terdapat error missing dependency, kita install terlebih dahulu dependency yang dibutuhkan dengan menuliskan perintah berikut 

```
sudo apt-get -f install
```
baru kemudian 

```
sudo dpkg -i atom-amd64.deb
```

Sekarang kita telah berhasil menginstall Atom text editor pada Linux. 

Hal yang kita lakukan selanjutnya adalah mengkostumisasi Atom agar sesuai dengan kebutuhan kita, seperti menginstall theme dan packages-packages yang kita butuhkan untuk mempermudah proses pengembangan web.

Selamat mencoba. 

  [1]: https://electron.atom.io/
  [2]: https://atom.io/