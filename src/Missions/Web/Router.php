<?php namespace Application\Missions\Web;

use Atomino\Bundle\Authenticate\SessionAuthenticator;
use Atomino\Mercury\Responder\Smart\Cache\Middleware\Cache;

class Router extends \Atomino\Mercury\Router\Router {

	public function __construct(protected SessionAuthenticator $authenticator) { }

	public function route():void{
		/*$this(method: 'GET', path: '/')?->pipe(Cache::class)->pipe(Page\Index::class);*/
		$this(method: 'GET', path: '/')?->pipe(Cache::class)->pipe(Page\Index2::class);
		/*$this(method: 'GET', path: '/student')?->pipe(Cache::class)->pipe(Page\Student::class);
        $this(method: 'GET', path: '/instructor')?->pipe(Cache::class)->pipe(Page\Instructor::class);
        $this(method: 'GET', path: '/guest')?->pipe(Cache::class)->pipe(Page\Guest::class);
        $this(method: 'POST', path: '/checking')?->pipe(Cache::class)->pipe(Page\Checking::class);*/
        $this(path:'/post/**')?->pipe(Api\registrationApi::class);
        $this(path:'/get/**')?->pipe(Api\qrcodeApi::class);
        $this(path:'/scanner/**')?->pipe(Api\scannerApi::class);
        $this(path:'/major/**')?->pipe(Api\majorsApi::class);
        $this(path:'/chamber/**')?->pipe(Api\chambersApi::class);
        $this(path:'/info/**')?->pipe(Api\statApi::class);
		$this()?->pipe(Page\Error404::class);
	}


}
