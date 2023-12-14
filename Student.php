<?php

class Student{
    public $id; // You may want to include an id as a primary key
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $age;
    public $school;
    public $schooll;
    public $schoolb;
    public $schoolc;
    public $password;

    /**
     * @param $fname
     * @param $lname
     * @param $email
     * @param $phone
     * @param $age
     * @param $school
     * @param $schooll
     * @param $schoolb
     * @param $schoolc
     * @param $password
     */
    public function __construct($fname, $lname, $email, $phone, $age, $school, $schooll, $schoolb, $schoolc, $password)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->age = $age;
        $this->school = $school;
        $this->schooll = $schooll;
        $this->schoolb = $schoolb;
        $this->schoolc = $schoolc;
        $this->password = password_hash($password, PASSWORD_DEFAULT);;
    }




}
?>