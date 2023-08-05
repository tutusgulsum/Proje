<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>

<body style="background-color:cadetblue;">
 <div >
   <p>
       <?php
         $kullanici =$_POST["Username"];
         $sifre =$_POST["Password"];
         if($kullanici && $sifre) 
           {
                    if($kullanici == "b125452156@sakarya.edu.tr" && $sifre=="b125452156")
                    {  
                        echo "HOŞGELDİNİZ ". $kullanici;
        
                    }
                    else  
                    {
                      header("location:login.php");    
        
                    }
            } 
         else 
         {
          header("location:login.php"); 
         }
?>
</p>

</div>


</body>
</html>
