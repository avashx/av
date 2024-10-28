<?php
   date_default_timezone_set("Asia/Calcutta"); 
   
   //H(hr):00-24, d(day): 01-31, w(week):0-6
   $otp =  date("Hdw") ;
   session_start(); 
   $res = $_SESSION['result']
   ?>
	<?php
   //if($res!=$otp){
   //     header("Location: verify.php");}
   ?>
		<html>

		<head>
			<title>Xvash</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> </head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap');
		@import url(https://fonts.googleapis.com/css?family=Roboto);
		@import url(https://fonts.googleapis.com/css?family=Handlee);
		@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
		@font-face {
			font-family: abs;
			src: url(/abs.ttf);
		}
		
		@font-face {
			font-family: my;
			src: url(/avs.ttf);
		}
		@font-face {
			font-family: ary;
			src: url(/ary.ttf);
		}
      
		div {
			font-family: Arial, Helvetica, sans-serif;
		}
		::-webkit-scrollbar {
    display: none;
  }
      
		:root {
      --bgbr:  brightness(100%);/*Background Bright*/
      --backg: 	#FFFFFF; /*Background Effect*/
      --scnr: brightness(100%);/*Scanner Contrast*/
      --shd : none;/*Shadow Effect*/
      --nbk: hidden;/*Double Lining*/
      --efft: -webkit-linear-gradient(215deg, rgba(0, 0, 0, 0.35)0%,rgba(255, 255, 255, 0.0) 80%);/*Shadow Inensity*/
      --abtus: none; /*Create Font*/
		  --vib:none;/*Table option*/
			--fontfp: my;/*Font*/
			--ver: 12px;/*Vertical Pos.*/
			--ink: #16035c;/*Pen Color*/
			--fontsz: 22px;/*Font Size*/
			--spac: 0px;/*Word Spacing*/
			--lspac: 0px;/*Letter Spacing*/
			--rng: 10px;/*Round Paper Corner*/
			--nprg: 0px;/*Sharp Paper Corner*/
		}
		
		[contentEditable=true]:empty:not(:focus):before {
			content: attr(data-text)
		}
		
		html {}
		
		.console1 {
			background: #4CAF50;
			border: solid 0px #009B1C;
			background: #4CAF50;
			text-align: center;
			display: inline-block;
		}
		
		.console2 {
			width: 5%;
    	padding: 5px 4px;
  		margin: 2px 0;
  		border-radius: 5px;
    	box-sizing: border-box;
    	text-align: center;
			border: none;
			background-color: #CC3399;
			color: white;
		}
		
		.console3 {
			width: 5%;
    			padding: 5px 4px;
  			margin: 2px 0;
  			border-radius: 5px;
    			box-sizing: border-box;
    			text-align: center;
			border: none;
			background-color: #ff6600;
			color: white;
		}
		
		.console4 {
			width: 5%;
    			padding: 5px 4px;
  			margin: 2px 0;
  			border-radius: 5px;
    			box-sizing: border-box;
    			text-align: center;
			border: none;
			background-color: #3653e3;
			color: white;
		}
		
		.console5 {
			width: 5%;
    			padding: 5px 4px;
  			margin: 2px 0;
  			border-radius: 5px;
    			box-sizing: border-box;
    			text-align: center;
			border: none;
			background-color: #c20000;
			color: white;
		}
		
		.console6 {
			padding: 5px 10px;
		  margin-right: 10;
			margin-top: -65px;
			height: 52px;
			float: right;
			color: white;
		}
      .console6:hover {
  transform: scale(1.09);
  transition: all 0.3s ease-in-out;
}
		.console7 {
			width: 10%;
			padding: 5px 4px;
			margin: 2px 0;
			border-radius: 50px;
			box-sizing: border-box;
			text-align: center;
			border: none;
			background-color: #c20000;
			color: white;
		}

.console10 input[type='radio']
{
    display: none;
}
.console10 main {
        margin-top: 77px;
      }
.console10 input[type='radio'] + label,.console10 input[type='radio']:not(checked) + label

{
    padding: 13px 45.5px;
    border: solid 2px #444444;
    border-radius: 47px;
    text-align: center;
    font-size: 12px;
    margin-right: 15px;
   margin-left: 15px;
    transition: .4s;
}
.console10 input[type='radio']:checked + label
{
    position: relative;
    border: solid 2px #444444;
    background: #444444;
    color: #FFF;
    transition: .4s;
}
.console10 input[type='radio']:checked + label::before
{
    content:' ';
    position: absolute;
    left: 16px;
}
      
      
      
		.navb1 {
			padding: 10px;
			box-sizing: border-box;
			text-align: center;
			font-size: 14px;
			border: none;
			background-color: #3653e3;
			color: white;
		}
		.navb1:hover {
  transform: scale(1.09);
}
		.navb2 {
			padding: 10px;
			box-sizing: border-box;
			text-align: center;
			font-size: 14px;
			border: none;
			background-color: #c20000;
			color: white;
		}
      .navb2:hover {
  transform: scale(1.09);
}
      	.navb3 {
			padding: 10px;
			box-sizing: border-box;
			text-align: center;
			font-size: 14px;
			border: none;
			background-color: #AD1E6E;
			color: white;
		}
      .navb3:hover {
  transform: scale(1.09);
}
		
		.navdrop {
			background-color: #8c3fd9;
			width: 100%;
			color: white;
			padding: 10px;
			font-size: 14px;
			border: none;
			cursor: pointer;
		}
      .navdrop:hover {
  transform: scale(1.09);
}
		
		body {
			margin: 0px;
			background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
			background-size: 400% 400%;
			animation: gradient 15s ease infinite;
		}
		
		@keyframes gradient {
			0% {
				background-position: 0% 50%;
			}
			50% {
				background-position: 100% 50%;
			}
			100% {
				background-position: 0% 50%;
			}
		}
		
		@import url('https://fonts.googleapis.com/css2?family=Hind:wght@300&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Tajawal&display=swap');
		* {
			margin: 0;
			padding: 0;
			list-style: none;
			text-decoration: none;
		}
		
		body {
			background-color: #20202F
		}
		
		.header {
			width: 100%;
			height: 70px;
			display: inline-block;
			display: block;
			overflow: hidden;
			background: inherit;
			transform: translate(0, 0);
		}
		
		.header:after {
			content: '';
			background: inherit;
			position: absolute;
			left: -25px;
			left position right: 0;
			top: -25px;
			top position bottom: 0;
			box-shadow: inset 0 0 0 200px rgba(255, 255, 255, 0.05);
			filter: blur(10px);
		}
		
		.inner_header {
			width: 85%;
			height: 100%;
			transform: translate(0, 0);
			display: block;
			margin: 0 auto;
			overflow: hidden;
		}
      
		
		.logo_container {
			height: 100%;
			display: table;
			float: left;
		}
     
		
		.logo_container h1 {
			color: white;
			height: 100%;
			display: table-cell;
			vertical-align: middle;
			font-family: 'Josefin Sans', sans-serif;
			font-size: 32px;
			font-weight: 50;
		}
		
		.logo_container h1 span {
			font-weight: 800;
		}
		
     
      .andbar{
       display:none;
      }
			@media (max-width:1078px) {
        
          .andbar{
             display:block;
        float: right;
        height: 200%;
        margin-top: 2.2%;
        font-size: 32px;
            color:white;
      }     
      }
      
      
		.navigation {
			float: right;
			height: 100%;
		}
		
		.navigation a {
			height: 100%;
			display: table;
			float: left;
			padding: 0px;
		}
		
		.navigation a:last-child {
			padding-right: 0;
		}
		
		.navigation a li {
			display: table-cell;
			vertical-align: middle;
			height: 100%;
			color: white;
			font-family: 'Hind', sans-serif;
			font-size: 14px;
			padding: 10px;
		}
		
		
		
		.snake1 {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 2px;
			background: linear-gradient(to right, rgb(92, 209, 186), rgb(175, 96, 209));
			animation: animate-bottom 4s linear infinite;
		}
		
		.snake2 {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 2px;
			background: linear-gradient(to right, rgb(175, 96, 209), rgb(92, 209, 186));
			animation: anim2 4s linear infinite;
		}
		
		@keyframes animate-bottom {
			0% {
				transform: translateX(100%);
			}
			100% {
				transform: translateX(-100%);
			}
		}
		
		@keyframes anim2 {
			0% {
				transform: translateX(-100%);
			}
			100% {
				transform: translateX(100%);
			}
		}
		
		.space {
			word-spacing: var(--spac);
			letter-spacing: var(--lspac);
		}
		
		.load {
			margin-left: 50%;
			margin-right: 50%;
			height: 50px;
		}
		
		.paper {
			position: relative;
			width: 90%;
			max-width: 770px;
			min-width: 770px;
			height: calc(11.7 * 770px / 8.3);
			/* A4 Ratio */
			margin: 0 auto;
      background:var(--backg);
      background-size: 100%;
      filter: var(--scnr);
      filter: var(--bgbr);
      border-radius: var(--nprg);
			box-shadow: 0 2px 8px rgba(0, 0, 0, .3);
		}
     .paper:after{
       display:none;
        content: '';
       pointer-events: none;
         position:absolute;
         left:0; top:0;
         width:100%; height:100%;
         display:var(--shd); 
        background: var(--efft);
          }
		
		.paper:before {
			content: '';
      pointer-events: none;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			width: 75px;
			background-size: 30px 30px;
			border-right: 2.8px solid #DB7093;
			box-sizing: border-box;
       z-index:250;
		}
    .paper-lup{
      visibility:var(--nbk);
      content: '';
			position: absolute;
			top: 0; 
			bottom: 0;
			left: 0;
			right: 0;
			width: 71px;
			background-size: 30px 30px;
			border-right: 1.8px solid #DB7093;
			box-sizing: border-box;
      z-index:250;
      } 
		
		.paper-up {
			position: relative;
			height: 40px;
			background: linear-gradient(transparent, transparent 38px, #DB7093 38px);
			background-size: 60px;
		}
      .paper-dup {
      visibility:var(--nbk);
			position: relative;
			height: 40px;
			top: 36px;
			background: linear-gradient(transparent, transparent 38px, #DB7093 28px);
			background-size: 60px;
        z-index:250;
		}
		
		.paper-content {
			position: absolute;
			top: 80px;
			right: 0;
			bottom: 30px;
			left: 0px;
			background: linear-gradient(transparent, transparent 28px, #91D1D3 1px);
			background-size: 30px 30px;
		}
		
		.paper-content div {
			right: 0px;
			bottom: 30px;
			left: 0px;
			line-height: 30px;
			padding: 0 0px;
			background: transparent;
			color: var(--ink);
			/*Ink color*/
			font-family: var(--fontfp);
			/*Font*/
			font-size: var(--fontsz);
			/*Font Size*/
			box-sizing: border-box;
			z-index: 1;
		}
		
		.footers h1 {
			font-size: 12px;
			font-weight: 700;
			letter-spacing: 1px;
			text-transform: uppercase;
			width: 160px;
			text-align: center;
			margin: auto;
			white-space: nowrap;
			padding-bottom: 13px;
		}
		
		.footers h1:before {
			background-color: #c50000;
			content: '';
			display: block;
			height: 3px;
			width: 75px;
			margin-bottom: 8px;
		}
		
		.footers h1:after {
			background-color: #c50000;
			content: '';
			display: block;
			position: relative;
			right: -55%;
			top: 8px;
			height: 3.5px;
			width: 75px;
			margin-bottom: 0.25em;
		}
		
		.editor {
			border: 0px inset grey;
			height: 600px;
			width: 690px;
			margin: var(--ver);
			margin-left: 78px;
		}
		
		.editormg {
			border: 0px inset grey;
			height: 40px;
			width: 80px;
  		margin: -52px;
			margin-left: 2px;
		}
		
		.stmp {
			border: 0px inset grey;
			height: 40px;
			width: 95px;
			margin: -40px;
			margin-left: 79%;
			margin-right: 0px;
		}
		
		.stmpimg {
			height: 180%;
			margin-top: -38%;
		}
		
		.blurred-box {
			text-align: center;
			display: inline-block;
			border: double 1px #F0FFFF;
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: 1%;
			width: 80%;
			padding: 9px;
			margin-bottom: 1%;
			top: calc(50% - 175px);
			left: calc(50% - 125px);
			background: inherit;
			border-radius: 4px;
		}
		
		.blurred-box:after {
			content: '';
			background: inherit;
			position: absolute;
			left: -25px;
			left position right: 0;
			top: -25px;
			top position bottom: 0;
			box-shadow: inset 0 0 0 200px rgba(255, 255, 255, 0.05);
			filter: blur(10px);
		}
		/*Tooltip poup on hover*/
		
		.tooltip {
			position: relative;
		}
		
		.tooltip .tooltiptext {
			visibility: hidden;
			width: 120px;
			background-color: #2196F3;
			color: #fff;
			text-align: center;
			border-radius: 31px;
			padding: 6px 0;
			margin-bottom: 7px;
			/* Position the tooltip */
			position: absolute;
			z-index: 1;
			bottom: 100%;
			left: 50%;
			margin-left: -60px;
		}
		
		.tooltip:hover .tooltiptext {
			visibility: visible;
		}
		/*Drop Down*/
		
		.dropbtn {
			background-color: #8c3fd9;
			border-radius: 50px;
			width: 100%;
			color: white;
			padding: 5px;
			font-size: 14px;
			border: none;
			cursor: pointer;
		}
		
		.dropdown {
			position: relative;
			display: inline-block;
		}
		
		.dropdown-content a {
			color: black;
			padding: 1px 1px;
			text-decoration: none;
			display: block;
		}
		
		.dropdown-content a:hover {
			background-color: #044ee0
		}
		
		.dropdown:hover .dropdown-content {
			display: block;
		}
		
		.dropdown:hover .dropbtn {
			background-color: #3267d1;
		}
     
textarea{
  resize: none;
  border: none;
  background: transparent;
  color: var(--ink);
  font-family: var(--fontfp);
  font-size: var(--fontsz);
  min-width: 120px;
  min-height: 12px;
  line-height: calc(var(--ver) + .8); 
  }

textarea:hover {
  resize: both;
  border: 1px solid;
  border-radius: 4px;
  background-color: rgba(189,167,167,0.2);
  
}
 textarea::-webkit-scrollbar { 
                display: block; 
} 

/*Rows Colm hide show*/
.vib {
  display: var(--vib);
}
      
/*Pop up*/
 .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  
  opacity: 1;
  z-index: 999;
}
.popup {
  margin: 40px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 60%;
  position: relative;
  transition: all 2s ease-in-out;
}  
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.card{
  flex: 1;
  min-width: 140px;
  height: calc(11.7 * 160px / 8.3);
  background-color: white;
  align-items: center;
  border: 1px solid #373F48;
  border-radius: 12px;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #393838;
  display: inline-block;
  transition: .3s linear;
  box-shadow: 5px 7px #888888;
}
 .card h4,small {
margin-top: 20px;
font-family: 'Josefin Sans', sans-serif;
font-size: 12px;
font-weight: 50; 
color: #393838;

  }
      
.card h4 span {
  font-size: 22px;
			font-weight: 600;
		}
.card:hover h4  {
    color:white;
		}
      
      
 .card:hover {
    transform: scale(1.05);
    transition: all 0.3s ease-in-out;
    background: linear-gradient(135deg, #F13846, #F98D1B);
    color:white;
  }

.navpopup {
  margin: 70px auto;
  padding: 20px;
  background: rgba(238, 244, 252, 0.91);
  border-radius: 5px;
  width: 60%;
  position: relative;
  transition: all 2s ease-in-out;
}   
 .navpopup li {
margin: 10px auto;
padding: 20px;
text-align: center;
cursor: pointer;
display: inline-block;
}
.navpopup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}   
        
      
		/*speech*/
		
		.span2 {
			float: right;
			padding-right: 2.5%;
			font-size: 10;
			font-family: 'Trebuchet MS', sans-serif;
			line-height: 20%;
		}
      
      
.button {
  
 
    padding: 13px 45.5px;
    border: solid 2px #444444;
    border-radius: 47px;
    text-align: center;
    font-size: 12px;
    margin-right: 15px;
    margin-left: 15px;
    transition: .4s;
		
}

.button:hover {  
  font-weight: 22px; 
 transform: scale(1.09);
}
      .cstm{ 
        margin-top:10%;
         margin-bottom:5%;
      }
      
      .abtus{
  
        background-color:rgba(255,255,255, 0.8);;
        margin:0 auto;
        display: var(--abtus);
        margin-bottom:8%;
        padding-top:5%;
        padding-bottom:3%;
        min-height:450px;
        width:85%;
        border-radius:1%;
        box-shadow: 8px 10px 12px black;
        
      }
      
      
      
      
      .hand {
        text-align: center;
      }
     .hand  h1 {
  font-family: "Amatic SC";
       font-weight:28px;
       font-size:76px;
    }
       .hand  h2 {
  font-family: "Handlee";
       font-size:26px;
    }
      .hand h4 {
        font-family: "Handlee";
    }
      
      
   .abtus    input {
	font-size: 18px;
	padding: 10px 10px 10px 5px;
     margin: 18px 13px;
	display: block;
	background: #fafafa;
	color: #636363;
	width: 30%;
	border: none;
	border-radius: 4px;
	
}
      
 .sample {

  display: none;
 z-index:900;
}
.sample:target {
  display: block;
  
 
}      
      
      
      
		</style>

		<body>
			<!--Nav Bar-->
			<div class="header"> <span class="snake1"></span> <span class="snake2"></span>
				<div class="inner_header">
					<div class="logo_container">
						<h1>TEXT to<span> HANDWRITING</span></h1> </div>
           <i onclick="window.location.href='#navpop'" class="fas fa-bars andbar"></i>
					<ul class="navigation">
						<a>
							<li>
								<select id="stamp" class="navdrop">
									<option selected="" disabled="">Branding</option>
									<option value=" ">None</option>
									<option value="<img class='stmpimg' src='https://xvashtex.herokuapp.com/stmp.png'>">Classmate</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp3.png'>">Delta</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp2.png'>">Plane</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp1.png'>">Tara</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp4.png'>">Simple</option>
								</select>
							</li>
						</a>
						<a>
							<li>
								<select id="rel" class="navdrop">
									<option selected="" disabled="">Quality</option>
									<option value="1">Low</option>
									<option value="2">High</option>
									<option value="3">Very High</option>
									<option value="4">Best</option>
									<option value="5">Too big</option>
									<option value="6">Enough !</option>
								</select>
							</li>
						</a>
						<a>
							<li>
								<button class="navb1" onclick="doCapture();">Capture</button>
							</li>
						</a>
						<a>
							<li>
								<button class="navb2" onclick="downloadit();">Download</button>
							</li>
						</a>
            <a>
							<li>
								<button class="navb3"  onclick="window.location.href='#pop'">Paper</button>
							</li>
						</a>
					</ul>
				</div>
			</div>
	    <!--html-->
		<!---Control Panel tool bar -->
		<div class="blurred-box">
			<a style="text-decoration: none;" class="tooltip" href="javascript:void(0)" onclick="format('ForeColor','#000000')"> 
			<span class="fa fa-columns"></span> <span class="tooltiptext">Black</span> </a> &nbsp;&nbsp;
			<a href="javascript:void(0)" onclick="format('bold')"> <span class="fa fa-bold fa-fw"></span></a> &nbsp;&nbsp;
			<a href="javascript:void(0)" onclick="format('superscript')"> <span class="fa fa-superscript"></span></a>&nbsp;
			<a href="javascript:void(0)" onclick="format('subscript')"> <span class="fa fa-subscript"></span></a> &nbsp;&nbsp;
			<a href="javascript:void(0)" onclick="format('italic')"> <span class="fa fa-italic fa-fw "></span></a> &nbsp;
			<a href="javascript:void(0)" onclick="format('insertunorderedlist')"> <span class="fa fa-list fa-fw"></span></a> &nbsp;
			<a class="tooltip"> <span class="tooltiptext">Text Color</span>
				<input class="console1" type="color" id="pen" value="#16035c">
			</a> &nbsp;
			<a class="tooltip"> <span class="tooltiptext">Vertical Position</span>
				<input class="console2" type="float" id="verp" value="12px">
			</a>
			<a class="tooltip"> <span class="tooltiptext">Font Size</span>
				<input class="console3" type="float" id="fonts" value="22px">
			</a>
			<a class="tooltip"> <span class="tooltiptext">Font</span>
				<div class="dropdown">
					<select id="fonttype" class="dropbtn">
						<option selected="" disabled="">Font</option>
						<option value="'my'">My</option>
            <option value="'ary'">Ary</option>
						<option value="'abs'">AbGt</option>
						<option value="'handlee'">Handlee</option>
						<option value="'Indie Flower'">Indie</option>
						<option value="'Kalam'">Hindi</option>
						<option value="'Cedarville Cursive'">Cursive</option>
					</select>
				</div>
      
			</a>
			<a class="tooltip"> <span class="tooltiptext">Word Spacing</span>
				<input class="console4" type="float" id="spc" value="1px">
			</a>
			<a class="tooltip"> <span class="tooltiptext">Letter Spacing</span>
				<input class="console5" type="float" id="lspc" value="0px">
			</a>
      <a class="tooltip"> <span class="tooltiptext">Insert Table</span>
      <input type="button" class="console7" value="Table" onclick="addtable();" id="rowButton" /></a>
      <a class="tooltip"> <span class="tooltiptext">Rows</span>
      <input type="button"  class="console4 vib" value="R+" onclick="addRow();" id="rowButton" /></a>
      <a class="tooltip"> <span class="tooltiptext">Column</span>
<input type="button"  class="console3 vib" value="C+" onclick="addColumn();" id="columnButton" />
      </a>
      
      
      
      
			<a class="tooltip"> <span class="tooltiptext">Round</span>
				<input class="custom02" type="radio" id="prg" name="a" value="10px">
			</a>
			<a class="tooltip"> <span class="tooltiptext">Sharp</span>
				<input class="custom02" type="radio" id="prg2" name="a" value="0px"> </a>
		</div> <img onclick="runSpeechRecognition()" src="https://xvashtex.herokuapp.com/mic.png" class="console6" /> &nbsp; <span class="span2" id="action"></span>
		<!---Capture Canva -->
		<script>
		function doCapture() {
			$('#load').show();
			var node = document.getElementById('paper');
			domtoimage.toPng(node).then(function(dataUrl) {
				$('#load').hide();
				var img = new Image();
				img.src = dataUrl;
				document.body.appendChild(img);
			}).catch(function(error) {
				console.error('oops, something went wrong!', error);
			});
		}
		</script>
		<!---Download Canva -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script>
		//Download Canva
		function downloadit() {
			$('#load').show();
			window.scrollTo(0, 0);
			var node = document.getElementById('paper');
			var scale = document.getElementById("rel").value;
			domtoimage.toPng(node, {
				width: node.clientWidth * scale,
				height: node.clientHeight * scale,
				style: {
					transform: 'scale(' + scale + ')',
					transformOrigin: 'top left'
				}
			}).then(function(dataUrl) {
				var img = new Image();
				img.src = dataUrl;
				downloadURI(dataUrl, "Page.png")
				$('#load').hide();
			}).catch(function(error) {
				console.error('oops, something went wrong!', error);
			});
		}

		function downloadURI(uri, name) {
			var link = document.createElement("a");
			link.download = name;
			link.href = uri;
			document.body.appendChild(link);
			link.click();
			document.body.removeChild(link);
			delete link;
		}
		</script>
      
    <!--Pop up Page Type -->
 <div id="pop" class="overlay">
	<div class="popup">
		<h2>Select Paper Type</h2>
		<a class="close" href="#">&times;</a><center>
    <div class="console10">
		<div class="card ">
				<h4><span> A4</span><br> Paper</h4>
      <main><input type="radio" id="ot-1" value="hidden" name="pprtyp" checked>
     <label for="ot-1">
         Apply
     </label></main>
		</div>
    <div class="card ">
			<h4><span>Notebook</span><br> Paper</h4>
      <main><input type="radio" id="ot-2" value="visible" name="pprtyp">
     <label for="ot-2">
         Apply
     </label></main>
		</div>
    <div class="card ">
				<h4><span>Plane</span><br> Paper</h4> 
       <main><input type="radio" id="ot-3" value="inline-block" name="pprtyp">
     <label for="ot-3">
         Apply
     </label></main>
		</div>
    </div></center>
    <center>
    <small><b>Note: </b>Here You can Change Paper Background add Effects & Filters</small></center>
    <br><br>
    <center>
      
     <div class="console10">
     <input type="radio" id="opt-1" value="none" name="page" checked>
     <label for="opt-1">
         None
     </label>
     <input type="radio" id="opt-2" value="inline-block" name="page">
     <label for="opt-2">
         Shadow
     </label>
     <input type="radio" id="opt-3" value="brightness(0.7) contrast(2.5)" name="page">
     <label for="opt-3">
         Scanner
     </label>
  </div>
      
      <br><br>
     
     <div class="console10">
     <input type="radio" id="bg-1" value="url('https://xvashtex.herokuapp.com/texture.jpg')" name="backg" >
     <label for="bg-1">
         Texture
     </label>
     <input type="radio" id="bg-2" value="#FFFFFF" name="backg" checked>
     <label for="bg-2">
         White
     </label>
       <input type="radio" id="bg-4" value="url('https://xvashtex.herokuapp.com/ppr.jpg')" name="backg" >
     <label for="bg-4">
         Real
     </label>
     <input type="radio" id="bg-3" value="0" name="backg">
     <label for="bg-3">
         None
     </label>
       
       <br><br><br>
       
  <input type="range" id="bgbr" name="backgbr"
         min="50" max="150"><br>
  <label for="backgbr"><small><b>(Intensity)</b></small></label>

      </div>
        
      </center>
    
    
    <br><br>
	</div>
</div>
      
<!--Pop up Nav Bar -->   
 <div id="navpop" class="overlay">
	<div class="navpopup">
		<h2>Select From here</h2>
		<a class="close" href="#">&times;</a>
		  <li><select onclick="window.location.href='#stamp'" class="navdrop">
									<option selected="" disabled="">Branding</option>
									<option value=" ">None</option>
									<option value="<img class='stmpimg' src='https://xvashtex.herokuapp.com/stmp.png'>">Classmate</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp3.png'>">Delta</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp2.png'>">Plane</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp1.png'>">Tara</option>
									<option value="<img class='stmpimg'  src='https://xvashtex.herokuapp.com/stmp4.png'>">Simple</option>
								</select>  </li>
      <li><select  onclick="window.location.href='#rel'" class="navdrop">
									<option selected="" disabled="">Quality</option>
									<option value="1">Low</option>
									<option value="2">High</option>
									<option value="3">Very High</option>
									<option value="4">Best</option>
									<option value="5">Too big</option>
									<option value="6">Enough !</option>
								</select>  </li>
    <li>
								<button class="navb1" onclick="doCapture();">Capture</button>
							</li>
    <li>
								<button class="navb2" onclick="downloadit();">Download</button>
							</li>
    <li>
								<button class="navb3"  onclick="window.location.href='#pop'">Paper</button>
							</li>
    
    
	</div>
</div>            
   
      
      
		<!---Buttons and Loading gif--><img src="http://xvashtex.herokuapp.com/load.gif" class="load" id="load" style="display:none" />
		<!---Main Canva -->
		<section>
			<div id="paper" class="paper">
        <div class="paper-lup"></div>
        <div class="paper-dup"></div>
				<div class="paper-up"></div>
				<div class="paper-content">
					<div id="stmppr" class="stmp"> </div>
					<div class="editormg space" contenteditable="true" data-text="&nbsp; 1"></div>
					<div class="editor space" contenteditable="true" data-text="Tap here to edit text" id="sampleeditor"></div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<br>
		<!-- logout -->
		<center>
			<form method="POST" action="logout.php">
				<input class="console7" type="submit" value="Logout"> </form>
		</center>
		<!---Accuracy mic meter -->
		<div id="acc" class="sample-toolbar"></div>

 <div class="cstm">  
   <center><button onclick="addfnt();"  type="button" class="button" >Create Your own Font</button></center>
   <br>
<section class="abtus">
  <div class="hand">
    <h1>Hi Guys, I am Aman.</h1><br>
      <h2 style="color:grey;">If you want to Create your own Handwriting You can apply here.</h2>
      </div><br>
<center>        
<form>
    <input type="text" placeholder="Name">
   <input type="email" placeholder="Email">
     <input type="file" accept="image/*" onchange="preview_image(event)">
 <div>
  <button id="cfnt" type="button" onclick="window.location.href='#smp'" class="button" >Sample
  </button>
   <button type="button" class="button" >Submit
  </button>
  </div>
</form>
  <div id="smp" class="sample">
  
  <img  src="https://xvashtex.herokuapp.com/smp.jpg" height="250">
    <a  href="#">(Hide)</a>
  </div>
  <img id="output_image" height="250"/>
</center>        
</section>
</div>

<br>
<div class="footers">
<h1>Vashishth @ Xvash</h1> </div>
<br>
		<!--Java ----------------- Script-->
		<script>
		window.addEventListener('load', function() {
			document.getElementById('sampleeditor').setAttribute('contenteditable', 'true');
		});

		function format(command, value) {
			document.execCommand(command, false, value);
		}
		let pencolor = document.getElementById('pen')
		pencolor.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--ink', e.target.value)
		})
		let verpos = document.getElementById('verp')
		verpos.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--ver', e.target.value)
		})
		let fontz = document.getElementById('fonts')
		fontz.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--fontsz', e.target.value)
		})
		let fonttp = document.getElementById('fonttype')
		fonttp.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--fontfp', e.target.value)
		})
		let pprg = document.getElementById('prg')
		pprg.addEventListener('change', (e) => {
			console.log(e.target.value + "px")
			document.documentElement.style.setProperty('--nprg', e.target.value)
		})
		let pprg2 = document.getElementById('prg2')
		pprg2.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--nprg', e.target.value)
		})
		let spce = document.getElementById('spc')
		spce.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--spac', e.target.value)
		})
		let lspce = document.getElementById('lspc')
		lspce.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--lspac', e.target.value)
		})
		let stp = document.getElementById('stamp')
		stp.addEventListener('change', (e) => {
				console.log(e.target.value)
				let stpr = document.getElementById('stmppr')
				stpr.innerHTML = e.target.value
			})
      let ovrg1 = document.getElementById('opt-1')
		ovrg1.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--shd', e.target.value)
      document.documentElement.style.setProperty('--scnr', "brightness(100%)")
		})
      let ovrg2 = document.getElementById('opt-2')
		ovrg2.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--shd', e.target.value)
      document.documentElement.style.setProperty('--scnr', "brightness(100%)")
      document.documentElement.style.setProperty('--efft', " -webkit-linear-gradient(205deg, rgba(0, 0, 0, 0.38)0%, rgba(0, 0, 0, 0.10) 80%)") 
		})
      let ovrg3 = document.getElementById('opt-3')
		ovrg3.addEventListener('change', (e) => {
			console.log(e.target.value)
      document.documentElement.style.setProperty('--shd', "inline-block")
			document.documentElement.style.setProperty('--scnr', e.target.value)
       document.documentElement.style.setProperty('--efft', " -webkit-linear-gradient( left, rgba(0, 0, 0, 0.28) ,rgba(255, 255, 255, 0.3),rgba(0, 0, 0, 0.2)60%")
		})
      let a4ppr = document.getElementById('ot-1')
		a4ppr.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--nbk', e.target.value)
     })
      let noteppr = document.getElementById('ot-2')
		noteppr.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--nbk', e.target.value)
     })
      
function addfnt() {

	let fnt = "block"
  document.documentElement.style.setProperty('--abtus', fnt)
}
      
      
      
function addtable() {

	let vbl = "inline"
  document.documentElement.style.setProperty('--vib', vbl)
 

var action = document.getElementById("action");
action.innerHTML = " "
var node =  document.getElementById('sampleeditor');
var final = $('#sampleeditor').html();
var tabledata =  "<div><table id='main'><th class=''><textarea  placeholder='Hi'></textarea></th> <tr class='' id='row'><td><textarea placeholder='Hi'></textarea></td></tr></table></div>";
    
		node.innerHTML = final + tabledata
		}      
      
/*Page Background*/
 let bg1 = document.getElementById('bg-1')
		bg1.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--backg', e.target.value)
     		})
      
 let bg2 = document.getElementById('bg-2')
		bg2.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--backg', e.target.value)
     		})
     
 let bg3 = document.getElementById('bg-3')
		bg3.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--backg', e.target.value)
     		})

      
 let bg4 = document.getElementById('bg-4')
		bg4.addEventListener('change', (e) => {
			console.log(e.target.value)
			document.documentElement.style.setProperty('--backg', e.target.value)
     		})
      
      
      let bgbr = document.getElementById('bgbr')
		bgbr.addEventListener('change', (e) => {
      let q = "brightness(" + e.target.value + "%)"
			let a =	document.documentElement.style.setProperty('--bgbr', q )
    console.log(q)
     		})
     
      
      
     


		
/*Add Row Column*/
       
      
 function addRow() {
    var table = document.getElementById("main");
    var action = document.getElementById("action");
if(table  == null){
   document.documentElement.style.setProperty('--vib', "none")
  action.innerHTML = "<b>Insert Table First</b>";
}
	var rws = table.rows;
	var cols = table.rows[0].cells.length;
    var row = table.insertRow(rws.length);
	var cell;
	for(var i=0;i<cols;i++){
		cell = row.insertCell(i);
		cell.innerHTML = '<textarea placeholder="Hi"></textarea>';
	}
}

function addColumn() {
    var table = document.getElementById("main");
      var action = document.getElementById("action");
if(table  == null){
    document.documentElement.style.setProperty('--vib', "none")
  action.innerHTML = "<b>Insert Table First</b>";
}
	var rws = table.rows; 
	var cols = table.rows[0].cells.length;
	var cell;
	for(var i=0;i<rws.length;i++){
		cell = rws[i].insertCell(cols-1);
		cell.innerHTML = '<textarea placeholder="Hi"></textarea>';
	}
}
      
      /*Image Upload Custom Font cfnt*/
function preview_image(event){
 var reader = new FileReader();
 reader.onload = function() {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
      
      
      
      
			/* Text to speech */
		function runSpeechRecognition() {
			// get output div reference
			var sampleeditor = document.getElementById("sampleeditor");
			//get accuracy below
			var acc = document.getElementById("acc")
				// get action element reference
			var action = document.getElementById("action");
			// new speech recognition object
			var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
			var recognition = new SpeechRecognition();
			// This runs when the speech recognition service starts
			recognition.onstart = function() {
				action.innerHTML = "<small>listening...</small>";
			};
			recognition.onspeechend = function() {
					action.innerHTML = "<small>stopped listening.</small>";
					recognition.stop();
				}
				// This runs when the speech recognition service returns result
			recognition.onresult = function(event) {
				var transcript = event.results[0][0].transcript;
				var confidence = event.results[0][0].confidence;
				sampleeditor.innerHTML = sampleeditor.innerHTML + " " + transcript
				acc.innerHTML = "<br/> <b>Speech Accuracy:</b> " + confidence * 100 + "%";
				sampleeditor.classList.remove("hide");
			};
			// start recognition
			recognition.start();
		}
		</script>

		</html>
