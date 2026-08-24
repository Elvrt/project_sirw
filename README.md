# SiRW — Sistem Informasi Rukun Warga 005 Tasikmadu, Kec. Lowokwaru, Kota Malang, Jawa Timur

> **Sistem Informasi berbasis web untuk pengelolaan administrasi dan pelayanan warga di tingkat RW dan RT.**

SiRW (*Sistem Informasi Rukun Warga*) adalah aplikasi web yang dibangun dengan **Laravel 10** untuk membantu pengurus RW dan RT dalam mengelola data kependudukan, administrasi persuratan, keuangan iuran, pengaduan warga, hingga pengambilan keputusan berbasis data (SPK Bansos).

---

## 📋 Daftar Isi

- [Fitur Utama](#-fitur-utama)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Konfigurasi Environment](#-konfigurasi-environment)
- [Struktur Peran Pengguna](#-struktur-peran-pengguna)
- [Modul Aplikasi](#-modul-aplikasi)
- [Struktur Proyek](#-struktur-proyek)
- [Database](#-database)
- [Lisensi](#-lisensi)

---

## ✨ Fitur Utama

| Modul | Deskripsi |
|-------|-----------|
| 🏠 **Dashboard Publik** | Halaman utama berisi informasi, berita, dan agenda lingkungan |
| 👨‍👩‍👧‍👦 **Data Kependudukan** | Manajemen Kartu Keluarga (KK) dan data warga lengkap |
| 📄 **Persuratan** | Pengajuan, persetujuan, dan pelacakan status surat |
| 💰 **Iuran** | Manajemen iuran warga dan status pembayaran |
| 📣 **Pengaduan** | Laporan dan pelacakan pengaduan warga |
| 📰 **Berita & Agenda** | Manajemen informasi dan jadwal kegiatan lingkungan |
| 🏗️ **Fasilitas Umum** | Inventaris dan pengelolaan fasilitas umum |
| 🚨 **Layanan Darurat** | Direktori nomor dan layanan darurat lingkungan |
| 📋 **Tata Tertib** | Manajemen peraturan dan tata tertib lingkungan |
| 🏛️ **Struktur Pengurus** | Profil dan susunan pengurus RW |
| 🤖 **SPK Bansos** | Sistem Pendukung Keputusan penerima bantuan sosial (metode berbasis kriteria & bobot) |

---

## 🛠️ Teknologi yang Digunakan

### Backend
| Teknologi | Versi | Keterangan |
|-----------|-------|------------|
| PHP | ^8.1 | Bahasa pemrograman utama |
| Laravel | ^10.10 | Framework PHP |
| Laravel Sanctum | ^3.3 | Autentikasi API |
| Yajra DataTables | 10.x | Server-side DataTables |
| Cloudinary Laravel | ^2.1 | Upload & manajemen gambar |
| Guzzle HTTP | ^7.2 | HTTP client |

### Frontend
| Teknologi | Versi | Keterangan |
|-----------|-------|------------|
| Vite | ^5.0.0 | Build tool frontend |
| Tailwind CSS | ^3.4.3 | CSS framework utility-first |
| DaisyUI | ^4.10.2 | Komponen UI berbasis Tailwind |
| Axios | ^1.6.4 | HTTP client JavaScript |

### Database & Storage
| Teknologi | Keterangan |
|-----------|------------|
| MySQL | Database relasional utama |
| Cloudinary | Cloud storage untuk gambar/dokumen |

---

## 💻 Persyaratan Sistem

Sebelum instalasi, pastikan sistem Anda memenuhi persyaratan berikut:

- **PHP** >= 8.1 (dengan ekstensi: `pdo`, `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`)
- **Composer** >= 2.x
- **Node.js** >= 18.x dan **npm** >= 9.x
- **MySQL** >= 8.0
- **Web Server**: Apache / Nginx / Laravel Artisan (dev)

---

## 🚀 Instalasi

### 1. Clone Repositori

```bash
git clone https://github.com/username/project_sirw.git
cd project_sirw
```

### 2. Install Dependensi PHP

```bash
composer install
```

### 3. Install Dependensi Node.js

```bash
npm install
```

### 4. Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env` sesuai kebutuhan (lihat bagian [Konfigurasi Environment](#-konfigurasi-environment)).

### 5. Migrasi Database

```bash
php artisan migrate
```

Jika tersedia seeder:
```bash
php artisan db:seed
```

### 6. Build Aset Frontend

Untuk **development** (dengan hot reload):
```bash
npm run dev
```

Untuk **production**:
```bash
npm run build
```

### 7. Jalankan Server Development

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`.

---

## ⚙️ Konfigurasi Environment

Salin `.env.example` menjadi `.env` dan sesuaikan variabel berikut:

```env
APP_NAME=SiRW
APP_ENV=local          # Ganti ke 'production' untuk live
APP_KEY=               # Di-generate otomatis oleh php artisan key:generate
APP_DEBUG=true         # Set false di production
APP_URL=http://localhost
```

### Database

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```

### Cloudinary (Upload Gambar)

Daftar akun di [cloudinary.com](https://cloudinary.com), lalu isi:

```env
CLOUDINARY_API_KEY=your_cloudinary_api_key
CLOUDINARY_API_SECRET=your_cloudinary_api_secret
CLOUDINARY_URL=cloudinary://your_api_key:your_api_secret@your_cloud_name
CLOUDINARY_CLOUD_NAME=your_cloud_name
```

---

## 👥 Struktur Peran Pengguna

Sistem menggunakan **role-based access control (RBAC)** dengan 3 jenis pengguna utama:

| Peran | Prefix URL | Hak Akses |
|-------|-----------|-----------|
| **RW** (Pengurus RW) | `/RW/...` | Akses penuh: semua modul + SPK Bansos + manajemen pengguna |
| **RT** (Pengurus RT) | `/RT/...` | Akses terbatas: KK, Warga, Iuran, Persuratan, Berita, Agenda, Fasilitas Umum |
| **Warga** | `/` | Akses publik: informasi, pengajuan surat, laporan pengaduan, status iuran |

> Sistem autentikasi menggunakan middleware `checkrole` yang memfilter akses berdasarkan role ID pengguna.

---

## 📦 Modul Aplikasi

### 🌐 Dashboard Publik (Warga)
Dapat diakses tanpa login. Menampilkan:
- Informasi selamat datang dan profil RW
- Berita terkini dan agenda kegiatan
- Layanan darurat
- Fasilitas umum
- Pengajuan surat dan pelacakan status
- Laporan pengaduan

### 👮 Panel RW (`/RW/`)
Dashboard khusus pengurus RW dengan akses penuh ke seluruh modul:

- **Kartu Keluarga** — CRUD data KK seluruh wilayah RW
- **Warga** — CRUD data detail setiap anggota keluarga
- **Pengguna** — Manajemen akun pengguna (RT/warga)
- **Iuran** — Pencatatan dan monitoring iuran warga
- **Persuratan** — Persetujuan dan pengelolaan surat
- **Pengaduan** — Tindak lanjut pengaduan warga
- **Agenda** — Manajemen kegiatan lingkungan
- **Berita** — Publikasi berita dan pengumuman
- **Fasilitas Umum** — Inventaris fasilitas lingkungan
- **Layanan Darurat** — Data kontak darurat
- **Tata Tertib** — Peraturan lingkungan
- **Struktur RW** — Susunan pengurus RW
- **SPK Bansos** — Sistem Pendukung Keputusan:
  - Kriteria & Bobot (`/criteriaweights`)
  - Rating Kriteria (`/criteriaratings`)
  - Data Alternatif (`/alternatives`)
  - Normalisasi Matriks (`/normalization`)
  - Keputusan (`/decision`)
  - Peringkat Akhir (`/rank`)

### 👷 Panel RT (`/RT/`)
Dashboard pengurus RT dengan akses terbatas per wilayah RT:

- **Kartu Keluarga** — CRUD KK wilayah RT
- **Warga** — CRUD data warga RT
- **Iuran** — Pencatatan iuran RT
- **Persuratan** — Pengajuan surat dari RT
- **Agenda** — Kegiatan RT
- **Berita** — Informasi RT
- **Fasilitas Umum** — Fasilitas di wilayah RT

---

## 🗂️ Struktur Proyek

```
project_sirw/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # 43 Controller (RW, RT, Dashboard, Auth, SPK)
│   │   ├── Middleware/         # Middleware autentikasi & checkrole
│   │   └── Kernel.php
│   ├── Models/                 # 19 Eloquent Model
│   └── Providers/
├── database/
│   ├── migrations/             # 23 file migrasi
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/
│   │   ├── Dashboard/          # View halaman publik (warga)
│   │   ├── RW/                 # View panel pengurus RW
│   │   ├── RT/                 # View panel pengurus RT
│   │   ├── auth/               # View halaman login
│   │   └── layout/             # Layout template
│   ├── css/
│   └── js/
├── routes/
│   └── web.php                 # Definisi semua rute aplikasi
├── .env.example                # Template konfigurasi environment
├── composer.json               # Dependensi PHP
└── package.json                # Dependensi Node.js
```

---

## 🗄️ Database

### Tabel Utama

| Tabel | Deskripsi |
|-------|-----------|
| `rw` | Data RW |
| `rt` | Data RT (berelasi ke RW) |
| `kartu_keluarga` | Data Kartu Keluarga per RT |
| `warga` | Data detail warga per KK |
| `users` | Akun pengguna sistem |
| `role` | Daftar peran pengguna |
| `struktur_rw` | Susunan pengurus RW |
| `berita` | Artikel berita/pengumuman |
| `agenda` | Jadwal kegiatan |
| `tata_tertib` | Peraturan lingkungan |
| `iuran` | Catatan iuran warga |
| `persuratan` | Data pengajuan surat |
| `pengaduan` | Laporan pengaduan warga |
| `fasilitas_umum` | Inventaris fasilitas |
| `layanan_darurat` | Kontak layanan darurat |
| `alternatives` | Data alternatif SPK Bansos |
| `criteriaweights` | Bobot kriteria SPK |
| `criteriaratings` | Rating kriteria SPK |
| `alternativescores` | Skor akhir alternatif SPK |

### Relasi Utama

```
RW ──< RT ──< KartuKeluarga ──< Warga
                     │
                     └──< Iuran

User >── Role
```

---

## 🔐 Keamanan

- Autentikasi sesi berbasis Laravel Auth
- Proteksi CSRF pada seluruh form
- Middleware `checkrole` untuk proteksi rute per peran
- File `.env` **tidak boleh** di-commit ke repositori (sudah terdaftar di `.gitignore`)

---

## 📄 Lisensi

Proyek ini dikembangkan untuk keperluan akademis/internal. Seluruh kode adalah milik tim pengembang.

---

<p align="center">
  Dibuat dengan ❤️ menggunakan <strong>Laravel 10</strong> + <strong>Tailwind CSS</strong>
</p>
