<?php
namespace Classes\Notepad;

 abstract class Abstract�lectronicDevice extends SecuredNotepad
{
	public abstract function start();
	public abstract function stop();
	public abstract function isStarted();
}