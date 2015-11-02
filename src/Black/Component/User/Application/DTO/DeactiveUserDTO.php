<?php
/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Black\Component\User\Application\DTO;



/**
 * Class DeactiveUserDTO
 */
final class DeactiveUserDTO
{
    /**
     * @var
     */
    private $id;

    /**
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return json_encode([
            $this->id,
        ]);
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        return list(
            $this->id,
        ) = json_decode($serialized);
    }
} 
