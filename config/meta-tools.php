<?php

return [
  'meta' => [
    'charset' => 'UTF-8',
    'viewport' => 'width=device-width, initial-scale=1',
    'title' => 'Judul Default Halaman',
    'description' => 'Deskripsi default halaman web.',
    'keywords' => 'laravel, seo, meta, tools',
    'author' => 'Nama Penulis',
    'copyright' => '© ' . date('Y'),
    'robots' => 'index, follow',
    'language' => 'id',
    'canonical' => null,
  ],
  'open_graph' => [
    'og:title' => 'Judul OG Default',
    'og:description' => 'Deskripsi OG default.',
    'og:image' => 'https://example.com/images/default-og.jpg',
    'og:url' => null,
    'og:type' => 'website',
    'og:site_name' => 'Nama Situs',
    'og:locale' => 'id_ID',
  ],
  'twitter' => [
    'twitter:card' => 'summary_large_image',
    'twitter:title' => 'Judul Twitter Default',
    'twitter:description' => 'Deskripsi Twitter Default.',
    'twitter:image' => 'https://example.com/images/default-twitter.jpg',
    'twitter:site' => '@akun_twitter',
    'twitter:creator' => '@akun_penulis',
  ],
  'security' => [
    'Content-Security-Policy' => "default-src 'self'",
    'X-Content-Type-Options' => 'nosniff',
    'X-Frame-Options' => 'DENY',
    'Referrer-Policy' => 'no-referrer-when-downgrade',
    'Permissions-Policy' => 'geolocation=(), microphone=()',
    'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains',
  ],
  'misc' => [
    'theme-color' => '#ffffff',
    'format-detection' => 'telephone=no',
  ],
  'json_ld' => [
    'enabled' => true,
    'scripts' => [],
  ],
];
