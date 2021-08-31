<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Emailsender;
use Atomino\Carbon\Plugins\Created\Created;

#[Created]
#[Modelify(\Application\Database\DefaultConnection::class, 'emailsender', true)]
class Emailsender extends _Emailsender{

}