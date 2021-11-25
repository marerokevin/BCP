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

div[class=table-total] {
  width:100%;
  height:100%;
}

div[class=table-hurdur] {
  width:100%;
  height:100%;
}

.topnav a:hover {
  background-color: #368CB5;
  color: black;
}

div[type=currenttime] {
  font-size:15px;
  padding: 7px;
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

.topnav a.active {
  width: 45px;
  height: 20px;
  background-color: #368CB5;
  color: white;
}

.icon {
  width: 48px;
  height: 48px;
  color: #654654;
  padding-bottom: 3px;
  color: #ffffff;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.bar{
    width: 100%;
    background: #fff;
    height: 3px;
    margin-bottom: 5px;
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
  .topnav-right {
  float: left;
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

  th[class=yes], .td[class=yes] {
    width:33%;
    font-family: Helvetica;
    font-size: 30px;
    color: #00ce0a;
    text-align: center;
  }
  th[class=no], .td[class=no] {
    width:33%;
    font-family: Helvetica;
    font-size: 30px;
    color: #e21402;
    text-align: center;
  }
  th[class=info], .td[class=info] {
    width:33%;
    font-family: Helvetica;
    font-size: 30px;
    color: #191919;
    text-align: center;
  }
}

table[class=total] {
  align-item: center;
  border-collapse: collapse;
  border-spacing: 0;
  padding-top: 4px;
  width: 100%;
  border: 1px solid #ddd;
}

h2 {
  text-align: center;
}

th[class=yes], td[class=yes] {
  width:33%;
  font-family: Helvetica;
  font-size: 60px;
  color: #00ce0a;
  text-align: center;
}
th[class=no], td[class=no] {
  width:33%;
  font-family: Helvetica;
  font-size: 60px;
  color: #e21402;
  text-align: center;
}
th[class=info], td[class=info] {
  width:33%;
  font-family: Helvetica;
  font-size: 60px;
  color: #191919;
  text-align: center;
}

table[class=perdept] {
  align-item: center;
  border-collapse: collapse;
  border-spacing: 0;
  padding-top: 4px;
  width: 100%;
  border: 1px solid #ddd;
}

th[class=depart], td[class=depart] {
  text-align: center;
  padding: 8px;
  width: 25%;
}
th[class=date], td[class=date] {
  text-align: center;
  padding: 8px;
  width: 25%;
}
th[class=yes_per], td[class=yes_per] {
  text-align: center;
  padding: 8px;
  width: 16.66%;
}
th[class=no_per], td[class=no_per] {
  text-align: center;
  padding: 8px;
  width: 16.66%;
}
th[class=info_per], td[class=info_per] {
  text-align: center;
  padding: 8px;
  width: 16.66%;
}

div[type=currenttime]{
  float: right;
  padding-right: 15px;
  font-family: Helvetica;
}

input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

form[type=post] {
  margin-right: 20px;
  margin-left: 20px;
  width: 100%;
  float: right;
}

div[type=date] {
  padding-top: 20px;
  padding-left: 20px;
  padding-right: 30px;
}

label[type=date] {
  padding-left: 2%;
  font-family: Helvetica;
  font-size: 15px;
}

input[type=date] {
  background-color: #ddd;
  font-family: Helvetica;
  font-size: 15px;
  height: 25px;
  width: 160px;
  text-align: center;
  outline: none;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
}

button[type=submit] {
  float: right;
  color:#fff;
	font-size: 15px;
  font-family: Helvetica;
	border: 1px solid #a6a6a6;
	width: 90px;
	height: 43px;
	border-radius: 6px;
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

.button[type=submit]:hover {
  float: right;
  background: rgb(29,94,124); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(29,94,124) 0%, rgb(29,94,124) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(29,94,124)), color-stop(100%,rgb(29,94,124))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-9 */
}

/* Chart */

canvas {
  width: 100%;
  height: 100%;
}

.chart_container {
  width: 98%;
  float: left;
  padding-left: 1%;
  padding-right: 1%;
}

#chart_b{
  width: 80%;
  height: 100%;
}

.label {
  text-align: center; 
  width: 100%;
  font-size: 20px; 
  font-weight: bold;
  padding-top: 20px;
  padding-bottom: 20px;
}

@media screen and (max-width: 600px) {
  canvas {
  width: 85%;
  height: 900px;
}

.chart_container {
  padding-left: 5%;
  width: 90%;
  float: left;
}
}

@media (max-width: 640px) {
  th[class=yes], .td[class=yes] {
    width:33%;
    font-family: Helvetica;
    font-size: 30px;
    color: #00ce0a;
    text-align: center;
  }
  th[class=no], .td[class=no] {
    width:33%;
    font-family: Helvetica;
    font-size: 30px;
    color: #e21402;
    text-align: center;
  }
  th[class=info], .td[class=info] {
    width:33%;
    font-family: Helvetica;
    font-size: 30px;
    color: #191919;
    text-align: center;
  }
}