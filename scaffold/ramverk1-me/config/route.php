<?php
/**
 * Routes.
 */
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/debug.php";
require __DIR__ . "/route/flat-file-content.php";

/**
 * Catch all route that should be the last one
 */
require __DIR__ . "/route/404.php";
