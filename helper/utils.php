<?php 
$config = [
    "company_name" => "Cloud Hosti"
];

function siteName($config) {
    return $config["company_name"];
}

function currentYear() {
    return date("Y");
}

function copyrightYear($startYear) {
    $currentYear = date("Y");
    return $startYear == $currentYear 
        ? $startYear 
        : $startYear . "–" . $currentYear;
}
?>