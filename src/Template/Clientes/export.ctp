<?php

// app/Views/Subscribers/export.ctp

foreach ($data as $row):
	foreach ($row['Cliente'] as &$cell):
		// Escape double quotation marks
		$cell = '"' . preg_replace('/"/','""',$cell) . '"';
	endforeach;
	echo implode(',', $row['Cliente']) . "\n";
endforeach;