# Shopping List Management System

# janji
Saya Rahmat taufik dengan NIM 2300414 mengerjakan tp 10 dalam mata kuliah Desain Pemograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi
Aplikasi web sederhana untuk mengelola daftar belanja menggunakan PHP dengan arsitektur MVVM (Model-View-ViewModel). Aplikasi ini mendukung fitur CRUD (Create, Read, Update, Delete) untuk kategori, item, dan daftar belanja.

## Fitur
- **Kategori**: Tambah, lihat, edit, dan hapus kategori.
- **Item**: Tambah, lihat, edit, dan hapus item yang terhubung dengan kategori.
- **Daftar Belanja**: Tambah, lihat, edit, dan hapus entri daftar belanja yang terhubung dengan item.

## Struktur Folder
```
index.php
config/
	Database.php
model/
	Category.php
	Item.php
	shoppinglist.php
viewmodel/
	CategoryViewModel.php
	ItemViewModel.php
	ShoppingListViewModel.php
views/
	category_form.php
	category_list.php
	item_form.php
	item_list.php
	shopping_list_form.php
	shopping_list_list.php
	template/
		footer.php
		header.php
database/
	shopping_list.sql
```

## Cara Penggunaan
1. **Kategori**:
   - Tambahkan kategori baru melalui halaman kategori.
   - Edit atau hapus kategori yang sudah ada.
2. **Item**:
   - Tambahkan item baru dengan memilih kategori yang sesuai.
   - Edit atau hapus item yang sudah ada.
3. **Daftar Belanja**:
   - Tambahkan entri daftar belanja dengan memilih item dan jumlahnya.
   - Edit atau hapus entri daftar belanja yang sudah ada.


## Struktur Database
Tabel-tabel yang digunakan:
1. **categories**:
   - `id` (INT, Primary Key, Auto Increment)
   - `name` (VARCHAR)
2. **items**:
   - `id` (INT, Primary Key, Auto Increment)
   - `name` (VARCHAR)
   - `category_id` (INT, Foreign Key ke `categories`)
3. **shopping_list**:
   - `id` (INT, Primary Key, Auto Increment)
   - `item_id` (INT, Foreign Key ke `items`)
   - `quantity` (INT)

## Dokumentasi
![alt text](<Shopping List Management and 6 more pages - Profile 1 - Microsoft_ Edge 2025-05-18 01-48-23.gif>)