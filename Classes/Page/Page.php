<?php
namespace Classes\Page;

class Page
{
	private $title;
	private $text="";
	
	public function __construct($title)
	{
		$this->title = $title;
	}
	
	public function addText($text)
	{
		$this->text.=$text;
	}
	
	public function deleteText()
	{
		$this->text ="";
	}
	
	public function __toString()
	{
		return $this->title.PHP_EOL.$this->text;
	}
	
	public function searchWord($word)
	{
		$pattern = "@\b$word\b@";
		preg_match($pattern, $this->text,$matches);
		if($matches){
			
			return "word found".PHP_EOL;
		}else return "word not found".PHP_EOL;
	}
	
	public function containsDigits()
	{
		$pattern = "/\d+/";
		preg_match($pattern, $this->text,$matches);
		if($matches){
			
			return true;
		}else return false;
	}
}