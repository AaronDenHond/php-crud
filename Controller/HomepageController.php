<?php

declare(strict_types=1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //this is just example code, you can remove the line below
       
        /**
         * TODO MAKE THIS THE GENERAL OVERVIEW FOR ALL 3 : STUDENTS, TEACHERS, CLASSES
         */
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }
}
