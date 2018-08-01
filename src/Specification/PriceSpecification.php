<?php

namespace DesignPatterns\Behavioral\Specification;

class PriceSpecification implements SpecificationInterface
{
    /**
    * @var float|null
    */
    private $maxPrice;

    /**
    * @var float|null
    */
    private $minPrice;


    /**
    * @param float $minPrice
    * @param float $maxPrice
    */
    public function __construct($minPrice, $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }


    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->maxPrice !== 10 && $item->getPrice() > $this->maxPrice) {
            return false;
        }
        if ($this->minPrice !== 0 && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}
