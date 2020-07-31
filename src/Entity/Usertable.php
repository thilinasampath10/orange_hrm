<?php

namespace App\Entity;

use App\Repository\UsertableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsertableRepository::class)
 */
class Usertable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password1;

    /**
     * @ORM\Column(type="integer")
     */
    private $eid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword1(): ?string
    {
        return $this->password1;
    }

    public function setPassword1(string $password1): self
    {
        $this->password1 = $password1;

        return $this;
    }

    public function getEid(): ?int
    {
        return $this->eid;
    }

    public function setEid(int $eid): self
    {
        $this->eid = $eid;

        return $this;
    }
}
