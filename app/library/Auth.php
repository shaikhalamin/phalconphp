<?php
namespace Libs;

class Auth{
	protected $user;
	protected $loggedOut = false;

	public function user(){
		if($this->loggedOut)
			return null;
		if(!is_null($this->user)){
			return $this->user;
		}
		
	}

	public function guest(){
		return $this->check();
	}
	public function attempt(array $credentials = array()){
		
	}
	public function check(){
		return !is_null($this->user);
	}
	public function logout(){
		$this->user = null;
		$this->loggedOut = true;
		$this->session->destroy;
	}
	public function id(){
		if($this->session->has($this->sessionKey())){
			return $this->session->get(sessionKey());
		}else{
			return null;
		}
		
	}
	public function login(){
		if($this->user === false)
			return false;
		$this->regenerateSessionId();
		$this->session->set($this->sessionKey(),$user->id);
	}

	public function loginUsingId($id){
		$this->login($user = $this->retrieveById($id));
	}

	public function sessionKey(){
		return $this->config->session->id;
	}

	public function retrieveKey(){
		
	}

	public function retrieveById($id){
		return \Users::findFirst($id);
	}
	public function regenerateSessionId(){
		session_regenerate_id(true);
	}
}
