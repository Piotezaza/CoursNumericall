<?php

namespace Traits;

trait ValidationTrait
{
    private function isMail($email)
    {
        return(!filtrer_var(stronglower($email), FILTER_VALIDATE_EMAIL));
    }
}