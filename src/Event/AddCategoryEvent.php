<?php

namespace App\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class AddCategoryEvent
 * @package App\Event
 */
class AddCategoryEvent extends Event
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * AddCategoryEvent constructor.
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}