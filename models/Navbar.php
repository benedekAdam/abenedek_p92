<?php

class Navbar
{

    public $isLoggedIn;
    public $isAdminUser;


    public function __construct()
    {
        $this->isLoggedIn = false;
        $this->isAdminUser = false;
        return $this->renderNavBar();
    }

    public function renderNavBar()
    {
        $navbarWrapper = new View('navbar/wrapper.php');
        $content = $this->_getNavbarContent();
        $navbarWrapper->set('content', $content);
        echo $navbarWrapper->render();
    }

    private function _getNavbarContent()
    {
        if ($this->isLoggedIn) {
            if ($this->isAdminUser) {
                return $this->_displayAdminNavbar();
            } else {
                return $this->_displayLoggedInNavbar();
            }
        } else {
            return $this->_displayNormalNavbar();
        }
    }

    private function _displayNormalNavbar()
    {
        $navbarView = new View('navbar' . DIRECTORY_SEPARATOR . '_navbar_normal.php');
        return $navbarView->render();
    }

    private function _displayLoggedInNavbar()
    {
        $navbarView = new View('navbar' . DIRECTORY_SEPARATOR . '_navbar_loggedin.php');
        return $navbarView->render();
    }

    private function _displayAdminNavbar()
    {
        $navbarView = new View('navbar' . DIRECTORY_SEPARATOR . '_navbar_admin.php');
        return $navbarView->render();
    }
}
