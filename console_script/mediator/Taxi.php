<?php


namespace Med;

class Taxi extends Abstr
{

    public function __construct($mediator)
    {
        parent::__construct($mediator);
    }


    public function request()
    {
        return $this->getMediator()->accept();
    }

}