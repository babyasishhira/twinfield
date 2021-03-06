<?php

namespace PhpTwinfield;

class User
{
    /**
     * @var string The code of the user.
     */
    private $code;

    /**
     * @var string The name of the user.
     */
    private $name;

    /**
     * @var string The short name of the user.
     */
    private $shortName;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function setShortName(string $value): void
    {
        $this->shortName = $value;
    }
}
