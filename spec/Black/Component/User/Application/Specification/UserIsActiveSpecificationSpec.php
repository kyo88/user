<?php

namespace spec\Black\Component\User\Application\Specification;

use Black\Component\User\Domain\Model\User;
use Black\Component\User\Domain\Model\UserId;
use Email\EmailAddress;
use PhpSpec\ObjectBehavior;

class UserIsActiveSpecificationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Application\Specification\UserIsActiveSpecification');
    }

    function it_should_satisfies_a_specification()
    {
        $user = new User(new UserId(1234), 'test', new EmailAddress("email@domain.tld"));
        $user->activate();

        $this->isSatisfiedBy($user)->shouldReturn(true);
    }
}
