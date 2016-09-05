<?php
namespace Classes\Notepad;

abstract class  AbstractNotepad
{
	public abstract function addTextToPage($numberOfPage,$text);
	public abstract function addNewText($numberOfPage,$text);
	public abstract function deleteTextOfPage($numberOfPage);
	public abstract function showPages();
	public abstract function searchWord($numberOfPage,$word);
	public abstract function printAllPagesWithDigits();
}