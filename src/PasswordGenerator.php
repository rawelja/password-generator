<?php

namespace Rawelja\PasswordGenerator;

class PasswordGenerator
{
    /** @var int */
    private int $type;

    /** @var array|int[]|string[]  */
    private array $digits;

    /** @var array|int[]|string[]  */
    private array $lowerCase;

    /** @var array|int[]|string[]  */
    private array $upperCase;

    /** @var array|int[]|string[]  */
    private array $special;

    /**
     * @var int[]|string[]
     */
    private array $all;

    public function __construct()
    {
        $this->digits = array_flip(range('0', '9'));
        $this->lowerCase = array_flip(range('a', 'z'));
        $this->upperCase = array_flip(range('A', 'Z'));
        $this->special = array_flip(str_split('!#$%&(){}[]='));
        $this->all = array_merge($this->digits, $this->lowerCase, $this->upperCase, $this->special);
    }

    public function type(int $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function generate(): string
    {
        switch ($this->type) {
            case 2:
                return $this->medium();
            case 3:
                return $this->strong();
            default:
                return $this->weak();
        }
    }

    private function weak(): string
    {
        $minimum = array_merge(array_rand($this->upperCase, 2), [array_rand($this->lowerCase)]);
        return $this->fill($minimum, 3);
    }

    private function medium(): string
    {
        $minimum = array_merge(array_rand($this->upperCase, 2), [array_rand($this->lowerCase)], []);
        return $this->fill($minimum, 3);
    }

    private function strong(): string
    {
        $minimum = [array_rand($this->special)];
        return $this->fill($minimum, 5);
    }

    private function fill(array $minimum, int $remaining): string
    {
        return str_shuffle(implode(array_merge($minimum, array_rand($this->all, $remaining)), ''));
    }

}
