<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // Add routes from cLASSNAMEController and mount on cLASSNAME/
            "mount" => "cLASSNAME",
            "file" => __DIR__ . "/route/cLASSNAMEController.php",
        ],
    ],

];
