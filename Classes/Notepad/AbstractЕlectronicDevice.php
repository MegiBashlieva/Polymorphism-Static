<?php
namespace Classes\Notepad;

 abstract class AbstractÅlectronicDevice extends SecuredNotepad
{
	public abstract function start();
	public abstract function stop();
	public abstract function isStarted();
}