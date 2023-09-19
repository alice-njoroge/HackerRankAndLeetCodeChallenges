<?php
//showing how to use composition in method cancel inside Class Subscription
class Subscription
{
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create(){

    }

    public function invoice(){

    }

    public function cancel(){

        //find stripe  customer
        $this->gateway->findCustomer();
        //find stripe subscription by customer
        $this->gateway->findSubscriptionByCustomer();
    }
    public function swap($newPlan){

    }

}

interface Gateway{
    public function findCustomer();

    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    //implementation 1 of cancel function - add protected methods inside the class

    public function findCustomer(){

    }

    public function findSubscriptionByCustomer(){

    }
}

class BrainTreeGateway implements Gateway
{
    //implementation 1 of cancel function - add protected methods inside the class

    public function findCustomer(){

    }

    public function findSubscriptionByCustomer(){

    }
}

$stipe = new Subscription(new StripeGateway());
$brainTree = new Subscription(new BrainTreeGateway());
