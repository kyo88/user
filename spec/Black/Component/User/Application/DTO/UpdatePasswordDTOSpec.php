<?php

namespace spec\Black\Component\User\Application\DTO;

use Black\Component\User\Domain\Model\UserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UpdatePasswordDTOSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Application\DTO\UpdatePasswordDTO');

    }

    function let()
    {
        $this->beConstructedWith(1234, "password");
    }

    function it_should_have_an_id()
    {
        $this->getId()->shouldReturn(1234);
    }

    function it_should_have_a_password()
    {
        $this->getPassword()->shouldReturn("password");
    }
}
