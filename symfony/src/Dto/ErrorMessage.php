<?php

declare(strict_types=1);

namespace App\Dto;

class ErrorMessage
{
    private ?string $message = null;

    /**
     * Get the value of message
     */ 
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }
}
