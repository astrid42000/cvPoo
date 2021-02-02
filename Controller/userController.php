<?php

class userController{
    private $userManager;

    /**
     * userController constructor.
     * @param $userManager
     */
    public function __construct()
    {
        $this->userManager = new userManager();
    }

    

}
