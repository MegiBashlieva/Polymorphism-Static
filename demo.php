<?php
use Classes\Page\Page;
use Classes\Notepad\SimpleNotepad;
use Classes\Notepad\SecuredNotepad;
use Classes\Notepad\ElectronicSecuredNotepad;
require_once 'readline.php';
require_once 'outload.php';


$page1 = new Page("glava 1");
$text = "sdsfdg ffgh fdgd sdsdf";
$page1->addText($text);
$page1->containsDigits();


$page2 = new Page("glava 2");
$text = "111111112222222222555555";
$page2->addText($text);

$page3 = new Page("glava 3");
$text = "asd ads 34 der5 54";
$page3->addText($text);

$simpleNotepad = new SimpleNotepad([$page1,$page2,$page3]);
$simpleNotepad->printAllPagesWithDigits();
$simpleNotepad->searchWord(2, "ads");

$secure = new SecuredNotepad([$page1,$page2], "aB34!");
$secure->addNewText(0, "megi");
$secure->showPages();

$elecSecure = new ElectronicSecuredNotepad([$page1,$page2], "b");
$elecSecure->start();
$elecSecure->addNewText(0, "bbbbbbbbbbb");
$elecSecure->showPages();