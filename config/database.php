<?php
/**
 * Central Calefón Chile - Configuración de Base de Datos MySQL
 * 
 * Compatible con HestiaCP, cPanel, Plesk, Laragon, XAMPP y servidores VPS Linux.
 * En HestiaCP, el nombre de la BD y usuario suele llevar el prefijo del usuario de Hestia.
 * Ejemplo:
 *   Usuario Hestia: instalgaschile
 *   Nombre BD: instalgaschile_calefon
 *   Usuario BD: instalgaschile_calefon
 */

// Cargar archivo local si existe (para no sobreescribir credenciales en git)
if (file_exists(__DIR__ . '/database.local.php')) {
    require_once __DIR__ . '/database.local.php';
}

if (!defined('DB_HOST')) define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_NAME') ?: 'instalgaschile_calefon');
if (!defined('DB_USER')) define('DB_USER', getenv('DB_USER') ?: 'instalgaschile_user');
if (!defined('DB_PASS')) define('DB_PASS', getenv('DB_PASS') ?: '');
if (!defined('DB_PORT')) define('DB_PORT', getenv('DB_PORT') ?: '3306');
if (!defined('DB_CHARSET')) define('DB_CHARSET', 'utf8mb4');
