<?php
	header('Content-type: text/css; charset: UTF-8');
?>

html, body {
  margin: 0;
  background: #f0f2f5;
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
	height: 30px;
	font: Helvetica;
	font-size: 15px;
	border-radius: 5px;
	border: 1px solid #8a8b8c;
	border-radius: 3px;
	margin-top: 5px;
  	margin-right: 3px;
	padding-left: 9px;
	color: #000000;
	background: #fcfcfc;
	outline: none;
}

input:focus{
	box-shadow: 0 0 10px rgba(14,105,249, 1); 
	border: 1px #9af4f4	 solid ;
	border-radius: 3px;
}

input:hover{
	box-shadow: 0 0 10px rgba(14,105,249, .5); 
	border: 1px #9af4f4	 solid ;
	border-radius: 3px;
}

.btn-primary {
	color:#fff;
	font-size:20px;
	border: 1px solid #a6a6a6;
	width: 101%;
	height: 43px;
	border-radius: 6px;
	margin-top: 3px;
	margin-right: 6px;
	outline: none;
	background: #166fe5; /* Old browsers */
	background: -moz-linear-gradient(top,  #166fe5 0%, rgb(42,109,140) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#166fe5), color-stop(100%,rgb(42,109,140))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #166fe5 0%,rgb(42,109,140) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #166fe5 0%,rgb(42,109,140) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #166fe5 0%,rgb(42,109,140) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #166fe5 0%,rgb(42,109,140) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
}


.btn-primary:hover {
	color:#fff;
	font-size:20px;
	border: 1px solid #a6a6a6;
	width: 101%;
	height: 43px;
	border-radius: 6px;
	margin-top: 3px;
	margin-right: 6px;
	outline: none;
	background:#124d9b; /* Old browsers */
	background: -moz-linear-gradient(top,  #124d9b 0%, #124d9b 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#124d9b), color-stop(100%,#124d9b)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #124d9b 0%,#124d9b 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #124d9b 0%, #124d9b 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #124d9b 0%, #124d9b 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #124d9b 0%, #124d9b 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-9 */
}

.start-grid, .end-grid {
	display: grid;
	grid-template-columns: 48% 48%;
	grid-gap: 4%;
	background-color: transparent;
}

.start-date, .end-date {
	width: 95%;
}
.start-hour, .end-hour {
	width: 95%;
}
.start-minute, .end-minute {
	width: 95%;
}
.start-meridiem, .end-meridiem {
	width: 95%;
}
