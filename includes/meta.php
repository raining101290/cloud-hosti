<?php
function getMetaData($page) {
    $meta = [
        'index' => [
            'title' => 'Cloud Hosti | Reliable Web Hosting & Domain Registration | Fast & Secure Hosting | Business Email',
            'description' => 'Get fast, secure and affordable web hosting with free SSL, cPanel, and domain registration. Perfect for startups, businesses and resellers in Asia & worldwide.',
        ],
        'domain-registration' => [
            'title' => 'Buy Domain Names - Cloud Hosti',
            'description' => 'Search and register your perfect domain name with Cloud Hosti. Affordable pricing, instant activation, and free DNS management.',
        ],
        'search-domain' => [
            'title' => 'Buy Domain Names - Cloud Hosti',
            'description' => 'Search and register your perfect domain name with Cloud Hosti. Affordable pricing, instant activation, and free DNS management.',
        ],
        'hosting' => [
            'title' => 'Web Hosting for WordPress & Business - Cloud Hosti',
            'description' => 'Host your website on Cloud Hosti’s reliable cloud infrastructure with cPanel, WordPress, and email hosting options.',
        ],
        'email' => [
            'title' => 'Professional Email Hosting - Cloud Hosti',
            'description' => 'Get branded business email with Cloud Hosti. Secure, professional, and integrated with your domain.',
        ],
        'default' => [
            'title' => 'Cloud Hosti - Web Hosting & Domain Services',
            'description' => 'Cloud Hosti provides domains, hosting, SSL, and email solutions to help you succeed online.',
        ]
    ];

    return $meta[$page] ?? $meta['default'];
}
