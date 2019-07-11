<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssociationRepository")
 */
class Association
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creation_date;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $adress_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_street;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_town;

    /**
     * @ORM\Column(type="integer")
     */
    private $adress_postcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isRefuge;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="associations")
     */
    private $category;

    public function __construct()
    {
        $this->category = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getAdressNumber(): ?int
    {
        return $this->adress_number;
    }

    public function setAdressNumber(?int $adress_number): self
    {
        $this->adresse_number = $adress_number;

        return $this;
    }

    public function getAdressStreet(): ?string
    {
        return $this->adress_street;
    }

    public function setAdressStreet(string $adress_street): self
    {
        $this->adress_street = $adress_street;

        return $this;
    }

    public function getAdressTown(): ?string
    {
        return $this->adress_town;
    }

    public function setAdressTown(string $adress_town): self
    {
        $this->adress_town = $adress_town;

        return $this;
    }

    public function getAdressPostcode(): ?int
    {
        return $this->adress_postcode;
    }

    public function setAdressPostcode(int $adress_postcode): self
    {
        $this->adress_postcode = $adress_postcode;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getTelephon(): ?int
    {
        return $this->telephon;
    }

    public function setTelephon(?int $telephon): self
    {
        $this->telephon = $telephon;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getIsRefuge(): ?bool
    {
        return $this->isRefuge;
    }

    public function setIsRefuge(bool $isRefuge): self
    {
        $this->isRefuge = $isRefuge;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->category->contains($category)) {
            $this->category->removeElement($category);
        }

        return $this;
    }
}
