<?php

class RefugeeOrganizationAccountObject
{
    private string $organization;
    private string $adminFirstName;
    private string $adminLastName;
    private string $username;
    private string $password;
    private string $address;


    public function __construct($usernameConstructor, $passwordConstructor)
    {
        $username = $usernameConstructor;
        $password = $passwordConstructor;
    }
}