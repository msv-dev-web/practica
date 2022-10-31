<?php


namespace Med;

$mediator = new Mediator();

$customer = new Customer($mediator);
$taxi = new Taxi($mediator);

$customer->requestTaxi();
