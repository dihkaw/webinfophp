# 🖥️ Server Monitor & Profil Siswa

### Aplikasi berbasis PHP Native untuk memantau spesifikasi server secara real-time sekaligus menampilkan data diri siswa. Didesain menggunakan Tailwind CSS untuk tampilan yang modern dan responsif.

## 📋 Fitur Utama
- Profil Siswa: Nama, Absen, dan Kelas.
- Network Info: Monitoring IP Private, IP Public, dan Hostname.
- System Info: Detil OS Ubuntu 24.04, Versi Kernel, dan PHP.
- Real-time Monitor: Status penggunaan CPU dan RAM tanpa refresh halaman.

---

## 🚀 Panduan Instalasi (Ubuntu 24.04)
Pilih salah satu Web Server yang ingin Anda gunakan (Apache atau Nginx).
### 1. Persiapan Lingkungan (Stack)
Update sistem dan instal PHP serta modul yang diperlukan:
```
sudo apt update && sudo apt upgrade -y
sudo apt install php php-curl php-cli -y
```

---

### 2. Opsi A: Menggunakan Apache (Direkomendasikan)
Jika Anda memilih Apache:
```
sudo apt install apache2 libapache2-mod-php -y
sudo systemctl start apache2
sudo systemctl enable apache2
```

---

### 3. Opsi B: Menggunakan Nginx
Jika Anda memilih Nginx, Anda wajib menginstal PHP-FPM:
```
sudo apt install nginx php-fpm -y
```

Catatan: Pastikan konfigurasi server block di /etc/nginx/sites-available/default sudah mengarah ke PHP-FPM.
📥 Cara Deploy Aplikasi
Masuk ke direktori web root (default: /var/www/html):
```
cd /var/www/html
sudo rm index.html # Hapus file default apache jika ada
```

Opsi 1: Melalui Git Clone (Terbaik untuk Update)
```
sudo git clone https://github.com/dihkaw/webinfophp .
```

Opsi 2: Melalui Wget (Single File Zip)
```
sudo wget https://github.com/dihkaw/webinfophp
sudo apt install unzip -y
sudo unzip main.zip
sudo mv repo-anda-main/* .
```

### Pengaturan Izin (Penting)
Agar skrip PHP bisa membaca data sistem (CPU/RAM), berikan izin pada folder web:
```
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html
```

## 🔍 Pengujian
Cek Status Web Server:
- Apache: sudo systemctl status apache2
- Nginx: sudo systemctl status nginx
Akses melalui Browser:
- Buka browser dan ketik alamat IP server Anda:
  ```
  http://alamat-ip-server-anda
  ```

Verifikasi Real-time:
Pastikan bar CPU dan RAM bergerak. Jika angka tidak muncul, pastikan fungsi shell_exec di PHP tidak dinonaktifkan di php.ini.
🛠️ Struktur File
index.php : Struktur utama dan informasi statis.
api.php : Endpoint JSON untuk data CPU/RAM.
script.js : Logika fetch data realtime (AJAX).
style.css : Kustomisasi gaya visual tambahan.
