<?php
/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\Component\User\Application\Controller;

use Black\Component\User\Domain\Model\User;
use Black\Component\User\Infrastructure\CQRS\Handler\LockUserHandler;
use Black\DDD\CQRSinPHP\Infrastructure\CQRS\Bus;

/**
 * Class LockUserController
 */
class LockUserController
{
    /**
     * @var
     */
    protected $bus;

    /**
     * @var
     */
    protected $handler;

    /**
     * @var
     */
    protected $commandName;

    /**
     * @param Bus $bus
     * @param LockUserHandler $handler
     * @param $commandName
     */
    public function __construct(
        Bus $bus,
        LockUserHandler $handler,
        $commandName
    ) {
        $this->bus         = $bus;
        $this->handler     = $handler;
        $this->commandName = $commandName;
    }

    /**
     * @param User $user
     */
    public function lockUserAction(User $user)
    {
        $this->bus->register($this->commandName, $this->handler);
        $this->bus->handle(new $this->commandName($user));
    }
} 
