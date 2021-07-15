<?php

namespace App\Service\Modules\Register\Parameters;

class RegisterParameters
{
    protected string $name;
    protected string $email;
    protected string $password;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return RegisterParameters
     */
    public function setName(string $name): RegisterParameters
    {
        $this->name = $name;
        return $this;
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
     * @return RegisterParameters
     */
    public function setEmail(string $email): RegisterParameters
    {
        $this->email = $email;
        return $this;
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
     * @return RegisterParameters
     */
    public function setPassword(string $password): RegisterParameters
    {
        $this->password = $password;
        return $this;
    }
}
