
<html>
<style>
h2{
  font-family: Century Gothic;
  color:#012169;
}
img{
  width:97%;
}

strong{
  color:Black;
  font-style: bold;
  font-family: Century Gothic;
  display: inline-block;
}

.s a{
display: none;
}
p{
  color:black;
  font-family: arial;
  text-align: left;
  padding-left: 10px;
}
#nono{
  display: none;
}
.column:hover{
background-color:;
}
img:hover{
  opacity: 0.7;
}
video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
  opacity: 0.5;
}
p{color:white;}
body{
  background-color: black;
}
.column:hover{
  color:black;
}
h2{
  color:powderblue;
}
h1{
  color:white;
}
.nav{
  list-style-type: none;
  margin:0;
  padding:0;
  overflow:hidden;

text-align:center;
}
.nav li{
  float:left;
  font-size:22px;
    background-color:#002868;

}
.nav li a{
  display:block;
  color :white;
  text-align: center;
  padding: 10px 41px;
  text-decoration: none;
    font-family: Century Gothic;
}
.nav li a:hover{
  background-color:#012169;
  color:#FF0000;

}
#LOGO{
  font-family: monospace;
}
#LOGO:hover{
  color:black;
  background-color:rgba(211,221,244,0.5);

}
.s{
  display: none;
}
@media screen and (max-width: 649px  ){
  .column{
    width:100%;
  }
.s{
  display: block;
}
#la{
  display: block;

}
.nav{
  display: none;
}

li{
  list-style-type: none;
}
#la{
color:white;

font-size: 30px;
text-align: center;
text-decoration:none;
width:100%;
display: block;
background-color: #00e868;
color:black;
}
span{
  display:block;
  font-size: 50px;
  text-align: center;
  cursor: pointer;
width:100%;
background-color: #002868;
color:white;
}
 #la{
font-family: century Gothic;
}
 #la:hover{
  background-color:#012169;
  color:#FF0000;
}
}
@media screen and (max-width: 900px) {
  .s{
    display: block;
  }


#la{
  display: block;

}
.nav{
  display: none;
}

li{
  list-style-type: none;
}
li #la{
color:white;

font-size: 30px;
text-align: center;
text-decoration:none;
width:100%;
display: block;
background-color: #00e868;
color:black;
}
span{
  display:block;
  font-size: 50px;
  text-align: center;
  cursor: pointer;
width:100%;
background-color: #002868;
color:white;
}
 #la{
font-family: century Gothic;
}
 #la:hover{
  background-color:#012169;
  color:#FF0000;
}
.column{
  width:100%;
}
    }
    video{
      opacity:0.2;
    }
    label{
      color:white;
    }
    h1{
      font-family:century gothic;
      color:white;
      font-size:50px;
    text-align: center;   }
    h2{
      color:powderblue;
      font-size:40px;
      text-align: center;
      font-family: Century Gothic;
    }
    h5{
      width:10%;
      height:7%;
      color:navy;
      background-color: #BBB;
      text-align: center;
      float:right;
      font-size:20px;
      font-family:monospace;


    }
@media screen and (max-width: 640px){
      h5{
        width:32%;
        height:4%;
        color:navy;
        background-color: #BBB;
        text-align: center;
        float:right;
        font-size:20px;
        font-family:monospace;
        padding-left: 2%;



      }
    }
h4{
  color:navy;
  font-size:40px;
  font-family:Century Gothic;
  padding-left: 1%;
}
strong{
  color:black;
}
p{
  color:brown;
  font-family:arial;
  padding-left: 1%;
font-size: 30px;}
  .post{
    background-color:#ccc;
  }

</style>
<ul class = "s">
<li><a id = "la" href="index.html">DEATH NOTE</a></li>
  <li><a id = "la" href="info.html">About Death Note </a></li>
  <li><a id = "la" href="char.html">Characters</a></li>
  <li><a id = "la" href="display.php">Discussion</a></li>
  <li><a id = "la" href="shop.html">Shop the Merch</a></li>
  <li><a id = "la" href ="contact.html">Contact Us </a></li>
</ul>

<ul class = "nav">
<li><b><a ID = "LOGO" href="index.html">Death Note</a></b></li>

<li><a href="info.html">About Death Note </a></li>
<li><a href="char.html">Characters</a></li>
<li><a href="display.php">Discussion</a></li>
<li><a href="shop.html">Shop the Merch</a></li>
<li><a href ="contact.html">Contact Us </a></li>
</ul>
<h1>Discussion Page</h1>
<h2>Posts</h2>
<a href = "dis.php">
<h5>Create A Post</h5>
</a>
<BR></BR>
<BR></BR>
<BR></BR>
<div class = "post">


<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "testing once again";
$conn = new mysqli($host, $username, $password, $db_name);

$query = "SELECT * FROM `sent`";

$result = $conn->query($query);
while($row = $result->fetch_assoc()) {

    if ($row["id"] ==10) {
        echo "<h4>By: <strong>";
        echo $row["name"];
        echo "</strong></h4>";
        echo "<p>";
        echo $row["message"];
        echo "</p>";
    }
    if ($row["id"] ==12) {
        echo "<h4>By: <strong>";
        echo $row["name"];
        echo "</strong></h4>";
        echo "<p>";
        echo $row["message"];
        echo "</p>";
    }
    if ($row["id"] ==13) {
        echo "<h4>By: <strong>";
        echo $row["name"];
        echo "</strong></h4>";
        echo "<p>";
        echo $row["message"];
        echo "</p>";
    }
    if ($row["id"] ==14) {
        echo "<h4>By: <strong>";
        echo $row["name"];
        echo "</strong></h4>";
        echo "<p>";
        echo $row["message"];
        echo "</p>";
    }
}
$conn->close();
?>
</div>
<video autoplay playsinline loop>
<source src="IMG/OP12.mp4" type="video/mp4">

</video>
</html>
