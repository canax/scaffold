<?php

namespace NAMESPACE\HTMLForm;

use \Anax\HTMLForm\FormModel;
use \Anax\DI\DIInterface;
use \NAMESPACE\CLASSNAME;

/**
 * Form to update an item.
 */
class UpdateForm extends FormModel
{
    /**
     * Constructor injects with DI container and the id to update.
     *
     * @param Anax\DI\DIInterface $di a service container
     * @param integer             $id to update
     */
    public function __construct(DIInterface $di, $id)
    {
        parent::__construct($di);
        $cLASSNAME = $this->getItemDetails($id);
        $this->form->create(
            [
                "id" => __CLASS__,
                "legend" => "Update details of the item",
            ],
            [
                "id" => [
                    "type" => "text",
                    "validation" => ["not_empty"],
                    "readonly" => true,
                    "value" => $cLASSNAME->id,
                ],

                "column1" => [
                    "type" => "text",
                    "validation" => ["not_empty"],
                    "value" => $cLASSNAME->column1,
                ],

                "column2" => [
                    "type" => "text",
                    "validation" => ["not_empty"],
                    "value" => $cLASSNAME->column2,
                ],

                "submit" => [
                    "type" => "submit",
                    "value" => "Save",
                    "callback" => [$this, "callbackSubmit"]
                ],

                "reset" => [
                    "type"      => "reset",
                ],
            ]
        );
    }



    /**
     * Get details on item to load form with.
     *
     * @param integer $id get details on item with id.
     * 
     * @return CLASSNAME
     */
    public function getItemDetails($id)
    {
        $cLASSNAME = new CLASSNAME();
        $cLASSNAME->setDb($this->di->get("db"));
        $cLASSNAME->find("id", $id);
        return $cLASSNAME;
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
        $cLASSNAME->find("id", $this->form->value("id"));
        $cLASSNAME->column1 = $this->form->value("column1");
        $cLASSNAME->column2 = $this->form->value("column2");
        $cLASSNAME->save();
        $this->di->get("response")->redirect("book/update/{$cLASSNAME->id}");
    }
}
