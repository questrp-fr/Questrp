<?php
/*
 * Aurora Template
 * Made by BijjuXD
 * Update Checker File
 * @license MIT
 */

require_once(ROOT_PATH . '/custom/templates/Questrp/template.php');

// Get Current Version of Questrp
$currentVersion = $template->getVersion();
$isDev = ($currentVersion === 'dev');

// ALT: https://api.bijjuxd.me/v1/questrp/get-version
$versionInfoUrl = "https://api.github.com/repos/questrp-fr/Questrp/releases/latest";

// Créer un contexte HTTP avec un User-Agent (obligatoire pour GitHub API)
$options = [
    "http" => [
        "header" => "User-Agent: Questrp-Updater"
    ]
];
$context = stream_context_create($options);
$updateInfo = @file_get_contents($versionInfoUrl, false, $context);

if ($updateInfo !== false) {
    $updateInfo = json_decode($updateInfo, true);

    if (isset($updateInfo['tag_name']) && isset($updateInfo['html_url'])) {
        $latestVersion = $updateInfo['tag_name'];
        $downloadUrl = $updateInfo['html_url'];
        $updateDescription = isset($updateInfo['body']) ? $updateInfo['body'] : "";

        $updatemandatory = ""; // À définir si tu veux forcer une version minimale
        $updateRequired = version_compare($currentVersion, $updatemandatory, '<');
        $updateAvailable = version_compare($currentVersion, $latestVersion, '<');
    } else {
        $updateAvailable = false;
        $updateRequired = false;
    }
} else {
    $updateAvailable = false;
    $updateRequired = false;
}


// Assign Variables
$current_template->getEngine()->addVariables([
    'updateAvailable' => $updateAvailable,
    'updateRequired' => $updateRequired,
    'currentVersion' => $currentVersion,
    'isDev' => $isDev,
    'latestVersion' => $latestVersion,
    'downloadUrl' => $downloadUrl,
    'updateDescription' => $updateDescription
]);
