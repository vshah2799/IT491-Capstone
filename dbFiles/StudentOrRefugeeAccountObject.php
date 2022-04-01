<?php

class StudentOrRefugeeAccountObject
{
    //Can be student or refugee
    private int $age;

    private string $accountType;
    private string $username;
    private string $password;
    private string $organization;
    private string $firstName;
    private string $lastName;
    private string $gender;
    private string $ethnicity;

    private array $languages;
    private array $interestsAndHobbies;
    private array $subjects;


    public function __construct($usernameConstructor, $passwordConstructor)
    {
        $username = $usernameConstructor;
        $password = $passwordConstructor;
    }


}