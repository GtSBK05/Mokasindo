# Database Structure - Mokasindo

## ✅ Status: Database & Models Sudah Dibuat

### 📊 Tabel yang Sudah Dibuat (17 tabel):

1. ✅ **users** - Data pengguna (anggota, member, admin, owner)
2. ✅ **provinces** - Data provinsi
3. ✅ **cities** - Data kota
4. ✅ **districts** - Data kecamatan
5. ✅ **sub_districts** - Data kelurahan
6. ✅ **vehicles** - Data kendaraan (mobil/motor)
7. ✅ **vehicle_images** - Foto kendaraan
8. ✅ **auctions** - Data lelang
9. ✅ **bids** - Data penawaran/bid
10. ✅ **deposits** - Data deposit user
11. ✅ **payments** - Data pembayaran
12. ✅ **transactions** - Data transaksi
13. ✅ **notifications** - Data notifikasi
14. ✅ **settings** - Konfigurasi aplikasi
15. ✅ **cache** - Laravel cache
16. ✅ **jobs** - Laravel queue jobs
17. ✅ **migrations** - Laravel migrations tracking

---

## 📁 Models yang Sudah Dibuat:

✅ User.php
✅ Province.php
✅ City.php
✅ District.php
✅ SubDistrict.php
✅ Vehicle.php
✅ VehicleImage.php
✅ Auction.php
✅ Bid.php
✅ Deposit.php
✅ Payment.php
✅ Transaction.php
✅ Notification.php
✅ Setting.php

---

## 🔗 Relationships Antar Tabel:

### User Relationships:

-   `hasMany` → vehicles (sebagai pemilik)
-   `hasMany` → auctions (sebagai pemenang)
-   `hasMany` → bids
-   `hasMany` → deposits
-   `hasMany` → payments
-   `hasMany` → transactions (sebagai buyer/seller)
-   `hasMany` → notifications
-   `belongsTo` → province, city, district, sub_district

### Vehicle Relationships:

-   `belongsTo` → user (owner)
-   `belongsTo` → province, city, district, sub_district
-   `hasMany` → vehicle_images
-   `hasOne` → auction
-   `hasMany` → transactions

### Auction Relationships:

-   `belongsTo` → vehicle
-   `belongsTo` → user (winner)
-   `hasMany` → bids
-   `hasMany` → deposits
-   `hasOne` → transaction

### Bid Relationships:

-   `belongsTo` → auction
-   `belongsTo` → user (bidder)

### Deposit Relationships:

-   `belongsTo` → user
-   `belongsTo` → auction

### Payment Relationships:

-   `belongsTo` → user
-   `belongsTo` → transaction
-   `morphTo` → payable (polymorphic)

### Transaction Relationships:

-   `belongsTo` → auction
-   `belongsTo` → vehicle
-   `belongsTo` → user (buyer & seller)
-   `hasMany` → payments

---

## 🎯 Data Master yang Sudah Di-Seed:

### 1. Admin User

```
Email: admin@mokasindo.com
Password: password
Role: admin
```

### 2. Settings (13 konfigurasi):

```php
[
    'deposit_percentage' => '5.00',          // 5% deposit wajib
    'deposit_split_owner' => '50.00',        // 50% untuk pemilik jika hangus
    'deposit_split_platform' => '50.00',     // 50% untuk platform jika hangus
    'payment_deadline_hours' => '24',        // 24 jam untuk pelunasan
    'member_post_limit_weekly' => '0',       // 0 = unlimited untuk member
    'anggota_post_limit_weekly' => '2',      // 2 iklan/minggu untuk anggota
    'default_auction_duration_hours' => '48', // 48 jam durasi lelang default
    'min_auction_duration_hours' => '12',    // minimal 12 jam
    'max_auction_duration_hours' => '168',   // maksimal 168 jam (7 hari)
    'auto_extend_on_last_minute_bid' => '1', // extend otomatis jika bid menit terakhir
    'extend_duration_minutes' => '5',        // extend 5 menit
    'max_extend_count' => '3',               // maksimal 3x extend
    'platform_fee_percentage' => '2.50',     // fee platform 2.5%
]
```

---

## 📋 Struktur Tabel Detail:

### users

```
- id
- name
- email
- phone
- role (anggota, member, admin, owner)
- email_verified_at
- phone_verified_at
- address
- province_id, city_id, district_id, sub_district_id
- postal_code
- member_until (expired member premium)
- post_count_this_week (tracking post anggota)
- last_post_reset_at
- balance (saldo user)
- is_active
- avatar
- timestamps
- soft deletes
```

### vehicles

```
- id
- user_id (owner)
- category (motor, mobil)
- brand (merk)
- model (tipe)
- year (tahun)
- color
- mileage (kilometer)
- transmission
- fuel_type
- condition
- description
- specification (JSON)
- province_id, city_id, district_id, sub_district_id
- postal_code
- status (draft, pending, approved, rejected, sold)
- rejection_reason
- approved_at, approved_by
- view_count
- favorite_count
- timestamps
- soft deletes
```

### auctions

```
- id
- vehicle_id
- starting_price
- current_price
- reserve_price (harga minimal)
- deposit_amount (5%)
- deposit_percentage
- start_time
- end_time
- duration_hours
- status (scheduled, active, ended, sold, cancelled, reopened)
- winner_id
- won_at
- payment_deadline (24 jam)
- payment_deadline_hours
- payment_completed
- payment_completed_at
- total_bids
- total_participants
- notes
- timestamps
- soft deletes
```

### bids

```
- id
- auction_id
- user_id (bidder)
- amount
- is_auto_bid (untuk future: auto bidding)
- max_amount (untuk auto bidding)
- status (active, outbid, won, cancelled)
- bid_at
- ip_address
- user_agent
- timestamps
```

### deposits

```
- id
- user_id
- auction_id
- amount
- status (pending, paid, refunded, forfeited)
- payment_method
- payment_proof
- paid_at
- refunded_at
- forfeited_at
- forfeiture_reason
- notes
- timestamps
```

### payments

```
- id
- user_id
- payable_type (polymorphic)
- payable_id (polymorphic)
- transaction_id
- payment_method (bank, qris, ovo, gopay, shopeepay, cc)
- amount
- status (pending, processing, success, failed, cancelled)
- payment_gateway_ref
- payment_url
- paid_at
- expired_at
- notes
- timestamps
```

### transactions

```
- id
- auction_id
- vehicle_id
- buyer_id
- seller_id
- total_amount
- deposit_amount
- remaining_amount
- platform_fee
- seller_receivable
- status (pending, paid, completed, cancelled)
- payment_deadline
- completed_at
- cancelled_at
- cancellation_reason
- notes
- timestamps
- soft deletes
```

### notifications

```
- id
- user_id
- type (info, success, warning, danger)
- title
- message
- data (JSON)
- action_url
- is_read
- read_at
- channel (database, telegram, email, whatsapp)
- sent_at
- timestamps
```

### settings

```
- id
- key (unique)
- value
- type (string, number, boolean, json)
- group (auction, payment, notification, system)
- description
- is_public (apakah bisa diakses tanpa login)
- timestamps
```

---

## 🔍 Index yang Sudah Dibuat:

### Optimasi Query:

-   users: role, email, phone
-   vehicles: status, category, brand, user_id
-   auctions: status, start_time, end_time, winner_id
-   bids: auction_id, user_id, status
-   deposits: user_id, auction_id, status
-   payments: user_id, transaction_id, status
-   transactions: buyer_id, seller_id, status
-   notifications: user_id, is_read

---

## 🎨 Enum Values:

### User Role:

-   anggota (basic user)
-   member (premium user)
-   admin
-   owner

### Vehicle Category:

-   motor
-   mobil

### Vehicle Status:

-   draft
-   pending
-   approved
-   rejected
-   sold

### Auction Status:

-   scheduled (dijadwalkan)
-   active (sedang berjalan)
-   ended (waktu habis)
-   sold (terjual)
-   cancelled (dibatalkan)
-   reopened (dibuka kembali karena pembayaran gagal)

### Bid Status:

-   active (bid tertinggi saat ini)
-   outbid (sudah ditawar lebih tinggi)
-   won (menang)
-   cancelled (dibatalkan)

### Deposit Status:

-   pending (belum bayar)
-   paid (sudah bayar)
-   refunded (dikembalikan)
-   forfeited (hangus)

### Payment Status:

-   pending (menunggu pembayaran)
-   processing (sedang diproses)
-   success (berhasil)
-   failed (gagal)
-   cancelled (dibatalkan)

### Payment Method:

-   bank
-   qris
-   ovo
-   gopay
-   shopeepay
-   cc (kartu kredit)

### Transaction Status:

-   pending (menunggu pembayaran)
-   paid (sudah dibayar)
-   completed (selesai)
-   cancelled (dibatalkan)

### Notification Type:

-   info
-   success
-   warning
-   danger

### Notification Channel:

-   database
-   telegram
-   email
-   whatsapp

---

## 💡 Business Logic yang Tertanam di Database:

### 1. Sistem Deposit:

-   User wajib deposit 5% (configurable) untuk ikut lelang
-   Jika menang tapi tidak bayar dalam 24 jam → deposit hangus
-   Deposit hangus dibagi 50:50 antara pemilik & platform (configurable)

### 2. Batasan Post:

-   Anggota: max 2 iklan/minggu (configurable via settings)
-   Member: unlimited
-   Tracking via `post_count_this_week` dan `last_post_reset_at`

### 3. Lelang:

-   Durasi lelang configurable (default 48 jam)
-   Auto extend jika ada bid di menit terakhir
-   Winner ditentukan saat auction.status = 'ended'
-   Payment deadline 24 jam setelah menang

### 4. Multi-channel Notification:

-   Setiap event penting trigger notifikasi
-   Bisa dikirim via database, telegram, email, whatsapp
-   Tracking sent_at untuk monitoring

---

## 🚀 Next Steps untuk Tim:

### Untuk Backend Developer:

1. ✅ Database & Models sudah ready
2. Buat Controllers (AuctionController, VehicleController, dll)
3. Buat Services (AuctionService, PaymentService, dll)
4. Buat API Routes
5. Implement business logic di Services

### Untuk Frontend Developer:

1. Consume API yang dibuat backend
2. Tampilkan list kendaraan
3. Real-time auction page
4. Dashboard user (anggota/member)
5. Admin panel

### Untuk Payment Integration:

1. Models & tabel sudah ready
2. Tinggal integrate dengan payment gateway (Midtrans/Xendit)
3. Handle webhook dari payment gateway

### Untuk Notification:

1. Models & tabel sudah ready
2. Tinggal integrate dengan:
    - Telegram Bot API
    - Email service (SMTP/SES)
    - WhatsApp Business API

### Untuk Area/Location:

1. Tabel provinces, cities, districts, sub_districts sudah ready
2. Perlu di-seed dengan data lengkap Indonesia
3. Bisa import dari data BPS/Raja Ongkir

---

## 📝 Catatan Penting:

1. **Password Default Admin**: `password` (wajib diganti setelah login pertama)
2. **Soft Deletes**: Diaktifkan untuk users, vehicles, auctions, transactions
3. **Timestamps**: Semua tabel punya created_at & updated_at
4. **Foreign Keys**: Sudah di-set dengan proper constraints
5. **Indexes**: Sudah dibuat untuk optimasi query

---

## 🔐 Security Notes:

1. Password di-hash dengan bcrypt
2. Soft deletes untuk data penting (tidak benar-benar dihapus)
3. Foreign key constraints untuk data integrity
4. Enum untuk validasi di database level
5. IP & User Agent tracking di bids untuk fraud detection

---

**Status: ✅ COMPLETED - Database Foundation Ready for Development**
