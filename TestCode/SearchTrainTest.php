<?php

class SearchTrainTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testsearchTrain()
    {
        $this->user = new \App\Models\SearchTrain;
        $this->assertEquals( $this->user->searchTrain("Dhaka","Sylhet","2022-01-05"),"Book Train Ticket");

    }
}
