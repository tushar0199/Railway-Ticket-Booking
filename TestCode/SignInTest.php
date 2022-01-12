<?php

class SignInTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testSignIn()
    {
        $this->user = new \App\Models\SignIn;
        $this->assertEquals( $this->user->signIn("admin", "123456"),"Sign In Successfull");
    }
}