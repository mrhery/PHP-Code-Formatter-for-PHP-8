<?php

$steps = [
	'<?php'		=> '<?',
	'<?'		=> '<?php',
	'<?php}'	=> '<?php }',
	'}?>'		=> '} ?>',
	'{?>'		=> '{ ?>',
	'<?phpecho'	=> '<?=',
	'<?php='	=> '<?=',
	'<?phpif'	=> '<?php if',
	'<?phpinc' 	=> '<?php inc',
	'<?phpreq'	=> '<?php req',
	'<?php$'	=> '<?php $',
	'<?phpfor'	=> '<?php for',
	'<?phpwhi'	=> '<?php whi'
];

$path = "./";

if(isset($argv[1])){
	$path = $argv[1];
}

echo "Auto updating file recursively on path " . $path . " \n\n";

$it = new RecursiveDirectoryIterator($path);
$display = ['php'];
foreach(new RecursiveIteratorIterator($it) as $file)
{
	$w = explode('.', $file);
	$x = strtolower(end($w));
    if (in_array($x, $display)){
		echo "Updating: " . $file . " - ";
		
		$str = file_get_contents($file);
		
		foreach($steps as $from => $to){
			$str = str_replace($from, $to, $str);
		}
		
		file_put_contents($file, $str);
		echo "Done\n";
	} 
}

