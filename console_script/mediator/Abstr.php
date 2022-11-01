<?php


namespace Med;

abstract class Abstr
{

    private $mediator;

    public function __construct($mediator)
    {
        $this->mediator = $mediator;
    }

    public function getMediator()
    {
        return $this->mediator;
    }

}

