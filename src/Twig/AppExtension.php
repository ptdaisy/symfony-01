<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension implements GlobalsInterface
{

    private $locale;

    public function __construct(string $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return array|\Twig_Filter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'priceFilter'])
        ];
    }

    public function getGlobals()
    {
        return ['locale' => $this->locale];
    }

    /**
     * @param $number
     * @return string
     */
    public function priceFilter($number)
    {
        return '$'.number_format($number, 2, '.', ',');
    }

}