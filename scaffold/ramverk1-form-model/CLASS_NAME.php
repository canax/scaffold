<?php

namespace NAMESPACE;

use \Anax\HTMLForm\FormModel;

/**
 * Example of FormModel implementation.
 */
class CLASS_NAME extends FormModel
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(
            [
                "legend" => "Legend",
            ],
            [
                "text" => [
                    "type"        => "text",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],
                        
                "password" => [
                    "type"        => "password",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "hidden" => [
                    "type"        => "hidden",
                    "value"       => "secret value",
                ],

                "file" => [
                    "type"        => "file",
                    "description" => "Here you can place a description.",
                ],

                "textarea" => [
                    "type"        => "textarea",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "radio" => [
                    "type"        => "radio",
                    "label"       => "What is your preferred choice of fruite?",
                    "description" => "Here you can place a description.",
                    "values"      => [
                        "tomato",
                        "potato",
                        "apple",
                        "pear",
                        "banana"
                    ],
                    "checked"     => "potato",
                ],

                "checkbox" => [
                    "type"        => "checkbox",
                    "description" => "Here you can place a description.",
                ],

                "select" => [
                    "type"        => "select",
                    "label"       => "Select your fruite:",
                    "description" => "Here you can place a description.",
                    "options"     => [
                        "tomato" => "tomato",
                        "potato" => "potato",
                        "apple"  => "apple",
                        "pear"   => "pear",
                        "banana" => "banana",
                    ],
                    "value"    => "potato",
                ],

                "selectm" => [
                    "type"        => "select-multiple",
                    "label"       => "Select one or more fruite:",
                    "description" => "Here you can place a description.",
                    "size"        => 6,
                    "options"     => [
                        "tomato" => "tomato",
                        "potato" => "potato",
                        "apple"  => "apple",
                        "pear"   => "pear",
                        "banana" => "banana",
                    ],
                    "checked"   => ["potato", "pear"],
                ],

                "color" => [
                    "type"        => "color",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "date" => [
                    "type"        => "date",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "datetime" => [
                    "type"        => "datetime",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "datetime-local" => [
                    "type"        => "datetime-local",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "time" => [
                    "type"        => "time",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "week" => [
                    "type"        => "week",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "month" => [
                    "type"        => "month",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "number" => [
                    "type"        => "number",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "range" => [
                    "type"        => "range",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                    "value"       => 42,
                    "min"         => 0,
                    "max"         => 100,
                    "step"        => 2,
                ],

                "search" => [
                    "type"        => "search",
                    "label"       => "Search:",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "tel" => [
                    "type"        => "tel",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "email" => [
                    "type"        => "email",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "url" => [
                    "type"        => "url",
                    "description" => "Here you can place a description.",
                    "placeholder" => "Here is a placeholder",
                ],

                "file-multiple" => [
                    "type"        => "file-multiple",
                    "description" => "Here you can place a description.",
                ],

                "reset" => [
                    "type"      => "reset",
                ],

                "button" => [
                    "type"      => "button",
                ],

                "submit" => [
                    "type" => "submit",
                    "value" => "Submit",
                    "callback" => [$this, "callbackSubmit"]
                ],
            ]
        );
    }



    /**
     * Callback for submit-button.
     */
    public function callbackSubmit()
    {
        $this->AddOutput("<p>#callbackSubmit()</p>");
        $this->AddOutput("<pre>" . print_r($_POST, 1) . "</pre>");
        $this->saveInSession = true;

        return true;
    }
}
