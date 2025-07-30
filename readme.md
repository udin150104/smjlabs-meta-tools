# Meta Tools

🚀 Reusable Laravel package for managing **SEO**, **Open Graph**, **Twitter Cards**, **Security meta headers**, and **JSON-LD structured data** — all in one clean interface.

---

### 📦 Features

- ✅ SEO meta tags (`<title>`, `<meta name="description">`, etc.)
- ✅ Open Graph & Twitter Cards
- ✅ Security meta headers (`X-Frame-Options`, `Content-Security-Policy`, etc.)
- ✅ JSON-LD structured data (schema.org)
- ✅ Blade directives: `@meta`, `@metaRender`, `@jsonLd`
- ✅ Fully customizable & easy to integrate

---

### 🔧 Installation

Tambahkan package ke `composer.json`:
```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/udin150104/smjlabs-meta-tools.git"
  }
],
"require": {
  "udin150104/meta-tools": "dev-main"
}
````

Install:
```bash
composer require udin150104/meta-tools
```

Publish config:

```bash
php artisan vendor:publish --tag=smjlabs-meta-tools
```

---

### 🗂️ Configuration

File konfigurasi tersedia di:

```
config/smjlabs-meta-tools.php
```

Di dalamnya kamu bisa atur:

* Default SEO tags
* Default OG & Twitter metadata
* Default Security headers
* JSON-LD enable/disable

---

### 🚀 Usage

#### 📌 1. Set Meta Tags in Controller

```php
use MetaTools;

MetaTools::set('meta.title', 'Homepage');
MetaTools::set('meta.description', 'This is the homepage of our site.');
```

#### 📌 2. Render in Blade

```blade
@metaRender
```

#### 📌 3. Set Meta Tags in Blade

```blade
@meta('meta.title', 'Judul Halaman')
@meta('meta.description', 'Deskripsi Halaman')
```


### 🧠 JSON-LD Structured Data

#### ✅ Tambahkan JSON-LD di Controller

```php
MetaTools::addJsonLd([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $post->title,
    'author' => [
        '@type' => 'Person',
        'name' => $post->author->name,
    ],
    'datePublished' => $post->published_at->toDateString(),
    'image' => $post->cover_url,
]);
```

#### 📌 Render di Blade

```blade
@jsonLd
```

> ⚠️ Gunakan `@jsonLd` hanya di halaman **detail konten** seperti artikel, produk, atau event.


### ✨ Example: Full Blade Template

```blade
<head>
    @meta('meta.title', $post->title)
    @meta('meta.description', $post->excerpt)
    @metaRender
    @jsonLd
</head>
```


### 🧩 Blade Directives

| Directive             | Deskripsi                      |
| --------------------- | ------------------------------ |
| `@meta($key, $value)` | Set meta value tertentu        |
| `@metaRender`         | Render semua meta & OG tags    |
| `@jsonLd`             | Render JSON-LD structured data |


### 🔒 Security Meta Tags

Secara default, meta-tools juga menyisipkan meta untuk:

* X-Frame-Options
* Content-Security-Policy
* Referrer-Policy
* Strict-Transport-Security
* Permissions-Policy
* X-Content-Type-Options

> Kamu bisa menyesuaikannya di `config/smjlabs-meta-tools.php`.


### 📃 Lisensi

Lisensi: **UNLICENSED**

Penggunaan hanya untuk kebutuhan internal/personal.


### 👥 Kontributor

| Nama Pengguna                                    | Peran                                                         |
| ------------------------------------------------ | ------------------------------------------------------------- |
| [@udin150104](https://github.com/udin150104)     | 🛠️ Creator, Maintainer & Contributor *(Main Account)*        |
| [@syahrudinsmj](https://github.com/syahrudinsmj) | 🧑‍💻 Creator, Maintainer & Contributor *(Secondary Account)* |
