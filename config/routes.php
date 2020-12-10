<?php 

return array (
			
			'stag/show/([0-9]+)'=>'stag/show/$1',
			'stag/set/([0-9]+)'=>'stag/set/$1',
			'stag'=>'stag/view',
			
			'knigka/show/([0-9]+)'=>'knigka/show/$1',
			'knigka/set/([0-9]+)'=>'knigka/set/$1',
			'knigka'=>'knigka/view',
			
			'rabotniki/hide/([0-9]+)'=>'rabotniki/hide/$1',
			'rabotniki/set'=>'rabotniki/set',
			'rabotniki'=>'rabotniki/view',
			
			'raspisanie/hide/([0-9]+)'=>'raspisanie/hide/$1',
			'raspisanie/set'=>'raspisanie/set',
			'raspisanie'=>'raspisanie/view',
			
			'search'=>'site/search',
			
			'orgchart/([0-9]+)'=>'orgchart/getposition/$1',
			'orgchart'=>'orgchart/view',
			
			''=>'site/index'
			

);



?>