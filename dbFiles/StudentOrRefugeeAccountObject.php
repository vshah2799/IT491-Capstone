<?php

class StudentOrRefugeeAccountObject
{

    private int $age;
    private int $grade;

    //Can be student or refugee
    private string $accountType;

    private string $username;
    private string $password;
    private string $organizationOrSchool;
    private string $firstName;
    private string $lastName;
    private string $gender;
    private string $ethnicity;

    private array $languages;
    private array $interestsAndHobbies;
    private array $subjects;

    /* Constructor doesn't work for some reason so not including it
    public function __construct($username, $password)
    {
        $this->$username = $username;
        $this->$password = $password;
    }
    */

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
     * @return int
     */
    public function getGrade(): int
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     */
    public function setGrade(int $grade): void
    {
        $this->grade = $grade;
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
    public function getOrganizationOrSchool(): string
    {
        return $this->organizationorschool;
    }

    /**
     * @param string $organizationOrSchool
     */
    public function setOrganizationOrSchool(string $organizationOrSchool): void
    {
        $this->organizationorschool = $organizationOrSchool;
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

}