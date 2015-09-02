<?php

$hanoi = NULL;

$hanoi = function ($n,$x,$y,$z) use (&$hanoi) {
	
	if ($n==1)
	{
		echo "move No.".$n." from ".$x."-->".$z."<br>";  //如果n=1，则直接从X挪到Z上
		
	}else {
		
		 $hanoi($n-1,$x,$z,$y);                          //如果n>1  ,则把上面n-1个通过Z做中介，全部挪到Y上
		 
		 echo "move No.".$n." from ".$x."-->".$z."<br>"; //把第N个从X挪到Z上
		 
		 $hanoi($n-1,$y,$x,$z);                          //把n-1借助X从Y移到Z
	}

};

 $hanoi(10,"X","Y","Z");
 
 ?>