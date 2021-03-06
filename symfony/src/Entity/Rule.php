<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\RuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;

/**
 * @ORM\Entity(repositoryClass=RuleRepository::class)
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="rule_type", type="string")
 * @ORM\DiscriminatorMap({
 * "good": "RuleGood",
 * "session": "RuleSession",
 * })
 */
abstract class Rule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="smallint")
     */
    private $compatable;

    /**
     * @ORM\Column(type="integer")
     */
    private $priority;
    
    /**
     * @ORM\Column(type="smallint")
     */
    private $enable;

    /**
     * @ORM\Column(type="rule_type")
     */
    private $discountType;

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

    public function getCompatable(): ?int
    {
        return $this->compatable;
    }

    public function setCompatable(int $compatable): self
    {
        $this->compatable = $compatable;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getEnable(): ?int
    {
        return $this->enable;
    }

    public function setEnable(int $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    public function getDiscountType()
    {
        return $this->discountType;
    }

    public function setDiscountType($discountType): self
    {
        $this->discountType = $discountType;

        return $this;
    }
}
