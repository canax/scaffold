<?php
/**
 * Configuration file for DI container.
 */
return [

    // Services to add to the container.
    "services" => [
        "cLASSNAMEController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \NAMESPACE\CLASSNAMEController();
                $obj->setDI($this);
                return $obj;
            }
        ],
    ],
];
