<?php

// Not Good
class UserManager
{
    public function registerUser($username, $password)
    {
        // Logic for registering a user
        // ...
        $this->sendWelcomeEmail($username);
    }

    public function loginUser($username, $password)
    {
        // Logic for logging in a user
        // ...
    }

    private function sendWelcomeEmail($username)
    {
        // Logic for sending a welcome email
        // ...
    }
}




// Better
class RegistrationManager
{
    public function registerUser($username, $password)
    {
        // Logic for registering a user
        // ...
        $this->sendWelcomeEmail($username);
    }

    private function sendWelcomeEmail($username)
    {
        // Logic for sending a welcome email
        // ...
    }
}

class LoginManager
{
    public function loginUser($username, $password)
    {
        // Logic for logging in a user
        // ...
    }
}