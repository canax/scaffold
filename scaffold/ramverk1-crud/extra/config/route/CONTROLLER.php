<?php
/**
 * Routes for controller.
 */
return [
    "routes" => [
        [
            "info" => "Controller index.",
            "requestMethod" => "get",
            "path" => "",
            "callable" => ["cLASSNAMEController", "getIndex"],
        ],
        [
            "info" => "Create an item.",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["cLASSNAMEController", "getPostCreateItem"],
        ],
        [
            "info" => "Delete an item.",
            "requestMethod" => "get|post",
            "path" => "delete",
            "callable" => ["cLASSNAMEController", "getPostDeleteItem"],
        ],
        [
            "info" => "Update an item.",
            "requestMethod" => "get|post",
            "path" => "update/{id:digit}",
            "callable" => ["cLASSNAMEController", "getPostUpdateItem"],
        ],
    ]
];
