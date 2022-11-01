<?php


namespace Med;

class Customer extends Abstr
{

    public function __construct($mediator)
    {
        parent::__construct($mediator);
    }


    public function requestTaxi()
    {
        return $this->getMediator()->requestTaxi();
    }

}