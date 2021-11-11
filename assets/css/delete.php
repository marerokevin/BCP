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

.div[name=form]{
  height:500px;
  width:100%;
  padding-left:16px;
  padding-right:16px;
}

input[name=user_section], input[name=user_department], input[name=user_fname], input[name=user_eid], input[type=date] {
  width: 100%;
  border-color: #939393;
  border-style: solid;
  border-width: 0.5px;
  font-family: Helvetica;
  font-size: 13px;
  padding: 10px;
  margin: 5px 5px 22px 0;
  display: inline-block;
  border: none;
  background: #D1D1D1;
}

.flex-container{
  display: flex;
  align-item: center;
  background-color: #ffffff;
}
.flex-container > div {
  background-color: #ffffff;
  font-size: 13px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 4px;
  padding-right: 4px;
  margin: 5px 0 5px 0;
  width: 33%;
}

div[class=flex-item-left]{
  margin-left: 4px;
}

input[name=bcp_yes], input[name=bcp_no], input[name=bcp_info] {
  width: 100%;
  font-size:20px;
  padding: 10px;
  font-size: 13px;
  margin: 5px 5px 5px 0;
  display: inline-block;
  border: none;
  background: #D1D1D1;
}


input[type=text]:focus {
  background-color: #ddd;
  border-color: #939393;
  border-style: solid;
  border-width: 0.5px;
  outline: none;
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
  padding: 6px 6px;
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
  background: rgb(230, 2, 2); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(230, 2, 2) 0%, rgb(108, 1, 1) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(230, 2, 2)), color-stop(100%,rgb(108, 1, 1))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
}

a[type=button]:hover{
  opacity:1;
  background: rgb(230, 2, 2); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(230, 2, 2) 0%, rgb(108, 1, 1) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(230, 2, 2)), color-stop(100%,rgb(108, 1, 1))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(230, 2, 2) 0%,rgb(108, 1, 1) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
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