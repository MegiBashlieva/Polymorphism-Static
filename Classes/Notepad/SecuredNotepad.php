<?php
namespace Classes\Notepad;
require_once 'readline.php';
class SecuredNotepad extends SimpleNotepad
{
	private $password;
	
	public function __construct($pages,$password)
	{
		parent::__construct($pages);
		$_GET["password"] = $this->checkForStrongPassword($password);
	}
	
	public function addTextToPage($numberOfPage,$text)
	{
		echo $this->checkPassword();
		parent::addTextToPage($numberOfPage, $text);
	}
	
	public function addNewText($numberOfPage,$text)
	{
		echo $this->checkPassword();
		parent::addNewText($numberOfPage,$text);
	}
	
	public function deleteTextOfPage($numberOfPage)
	{
		$this->checkPassword();
		parent::deleteTextOfPage($numberOfPage);
	}
	
	public function showPages()
	{
		echo $this->checkPassword();
		parent::showPages();
	}
	protected function checkForStrongPassword($pass)
	{
		$pattern = "/(?=^.{5}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*$/";
		preg_match($pattern, $pass,$maches);
		if($maches)
		{
			return $pass;
		}else{
			throw new \Exception("write a strong password");
		}
	}
	
	protected  function checkPassword()
	{
		echo PHP_EOL."Enter Password".PHP_EOL;
		$password = readline();
		if($password == $_GET["password"]){
			return "done".PHP_EOL;
		}else {
			Throw new \Exception("invalid password");
		}
	}
}