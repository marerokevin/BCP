<?php
	header('Content-type: text/css; charset: UTF-8');
?>
html { 
	margin: 0;
  	padding: 0;
	width: 100%;
	height:100%;
	font-size: 16px;
	align-items: center;
	align-content: center;
	font-family: Helvetica;
	background: #f0f2f5;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}
body {
  width: 50%;
  margin-top: 99px;
  font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.closebtn-error {
  background-color: #ab0341;
  color: white;
  margin-top: 30px;
  padding-top: 15px;
  padding-bottom: 15px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.closebtn-success {
  background-color: #04AA6D;
  color: white;
  margin-top: 30px;
  padding-top: 15px;
  padding-bottom: 15px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

div [class=alert-success] {
	width: 100%;
	height: 43px;
	border: 1px solid #a6a6a6;
	border-radius: 3px;
  margin-right: 3px;
	padding-left: 9px;
  margin-bottom: 15px;
	color: #000000;
	background: #fcfcfc;
  align-item: center;
}

div [class=alert-danger] {
	width: 100%;
	height: 43px;
	border: 1px solid #a6a6a6;
	border-radius: 3px;
  margin-right: 3px;
	padding-left: 9px;
  margin-bottom: 15px;
	color: #000000;
	background: #fcfcfc;
  align-item: center;
}

input, select {
	width: 100%;
	height: 43px;
	border: 1px solid #a6a6a6;
	border-radius: 3px;
  margin-right: 3px;
	padding-left: 9px;
  margin-bottom: 15px;
	color: #000000;
	background: #fcfcfc;
  align-item: center;
}

select {
  margin-bottom: 15px;
}

label {
  padding-top: 10px;
  font-family: Helvetica;
  font-size: 1.2rem;
  text-align: left;
}

h1 {
	text-align: center;
}



form {
  padding-left: 8rem;
  padding-right: 8rem;
  width: 100%;
	height:100%;
  align-items: center;
	align-content: center;
}

button:hover {
  opacity:1;
}

/* Register Button */
.reg-btn {
	color:#fff;
	font-size:20px;
	border: 1px solid #a6a6a6;
	width: 110px;
	height: 43px;
	border-radius: 30px;
	margin-top: 3px;
	margin-right: 3px;
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

.reg-btn:hover{
  background: rgb(29,94,124); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(29,94,124) 0%, rgb(29,94,124) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(29,94,124)), color-stop(100%,rgb(29,94,124))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-9 */
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

@media (max-width: 640px) {
  body {
  width: 100%;
  margin-top: 99px;
  font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
}