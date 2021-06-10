# Laporan Akhir Project - Maple


  * Nama sistem: Maple 
  * Paralel: 3
  * Kelompok: 5
  
  * Nama Asisten Praktikum:
    - Qorry Atul Chairunnisa (G64170014)
    - Indah Puspita (G64170035)
   
- Nama anggota kelompok dan masing-masing role
  * Maya Ayu  (G24180002) sebagai Front End dan Back End
  * Dyah Puspitasari Asih (G24180066) sebagai Back End
  * Septi Chairini Utami (G24180032) sebagai UI/UX Designer
  
## Brief Introduction
   Maple merupakan sebuah aplikasi berbasis website yang berfungsi sebagai sarana pembelajaran Bahasa Inggris khususnya yang berkaitan dengan persiapan ujian atau tes TOEFL. Sistem pembelajaran yang terdapat pada Maple akan dibuat menjadi beberapa stage atau level supaya mempermudah dalam penguasaan materi. History pembelajaran pengguna selanjutnya akan dipetakan untuk menentukan kategori kelas pengguna misalnya beginner, intermediate, dan advance. Materi yang diberikan kepada pengguna dikemas dengan cara yang berbeda-beda supaya tidak monoton dan membosankan, seperti output berupa radio, video dan reading teks. 
  
  Maple dapat diakses dengan mendaftar akun terlebih dahulu, yang hanya membutuhkan username, email dan password. Setelah dibuat akun, pengguna dapat login dan melakukan tes. Setiap level berisi kosakata-kosakata baru dan audio learning baru. Pada bagian test, user akan mendapatkan soal sesuai dengan level stages masing-masing dalam bentuk menyerupai tes TOEFL yang sesungguhnya. Disertai dengan limit waktu, test listening, reading, listening, speaking and writing questions. Setelah dilakukan tes, akan muncul hasil pembelajaran berupa achievement nilai TOEFL. Terdapat pula fitur review soal yang diujikan dan materi yang telah dipelajari. 

## User Analysis
### User Story
   * Sebagai seorang mahasiswa tingkat akhir, user membutuhkan nilai toefl untuk persyaratan kelulusan dan mendaftar pekerjaan. 
   * Akan tetapi user masih belum menguasai bahasa Inggris, oleh karena itu user membutuhkan program persiapan tes TOEFL. 
   * Karena keterbatasan waktu, user menginginkan adanya tes cepat untuk mengetahui sejauh mana level bahasa Inggrisnya. Oleh karena itu dia membutuhkan uji coba tes yang            singkat namun dapat mewakili kemampuan bahasanya.
   * Uji coba tes yang user butuhkan adalah reading, listening, dan writing
   * Nilai yang diperoleh user dari hasil tes sebelumnya akan menjadi acuan user untuk mengetahui level TOEFLnya dan mengambil kategori kelas lanjutan yang cocok
   * User dapat memutuskan untuk purchase kelas persiapan tes toefl mengacu nilai TOEFL yang telah dilakukan 
   
## Spesifikasi teknis lingkungan pengembangan
  * Software
    - Operating System: Windows 10
    - Text Editor: Visual Studio Code
    - Framework: Bootstrap 4
    - Database: MySQL
    - Server: XAMPP
  * Hardware
    - Processor:  Intel Celeron N4000 CPU 1.10 GHz; Intel(R) Core(TM) i3-1005G1 CPU @ 3.4GHz
    - Memory: 8,00 GB
    - Graphics Card:  Intel UHD G1 Graphics
  * Tech Stack
    - Version Control dan Collaboration Platform : Github, Discord, Trello
    - Teknologi : CSS, HTML, Javascript, dan PHP
## Hasil dan Pembahasan
- Use Case Diagram
   * ![RPL3-usecase](https://user-images.githubusercontent.com/78951674/121545289-97462980-ca34-11eb-8bb7-3fe5ce8e8bf2.png)
- Activity diagram

   * ![RPL3-ACTIVITY DIAGRAM](https://user-images.githubusercontent.com/78951674/121556117-cd3bdb80-ca3d-11eb-8d2b-d9a562e4682c.jpg)
- Class diagram
- ![RPL-Class](https://user-images.githubusercontent.com/71475762/121609001-2aa34d00-ca7d-11eb-9029-60cc9b661566.png)

  
- Entity relationship diagram
- ![RPL-ERD (1)](https://user-images.githubusercontent.com/71475762/121609018-35f67880-ca7d-11eb-9350-a07d5c04cae5.png)

  

## Arsitektur Website Maple
Arsitektur website mengacu pada desain sebuah website,atau dimana komponen yang membentuk suatu system ditempatkan dan bagaimana mereka berkomunikasi. Tujuan arsitektur dalam pengembangan website adalah untuk mendefinisikan jenis-jenis fungsi utama dan data yang dibutuhkan untuk mengelola serta mendukung fungsi bisnis. Pada arsitektur aplikasi maupun website, harus ditentukan dan dituliskan secara lengkap kebutuhan yang penting untuk memproses data dan mendukung bisnis. Pada proses pengumpulan kebutuhan sistem dan data, data diperoleh dari admin dan pengguna. Sehingga bisa disebutkan kebutuhan tersebut meliputi: 1)pendaftaran, 2)pembelajaran, 3)penilaian, 4)data pengguna, 5)data penilaian(meliputi pertanyaan dan jawaban soal TOEFL yang nantinya diajukan kepada pengguna melalui teks reading, audio), 6)data jawaban dari pengguna, 7)data purchase pengguna. Identifikasi output dari website Maple ini adalah skor TOEFL yang diperoleh dari input jawaban dari pengguna, pertanyaan TOEFL, keterangan soal, serta materi pembelajaran TOEFL. 

- Arsitektur Diagram
  * ![RPL3-AD](https://user-images.githubusercontent.com/78951674/121549257-e6418e00-ca37-11eb-8385-91ec1767b7bf.png)

  * Agar dapat merealisasikan hal-hal tersebut, pengembangan website Maple akan menggunakan framework Bootsrap dengan basis bahasa pemrograman CSS untuk mengoptimalkan sisi front-end dari website Maple. Kemudian website Maple dibangun menggunakan bahasa pemrograman HTML,CSS dan PHP dan basis data MySQL yang dibantu dengan penggunaan XAMPP sebagai server web lokal dengan URL localhost. Kebutuhan untuk menjalankan sistem ini adalah sebuah komputer yang dilengkapi dengan server  web local dan web browser.

## Fitur Utama Maple
Berdasarkan rancangan pada arsitektur website Maple dan tujuan awal dari website Maple, maka fitur utama yang kami kembangkan dari Website Maple adalah menyediakan Tes TOEFL secara cepat dan ringkas dimana hasil dari tes ini dapat dijadikan acuan oleh pengguna terkait sejauh apa pemahaman dan kemampuan pengguna dalam belajar Bahasa Inggris. 

## Fungsi CRUD pada Website Maple
CRUD merupakan akronim dari Create, Read, Update, dan Delete. Operasi CRUD adalah manipulasi data paling mendasar dalam database. Dalam website Maple, beberapa fungsi dapat dilakukan oleh admin dan pengguna. Pengguna (user) dapat mendaftarkan diri dan membuat akun sehingga dapat log in ke dalam sistem (CREATE), mengakses soal dan materi dan melihat skor hasil TOEFL (READ), mengubah password (UPDATE),  hingga melakukan purchase pembelajaran TOEFL yang lebih intensif. Sedangkan admin memiliki hak akses untuk mengelola soal-soal dalam sistem, mengelola akun pengguna (CREATE and UPDATE), melihat daftar user dan skor TOEFL (READ), mengelola purchasing yang dilakukan oleh user (UPDATE), menghapus konten dan akun pengguna (DELETE).

## Testing

| ID Pengujian |   Deskripsi Pengujian   |   Prosedur Pengujian   |   Data Masukan   |     Luaran yang Diharapkan     |
|--------------|-------------------------|------------------------|------------------|--------------------------------|
|      A1      |                                              Create Account                                          |
|              | Pengguna dapat membuat  | Positive test case     | Username,        | Pengguna berhasil memiliki akun|
|              | akun di Maple           |                        | dan password     | website Maple                  |
|              | Pengguna gagal membuat  | Negative test case     | Data masukan     | Pengguna gagal memiliki akun   |
|              | akun di Maple           |                        | tidak sesuai     | website Maple                  |
|      A2      |                                                  Login                                               |
|              | Pengguna dapat masuk ke | Positive test case     | Username, email, | Pengguna berhasil masuk ke     |
|              | website Maple           |                        | dan password yang| beranda website Maple          |
|              |                         |                        | sudah terdaftar  |                                |
|              | Pengguna tidak dapat    | Negative test case     | Masih ada masukan| Pengguna tidak berhasil masuk  |
|              | masuk ke website Maple  |                        | yang salah       | beranda dan diminta mengulang  |
|              |                         |                        |                  | masukan                        |
|      A3      |                                                 Testing                                              |
|              | Pengguna dapat          | Positive test case     | Mengklik jawaban | Pengguna berhasil menyelesaikan|
|              | mengerjakan soal        |                        | yang dianggap    | soal dengan baik               |
|              | yang disajikan          |                        | benar            |                                |
|              | Pengguna tidak dapat    | Negative test case     | Tidak ada masukan| Halaman soal tidak muncul      |
|              | mengerjakan soal        |                        |                  | dan diminta login terlebih     |
|              | karena tidak login      |                        |                  | dulu                           |    
|      A4      |                                                Lihat Nilai                                           |
|              | Pengguna dapat melihat  | Positive test case     | Jawaban soal     | Pengguna dapat melihat nilai   |
|              | nilainya                |                        | lengkap terjawab | hasil dari mengerjakan soal    |
|              | Pengguna tidak dapat    | Negative test case     | Jawaban tidak    | Nilai tidak ditampilkan        |
|              | melihat nilainya        |                        | lengkap          |                                |

## Saran Untuk Pengembangan
Maple merupakan website yang cukup kompleks sehingga dibutuhkan waktu yang cukup lama untuk dapat menyelesaikannya. Ide dan konsep dari sistem ini seharusnya dapat dimatangkan dari jauh-jauh hari supaya persiapan pengembangan dapat maksimal. Fokus utama yang harus diperhatikan terlebih dulu adalah untuk fungsi-fungsi utamanya. Jangan terlalu banyak fungsi supaya fungsi utama dapat maksimal. Koordinasi yang kuat serta manajemen waktu yang baik sangat diperlukan untuk mengerjakan pengembangan website ini karena melihat dari kemampuan dan penguasaan materi pengembang yang berbeda-beda. 

