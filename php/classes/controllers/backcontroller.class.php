<?php

namespace controllers;

use mvc\Controller;

class Backcontroller extends Controller{

    public function __construct()
    {
        header("location: home");
    }



}