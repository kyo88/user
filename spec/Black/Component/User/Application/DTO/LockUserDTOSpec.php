<?php
namespace spec\Black\Component\User\Application\DTO;

use Black\Component\User\Domain\Model\UserId;
use PhpSpec\ObjectBehavior;

class LockUserDTOSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Application\DTO\LockUserDTO');
        $this->shouldImplement('Black\DDD\DDDinPHP\Application\DTO\DTO');
    }

    public function let(UserId $id)
    {
        $id->getValue()->willReturn("1");

        $this->beConstructedWith($id);
    }

    public function it_should_return_id()
    {
        $this->getId()->getValue()->shouldReturn("1");
    }

    public function it_should_unserialize()
    {
        $serialized = $this->serialize();

        $object = $this->unserialize($serialized);
        $object->shouldBeArray();
    }
}