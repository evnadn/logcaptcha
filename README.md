## TP 2 Web Programming - Binus University

### Case
Buatlah aplikasi login form dengan menggunakan Laravel dengan aturan sebagai berikut: 
- Terdapat validasi user dan password, jika gagal 3 kali maka terdapat qounter waktu untuk di ijinkan masuk kembali dalam waktu 30 detik selanjutnya.
- Pada form login terdapat validasi (anda dapat gunakan jenis captcha atau jenis lainnya)
- Form lupa password dan reset password.

### Step by step using this project
- Clone project ini
- Tambahkan database dengan nama "binusdatamahasiswa" dan lakukan migrate database "php artisan migrate" 
- Jalankan "php artisan serve" 
    - Jika error silahkan lakukan "composer install" 
    - Copy .env.example menjadi .env dan sesuaikan pengaturan databasenya
    - Lakukan generate key "php artisan key:generate"
    
