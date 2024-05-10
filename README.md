
<center><img src="https://github.com/F2LX/holdu/blob/main/public/img/white.png?raw=true" width="400" alt="Laravel Logo"></center>


## About HoldU

HoldU adalah AI Mental Wellness Companion yang dibuat oleh ALFEI. HoldU dilengkapi dengan Generative AI yang dapat membantu manusia dalam bidang psikologi dan kesehatan mental. Fitur utama HoldU:

- Chat With Sana, Generative AI berbasis Text yang dapat menjadi teman bercerita pengguna.
- ConnectU, temukan kehangatan dalam komunitas ConnectU yang anonim dan menjunjung tinggi privasi.
- Journal, cara baru untuk menulis buku harian.
- Mood History, analisa mood harian dengan kecerdasan model Machine Learning & Artificial Intelligence.
- Meditation, pelajari meditasi dengan panduan dan musik yang membantumu rileks.

Dikembangkan dengan Laravel 11, Livewire 3, Alpine.js dan Bootstrap 5.3.

## Tim ALFEI

1. Felix Febryan Wana
2. Enver Olivier Chandra
3. Iyan Matius Sihombing

## Dokumentasi

HoldU berjalan dan dites di environment sebagai berikut:
- PHP 8.2.x
- Composer
- MySQL

Untuk menjalankan HoldU, anda perlu menyiapkan:
- OpenAI API Key
- OpenAI ORG Key

Anda dapat menggunakan OpenAI API Key yang disediakan didalam .env.txt

1. Lakukan git clone https://github.com/F2LX/holdu -b main
2. Jalankan "composer install" di direktori tersebut. Hal ini akan menginstall library yang dibutuhkan.
3. Setelah itu, copy dan paste .env.txt dan rename menjadi .env. Masukkan kedalam direktori HoldU.

Catatan: .env.txt akan disertakan di Google Classroom, mohon untuk menggunakan API key yang tersedia agar aplikasi berjalan dengan baik.

4. Ubah bagian berikut:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=holdu
DB_USERNAME=root
DB_PASSWORD=

Catatan: Anda dapat menyesuaikan tipe dan nama database, namun HoldU dites menggunakan environment tersebut.
5. Jalan migrations dengan cara: php artisan migrate:fresh
6. Aplikasi siap dijalankan di environment local dengan cara: php artisan serve

## Troubleshooting
Apabila tidak menggunakan .env yang disertakan, maka fitur generative AI tidak akan berfungsi. Anda perlu menambahkan OpenAI API Key kedalam .env.

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
