<?php
	header('Content-type: text/css; charset: UTF-8');
?>
html, body { 
	margin: 0;
  	padding: 0;
	width: 100%;
	height:100%;
	overflow:hidden;
	font-size: 16px;
	align-items: center;
	align-content: center;
	font-family: Helvetica;
	background: #ffffff;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}

h1{
	margin: 0 auto;
	padding-top: 20px;
	text-transform:uppercase;
	font-size: 30px;
	color:black;
}

h2[class="system_title"]{
	margin: 0 auto;
	padding-top: 20px;
	text-transform:uppercase;
	font-size: 20px;
	color:black;
}

h2[class="Login-title"]{
	margin: 0 auto;
	padding-top: 15px;
	padding-bottom: 15px;
	text-transform:uppercase;
	font-size: 30px;
	color:black;
}

img {
	width: 120px;
	height: 120px;
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}

h2{
	margin: 0 auto;
	font-size:18px;
	color:#000;
  	text-align: center;
}


.username,.username_err {
	width: 230px;
	height: 40px;
	border: 1px solid #a6a6a6;
	border-radius: 3px;
	margin-top: 5px;
  	margin-right: 3px;
	padding-left: 9px;
	color: #6c6c6c;
	background: #fcfcfc;
	outline: none;
}

.password, .password_err {
	width: 230px;
	height: 40px;
	border: 1px solid #a6a6a6;
	border-radius: 3px;
	margin-top: 5px;
  	margin-right: 3px;
	margin-bottom: 3px;
	padding-left: 9px;
	color: #6c6c6c;
	background: #fcfcfc;
	outline: none;
}

input {
	border: 1px solid #a6a6a6;
	border-radius: 3px;
	margin-top: 5px;
  	margin-right: 3px;
	font-size: 13px;
	font-family:Helvetica;
	padding-left: 9px;
	color: #6c6c6c;
	background: #fcfcfc;
	outline: none;
}

input[class=usernameis-invalid], [class=passwordis-invalid] {
	width: 230px;
	height: 40px;
	border: 1px solid #a6a6a6;
	border-radius: 3px;
	margin-top: 5px;
  	margin-right: 3px;
	margin-bottom: 3px;
	padding-left: 9px;
	color: #6c6c6c;
	background: #fcfcfc;
	outline: none;
}

span[class=invalid-feedback]{
	font-size:10px;
	margin-bottom: 10px;
}

input:hover {
	box-shadow: 0 0 10px rgba(154,244,244, 1); 
	border: 1px #9af4f4	 solid ;
}

.u-name:focus, .p-word:focus, .loginbtn:focus, .loginbtn:hover:focus{
	box-shadow: 0 0 10px rgba(154,244,244, 1); 
	border: 1px #9af4f4	 solid ;
}

.loginbtn {
	color:#fff;
	font-size:20px;
	border: 1px solid #a6a6a6;
	width: 93%;
	height: 43px;
	border-radius: 30px;
	margin-top: 3px;
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

p{
	font-size:13px;
}

label{
	font-size:13px;
}

button:hover {
  opacity:1;
}

div[name=login_form]{
	padding: 20px;
	height=300px;
	width=280px;
	margin-right: 80px;
	background: #eeecec;
	border-color: #939393;
	border-style: solid;
	border-width: 0.5px;
}
  
.loginbtn:hover{
  background: rgb(29,94,124); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(29,94,124) 0%, rgb(29,94,124) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(29,94,124)), color-stop(100%,rgb(29,94,124))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(29,94,124) 0%,rgb(29,94,124) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-9 */
}
  
label {
  position: relative;
  top: 5px;
  margin-right: 115px;
}

div[role=alert] {
	font-size: 12px;
}

label, span{
  margin-left: 5px;
  font-size:14px;
}

@media (max-width: 880px) {
	.title {
		padding-bottom: 30px;
	}

	div[class=login] {
		padding-top: 10px;
		margin-right: 0px;
		margin-bottom: 200px;
	}

	h1[class=text-center]{
		margin: 0 auto;
		font-size:30px;
		color:#000;
		text-align: center;
	}

	h2[class=system_title]{
		margin: 0 auto;
		padding-top: 5px;
		font-size:18px;
		color:#000;
		text-align: center;
	}

	.username,.username_err {
		width: 230px;
		height: 40px;
		border: 1px solid #a6a6a6;
		border-radius: 3px;
		margin-top: 5px;
		margin-right: 3px;
		padding-left: 9px;
		color: #6c6c6c;
		background: #fcfcfc;
		outline: none;
	}

	.password, .password_err {
		width: 230px;
		height: 40px;
		border: 1px solid #a6a6a6;
		border-radius: 3px;
		margin-top: 5px;
		margin-right: 3px;
		margin-bottom: 3px;
		padding-left: 9px;
		color: #6c6c6c;
		background: #fcfcfc;
		outline: none;
	}

	input {
		border: 1px solid #a6a6a6;
		border-radius: 3px;
		margin-top: 5px;
		margin-right: 3px;
		padding-left: 9px;
		color: #6c6c6c;
		background: #fcfcfc;
		outline: none;
	}
}

