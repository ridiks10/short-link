<?php
declare(strict_types=1);

namespace App\ShortLink\Actions;

use App\ShortLink\Entity\ShortLink;
use Illuminate\Support\Str;

class GenerateLink
{
    private const LENGTH_LINK = 8;

    public function __construct(private string $link)
    {
    }

    public function link(): string
    {
        $short = $this->generate();

        return route('short-link.redirect', ['short' => $short]);
    }

    private function generate(): string
    {
        $short = Str::random(self::LENGTH_LINK);

        try {
            ShortLink::create([
                'original_link' => $this->link,
                'short' => $short,
            ]);
        } catch (\Exception) {
            return $this->generate();
        }

        return $short;
    }

}
