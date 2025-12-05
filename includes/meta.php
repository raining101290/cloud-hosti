<?php
function getMetaData($page) {
    $meta = [
        'index' => [
            'title' => 'CloudHosti | Reliable Web Hosting & Domain Registration | Fast & Secure Hosting | Business Email',
            'description' => 'Get fast, secure and affordable web hosting with free SSL, cPanel, and domain registration. Perfect for startups, businesses and resellers in Asia & worldwide.',
        ],
        'about' => [
            'title' => 'CloudHosti | About Us - Reliable Web Hosting & Domain Registration | Fast & Secure Hosting | Business Email',
            'description' => 'Get fast, secure and affordable web hosting with free SSL, cPanel, and domain registration. Perfect for startups, businesses and resellers in Asia & worldwide.',
        ],
        'contact' => [
            'title' => 'CloudHosti | Contact - Reliable Web Hosting & Domain Registration | Fast & Secure Hosting | Business Email',
            'description' => 'Get fast, secure and affordable web hosting with free SSL, cPanel, and domain registration. Perfect for startups, businesses and resellers in Asia & worldwide.',
        ],
        'domain-registration' => [
            'title' => 'Buy Domain Names - CloudHosti',
            'description' => 'Search and register your perfect domain name with CloudHosti. Affordable pricing, instant activation, and free DNS management.',
        ],
        'search-domain' => [
            'title' => 'Buy Domain Names - CloudHosti',
            'description' => 'Search and register your perfect domain name with CloudHosti. Affordable pricing, instant activation, and free DNS management.',
        ],
        'google-workspace' => [
            'title' => 'Buy Google Workspace in Bangladesh | Trusted Google Workspace Partner - CloudHosti',
            'keywords'=> 'Google Workspace Bangladesh, Buy Google Workspace Bangladesh, CloudHosti Google Workspace Partner, Business Email Bangladesh, Google Workspace for Business, Workspace Reseller Bangladesh',
            'description' => 'Buy Google Workspace in Bangladesh from CloudHosti, your trusted Google Workspace partner. Enjoy secure business email, cloud storage, and advanced collaboration tools for your team.',
        ],
        'hosting' => [
            'title' => 'Web Hosting for WordPress & Business - CloudHosti',
            'description' => 'Host your website on CloudHosti’s reliable cloud infrastructure with cPanel, WordPress, and email hosting options.',
        ],
        'email' => [
            'title' => 'Professional Email Hosting - CloudHosti',
            'description' => 'Get branded business email with CloudHosti. Secure, professional, and integrated with your domain.',
        ],
        'default' => [
            'title' => 'CloudHosti - Web Hosting & Domain Services',
            'description' => 'CloudHosti provides domains, hosting, SSL, and email solutions to help you succeed online.',
        ],
        'terms-condition' => [
            'title' => 'Terms of Service | CloudHosti - Secure your online presence',
            'description' => 'Read Cloudhosti’s Terms of Service to understand your rights, obligations, and the conditions under which we provide hosting, domain registration, and IT services.',
        ],
        'privacy-policy' => [
            'title' => 'Privacy Policy | CloudHosti - Secure your online presence',
            'description' => 'Cloudhosti Privacy Policy – Learn how we collect, use, protect, and secure your personal data across our hosting, domain, cloud, and software services.',
        ],
        'refund-policy' => [
            'title' => 'Refund Policy | CloudHosti - Secure your online presence',
            'description' => 'Read Cloudhosti’s Refund Policy to understand policy of refund, and the conditions under which we provide hosting, domain registration, and IT services.',
        ],
    ];

    return $meta[$page] ?? $meta['default'];
}
