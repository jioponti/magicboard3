<?php if(!defined("__MAGIC__")) exit; 

/*
 * 입력받은 key와 현재 키가 같을 경우에만
 * 수정이나 다른 모드로 들어감
 * 아닐 경우에는 view 상태를 유지함
 */
$state='list';
$key = GV::Number($this->KN());
$mode = GV::GetParam($this->Mode('name'), 'GET');

if(
  $mode
  && $mode!='modify'
  && $mode!='write'
  ) {
  $state = $mode;
}

