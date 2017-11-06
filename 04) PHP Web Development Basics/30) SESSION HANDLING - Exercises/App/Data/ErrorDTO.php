<?php


namespace Data;


class ErrorDTO
{
    private $errorInfo;

    public function __construct(string $errorInfo)
    {
        $this->errorInfo = $errorInfo;
    }

    public function getErrorInfo()
    {
        return $this->errorInfo;
    }
}