<?php
// Fonction de gestion des erreurs
function custom_error_handler($errno, $errstr, $errfile, $errline) {
    // Créer un message d'erreur
    $error_message = "[" . date("Y-m-d H:i:s") . "] ";
    $error_message .= "Erreur : [$errno] $errstr - Fichier : $errfile - Ligne : $errline\n";
    
    // Chemin du fichier log où les erreurs seront enregistrées
    $log_file = __DIR__ . '/error_log.txt';
    
    // Écrire l'erreur dans le fichier log
    error_log($error_message, 3, $log_file);
    
    // Afficher l'erreur (optionnel)
    if (ini_get("display_errors")) {
        echo $error_message;
    }

    // Retourner false pour permettre la gestion standard des erreurs (optionnel)
    return false;
}

// Définir la fonction de gestion des erreurs personnalisée
set_error_handler("custom_error_handler");

// Optionnel : Enregistrer également les erreurs fatales et exceptions non capturées
register_shutdown_function(function () {
    $error = error_get_last();
    if ($error !== null && ($error['type'] === E_ERROR || $error['type'] === E_PARSE)) {
        custom_error_handler($error['type'], $error['message'], $error['file'], $error['line']);
    }
});

// Définir le niveau de rapport d'erreurs (toutes les erreurs)
error_reporting(E_ALL);