<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 30/11/2018
 * Time: 11:48
 */

include 'MyLinkedList.php';
$linkedList = new MyLinkedList();
$linkedList->addFirst(1);
$linkedList->addFirst(2);
$linkedList->addLast(5);
$linkedList->addLast(9);
$linkedList->addIndex(2, 8);
//$linkedList->removeIndex(0);
//$linkedList->removeObject(6);
echo implode('-', $linkedList->printList()) . '<br>';
//echo $linkedList->getIndex(0) . '<br>';
//echo $linkedList->size() . '<br>';
echo $linkedList->contains(9) . '<br>';
//echo $linkedList->contains(18);
echo $linkedList->indexOf(18) . '<br>';
//$linkedList->clear();
$linkedList->reverse();
echo implode('-', $linkedList->printList()) . '<br>';