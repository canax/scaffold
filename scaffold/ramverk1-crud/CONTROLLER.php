<?php

namespace NAMESPACE;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \NAMESPACE\HTMLForm\CreateForm;
use \NAMESPACE\HTMLForm\EditForm;
use \NAMESPACE\HTMLForm\DeleteForm;
use \NAMESPACE\HTMLForm\UpdateForm;

/**
 * A controller class.
 */
class CLASSNAMEController implements
    ConfigureInterface,
    InjectionAwareInterface
{
    use ConfigureTrait,
        InjectionAwareTrait;



    /**
     * @var $data description
     */
    //private $data;



    /**
     * Show all items.
     *
     * @return void
     */
    public function getIndex()
    {
        $title      = "A collection of items";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $book = new CLASSNAME();
        $book->setDb($this->di->get("db"));

        $data = [
            "items" => $book->findAll(),
        ];

        $view->add("scaffold/crud/view-all", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to create a new item.
     *
     * @return void
     */
    public function getPostCreateItem()
    {
        $title      = "Create a item";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new CreateForm($this->di);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("scaffold/crud/create", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to delete an item.
     *
     * @return void
     */
    public function getPostDeleteItem()
    {
        $title      = "Delete a book";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new DeleteForm($this->di);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("scaffold/crud/delete", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to update an item.
     *
     * @return void
     */
    public function getPostUpdateItem($id)
    {
        $title      = "Update an item";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new UpdateForm($this->di, $id);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("scaffold/crud/update", $data);

        $pageRender->renderPage(["title" => $title]);
    }
}
