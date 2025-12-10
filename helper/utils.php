<?php
session_start();
$config = [
    "company_name" => "CloudHosti"
];

/* ============================
   BASIC SITE HELPERS
============================ */
function siteName($config)
{
    return $config["company_name"];
}

function currentYear()
{
    return date("Y");
}

function copyrightYear($startYear)
{
    $currentYear = date("Y");
    return $startYear == $currentYear
        ? $startYear
        : $startYear . "–" . $currentYear;
}

/* ============================
   CURRENCY SYSTEM
============================ */

// Supported currencies
$currencyRates = [
    "USD" => 1,
    "BDT" => 123,
    "INR" => 90.06,
    "AED" => 3.68
];

$whmcsCurrencyMap = [
    "USD" => 1,
    "BDT" => 2,
    "INR" => 3,
    "AED" => 4
];

// Currency symbols
$currencySymbols = [
    "USD" => "$",
    "BDT" => "৳",
    "INR" => "₹",
    "AED" => "AED"
];

/**
 * Get active currency (from session or default USD)
 */
function getCurrency()
{
    return $_SESSION['currency'] ?? 'USD';
}

/**
 * Set currency from user selection
 */
function setCurrency($cur)
{
    $_SESSION['currency'] = $cur;
}

/**
 * Convert USD → selected currency
 */
function convertPrice($amount, $currencyRates)
{
    $currency = getCurrency();
    return isset($currencyRates[$currency])
        ? $amount * $currencyRates[$currency]
        : $amount;
}

/**
 * Format price with symbol
 */
function formatPrice($amount, $currencyRates, $currencySymbols)
{
    $currency = getCurrency();
    $converted = convertPrice($amount, $currencyRates);
    $symbol = $currencySymbols[$currency] ?? '$';

    return $symbol . number_format($converted, 2);
}
