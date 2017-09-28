<?php namespace App\Http\Middleware;

use Closure;
use Request;
use Redirect;

use Illuminate\Contracts\Auth\Guard;

use App\Libraries\Infra\Infra_Permissao;


class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle( $request, Closure $next) {

			if ($this->auth->guest()){

			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('/');
			}
		}
		return $next($request);
	}

}
