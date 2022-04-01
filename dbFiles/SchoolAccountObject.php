<?php

class SchoolAccountObject
{

    private string $school;
    private string $adminFirstName;
    private string $adminLastName;
    private string $username;
    private string $password;
    private string $address;

    /**
     * @return string
     */
    public function getSchool(): string
    {
        return $this->school;
    }

    /**
     * @param string $school
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    /**
     * @return string
     */
    public function getAdminFirstName(): string
    {
        return $this->adminFirstName;
    }

    /**
     * @param string $adminFirstName
     */
    public function setAdminFirstName(string $adminFirstName): void
    {
        $this->adminFirstName = $adminFirstName;
    }


    /**
     * @return string
     */
    public function getAdminLastName(): string
    {
        return $this->adminLastName;
    }

    /**
     * @param string $adminLastName
     */
    public function setAdminLastName(string $adminLastName): void
    {
        $this->adminLastName = $adminLastName;
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }


    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function __construct($username, $password)
    {
        $this->$username = $username;
        $this->$password = $password;
    }
}