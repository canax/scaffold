<?php

namespace NAMESPACE;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\Di\InjectionAwareTrait;
use \Anax\User\HTMLForm\UserLoginForm;
use \Anax\User\HTMLForm\CreateUserForm;

/**
 * A controller class.
 */
class CLASS_NAME implements
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
     * Description.
     *
     * @throws Exception
     *
     * @return void
     */
    public function getIndex()
    {
        $title      = "A index page";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");

        $data = [
            "content" => "An index page",
        ];

        $view->add("default2/article", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Description.
     *
     * @throws Exception
     *
     * @return void
     */
    public function getPostLogin()
    {
        $title      = "A login page";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new UserLoginForm();

        $form->check();

        $data = [
            "content" => $form->getHTML(),
        ];

        $view->add("default2/article", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Description.
     *
     * @throws Exception
     *
     * @return void
     */
    public function getPostCreateUser()
    {
        $title      = "A create user page";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new CreateUserForm();

        $form->check();

        $data = [
            "content" => $form->getHTML(),
        ];

        $view->add("default2/article", $data);

        $pageRender->renderPage(["title" => $title]);
    }
}
