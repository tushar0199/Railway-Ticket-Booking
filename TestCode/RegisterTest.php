<?php

class RegisterTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testRegister()
    {
        $this->user = new \App\Models\Register;
        $this->assertEquals( $this->user->register("Siyam","siyam","male","siyam@gmial.com","987654323","Kakrail","1999-12-30","2147483647","98767898765","2345"),"Registration Completed");

    }
}
