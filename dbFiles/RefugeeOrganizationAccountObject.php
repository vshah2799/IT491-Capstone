<?php

class RefugeeOrganizationAccountObject
{
    private string $accountType;
    private string $organization;
    private string $adminFirstName;
    private string $adminLastName;
    private string $username;
    private string $password;
    private string $address;
    private string $email;
    private string $imageURL;

    /**
     * @return string
     */
    public function getImageURL(): string
    {
        return $this->imageURL;
    }

    /**
     * @param string $imageURL
     */
    public function setImageURL(string $imageURL): void
    {
        $this->imageURL = $imageURL;
    }


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     */
    public function setOrganization(string $organization): void
    {
        $this->organization = $organization;
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


    /* Constructor doesn't work for some reason so not including it
   public function __construct($username, $password)
   {
       $this->$username = $username;
       $this->$password = $password;
   }
   */
}