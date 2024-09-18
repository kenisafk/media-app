<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use DateTime;
use DateTimeInterface;

class Extension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('human_readable_date', [$this, 'humanReadableDate']),
        ];
    }

    public function humanReadableDate(DateTimeInterface $date)
    {
        $now = new DateTime();
        $diff = $now->diff($date);

        if ($diff->y > 0) {
            return $diff->y . 'y ago';
        }
        if ($diff->m > 0) {
            return $diff->m . 'm ago';
        }
        if ($diff->d > 0) {
            return $diff->d . 'd ago';
        }
        if ($diff->h > 0) {
            return $diff->h . 'h ago';
        }
        if ($diff->i > 0) {
            return $diff->i . 'm ago';
        }
        return 'just now';
    }
}
