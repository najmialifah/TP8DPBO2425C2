# TP8DPBO2425C2 - Princess Academy MVC

## Tugas Praktikum 8 DPBO

Saya **Najmi Alifah Hilmiya** dengan **NIM 2410393** mengerjakan **Tugas Praktikum 8** dalam mata kuliah *Desain Pemrograman Berorientasi Objek* untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. **Aamiin.**

**Princess Academy** adalah aplikasi manajemen data akademik sederhana yang dibangun menggunakan arsitektur **MVC (Model-View-Controller)** dengan PHP Native. Proyek ini dikembangkan untuk memenuhi Tugas Praktikum DPBO (Desain Pemrograman Berorientasi Objek).

Aplikasi ini menonjolkan antarmuka pengguna (*User Interface*) yang **Aesthetic** dengan tema *Soft Pink*, memberikan pengalaman pengelolaan data Dosen dan Mata Kuliah yang bersih, modern, dan menyenangkan.

## Preview

<img width="1919" height="865" alt="image" src="https://github.com/user-attachments/assets/a77bd705-893e-4c20-b2a1-ffb7dbc7f675" />
<img width="1919" height="863" alt="image" src="https://github.com/user-attachments/assets/ae83121d-0541-4278-be9c-9bcc2468ded6" />

## Desain Program (Architecture)

Aplikasi ini dirancang menggunakan pola arsitektur **MVC**, yang memisahkan logika aplikasi menjadi tiga komponen utama untuk memudahkan pemeliharaan dan pengembangan kode.

### 1. Model (`/models`)
Bertanggung jawab untuk manajemen data dan interaksi langsung dengan database.
* **`Lecturer.php`**: Menangani operasi CRUD untuk tabel `lecturers`.
* **`Course.php`**: Menangani operasi CRUD untuk tabel `courses`. Model ini juga menangani relasi (JOIN) untuk mengambil nama dosen pengampu berdasarkan `lecturer_id`.

### 2. View (`/views`)
Bertanggung jawab untuk presentasi visual kepada pengguna (HTML/CSS).
* **Layouting**: Menggunakan sistem template parsial (`header.php`, `navbar.php`, `footer.php`) untuk konsistensi desain.
* **Styling**: Menggunakan Framework **Bootstrap 5** yang dimodifikasi dengan **Custom CSS** (`style.css`) untuk mencapai tema *Princess Academy* (Pink Tone).
* **Folder Struktur**: View dipisahkan berdasarkan entitas (`/course` dan `/lecturer`).

### 3. Controller (`/controllers`)
Bertindak sebagai penghubung logika antara Model dan View.
* **`LecturerController.php`**: Mengatur alur data dosen. Menerima input user, memanggil Model untuk simpan/ubah data, dan memanggil View untuk menampilkan tabel.
* **`CourseController.php`**: Mengatur alur data mata kuliah. Controller ini juga berkomunikasi dengan `LecturerModel` untuk menyediakan data *dropdown* dosen saat pembuatan mata kuliah.

---

## Penjelasan Alur Program (System Flow)

Aplikasi menggunakan konsep **Single Entry Point**, di mana semua *request* dari pengguna masuk melalui satu file utama.

### Alur Kerja (Request Lifecycle):

1.  **Routing (`index.php`)**
    * Pengguna mengakses URL, contoh: `index.php?page=course&action=create`.
    * Sistem menangkap parameter `page` (menentukan Controller) dan `action` (menentukan metode/fungsi).

2.  **Dispatching (Controller)**
    * Berdasarkan parameter `page`, sistem menginstansiasi Controller yang sesuai (misal: `CourseController`).
    * Controller memproses permintaan. Jika aksi adalah `create` (POST), controller mengambil data dari form.

3.  **Data Processing (Model)**
    * Controller meminta Model untuk melakukan operasi database (misal: `INSERT` data mata kuliah baru).
    * Model mengeksekusi query SQL ke database `db_mvc25`.

4.  **Rendering (View)**
    * Setelah data diproses, Controller mengarahkan pengguna (Redirect) atau memuat file View (misal: menampilkan tabel data yang sudah diperbarui).
    * Halaman dirender dengan gaya CSS *Soft Pink* dan ditampilkan ke browser.

---

## Fitur

### Fitur Utama
1.  **Manajemen Dosen (Lecturers)**
    * Menampilkan daftar dosen dengan ID Badge unik.
    * Tambah, Edit, dan Hapus data dosen.
2.  **Manajemen Mata Kuliah (Courses)**
    * Menampilkan daftar mata kuliah beserta SKS.
    * **Relasi Data**: Saat menambah mata kuliah, pengguna dapat memilih Dosen Pengampu melalui *dropdown* dinamis.
    * **Auto Avatar**: Menampilkan avatar inisial dosen secara otomatis menggunakan layanan UI Avatars.
3.  **UI/UX Aesthetic**
    * Tema warna konsisten: `#ff9a9e` (Primary) dan `#e87c82` (Accent).
    * Komponen UI modern: *Rounded cards*, *soft shadows*, dan tipografi *Poppins*.
    * Responsif di perangkat mobile (menggunakan Grid Bootstrap).

### Struktur Direktori
```text
tp_mvc25/
├── assets/                 # File statis (CSS, JS, Fonts)
│   ├── style.css           # Custom Aesthetic Styling
│   ├── bootstrap.min.css   # Framework CSS
│   └── ...
├── config/                 # Konfigurasi
│   └── Database.php        # Koneksi Database MySQLi
├── controllers/            # Logika Bisnis
│   ├── LecturerController.php
│   └── CourseController.php
├── models/                 # Akses Data (SQL)
│   ├── Lecturer.php
│   └── Course.php
├── views/                  # Tampilan Antarmuka
│   ├── layout/             # Template (Navbar, Header, Footer)
│   ├── lecturer/           # View CRUD Dosen
│   └── course/             # View CRUD Mata Kuliah
├── db_mvc25.sql            # File Dump Database
├── index.php               # Router Utama
└── README.md               # Dokumentasi Proyek

## Dokumentasi Screen Record
https://youtu.be/weR-hMjKr7A
