<?php
  extract($_POST);
  if(isset($submit))
  {
	            

	 $con = mysql_connect("localhost:3306","amity_chroma2018","Amity@2017");
	  if($con)
	  {
		
		  mysql_select_db("amityaump_chroma2018");
		  $insqry = "INSERT INTO event_register(name,email,phone1,phone2,college,aadhaar,events,branch) VALUES('$name', '$email', '$phone1', '$phone2', '$college' , '$Aadhaar','$events','$branch')";
		  $insert = mysql_query($insqry);
		  
		  if($insert && $paymentmethod == "offline")
		  {
			
             


                
				 header("Location: http://amityaump.com/paytm.html");
				
	      
 
       
			
		  }  
      
          if($paymentmethod == "online")
		  {
         
             
                   
		 
      
               

               header("Location: https://www.payumoney.com/paybypayumoney/#/439E675739BFC25DF8108B983385FA48");
              

               
 
			 
                  }
			
	  }
	  else{
		  echo "CONNECTION ERROR !!!";
	  }
  }
?>
