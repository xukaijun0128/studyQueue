<?php
namespace Queue;
class job
{
	public function perform()
	{
		sleep(10);
		fwrite(STDOUT, 'Hello!');
	}
}
?>