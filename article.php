<?php
  $link = mysqli_connect("localhost", "root", "password", "hackershell");
  if($link === false)
  {
    //die("ERROR: Could not connect. " . mysqli_connect_error());
    echo "Could not connect to database";
    // Attempt insert query execution
    
  }
  else
  {
    echo nl2br("Connected successfully\n");
    echo "Host info: " . mysqli_get_host_info($link);
    if(isset($_POST["reg_name"]))
    {
      $name = $_POST['reg_name'];

      //$name = mysql_real_escape_string($name);
      $password = $_POST['reg_password'];
      //$password = mysql_real_escape_string($password);
      $email = $_POST['reg_email'];
      //$email = mysql_real_escape_string($email);
      $sql = "INSERT INTO users (name, email, password) VALUES ('".$name."', '".$email."', '".$password."')";
      if(mysqli_query($link, $sql))
      {
        echo "<br>Records inserted successfully.<br>";
      }
      else
      {
        echo "<br>ERROR: Could not able to execute $sql. " . mysqli_error($link)."<br>";
      }
    }
    if(isset($_POST["heading"]))
    {
      $name = $_POST['name'];

      //$name = mysql_real_escape_string($name);
      $email = $_POST['email'];
      //$password = mysql_real_escape_string($password);
      $heading = $_POST['heading'];
      $data = $_POST['article'];
      //$email = mysql_real_escape_string($email);
      $sql = "INSERT INTO article (heading, data, author) VALUES ('".$heading."', '".$data."', '".$name."')";
      if(mysqli_query($link, $sql))
      {
        echo "<br>Records inserted successfully.<br>";
      }
      else
      {
        echo "<br>ERROR: Could not able to execute $sql. " . mysqli_error($link)."<br>";
      }
    }

    
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Steagonography</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">WSS</a></h1>
      <h2>Web Security Solutions</h2>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="article.php">Articles</a></li>
        <li class="last"><a href="#">Implememtations</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div id="container">
  <!-- content body -->
  <h2>Welcome to Our Community.</h2><br>
    <p> As it is righly said: </p>
      <blockquote>
          In vain have you acquired knowledge
          if you have not imparted it to others.
      </blockquote>
      <p>We urge you to not only read articlces, but also share the things that you have learnt so that others may benigit from them</p>
      <button type="button" onclick="document.getElementById('id_article_form').style.display='block'" style="width:auto;">Click here to Upload Article</button> <hr>
   	<section id="form_article" >
        <!-- article 1 -->

      <div id="id_article_form" class="modal1">

        <form class="modal-content animate" method="POST" name="article_form_name" action="" onsubmit="return validate();">
          <div class="container">
            Name: <br>
            <input type="text" name="name" id="name" style="width:70%"><br>
            Email: <br>
            <input type="text" name="email" id="email" style="width:70%"><br>
            Your Article's Heading:<br>
            <input type="text" name="heading" id="heading" style="width:70%"><br>
            Please Enter your Article here:<br> <textarea name="article" id="art1" cols="40" rows="8"></textarea><br>
            <button type="submit" style="width:100px;" name="submit" onclick="addarticle();">Submit</button>
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id_article_form').style.display='none'" class="cancelbtn">Cancel</button>
        
          </div>
        </form>
      </div>

        <!-- article 3 -->
        
   	</section>

  <!-- right column -->
  <aside id="right_column">
    <h2 class="title">Site Navigation</h2>
    <nav>
      <ul>
        <li><a href="#">Current Page</a></li>
        <li><a href="#">Current Page</a>
          <ul>
            <li><a href="#">Current Page</a></li>
            <li><a href="#">Current Page</a></li>
          </ul>
        </li>
        <li><a href="#">Current Page</a>
          <ul>
            <li><a href="#">Current Page</a></li>
            <li><a href="#">Current Page</a>
              <ul>
                <li><a href="#">Current Page</a></li>
                <li><a href="#">Current Page</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Current Page</a></li>
      </ul>
    </nav>
    <h2 class="title">Current Page</h2>
    <section>
      <!-- article 1 -->
      <article>
        <h2>Post Title</h2>
        <address>
        jabalpur, India
        </address>
        <time >Thursday, 16<sup>th</sup> Feburary 2017 @08:15:00</time>
        <p>This is a random text. It will be replaced by something when my brain starts working. I guess 9 hrs of continuous coding is sufficient for a human in one night.</p>
      </article>
      <!-- article 2 -->
      <article>
        <h2>Post Title</h2>
        <address>
        jabalpur, India
        </address>
        <time >Thursday, 16<sup>th</sup> Feburary 2017 @08:15:00</time>
        <p>This is a random text. It will be replaced by something when my brain starts working. I guess 9 hrs of continuous coding is sufficient for a human in one night.</p>
      </article>
      <!-- / articles -->
    </section>
  </aside>


  <section id="services" >
        <!-- article 1 -->
        <article class="one_third">
          <h2>Chel's Encryption Algorithm</h2>
          <img src="images/demo/anuj.jpg" alt="" style="float: left; width: 80px; height: 80px;
    margin: 0 10px 10px 0; padding: 4px; border: 1px solid #DEDEDE;">
          <p>This encryption technique designed by Abhishek Chelawat encrypts the filel by changing the ascii value of every character that occurs in a file by doing mathematical operations on them. Similarly, decryption is carried by passing the same file over the decrypt function. This function is mathematically the inverse function of our encryption function except that it....</p>
          <footer class="more"><a href="#">Read More &raquo;</a></footer>
        </article>
        <!-- article 2 -->
        <article class="one_third">
          <h2>Chel's Encryption Algorithm</h2>
          <img src="images/demo/anuj.jpg" alt="" style="float: left; width: 80px; height: 80px;
    margin: 0 10px 10px 0; padding: 4px; border: 1px solid #DEDEDE;">
          <p>This encryption technique designed by Abhishek Chelawat encrypts the filel by changing the ascii value of every character that occurs in a file by doing mathematical operations on them. Similarly, decryption is carried by passing the same file over the decrypt function. This function is mathematically the inverse function of our encryption function except that it....</p>
          <footer class="more"><a href="#">Read More &raquo;</a></footer>
        </article>
        <!-- article 3 -->
   	</section>

  <!-- / content body -->
  <div class="clear"></div>
</div>

<!-- footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; Abhishek Chelawat, Anuj Mehta, Anuj Dubey  <a href="#"></a></p>
  </footer>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function()
{
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
   img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

function addarticle()
{
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var heading = document.getElementById('heading').value;
	var article = document.getElementById('art1').value;
	console.log(name);
	console.log(email);
	console.log(heading);
	console.log(article);

	var dh2 = document.createElement("h2");
	var  dh2_text = document.createTextNode(heading);
	dh2.appendChild(dh2_text);

	var dimg = document.createElement("img");
	dh2.className += "one_third";
	dimg.setAttribute("src", "images/demo/anuj.jpg"); dimg.setAttribute("src", "images/demo/anuj.jpg");
	dimg.style.float = "left"; dimg.style.width = "80px"; dimg.style.height = "80px"; 
	dimg.style.margin = "0 10px 10px 0"; dimg.style.padding = "4px"; dimg.style.border = "1px solid #DEDEDE"; 
	
	var dp = document.createElement("p");
	var  dp_text = document.createTextNode(article);
	dp.appendChild(dp_text);

	var dfooter = document.createElement("footer");
	dh2.className += "more";

	var da = document.createElement("a");
	da.href = "#";
	var  da_text = document.createTextNode("read More &raquo;");
	dp.appendChild(da);

	var darticle = document.createElement("article");
	darticle.className += "one_third";
	darticle.appendChild(dh2); darticle.appendChild(dimg); darticle.appendChild(dp);
	darticle.appendChild(dfooter);

	var services = document.getElementById('services');
	services.appendChild(darticle);


}
function addarticle2(data)
{
  console.log(data);
  console.log("Tghisdiu");
  /*
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var heading = document.getElementById('heading').value;
  var article = document.getElementById('art1').value;
  console.log(name);
  console.log(email);
  console.log(heading);
  console.log(article);

  var dh2 = document.createElement("h2");
  var  dh2_text = document.createTextNode(heading);
  dh2.appendChild(dh2_text);

  var dimg = document.createElement("img");
  dh2.className += "one_third";
  dimg.setAttribute("src", "images/demo/anuj.jpg"); dimg.setAttribute("src", "images/demo/anuj.jpg");
  dimg.style.float = "left"; dimg.style.width = "80px"; dimg.style.height = "80px"; 
  dimg.style.margin = "0 10px 10px 0"; dimg.style.padding = "4px"; dimg.style.border = "1px solid #DEDEDE"; 
  
  var dp = document.createElement("p");
  var  dp_text = document.createTextNode(article);
  dp.appendChild(dp_text);

  var dfooter = document.createElement("footer");
  dh2.className += "more";

  var da = document.createElement("a");
  da.href = "#";
  var  da_text = document.createTextNode("read More &raquo;");
  dp.appendChild(da);

  var darticle = document.createElement("article");
  darticle.className += "one_third";
  darticle.appendChild(dh2); darticle.appendChild(dimg); darticle.appendChild(dp);
  darticle.appendChild(dfooter);

  var services = document.getElementById('services');
  services.appendChild(darticle);

*/
}
var modal = document.getElementById('id_article_form');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
<?php
//Fetching records from database and displaying it on screen.
    $sql = "SELECT * FROM article";
    if($result = mysqli_query($link, $sql))
    {
      echo "<br>";
      if(mysqli_num_rows($result) > 0)
      {
        while($row = mysqli_fetch_array($result))
        {
          print_r($row);
          echo "<br>";
          echo $row['data'];
          echo "<br>";
          ?>
          <script>
            var name = '<?=$row["author"]?>';
            var email = "abc@abcabc";
            var heading = '<?= $row['heading']; ?>';
            var article = '<?= $row['data']; ?>';
            console.log(name);
            console.log(email);
            console.log(heading);
            console.log(article);

            var dh2 = document.createElement("h2");
            var  dh2_text = document.createTextNode(heading);
            dh2.appendChild(dh2_text);

            var dimg = document.createElement("img");
            dh2.className += "one_third";
            dimg.setAttribute("src", "images/demo/anuj.jpg"); dimg.setAttribute("src", "images/demo/anuj.jpg");
            dimg.style.float = "left"; dimg.style.width = "80px"; dimg.style.height = "80px"; 
            dimg.style.margin = "0 10px 10px 0"; dimg.style.padding = "4px"; dimg.style.border = "1px solid #DEDEDE"; 
            
            var dp = document.createElement("p");
            var  dp_text = document.createTextNode(article);
            dp.appendChild(dp_text);

            var dfooter = document.createElement("footer");
            dh2.className += "more";

            var da = document.createElement("a");
            da.href = "#";
            var  da_text = document.createTextNode("read More &raquo;");
            dp.appendChild(da);

            var darticle = document.createElement("article");
            darticle.className += "one_third";
            darticle.appendChild(dh2); darticle.appendChild(dimg); darticle.appendChild(dp);
            darticle.appendChild(dfooter);

            var services = document.getElementById('services');
            services.appendChild(darticle);

          </script>
          
          <?php
          //echo "<script> addarticle2('This is just a data');</script>";
        }
      }
      echo "<br>";
      print_r($result);
    }
?>