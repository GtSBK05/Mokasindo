# Fitur-Fitur Aplikasi Mokasindo

## Aplikasi Lelang Mobil dan Motor Bekas Indonesia

---

## 📋 Daftar Fitur

### 1. Frontend dan Backend (Pilot - 2 Orang)

-   Arsitektur dasar aplikasi
-   Setup infrastruktur
-   Integrasi frontend-backend

---

### 2. Etalase FB (2 Orang)

-   Tampilan katalog kendaraan
-   Gallery foto produk
-   Detail informasi kendaraan

---

### 3. Registrasi dan Data Anggota/Member (2 Orang)

#### Tipe User:

-   **Anggota**: Maksimal 2 iklan per minggu
-   **Member**: Unlimited iklan

#### Fitur:

-   Registrasi user baru
-   Login/Logout
-   Manajemen profil
-   Publish iklan dengan batasan:
    -   Anggota: Max 2 iklan/minggu (configurable)
    -   Member: Unlimited

---

### 4. Sistem Lelang (2 Orang)

#### Mekanisme Lelang:

-   **Durasi Waktu Lelang** (configurable)
-   Penawar tertinggi menang saat waktu habis
-   Real-time bidding system

#### Deposit & Pembayaran:

-   **Deposit Wajib**: 5% dari nilai kendaraan (configurable)
-   **Batas Pelunasan**: 24 jam setelah menang (configurable)
-   **Sanksi Tidak Bayar**:
    -   Deposit hangus
    -   Deposit dibagi ke:
        -   Pemilik kendaraan
        -   Aplikator/Platform
    -   Lelang dibuka kembali otomatis

#### Workflow:

```
1. User deposit 5%
2. Ikut lelang
3. Menang lelang
4. Pelunasan dalam 24 jam
   - Jika bayar: Transaksi selesai
   - Jika tidak: Deposit hangus + lelang reopen
```

---

### 5. Pilihan Area (1 Orang)

Sistem lokasi berbasis:

-   Kode Pos
-   Kelurahan
-   Kecamatan
-   Kota
-   Provinsi

---

### 6. Pencarian Spesifik / Kategori (2 Orang)

#### Filter Pencarian:

-   **Kategori**: Motor / Mobil
-   **Merk**: Toyota, Honda, Yamaha, dll
-   **Tipe**: SUV, Sedan, Matic, Sport, dll
-   **Range Harga**: Min - Max
-   **Usia Pakai**: Tahun pembuatan/penggunaan

#### Advanced Search:

-   Kombinasi multiple filter
-   Sort by: Harga, Tahun, Populer
-   Quick filter preset

---

### 7. API Pembayaran (2 Orang)

#### Payment Gateway Terintegrasi:

-   Transfer Bank
-   QRIS
-   OVO
-   GoPay (Gapay)
-   ShopeePay
-   Kartu Kredit

#### Fitur Payment:

-   Auto verification
-   Payment notification
-   Receipt generation
-   Refund handling (untuk deposit hangus)

---

### 8. Notifikasi Bot Telegram (2 Orang)

#### Target Notifikasi:

-   Anggota
-   Member
-   Admin

#### Jenis Notifikasi:

-   Lelang dimulai
-   Outbid (ditawar lebih tinggi)
-   Menang lelang
-   Reminder pelunasan
-   Deposit hangus
-   Status pembayaran
-   Approval iklan

---

### 9. Notifikasi Via Email (1 Orang)

#### Email Templates:

-   Welcome email
-   Verifikasi akun
-   Notifikasi lelang
-   Invoice & receipt
-   Reminder pembayaran
-   Deposit hangus notification

---

### 10. Notifikasi Via WhatsApp (1 Orang)

#### WhatsApp Integration:

-   Real-time notification
-   Status lelang
-   Payment reminder
-   Quick reply support

---

### 11. Integrasi Facebook API (1 Orang)

#### Fitur Facebook:

-   Terhubung dengan Group Facebook
-   Auto-post iklan ke Facebook
-   Sync comments
-   Share listing ke Facebook

---

### 12. Integrasi Instagram API (1 Orang)

#### Fitur Instagram:

-   Auto-post ke Instagram
-   Story sharing
-   Instagram shopping integration
-   Gallery sync

---

### 13. User Admin Dashboard (2 Orang)

#### Admin Panel:

-   **Data Transaksi**:
    -   List semua transaksi
    -   Status pembayaran
    -   History lelang
-   **Data Master**:
    -   User management
    -   Vehicle listing
    -   Category management
    -   Settings configuration
-   **Diagram & Analytics**:
    -   Sales chart
    -   User growth
    -   Transaction report
    -   Revenue analytics

---

### 14. User Owner/Management Dashboard (2 Orang)

#### Management Features:

-   **Rekap Informasi**:
    -   Executive summary
    -   KPI dashboard
    -   Financial report
-   **Diagram & Visualisasi**:
    -   Revenue trends
    -   User behavior
    -   Popular categories
-   **AI Agent**:
    -   Predictive analytics
    -   Automated insights
    -   Smart recommendations
    -   Business intelligence

---

### 15. Dokumentasi Teknis Umum (2 Orang)

#### Dokumentasi:

-   **Flowchart Umum**: Alur sistem keseluruhan
-   **Flowchart per Fitur**: Detail setiap modul
-   **API Documentation**: Endpoint & usage
-   **Deployment Guide**: Setup & configuration

---

### 16. Dokumentasi Database (1 Orang)

#### Database Design:

-   **ERD (Entity Relationship Diagram)**:
    -   Normalisasi database
    -   Relationship mapping
-   **CDM (Conceptual Data Model)**:
    -   High-level design
-   **PDM (Physical Data Model)**:
    -   Implementation detail
    -   Index & constraints

---

### 17. Dokumentasi Proses Bisnis (2 Orang)

#### Business Process:

-   **Use Case Diagram**:
    -   Actor & use cases
    -   User interactions
-   **Activity Diagram**:
    -   Business workflow
    -   Process flow
    -   Decision points

---

## ⚙️ Konfigurasi Settings

### Settings yang Dapat Dikonfigurasi:

1. **Deposit Percentage**: Default 5%
2. **Payment Deadline**: Default 24 jam
3. **Anggota Post Limit**: Default 2 iklan/minggu
4. **Lelang Duration**: Bisa diatur per lelang
5. **Deposit Split Ratio**: Pembagian deposit hangus

---

## 🔐 Role & Permission

### User Roles:

1. **Anggota** (Basic User)

    - Limited posting (2/week)
    - Can bid
    - Must deposit to bid

2. **Member** (Premium User)

    - Unlimited posting
    - Can bid
    - Must deposit to bid
    - Priority support

3. **Admin**

    - Full access to admin panel
    - Manage users & listings
    - View all transactions
    - System configuration

4. **Owner/Management**
    - View analytics & reports
    - Access AI insights
    - Financial overview
    - Strategic decisions

---

## 📱 Multi-Channel Notification

Setiap event penting dikirim melalui:

-   ✉️ Email
-   💬 WhatsApp
-   🤖 Telegram Bot

### Event yang Di-notifikasi:

-   Registration
-   Listing approval
-   Auction start
-   Outbid alert
-   Auction won
-   Payment reminder
-   Payment received
-   Deposit forfeited
-   Auction reopen

---

## 🔄 Business Logic Flow

### Alur Lelang:

```
1. Pemilik → Upload kendaraan
2. Admin → Review & approve
3. System → Publish & notify users
4. User → Deposit 5% untuk bid
5. Lelang → Dimulai (durasi tertentu)
6. User → Bid real-time
7. Timer → Habis
8. System → Tentukan pemenang
9. Pemenang → 24 jam untuk lunasi
   a. Bayar → Transaksi selesai
   b. Tidak bayar → Deposit hangus + reopen
```

---

## 🎯 Target Development Team

**Total: 28 Orang**

| No  | Fitur                    | Tim |
| --- | ------------------------ | --- |
| 1   | Frontend & Backend Pilot | 2   |
| 2   | Etalase FB               | 2   |
| 3   | Registrasi & Member      | 2   |
| 4   | Sistem Lelang            | 2   |
| 5   | Area Selection           | 1   |
| 6   | Search & Filter          | 2   |
| 7   | Payment Gateway          | 2   |
| 8   | Telegram Bot             | 2   |
| 9   | Email Notification       | 1   |
| 10  | WhatsApp Notification    | 1   |
| 11  | Facebook API             | 1   |
| 12  | Instagram API            | 1   |
| 13  | Admin Dashboard          | 2   |
| 14  | Owner Dashboard          | 2   |
| 15  | Dokumentasi Teknis       | 2   |
| 16  | Dokumentasi Database     | 1   |
| 17  | Dokumentasi Bisnis       | 2   |

---

## 📊 Tech Stack (Recommended)

### Backend:

-   Laravel 12.x
-   PHP 8.2+
-   MySQL/PostgreSQL

### Frontend:

-   Tailwind CSS
-   Alpine.js / Vue.js
-   Livewire (optional)

### Real-time:

-   Laravel Echo
-   Pusher / Laravel Reverb
-   WebSocket

### Payment:

-   Midtrans / Xendit
-   Multiple payment channels

### Notification:

-   Telegram Bot API
-   WhatsApp Business API
-   Email (SMTP/SES)

### Social Media:

-   Facebook Graph API
-   Instagram Graph API

---

## 🚀 Next Steps

1. Setup database schema
2. Create migrations
3. Build authentication system
4. Implement auction logic
5. Integrate payment gateway
6. Setup notification channels
7. Build admin dashboard
8. Testing & deployment
