<?php
	header('Content-type: text/css; charset: UTF-8');
?>

html, body {
  margin: 0;
  font-family: Helvetica;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #368CB5;
  color: #000000;
}

.topnav a.active {
  background-color: #368CB5;
  color: white;
}

.bar{
    width: 100%;
    background: #fff;
    height: 3px;
    margin-bottom: 5px;
}

.topnav .icon {
  color: #654654;
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    width: 30px;
    height: 20px;
    float: right;
    display: block;
    color: #ffffff;
  }
  .topnav.responsive .icon {
    position: absolute;
    width: 30px;
    height: 20px;
    right: 0;
    top: 0;
    color: #ffffff;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .icon {
  width: 48px;
  height: 48px;
  color: #654654;
  padding-bottom: 3px;
  color: #ffffff;
}
}

form[class=disaster_form] {
	padding-left: 5%;
	padding-right: 5%;
	width: 90%;
	height: auto;
}

label {
	font-size: 15px;
}
div [class=form]{
	float: left;
	width: 100%;
	height: 100%;
}

input{
	margin-bottom: 8px;
	margin-top: 2px;
	width: 100%;
	height: 25px;
	font-size: 15px;
	font: Helvetica;
}