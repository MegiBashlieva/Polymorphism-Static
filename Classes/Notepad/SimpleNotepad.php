<?php
namespace Classes\Notepad;

use Classes\Page\Page;

class SimpleNotepad extends AbstractNotepad
{
	protected $pages = [];
	
	public function __construct($pages)
	{
		foreach($pages as $page){
          if(!($page instanceof Page)){
            trigger_error('Array of objects passed to constructor must contain instances of Page', E_USER_ERROR);
            }
        }
		$this->pages=$pages;
	}
	
	public function addTextToPage($numberOfPage,$text)
	{   
		if($this->checkNumberOfPages($numberOfPage)){
		$this->pages[$numberOfPage]->addText($text);
		}
	}
	
	public function addNewText($numberOfPage,$text)
	{
		if($this->checkNumberOfPages($numberOfPage)){
		$this->pages[$numberOfPage]->deleteText($text);
		$this->pages[$numberOfPage]->addText($text);
		}
	}
	
	public function deleteTextOfPage($numberOfPage)
	{
		if($this->checkNumberOfPages($numberOfPage)){
		$this->pages[$numberOfPage]->deletePage();
		}
	}
	
	public function showPages()
	{
			foreach ($this->pages as $page)
			{
				echo $page.PHP_EOL;
			}
	}
	
	public function searchWord($numberOfPage,$word)
	{
		if($this->checkNumberOfPages($numberOfPage)){
			echo $this->pages[$numberOfPage]->searchWord($word);
		}
	}
	
	public function printAllPagesWithDigits(){
		foreach ($this->pages as $page){
			if($page->containsDigits()){
				echo $page.PHP_EOL;
			}
		}
	}
	
	protected function checkNumberOfPages($numPages)
	{
		if($numPages >= 0 && $numPages < count($this->pages) ){
			return true;
		}else return false;
	}
}