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

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
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
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getEthnicity(): string
    {
        return $this->ethnicity;
    }

    /**
     * @param string $ethnicity
     */
    public function setEthnicity(string $ethnicity): void
    {
        $this->ethnicity = $ethnicity;
    }

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @param array $languages
     */
    public function setLanguages(array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @return array
     */
    public function getInterestsAndHobbies(): array
    {
        return $this->interestsAndHobbies;
    }

    /**
     * @param array $interestsAndHobbies
     */
    public function setInterestsAndHobbies(array $interestsAndHobbies): void
    {
        $this->interestsAndHobbies = $interestsAndHobbies;
    }

    /**
     * @return array
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    /**
     * @param array $subjects
     */
    public function setSubjects(array $subjects): void
    {
        $this->subjects = $subjects;
    }


    public function __construct($username, $password)
    {
        $this->$username = $username;
        $this->$password = $password;
    }


}