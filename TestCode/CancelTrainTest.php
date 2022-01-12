<?php

class CancelTrainTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testcancelTrain()
    {
        $this->user = new \App\Models\CancelTrain;
        $this->assertEquals( $this->user->cancelTrain("505"),"Train Deleted Successfully");

    }
}
