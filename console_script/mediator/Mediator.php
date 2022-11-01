<?php


namespace Med;

class Mediator
{

    private $taxi;


    private $customer;

    public function setTaxi($taxi)
    {
        $this->taxi = $taxi;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }


    public function requestTaxi()
    {
        return $this->taxi->request();
    }


    public function accept()
    {
        return true;
    }


}