<?php

declare(strict_types=1);

namespace app\Models;

use app\Core\Connection;

class Customer
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $rawPassword;
    private string $street;
    private string $district;
    private string $number;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return void
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */ 
    public function setName(string $name)
    {
        $this->name = filter_var($name,FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Undocumented function
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = filter_var($email,FILTER_VALIDATE_EMAIL);

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    public function getRawPassword()
    {
        return $this->rawPassword;
    }

    /**
     * Undocumented function
     *
     * @param string $password
     * @return void
     */
    public function setRawPassword(string $password)
    {
        $this->rawPassword = $password;
    }

    /**
     * Undocumented function
     *
     * @param string $password
     * @return void
     */ 
    public function setPassword(string $password)
    {
        $this->password = password_hash($password,PASSWORD_DEFAULT);
        return $this;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Undocumented function
     *
     * @param string $street
     * @return void
     */
    public function setStreet(string $street)
    {
        $this->street = trim($street);

        return $this;
    }

    /**
     * Get the value of district
     */ 
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Undocumented function
     *
     * @param string $district
     * @return void
     */
    public function setDistrict(string $district)
    {
        $this->district = filter_var($district,FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

   /**
    * Undocumented function
    *
    * @param string $number
    * @return void
    */ 
    public function setNumber(string $number)
    {
        $this->number = trim($number);

        return $this;
    }
}
