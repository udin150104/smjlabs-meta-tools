```php

// controller
MetaTools::addJsonLd([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => 'Judul Artikel',
    'author' => [
        '@type' => 'Person',
        'name' => 'Nama Penulis'
    ],
    'datePublished' => '2025-07-30',
    'image' => 'https://example.com/images/artikel.jpg',
]);


// blade 
@jsonLd

// contoh full
[
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => 'Judul Artikel',
    'description' => 'Deskripsi artikel...',
    'author' => [
        '@type' => 'Person',
        'name' => 'Nama Penulis',
    ],
    'datePublished' => '2025-07-30',
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Nama Situs',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => 'https://example.com/logo.png'
        ]
    ],
    'image' => 'https://example.com/images/artikel.jpg',
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => url()->current()
    ]
]
```