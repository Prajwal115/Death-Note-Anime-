<html>
<style>
form{
    text-align: center;
    font-size:20px;
    color:Blue;
    text-decoration: Bold;
    font-family: Calbri;
    margin:50px auto;
    width:600px;
    border-radius: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-top: 50px;
  }
  label{
    display: inline-block;
    width:580px;
    text-align:center;
    color:brown;
    font-size: 30px;
      padding-right:80px;
      padding-bottom: 60px;
      font-family:Century Gothic;
  }

  input{
    font-size:30px;
    font-family:arial;
    background: #BDBDBD;
    width:450px;
    vertical-align: top;
    color: black;
  }
textarea{
    font-size:30px;
    font-family:arial;
    background: #BDBDBD;
    width:450px;
    height:200px;
    color: black;
    vertical-align: top;

  }
  h3{
    color:black;
  text-align: center;
font-size: 45px;
font-family: Century Gothic;}
::placeholder{
  color:Brown;
  font-family: monospace;
  opacity: 0.5;
  font-size: 30px;
}
#submit:hover{
  color:white;
  background-color: black;
}

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
      opacity:0.5;
    }
    label{
      color:white;
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
<form class="" action="sent.php" method="POST">
  <label for "name"> Enter your Name
<input type = "text" id = "name" name = "blog" placeholder="Enter your Name">
</label>
  <label for "mes"> Enter your Message
<textarea type = "text" id = "text" name = "mes" placeholder="Enter your Message "></textarea>
</label>
<input type = "submit" id = "submit" name = "submit">
</form>
<video autoplay playsinline loop>
<source src="IMG/OP12.mp4" type="video/mp4">

</video>
</html>
