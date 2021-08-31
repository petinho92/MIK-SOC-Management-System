<?php namespace Application\Missions\Web\Page;

use Atomino\Mercury\Responder\Smart\SmartResponder;
use Atomino\Mercury\Responder\Smart\Attributes\{Cache, Args, CSS, JS, Init};
use Symfony\Component\HttpFoundation\Response;
use function Atomino\debug;

#[Init( 'web', 'index2.twig' )]
#[Args( title: 'MIK Partners - Regisztráció' )]
#[Cache( 0 )]
#[CSS('~web/index.css')]
#[JS('/~web/index.js')]

class Index2 extends SmartResponder{
	protected function prepare(Response $response){	}
}

