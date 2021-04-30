<?php
declare(strict_types=1);

namespace App\Application\Actions\Todo;

use App\Application\Actions\Action;
use App\Domain\Todo\TodoRepository;
use Psr\Log\LoggerInterface;

abstract class TodoAction extends Action
{
    protected $todoRepository;

    public function __construct(LoggerInterface $logger, TodoRepository $todoRepository)
    {
        parent::__construct($logger);
        $this->todoRepository = $todoRepository;
    }
};
