<?php
	if(isset($_POST['submit']))
	{
		$file = $_POST["file"];
		$msg = $_POST["msg"];
		
		if( ini_get('safe_mode') )
		{
   			echo "yes";
		}
		else
		{
   			echo "no";
		}
		
		//print_r($file);
		//print_r($msg);
		$out = shell_exec('python hide1.py -e '.$file.' '.$msg.'');
		print_r($out);
	}

	
?>
<?php
if(!isset($_POST['submit'])) {
?>
<form action="" method="POST">
<input name="file" type="text" />
<input name="msg" type="text" />
<input name="submit" type="submit" value="submit" />
</form>
<?php
}
?>
