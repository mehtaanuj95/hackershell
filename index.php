<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Web Security Solutions</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<script src="scripts/main.js"></script>
</head>
<body onload="DrawCaptcha();">
<div class="wrapper row1 ">
  <header id="header" class="clear">
    <div id="hgroup">
	<h1>Hacker_sHell</h1>
      <h2>Web Security Solutions</h2>
    </div>
    <nav>
      <ul>
        <li><a href="index.php ?>">Home</a></li>
		<li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="article.php">Articles</a></li>
        <li><a href="#">Implementations</a></li>
		<li  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</li>
        <li class="last" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</li>
		
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <section id="slider" class="clear">
      <figure><img src="images/front.jpeg" alt="">
        <figcaption>
          <h2>Information is eternal...!</h2>
          <p>This website is a one stop solution to information related to Web Security. We provide services like Domain and Network infrastructure scanning, data encryption, steagnography and API's for OPT and Recaptcha. <br/>We also have a large list of articles on attacks that you can read to gain upper hand against perpetrators...!</p>
        </figcaption>
      </figure>
    </section>
    <!-- content body -->
    <div id="content">
      <!-- main content -->
      <section>
        <article>
        	<h2>Importance of Web Security</h2>
        	<p>The concept of security applies to all information. Security relates to the protection of valuable assets against loss, disclosure, or damage. Valuable assets are the data or information recorded, processed, stored, shared, transmitted, or retrieved from an electronic medium. The data or information must be protected against harm from threats that will lead to its loss, inaccessibility, alteration or wrongful disclosure.<br/>By this website, we aim to provide a secure system which could be used in websites or which could be used to gain information about various threats and vulnerabilities or information regarding domain or network infrastructure.
		</p>
        </article>
      </section>
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <section id="services" class="last clear">
        <!-- article 1 -->
        <article class="one_third">
          <h2>Chel's Encryption Algorithm</h2>
          <img src="images/demo/ac.jpg" alt="Abhishek Chelawat">
          <p>This encryption technique designed by Abhishek Chelawat encrypts the filel by changing the ascii value of every character that occurs in a file by doing mathematical operations on them. Similarly, decryption is carried by passing the same file over the decrypt function. This function is mathematically the inverse function of our encryption function except that it....</p>
          <footer class="more"><a href="encryption.html">Read More &raquo;</a></footer>
        </article>
        <!-- article 2 -->
        <article class="one_third lastbox">
          <h2>Another articler</h2>
          <img src="images/demo/anuj.jpg" alt="Anuj Bhai Mehta">
          <p>This encryption technique designed by Abhishek Chelawat encrypts the filel by changing the ascii value of every character that occurs in a file by doing mathematical operations on them. Similarly, decryption is carried by passing the same file over the decrypt function. This function is mathematically the inverse function of our encryption function except that it....</p>
          <footer class="more"><a href="#">Read More &raquo;</a></footer>
        </article>
      </section>
    </div>
    <!-- right column -->
    <aside id="right_column">
      <h2 class="title">Web Articles</h2>
      <nav>
        <ul>
          <li><a href="#">Bey's Encryption Algorithm</a></li>
          <li><a href="#">Denial of Service Attacks</a></li>
          <li><a href="steagonography.html">Steagnography</a></li>
          <li><a href="#">nslookup Scan</a></li>
          <li class="last"><a href="#">robots.txt</a></li>
        </ul>
      </nav>
      <!-- /nav -->
      <h2 class="title">Get In Contact</h2>
      <section class="last">
        <address>
        Web Security Solutions Team<br>
        B1 Batch, 3rd Year<br>
        CSE Dept, SGSITS<br>
        Indore, India<br>
        452001<br>
        <br>
        Tel: +91-123456789<br>
        Email: <a href="#">mehta.anuj2309@gmail.com</a>
        </address>
      </section>
      <!-- /section -->
    </aside>
    <!-- / content body -->
  </div>
</div>
<!-- footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; Abhishek Chelawat, Anuj Mehta, Anuj Dubey  <a href="#"></a></p>
    
  </footer>
</div>

<div id="id01" class="modal" >
  
  <form class="modal-content animate" action="">
    
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<div id="id02" class="modal1">
  
  <form class="modal-content animate" name="f2" action="article.php" method="POST" onsubmit="return validate();">

    <div class="container">
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="reg_name" required>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="reg_username" required>
	  
	  <label><b>Set Password</b></label>
      <input type="password" id="pass_check_1"  placeholder="Password" name="reg_password" required>
	  
	  <label><b>Retype Password</b></label>
      <input type="password" id="pass_verify_1" placeholder="Retype Password" name="reg_retype" required>
	  
	  <label><b>Mobile</b></label>
      <input type="text" placeholder="Mobile No" name="reg_mobile" required>
	  
	  <label>Email<b></b></label>
      <input type="text" placeholder="Email ID" name="reg_email" required>
      	<table>
        <tr>
            <td>
                Enter the text shown on image <br/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" id="txtCaptcha" 
                    style="background-image:url(images/demo/f.jpg); text-align:center; border:none;
                    font-weight:bold; height:40px; width:240px; font-size:30px; font-family:verdana" />
                <input type="button" id="btnrefresh" value="Refresh" onclick="DrawCaptcha();" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" id="txtInput"/>    
            </td>
        </tr>
      </table>  
      <button type="submit" onclick="return validate();">Register</button>
   
    </div>
<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

  
</script>
</body>
</html>
