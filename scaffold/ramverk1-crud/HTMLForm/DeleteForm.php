<?php

namespace NAMESPACE\HTMLForm;

use \Anax\HTMLForm\FormModel;
use \Anax\DI\DIInterface;
use \NAMESPACE\CLASSNAME;

/**
 * Form to delete an item.
 */
class DeleteForm extends FormModel
{
    /**
     * Constructor injects with DI container.
     *
     * @param Anax\DI\DIInterface $di a service container
     */
    public function __construct(DIInterface $di)
    {
        parent::__construct($di);
        $this->form->create(
            [
                "id" => __CLASS__,
                "legend" => "Delete an item",
            ],
            [
                "select" => [
                    "type"        => "select",
                    "label"       => "Select item to delete:",
                    "options"     => $this->getAllItems(),
                ],

                "submit" => [
                    "type" => "submit",
                    "value" => "Delete item",
                    "callback" => [$this, "callbackSubmit"]
                ],
            ]
        );
    }



    /**
     * Get all items as array suitable for display in select option dropdown.
     *
     * @return array with key value of all items.
     */
    protected function getAllItems()
    {
        $cLASSNAME = new CLASSNAME();
        $cLASSNAME->setDb($this->di->get("db"));

        $cLASSNAMEs = ["-1" => "Select an item..."];
        foreach ($cLASSNAME->findAll() as $obj) {
            $cLASSNAMEs[$obj->id] = "{$obj->column1} ({$obj->id})";
        }

        return $cLASSNAMEs;
    }



    /**
     * Callback for submit-button which should return true if it could
     * carry out its work and false if something failed.
     *
     * @return boolean true if okey, false if something went wrong.
     */
    public function callbackSubmit()
    {
        $cLASSNAME = new CLASSNAME();
        $cLASSNAME->setDb($this->di->get("db"));
        $cLASSNAME->find("id", $this->form->value("select"));
        $cLASSNAME->delete();
        $this->di->get("response")->redirect("cLASSNAME");
    }
}
