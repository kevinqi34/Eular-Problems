<?php 



echo 'LIST OF PYTHAGOREAN TRIPLES WITHIN BOUNDS';


for ($i = 1; $i < 1000; $i++) {
        $a = $i * $i;
  
  // echo $a .'<br>'; 
  
  
  
  for ($n = $i + 1;$n < 1000;$n++) {
      
     $b = $n * $n;
      
      //  echo $a + $b . '<br>';
      
     $c = sqrt($a + $b);
     
     

      if (strpos($c,'.') == false) {
      	
    		
    		
    		
    	//	echo ' <' . $i . ',' . $n . ',' . $c . '> ,';
    		
    	
    	
				if (($i + $n + $c) == 1000 ) {
					
				 echo ' Result::: <' . $i . ',' . $n . ',' . $c . '> ,';
					
					
					$product  = $i * $n * $c;
					
					echo 'Product is ' . $product;
					
					
					
					}    	
    	
    	
    	
    	
    	
    	
    		
    		
    		
    		
    		
    		
		}
      
    
  
  
 
  
  
  
  
  
}













}








?>