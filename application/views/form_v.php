<?php

	echo (isset($result)) ? $result : '';

	echo form_open();
	echo '<br />' . form_input('integer', set_value('integer')) . ' - Integer';
	echo '<br />' . form_input('shorttext', set_value('shorttext')) . ' - Short Text';
	echo '<br />' . form_input('longtext', set_value('longtext')) . ' - Long Text';
	echo '<br />' . form_submit('', 'submit');
	echo form_close();

	echo validation_errors();

	echo '<br />[' . anchor('welcome/standard', 'Standard Test') . '] [' . anchor('welcome/mymodel', 'MY_Model Test') .']';
