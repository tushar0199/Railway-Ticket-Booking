<?php

class BookTrainTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testbookTrains()
    {
        $this->user = new \App\Models\BookTrain;
        $this->assertEquals( $this->user->bookTrain("siyam","1099","2022-01-05","Sylhet","987654323","2021-07-14","2022-07-20","456789654326"),"Ticket Booked Successfully");

    }
}
