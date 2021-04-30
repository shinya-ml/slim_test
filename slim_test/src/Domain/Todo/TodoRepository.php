<?php
declare(strict_types=1);

namespace App\Domain\Todo;

interface TodoRepository
{
    public function findAll(): array;
}