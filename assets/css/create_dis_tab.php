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



table {
  border-collapse: collapse;
  border-spacing: 0;
  padding-top: 4px;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

a[type=button]{
  outline:none;
  text-decoration: none;
  height: 30px;
  text-align: center;
  border-radius: 5px;
  background: #fff;
  padding-left: 14.5px;
  padding-right: 14.5px;
  padding-top: 6px;
  padding-bottom: 6px;
  border: 2px;
  border-color: #188700;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
	color:#fff;
  font-family: Helvetica;
	font-size:15px;
	width: 150px;
	outline: none;
  background: rgb(196, 184, 8); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(196, 184, 8) 0%, rgb(108, 97, 1) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(196, 184, 8)), color-stop(100%,rgb(108, 97, 1))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(196, 184, 8) 0%,rgb(108, 97, 1) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(196, 184, 8) 0%,rgb(108, 97, 1) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(196, 184, 8) 0%,rgb(108, 97, 1) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(196, 184, 8) 0%,rgb(108, 97, 1) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
}

a[type=button]:hover{
  color: #fff;
  opacity:1;
  background: rgb(108, 101, 0); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(108, 101, 0) 0%, rgb(45, 40, 0) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stoprgb(108, 101, 0)), color-stop(100%,rgb(45, 40, 0))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(108, 101, 0) 0%,rgb(45, 40, 0) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(108, 101, 0) 0%,rgb(45, 40, 0) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(108, 101, 0) 0%,rgb(45, 40, 0) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(108, 101, 0) 0%,rgb(45, 40, 0) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-9 */
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

signupbtn {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.btn-primary {
	color:#fff;
	font-size:20px;
	border: 1px solid #a6a6a6;
	width: 90px;
	height: 43px;
	border-radius: 30px;
	margin-top: 5px;
	margin-right: 6px;
	outline: none;
  background: rgb(54,140,181); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(54,140,181) 0%, rgb(42,109,140) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(54,140,181)), color-stop(100%,rgb(42,109,140))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(54,140,181) 0%,rgb(42,109,140) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(54,140,181) 0%,rgb(42,109,140) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(54,140,181) 0%,rgb(42,109,140) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(54,140,181) 0%,rgb(42,109,140) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

.btn-primary:hover{
  background: rgb(29,94,124); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(29,94,124) 0%, rgb(29,94,124) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(29,94,124)), color-stop(100%,rgb(29,94,124))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-9 */
}
  

@media (max-width: 640px) {

  h2[class=text-center] {
    font-size: 30px;
    text-align: center;
  }

  .flex-container{
    display: block;
    align-item: center;
    background-color: #ffffff;
  }
  .flex-container > div {
    background-color: #ffffff;
    font-size: 13px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 0px;
    padding-right: 0px;
    margin: 5px 0 5px 0;
    width: 100%;
  }
  td[name=user_fname], th[name=user_fname] {
    hidden;
    display: none;
  }
}