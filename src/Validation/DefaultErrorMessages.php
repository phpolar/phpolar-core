<?php

declare(strict_types=1);

namespace Phpolar\Phpolar\Core\Validation;

/**
 * Contains default validation error messages.
 */
enum DefaultErrorMessages: string
{
    case Max = "Value is greater than the maximum";
    case MaxLength = "Maximum length validation failed";
    case Min = "Value is less than the minimum";
    case MinLength = "Minimum length validation failed";
    case Pattern = "Pattern validation failed";
    case Required = "Required value";
}
