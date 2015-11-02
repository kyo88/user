<?php
namespace spec\Black\Component\User\Application\DTO;

use Black\Component\User\Domain\Model\UserId;
use PhpSpec\ObjectBehavior;

class LockUserDTOSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Application\DTO\LockUserDTO');

    }

    function let(UserId $id)
    {
        $id->getValue()->willReturn("1");

        $this->beConstructedWith($id);
    }

    function it_should_return_id()
    {
        $this->getId()->getValue()->shouldReturn("1");
    }

    function it_should_unserialize()
    {
        $serialized = $this->serialize();

        $object = $this->unserialize($serialized);
        $object->shouldBeArray();
    }
}
