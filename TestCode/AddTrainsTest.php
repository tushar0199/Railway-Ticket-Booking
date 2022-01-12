<?php

class AddTrainsTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testaddTrains()
    {
        $this->user = new \App\Models\AddTrains;
        $this->assertEquals( $this->user->addTrains("505","2022-01-05","400","On Time","Dhaka","Sylhet","15:10:00"),"Added Successfully");

    }
}
