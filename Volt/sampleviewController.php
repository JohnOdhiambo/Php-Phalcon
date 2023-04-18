<!-- Controller to link the sample-view.phtml page -->
<?php

use MyApp\Models\Menu;
use MyApp\Models\Post;
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

// @property View $view;

class PostsController extends Controller
{
    
    public function sampleviewAction()
    {
        
        $post = Post::findFirst();
        $menu = Menu::findFirst();

        $this->view->showNavigation = true;
        $this->view->menu           = $menu;
        $this->view->pageTitle      = $post->pageTitle;
        $this->view->post           = $post;
    }
}

?>