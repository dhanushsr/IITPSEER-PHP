<?php ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>menu - header</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href='//fonts.googleapis.com/css?family=Abel|Lato:100,300,400,700,900|Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' rel='stylesheet' type='text/css'>
  
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      html,
body {
  background: #FFF;
  color: #444;
  font-family: 'Lato', sans-serif;
  margin: 0 auto;
  overflow-X: hidden;
  overflow-Y: auto;
  padding: 0;
}

a {
  color: inherit;
  text-decoration: none;
}

a:hover {
  color: #FF5959;
}

ul,
li {
  list-style-type: none;
  margin: 0 auto;
  padding: 0;
}

ul li {
  display: inline-block;
}

header,
section,
.container,
.box {
  margin: 0;
  overflow: hidden;
  padding: 0;
  position: relative;
}

header {
  background: #FFF;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.35);
  height: 60px;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  width: initial;
  z-index: 9;
  -webkit-transform: matrix(1, 0, 0, 1, 0, 0);
  -moz-transform: matrix(1, 0, 0, 1, 0, 0);
  transform: matrix(1, 0, 0, 1, 0, 0);
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

html.active header {
  -webkit-transform: matrix(1, 0, 0, 1, -320, 0);
  -moz-transform: matrix(1, 0, 0, 1, -320, 0);
  transform: matrix(1, 0, 0, 1, -320, 0);
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

header .box {
  display: none;
  height: 40px;
  line-height: 40px;
  margin: 0 80px;
  padding: 10px;
}

header .box > ul {
  display: flex;
}

header .box > ul li {
  font-size: 12px;
  font-weight: bold;
  text-transform: uppercase;
}

#overlay {  
  background: #000;
  bottom: 0;
  height: 100%;
  left: 0;
  opacity: 0;
  overflow: hidden;
  position: fixed;
  right: 0;
  top: 0;
  visibility: hidden;
  width: 100%;
  z-index: 99;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

html.active #overlay {
  opacity: .65;
  visibility: visible;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

#home,
.logo > a {
  border-radius: 8px;
  box-shadow: inset 0 0 0 2px #FFF, inset 0 0 0 3px #FF5959;
  color: #FF5959;
  display: block;
  font-size: 32px;
  height: 36px;
  left: 0;
  line-height: 36px;
  margin: 10px 20px 10px 30px;
  overflow: hidden;
  padding: 2px;
  position: fixed;
  text-align: center;
  top: 0;
  width: 36px;
}

.logo {
  font-size: 32px;
  height: 40px;
  line-height: 40px;
  margin: 0 auto;
  overflow: hidden;
  padding: 10px;
  position: relative;
  width: initial;
}

.logo > a {
  display: inline-block;
  margin: 0 auto 0 10px;
  position: relative;
}

.sign-up {
  background: #FF5959;
  border: 1px solid #FF5959;
  color: #FFF;
  font-family: 'Abel', sans-serif;
  font-size: 16px;
  font-weight: bold;
  height: 40px;
  letter-spacing: 1px;
  line-height: 40px;
  margin: 10px;
  overflow: hidden;
  padding: 0;
  position: relative;
  text-align: center;
}

.sign-up:hover {
  background: #FFF;
}

.sign-up a {
  display: block;
}

.sign-up span {
  margin: 0 auto 0 8px;
}

#close-menu {
  border: 1px solid;
  border-radius: 20px;
  color: #333;
  cursor: pointer;
  display: block;
  height: 20px;
  line-height: 20px;
  margin: 15px 20px 15px auto;
  padding: 4px;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 20px;
}

section {
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
  z-index: 2;
  -webkit-transform: matrix(1, 0, 0, 1, 0, 0);
  -moz-transform: matrix(1, 0, 0, 1, 0, 0);
  transform: matrix(1, 0, 0, 1, 0, 0);
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

#intro {
  background-image: url('https://goo.gl/BlNbJE');
}

#portfolio {
  background-image: url('https://goo.gl/Uwkg0I');
}

#blog {
  background-image: url('https://goo.gl/Wy3PSL');
}

html.active,
html.active body {
  overflow: hidden;
}

html.active section {
  -webkit-transform: matrix(1, 0, 0, 1, -320, 0);
  -moz-transform: matrix(1, 0, 0, 1, -320, 0);
  transform: matrix(1, 0, 0, 1, -320, 0);
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

section > h1 {
  color: #FFF;
  font-size: 2em;
  left: 0;
  margin: 0 10%;
  position: absolute;
  right: 0;
  text-align: center;
  text-transform: uppercase;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  transform: translateY(-50%);
}

section > h1 > span {
  display: block;
  font-family: 'Cabin', cursive;
  font-size: 16px;
  font-style: italic;
  font-weight: 400;
  text-transform: none;
}

menu {
  background: #FFF;
  bottom: 0;
  margin: 0;
  padding: 0;
  position: fixed;
  right: -320px;
  top: 0;
  width: 320px;
  z-index: 1;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

menu .container {
  height: 100%;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
  width: 258px;
  -webkit-transform-origin: 0% 50% 0px;
  -moz-transform-origin: 0% 50% 0px;
  transform-origin: 0% 50% 0px;
  -webkit-transform: matrix(0.8, 0, 0, 0.9, 40, 0);
  -moz-transform: matrix(0.8, 0, 0, 0.9, 40, 0);
  transform: matrix(0.8, 0, 0, 0.9, 40, 0);
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

menu .container .box {
  border-top: 3px solid;
  height: calc(100% - 33px);
  overflow: visible;
  overflow-Y: scroll;
  padding: 0 17px 30px 0;
  position: relative;
  width: 275px;
}

menu .box ul:nth-child(1) {
  border-bottom: 3px solid;
}

menu .box ul {
  padding: 10px 0;
}

menu ul li {
  border-bottom: 1px solid #EDEDED;
  display: block;
  font-size: 13px;
  font-weight: bold;
  height: 39px;
  letter-spacing: 0.12em;
  line-height: 39px;
  text-transform: uppercase;
}

menu ul:nth-child(2) li {
  font-size: 10px;
}

menu ul:nth-child(2) li:last-child {
  border-bottom: 1px solid #EDEDED;
}

menu ul:nth-child(3) li {
  border: 0;
  display: inline-block;
}

menu ul:nth-child(3) li > a {
  border: 1px solid;
  border-radius: 100%;
  color: #898989;
  display: block;
  font-size: 22px;
  height: 24px;
  line-height: 24px;
  margin: 2px 4px;
  padding: 5px;
  text-align: center;
  width: 24px;
}

menu ul li:last-child {
  border: 0;
}

html.active menu {
  right: 0;
  z-index: 999;
}

html.active menu .container {
  -webkit-transform-origin: 0% 50% 0px;
  -moz-transform-origin: 0% 50% 0px;
  transform-origin: 0% 50% 0px;
  -webkit-transform: matrix(1, 0, 0, 1, 0, 0);
  -moz-transform: matrix(1, 0, 0, 1, 0, 0);
  transform: matrix(1, 0, 0, 1, 0, 0);
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

#menu {
  cursor: pointer;
  display: block;
  font-size: 30px;
  height: 40px;
  line-height: 40px;
  margin: 10px 20px;
  position: fixed;
  right: 0;
  text-align: center;
  top: 0;
  width: 40px;
}

@media only screen and (min-width: 520px) {
  header .container {
    max-width: 640px
  }
  header .box {
    display: block;
  }
  section > h1 {
    font-size: 3em
  }
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <header>
  <div class="container">
    <span id="home"><span class="ion-camera"></span></span>
    <div class="box">
      <ul>
        <li><a href="#">portfolio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</header>

</body>

</html>
