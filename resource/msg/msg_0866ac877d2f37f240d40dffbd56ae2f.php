<?php
// content : 1주
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"1주",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"2일 화요일","3일 수요일","4일 목요일","5일 금요일",
		)
	)
);