<?php

namespace App\Entity;

use App\Repository\UserEtuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserEtuRepository::class)
 */
class UserEtu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $groupenumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public $confirm_password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupenumber(): ?int
    {
        return $this->groupenumber;
    }

    public function setGroupenumber(int $groupenumber): self
    {
        $this->groupenumber = $groupenumber;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
