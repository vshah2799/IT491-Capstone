<?php

class StudentOrRefugeeAccountObject
{
    private string $username;
    private string $password;
    private string $firstName;
    private string $lastName;
    private int $age;
    private string $organizationOrSchool;
    private string $gender;
    private string $ethnicity;

    private string $languages;
    private int $grade;
    private string $interestsAndHobbies;

    private string $subjects;
    //Can be student or refugee
    private string $accountType;

    private string $imageURL;


    /* Constructor doesn't work for some reason so not including it
    public function __construct($username, $password)
    {
        $this->$username = $username;
        $this->$password = $password;
    }
    */

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
        return $this->organizationOrSchool;
    }

    /**
     * @param string $organizationOrSchool
     */
    public function setOrganizationOrSchool(string $organizationOrSchool): void
    {
        $this->organizationOrSchool = $organizationOrSchool;
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
     * @return string
     */
    public function getLanguages(): string
    {
        return $this->languages;
    }

    /**
     * @param string $languages
     */
    public function setLanguages(string $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @return string
     */
    public function getInterestsAndHobbies(): string
    {
        return $this->interestsAndHobbies;
    }

    /**
     * @param string $interestsAndHobbies
     */
    public function setInterestsAndHobbies(string $interestsAndHobbies): void
    {
        $this->interestsAndHobbies = $interestsAndHobbies;
    }

    /**
     * @return string
     */
    public function getSubjects(): string
    {
        return $this->subjects;
    }

    /**
     * @param string $subjects
     */
    public function setSubjects(string $subjects): void
    {
        $this->subjects = $subjects;
    }

}