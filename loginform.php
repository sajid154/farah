<html>
<body>
<form method= "post" action="">
    User Name: <input type="text" name ="name"/>
    <br/> 
    Email:     <input type="text" name ="email"/>
    <br/>
    Password:  <input type="text" name="password"/>
    <br/>
    <input type ="submit" name ="submit" value="login"/>
</form>
</body>
</html>
<?php 
$baseUrl="http://localhost/blog/"; 
 //$slug=$row['articleSlug']; 
  //$articleIdc=$row['articleId']; 


?>             

     <p><strong>Share </strong></p>
              <ul>
                  
                <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $baseUrl.$slug; ?>"> <img src="https://pngimg.com/uploads/facebook_logos/facebook_logos_PNG19764.png"width="50"height="100" > 
                
                <a target="_blank" href="http://twitter.com/share?text=Visit the link &url=<?php echo $baseUrl.$slug; ?>&hashtags=blog,technosmarter,programming,tutorials,codes,examples,language,development">
 <img src="https://www.pngall.com/wp-content/uploads/2016/07/Twitter-Free-PNG-Image.png"width="40"height="80" >
               
                <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $baseUrl.$slug; ?>"> <img src="https://www.freepnglogos.com/uploads/linkedin-in-logo-png-1.png"width="40"height="80" >
                
</ul>
