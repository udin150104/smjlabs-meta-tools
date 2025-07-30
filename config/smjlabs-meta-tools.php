<?php

return [

  /*
    |--------------------------------------------------------------------------
    | Meta Tag Umum (SEO)
    |--------------------------------------------------------------------------
    */
  'meta' => [
    'charset' => 'UTF-8', // Biasanya tidak perlu diubah
    'viewport' => 'width=device-width, initial-scale=1', // Untuk responsif
    'title' => env('APP_NAME'), // Contoh: 'Judul Halaman'
    'description' => null, // Contoh: 'Deskripsi singkat halaman ini'
    'keywords' => null, // Contoh: 'laravel, meta, seo'
    'author' => null, // Contoh: 'Nama Penulis'
    'copyright' => null, // Contoh: '© 2025 Nama Perusahaan'
    'robots' => null, // Contoh: 'index, follow' atau 'noindex, nofollow'
    'language' => null, // Contoh: 'id' atau 'en'
    'canonical' => null, // Contoh: 'https://example.com/halaman'
  ],

  /*
    |--------------------------------------------------------------------------
    | Open Graph (Facebook, LinkedIn, dll.)
    |--------------------------------------------------------------------------
    */
  'open_graph' => [
    'og:title' => null, // Contoh: 'Judul untuk OG'
    'og:description' => null, // Contoh: 'Deskripsi saat dibagikan'
    'og:image' => null, // Contoh: 'https://example.com/image.jpg'
    'og:url' => null, // Biasanya isi dari request()->url()
    'og:type' => null, // Contoh: 'article', 'website', dll.
    'og:site_name' => null, // Contoh: 'Nama Situs Anda'
    'og:locale' => null, // Contoh: 'id_ID', 'en_US'
  ],

  /*
    |--------------------------------------------------------------------------
    | Twitter Card
    |--------------------------------------------------------------------------
    */
  'twitter' => [
    'twitter:card' => null, // Contoh: 'summary', 'summary_large_image'
    'twitter:title' => null, // Contoh: 'Judul untuk Twitter Card'
    'twitter:description' => null, // Contoh: 'Deskripsi Twitter'
    'twitter:image' => null, // Contoh: 'https://example.com/twitter.jpg'
    'twitter:site' => null, // Contoh: '@akun_situs'
    'twitter:creator' => null, // Contoh: '@akun_penulis'
  ],

  /*
    |--------------------------------------------------------------------------
    | Meta Tag Keamanan
    |--------------------------------------------------------------------------
    */
  'security' => [
    'Content-Security-Policy' => null, // Contoh: "default-src 'self'"
    'X-Content-Type-Options' => null, // Biasanya: 'nosniff'
    'X-Frame-Options' => null, // Contoh: 'DENY' atau 'SAMEORIGIN'
    'Referrer-Policy' => null, // Contoh: 'no-referrer-when-downgrade'
    'Permissions-Policy' => null, // Contoh: 'geolocation=(), microphone=()'
    'Strict-Transport-Security' => null, // Contoh: 'max-age=31536000; includeSubDomains'
  ],

  /*
    |--------------------------------------------------------------------------
    | Lain-lain
    |--------------------------------------------------------------------------
    */
  'misc' => [
    'theme-color' => null, // Contoh: '#ffffff'
    'format-detection' => null, // Contoh: 'telephone=no'
  ],

  /*
    |--------------------------------------------------------------------------
    | JSON-LD (Structured Data)
    |--------------------------------------------------------------------------
    */
  'json_ld' => [
    'enabled' => true, // Aktifkan atau matikan dukungan JSON-LD
    'scripts' => [], // Bisa diisi default JSON-LD schema jika ada
  ],
];
