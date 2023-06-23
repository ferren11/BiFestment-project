# BiFestment
BiFestment merupakan aplikasi berbasis web yang mengintegrasikan informasi dan pendaftaran acara pengembangan diri, seperti seminar, workshop, dan bootcamp di lingkup BINUS University.

**_Application Requirement_**
- Laravel
- Bootstrap v.5.3.0
- Node Js

**_Our Main Features:_**
- _Integrated events’ list in BINUS University_
- _Display detailed information about the event_
- _One-click registration_

Pitch Deck: 
[BiFestment Pitch Deck in Notion](www.notion.so/Pitch-Deck-0ff1c7095d1b454395013c3b3baa815d)

## Panduan Instalasi
1. Download keseluruhan folder project laravel BiFestment yang dapat Anda akses melalui link github berikut ini:
[GitHub BiFestment](https://github.com/ferren11/BiFestment-project/tree/main)
2. Pastikan Laravel, XAMPP, dan Node.js sudah terpasang di dalam perangkat Anda.
3. Buka projek Laravel BiFestment dan jalankan perintah: `composer install` di terminal. Sebagai informasi, instalasi composer ini mungkin membutuhkan waktu yang cukup lama.
4. Setelah composer berhasil terpasang, jalankan perintah: `npm install` di terminal.
5. Selanjutnya, jalankan perintah: `npm run dev` di terminal.
6. Lalu, rename file `.env.example` yang ada di dalam folder _project_ menjadi `.env.
7. Buat terminal baru dan jalankan perintah: `php artisan key:generate`.
8. Buka XAMPP dan aktifkan module Apache dan MySQL.
9. Klik opsi Admin pada module MySQL. Dengan begitu, Anda akan diarahkan ke halaman _local_ phpMyAdmin. Pada halaman tersebut, buat _database_ baru dengan nama **aol-project** agar nama _local database_ sama dengan nama database pada .env
10. Jalankan `php artisan migrate:fresh --seed` di terminal, tunggu sampai seluruh tabel dan data berhasil termigrasi.
11. Jalankan `php artisan serve` di terminal. 
12. Jika perintah dalam poin (11) berhasil dijalankan, maka akan muncul alamat _IP localhost_. Navigasikan alamat tersebut ke dalam browser dan Anda akan dialihkan ke halaman utama BiFestment.

## Panduan Penggunaan Aplikasi
1. Bagi pengguna baru: lakukan pendaftaran akun dengan mengisi data pada halaman registrasi sesuai ketentuan berikut:
    - NIM bersifat unik dan terdiri dari 10 angka
    - Menggunakan email binus (@binus.ac.id)
    - Password mengandung minimal 8 karakter
    - Menyetujui _Terms and Conditions_ aplikasi BiFestment
2. Selanjutnya, login dengan menggunakan _email_ dan _password_ yang telah berhasil didaftarkan. Jika Anda berhasil login, maka pengguna akan dialihkan secara otomatis ke halaman utama (_homepage_).
3. Di homepage, pengguna bisa mencari _event_ yang ingin diikuti baik dengan dengan fitur _search bar_ maupun berdasarkan kategori _event_. 
4. Pengguna bisa melihat detail dari _event_ yang ingin diikuti dengan memilih salah satu _event_ yang tersedia. 
5. Jika berminat untuk mengikuti _event_ tersebut, pilih tombol _Register_ untuk mendaftarkan diri. 
    - Pengguna akan diarahkan ke halaman _My Events_ setelah muncul _pop-up_ konfirmasi bahwa registrasi telah berhasil. 
    - Jika ternyata pengguna sudah pernah mendaftar event tersebut sebelumnya, maka pengguna tidak dapat mendaftar lagi pada event yang sama dan akan muncul _pop-up_ yang menyatakan bahwa registrasi gagal. 
6. Untuk melihat daftar _event_ yang telah diregistrasi, pengguna dapat menuju ke halaman _My Events_. Navigasi untuk ke halaman _My Events_ dapat dilihat pada _navigation bar_. 

**Untuk pemahaman yang lebih lanjut, Anda bisa mengakses:** <br>
Dokumentasi user guide: [BiFestment User Guide]() <br>
Video demo aplikasi: [YouTube Demo BiFestment](https://www.youtube.com/watch?v=7NEz2ENHUwQ)

## Anggota Kelompok
- Felicia Ferren (2440013071)
- Kania Agatha (2440064702)
- Diana Petrina Santoso (2440015442)
- Bernadetha Emma Wawin (2440015101)

**Copyright &copy; 2023 BiFestment**
