<?php
namespace Classes\Notepad;

class ElectronicSecuredNotepad extends AbstractÅlectronicDevice
{
	private $isStarted;
	
	public function __construct($pages, $password)
	{
		parent::__construct($pages, $password);
	}
	
	public function start()
	{
		$this->isStarted = true;	
	}
	
	public function stop()
	{
		$this->isStarted = false;
	}
	
	public function isStarted()
	{
		if($this->isStarted)
		{
			return true;
		}else return false;
	}
	
	public function addTextToPage($numberOfPage,$text)
	{
		if($this->isStarted()){
		parent::addTextToPage($numberOfPage, $text);
		}else {
			throw new \Exception("must be started");
		}
	}
	
	public function addNewText($numberOfPage,$text)
	{
	if($this->isStarted()){
		parent::addNewText($numberOfPage,$text);
		}else {
			throw new \Exception("must be started");
		}
	}
	
	public function deleteTextOfPage($numberOfPage)
	{
		if($this->isStarted()){
			parent:: deleteTextOfPage($numberOfPage);
			}else {
				throw new \Exception("must be started");
			}
	}
	
	public function showPages()
	{
	if($this->isStarted()){
		parent::showPages();
		}else {
			throw new \Exception("must be started");
		}
	}
	
}