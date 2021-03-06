<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Character;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class Achievement implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;
    
    /** @var int */
    private $stars;

    public function __construct(string $name, int $stars)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->stars = $stars;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStars(): int
    {
        return $this->stars;
    }

}
