<?php

namespace Modules\Ship\Parents\Exceptions;

use Exception as BaseException;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

abstract class ParentException extends BaseException
{
    protected string $environment;

    public function __construct(?string $message = null, ?int $code = null, ?Throwable $previous = null)
    {
        $this->environment = Config::get('app.env');

        parent::__construct($this->prepareMessage($message), $this->prepareStatusCode($code), $previous);
    }

    private function prepareMessage(?string $message = null): string
    {
        return is_null($message) ? ($this->setDefaultMessage() ?? $this->message) : $message;
    }

    private function prepareStatusCode(?int $code = null): int
    {
        return is_null($code) ? $this->code : $code;
    }

    /**
     * Help developers debug the error without showing these details to the end user.
     * Usage: `throw (new MyCustomException())->debug($e)`.
     */
    public function debug($error, bool $force = false): self
    {
        if ($error instanceof BaseException) {
            $error = $error->getMessage();
        }

        if ($this->environment !== 'testing' || $force === true) {
            Log::error('[DEBUG] '.$error);
        }

        return $this;
    }

    /**
     * set default message via function
     */
    public function setDefaultMessage(): string
    {
        return $this->message;
    }

    public static function getmsg(): ?string
    {
        return (new static())->message ?? null;
    }
}
