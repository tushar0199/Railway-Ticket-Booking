<?php

class UpdateSeatsTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testupdateSeats()
    {
        $this->user = new \App\Models\UpdateSeats;
        $this->assertEquals( $this->user->updateSeats("505","2022-01-05","400","On Time","Dhaka","Sylhet","15:10:00"),"Updated Successfully");

    }
}
