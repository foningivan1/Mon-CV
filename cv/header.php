'<?php 
  $nom = "junior Essono";
  $architecture = "Architecte logiciel / DevOps";
 
if(isset($_POST['mailform'])){

    $originaire = "originaire de l'ouest Cameroun";
$marié = "marié deux enfants - santé RAS";
$datenaiss = "née le 20 octobre 1986 a douala";
$resident = 'residant a Ndogbong';
$ville = 'Douala-cameroun';
$map = 'Map: 4.053276, 9.765047';
$num = '(237)  659003009';
$mobile = 'mobile,telegramme,whatsApp';
$email = 'junioressono@gmail.com';
$goog = 'Google+.Twitter,Linkedin,Github';
$header="MIME-Version: 1.0\r\n";
$header.='From:"foningivan"<ivanfoning1@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
   
		<div align="center">
        <p > ...........................</p> </br>
        <p > junior Essono </p> </br>
        <p > ...........................</p>
        <p> Architecte logiciel / DevOps </p>
        <p > originaire de l\'ouest cameroun </p> </br>
        <p >  marié deux enfants - santé RAS </p> </br>
        <p > née le 20 octobre 1986 a douala </p></br>
        <p > residant a Ndogbong </p></br>
	    <p >Douala-cameroun </p></br>
        <p >Map: 4.053276, 9.765047 </p></br>
        <p >(237)  659003009 </p></br>
        <p >(237) mobile,telegramme,whatsApp </p></br>
        <p >(237)  659003009 </p></br>
        <p >junioressono@gmail.com </p></br>
		</div>
	</body>
</html>
';

mail("ivanfoning1@gmail.com", "cv de foning yvan", $message, $header);
}
?>



<form method="POST" action="">
<div class="profile-text"> 
              
                <div class="row" style="position: relative;display: flex;">
                    <!-- <div class="imgBx">
                        <img src="img/i.jpg" alt="Rakib"> 
                    </div> -->
                    <div style="grid-template-rows: 1fr 1fr;">
                        <div class="search">
                            <div >
                                <img src="img/icons8_menu_50px_1.png"  class="menu" alt="">
                            </div>
                            <div >
                               <span style="color:#B9B9B9;">  <p style="margin-top: -6px;margin-left: 25px;">besoin d'un chef de projet  </p> </span> 
                               
                            </div>
                            <div style="width: 35px;">
                                <img src="img/icons8_search_50px.png" style="width: 25px;height: 25px;margin-left: 60px;margin-top: 15px;"  alt="">
                                
                            </div>
                            <div style="width: 5px;">
                               <p style="margin-left: 70px; margin-top: 15px;color: #b9b9b9;width: 5px;height: 30px;">
                                   |
                               </p>
                            </div>
                            <div  style="width: 50px;">
                                <img src="img/icons8_multiply_50px.png" style="width: 35px;height: 35px;margin-top: 9px;margin-left: 80px;" alt="">
                            </div>
                        </div>
                        <div style="margin-top: 60px;"></div>
                        <div class="round">
                             <div class="rounded">

                                <?php echo '<img src="img/esss.PNG"  style="border-radius: 90px;margin-top: 120px;margin-left: 20px;"  alt="">' ?>
                            
                            </div>
                              <div class="desc" style="margin-top: 160px;">
                                  <span style="color: white;font-size: 32px;"><STRong> <?php echo $nom ?>  </STRong></span><br>
                                  <span>
                                      <?php echo $architecture?>
                                    </span>
                              </div>
                              
                        </div>
                        <div  style="background-color: #e34856;width: 70px;height: 70px;margin-left: 80%;border-radius: 90px;margin-top: -15px;">
                            <span style="font-size: 17px;"><p style="color: white;margin-left: 23px;margin-top: -9px;font-size: 40px;">+</p></span> 
                            
                        </div>
                        <div name="mailform" type="submit" style="background-color: aqua;width: 50px;height: 50px;margin-left: 60%;border-radius: 90px;margin-top: -60px;" onClick="alert('cv envoyé');">
                           <img src="img/icons8_email_send_30px.png" style="margin-top:10px;margin-left:10px"   alt="">
                            
                        </div>
                        
                    </div> 
                    
                
                         
                </div> 
                
               
            </div>'
            </form>       