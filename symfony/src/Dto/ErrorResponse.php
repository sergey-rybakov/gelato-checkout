<?php

declare(strict_types=1);

namespace App\Dto;

use App\Dto\ErrorMessage;
use Countable;

final class ErrorResponse implements Countable
{
    /**
     * @var ErrorMessage[]
     */
    public array $errors = [];

    public function count()
    {
        return count($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function pushError(ErrorMessage $errorMessage): self
    {
        $this->errors[] = $errorMessage;

        return $this;
    }
}