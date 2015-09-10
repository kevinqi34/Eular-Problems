<?php 

echo 'LIST OF PYTHAGOREAN TRIPLES WITHIN BOUNDS<br>';
//specify the bounds for first side
for ($i = 1; $i < 1000; $i++) {
        $a = $i * $i;
  
 
  
  
  //specify the bounds for second side
  for ($n = $i + 1;$n < 1000;$n++) {
      
     $b = $n * $n;
      
     //find the third side
      
     $c = sqrt($a + $b);
     
     
      if (strpos($c,'.') == false) {
      	
    		
    		//for easy readability display on html page
    		
    		echo '<' . $i . ',' . $n . ',' . $c . '><br>';
    		
    	
    	
				if (($i + $n + $c) == 1000 ) {
					
				 echo ' Result::: <' . $i . ',' . $n . ',' . $c . '><br>';
					
					
					$product  = $i * $n * $c;
					
					echo 'Product is ' . $product;
					
				  exit;	
    
    
					
					}    	

    		
		}

}
}

?>
