<?php

namespace Anax\Book\HTMLForm;

use \Anax\HTMLForm\FormModel;
use \Anax\DI\DIInterface;
use \Anax\Book\Book;

/**
 * Form to delete a book.
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
                "legend" => "Delete a book",
            ],
            [
                "select" => [
                    "type"        => "select",
                    "label"       => "Select book to delete:",
                    "options"     => $this->getAllBooks(),
                ],

                "submit" => [
                    "type" => "submit",
                    "value" => "Delete book",
                    "callback" => [$this, "callbackSubmit"]
                ],
            ]
        );
    }



    /**
     * Get all books as array suitable for display in select option dropdown.
     *
     * @return array with key value of all books.
     */
    protected function getAllBooks()
    {
        $book = new Book();
        $book->setDb($this->di->get("db"));

        $books = ["-1" => "Select a book..."];
        foreach ($book->findAll() as $obj) {
            $books[$obj->id] = "{$obj->title} ({$obj->id})";
        }

        return $books;
    }



    /**
     * Callback for submit-button which should return true if it could
     * carry out its work and false if something failed.
     *
     * @return boolean true if okey, false if something went wrong.
     */
    public function callbackSubmit()
    {
        $book = new Book();
        $book->setDb($this->di->get("db"));
        $book->find("id", $this->form->value("select"));
        $book->delete();
        $this->di->get("response")->redirect("book");
    }
}
