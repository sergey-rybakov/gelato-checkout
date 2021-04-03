<?php

declare(strict_types=1);

namespace App\Dto;

use Symfony\Component\Validator\ConstraintViolationInterface;
use Throwable;

class ErrorMessage
{
    private string $message;
    private string $class = '';

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public static function fromThrowable(Throwable $throwable): self
    {
        $self = new self($throwable->getMessage(), (string)$throwable->getCode());
        $self->class = get_class($throwable);

        return $self;
    }

    public static function fromViolation(ConstraintViolationInterface $violation): self
    {
        $self = new self($violation->getMessage(), (string)$violation->getCode());
        $self->class = $violation->getPropertyPath();

        return $self;
    }

    public static function create(string $string): self
    {
        $self = new self($string);
        $self->class = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2)[1]['class'] ?: '';

        return $self;
    }
}
