<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Text to Hand</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&family=Lobster&display=swap">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docx/7.0.0/docx.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> </head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
<style>
/*Custom Fonts*/



        @font-face {
			font-family: abs;
			src: url(/abs.ttf);
		}
        @font-face {
			font-family: shiv;
			src: url(/shiv.ttf);
		}
		
		@font-face {
			font-family: my;
			src: url(/avs.ttf);
		}
		@font-face {
			font-family: ary;
			src: url(/ary.ttf);
		}
		@font-face {
			font-family: newavs;
			src: url(/newavs.ttf);
		}
      	
/*Digital Fonts*/
        @import url('https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap');
		@import url(https://fonts.googleapis.com/css?family=Roboto);
		@import url(https://fonts.googleapis.com/css?family=Handlee);
		@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');



/* General styles */
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




body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    height: 100vh;
    background: linear-gradient(135deg, #ece9e6 0%, #ffffff 100%);
    color: #000;
    transition: background-color 0.3s, color 0.3s;
    overflow-x: hidden;
    background-size: 400% 400%;

}

body.dark-mode {
    background: linear-gradient(135deg, #1e1e1e 0%, #3e3e3e 100%);
    color: #fff;
    background-size: 400% 400%;

}

/* Menu bar styles */
.menu-bar {
    display: flex;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 10px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    z-index: 1002;
    justify-content: flex-start;
    position: relative;
}

.menu-item {
    position: relative;
    padding: 10px;
    margin-right: 10px;
    cursor: pointer;
    color: inherit;
}

.menu-item:hover .dropdown-content {
    display: block;
}

body.dark-mode .menu-bar {
    background: rgba(30, 30, 30, 0.85);
    border-color: rgba(255, 255, 255, 0.3);
}

/* Dropdown content styles */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1001;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 10px;
}

body.dark-mode .dropdown-content {
    background-color: rgba(50, 50, 50, 0.85);
}

.dropdown-content button {
    width: 100%;
    background: none;
    border: none;
    padding: 10px;
    text-align: left;
    cursor: pointer;
    color: inherit;
}

/* Dark mode toggle styles */
#darkModeToggle {
    position: absolute;
    right: 10px;
    top: 10px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
}

#darkModeToggle i {
    color: inherit;
}

.rightbar{
    position: absolute;
    right: 60px;
    top: 10px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
}

.rightbar span{

    font-family: var(--fontfp);
}

/* Toolbar styles */
.toolbar {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 10px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    transition: background-color 0.3s, border-color 0.3s;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    margin: 20px;
    z-index: 1000;
    position: relative;
}

.toolbar-group {
    display: flex;
    align-items: center;
    margin: 5px;
}

body.dark-mode .toolbar {
    background: rgba(30, 30, 30, 0.25);
    border-color: rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
}

.toolbar button, .toolbar select, .toolbar input[type="color"] {
    padding: 10px;
    margin-right: 5px;
    border: none;
    background: none;
    cursor: pointer;
    color: inherit;
}
 
 

.toolbar button:hover, .toolbar select:hover, .toolbar input[type="color"]:hover {
    background-color: rgba(255, 255, 255, 0.3);
    
}

body.dark-mode .toolbar button:hover, body.dark-mode .toolbar select:hover, body.dark-mode .toolbar input[type="color"]:hover {
background-color: rgba(255, 255, 255, 0.1);
}

input[type="float"] {

width:58px;

}


.icon-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    color: inherit;
}

 .toolbar input[type="color"]{
     background-color: var(--ink);
    border-radius: 50%;
    width:25%;
    height:25%;
    border:2px;
    box-shadow: 0 0 0 4px #fff;
    color: rgba(255, 213, 128, .04);
    overflow: hidden;
 }









/*main Canvas Paper*/

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
		



/*Stamp Logo*/
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
#editor-container {
    flex: 1;
    overflow-y: auto;
    background: rgba(255, 255, 255, 0.25);
    padding: 40px;
    min-height: 70%;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: background-color 0.3s, border-color 0.3s;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    margin: 20px;
    z-index: 1;
    overflow-x: hidden;
}

		
/*Textarea Content*/
textarea{
  resize: none;
  border: none;
  background: transparent;
  color: var(--ink);
  font-family: var(--fontfp);
  font-size: var(--fontsz);
  width: 120px;
  height: 38px;
  line-height: 138%;
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
        

body.dark-mode #editor{
    color: white;
    border-color: rgba(255, 255, 255, 0.3);
    background: rgba(30, 30, 30, 0.85);

}
body.dark-mode #editor-container {
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        border-color: rgba(255, 255, 255, 0.3);
    background: rgba(30, 30, 30, 0.85);
}

body.dark-mode .page-break {
    border-bottom-color: rgba(255, 255, 255, 0.3);
}









button.active {
    background-color: rgba(255, 255, 255, 0.6);
    border-radius: 8px;
}

.font-dropdown, .font-size-dropdown {
    padding: 10px;
    margin-right: 5px;
    border: none;
    background: none;
    cursor: pointer;
    color: inherit;
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 5px;
}

body.dark-mode .font-dropdown, body.dark-mode .font-size-dropdown {
        background-color: rgba(50, 50, 50, 0.85);
    border-color: rgba(0, 0, 0, 0.3);
  }

/* Color picker styles */
.colors {
    display: flex;
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 10px;
    gap: 10px;
    flex-wrap: wrap;
}

.color-picker-dropdown {
    display: none;
    padding: 10px;
    border: 1px solid rgba(0, 0, 0, 0.3);
    background: rgba(200, 200, 200, 0.3);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    position: absolute;
    z-index: 1001;
    top: 60px;
    left: 50%;
    transform: translateX(-50%);
}

body.dark-mode .color-picker-dropdown {
    background-color: rgba(50, 50, 50, 0.85);
    border-color: rgba(0, 0, 0, 0.3);
}

.color {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    cursor: pointer;
    border: 1px solid; /* Inherit outline */
    border-color: inherit;
    justify-content: center;
    align-items: center;
}

.color.no-highlight i {
    color: inherit;
    font-size: 18px;
  
}


</style>


</head>
<body>
    <div class="menu-bar">
        <div class="menu-item">File
            <div class="dropdown-content">
                <button id="saveBtn">Save</button>
                <button onclick="document.getElementById('fileInput').click()">Upload</button>
                <button onclick="printDoc()">Print</button>
            </div>
        </div>
        <div class="menu-item">Edit
            <div class="dropdown-content">
                <button onclick="format('undo')">Undo</button>
                <button onclick="format('redo')">Redo</button>
                <button onclick="format('copy')">Copy</button>
                <button onclick="format('cut')">Cut</button>
                <button onclick="pasteText()">Paste</button>
            </div>
        </div>

        
        <div class="menu-item">Table
            <div class="dropdown-content">
                
                <button class="fas fa-table" id="tbl" >            &nbsp;&nbsp;  Add Table</button><br>
                <button class="fas fa-th vib"id="rw"  >            &nbsp; &nbsp; Add Row +</button>
                <button  class="fas fa-columns vib" id="col" >     &nbsp; &nbsp; Add Column +</button>
                
            </div>
        </div>

        <div class="menu-item">Paper
             <div class="dropdown-content">
               
                            <div >
                                <input type="radio" id="bg-1" value="url('texture.jpg')" name="backg" >
                                <label for="bg-1">
                                    Texture
                                </label><br>
                                <input type="radio" id="bg-2" value="#FFFFFF" name="backg" checked>
                                <label for="bg-2">
                                    White
                                </label><br>
                                <input type="radio" id="bg-4" value="url('ppr.jpg')" name="backg" >
                                <label for="bg-4">
                                    Real
                                </label><br>
                                 <input type="radio" id="bg-5" value="url('ppr3.jpg')" name="backg" >
                                <label for="bg-4">
                                    Paper 1
                                </label><br>
                                 <input type="radio" id="bg-6" value="url('ppr4.jpg')" name="backg" >
                                <label for="bg-4">
                                    Paper 2
                                </label><br>
                                 <input type="radio" id="bg-7" value="url('ppr5.jpg')" name="backg" >
                                <label for="bg-4">
                                    Paper 3
                                </label><br>
                                 <input type="radio" id="bg-8" value="url('ppr6.jpg')" name="backg" >
                                <label for="bg-4">
                                    Paper 4
                                </label><br>
                                <input type="radio" id="bg-3" value="0" name="backg">
                                <label for="bg-3">
                                    None
                                </label>
                                
                                <br><br>
                                
                            <input type="range" id="bgbr" name="backgbr"
                                    min="50" max="150">&nbsp;<i class="fas fa-sun"></i><br>
                            <label for="backgbr"><center><small>(Light)</small></center></label><br>

                              <input type="radio" id="opt-1" value="none" name="page" checked>
                            <label for="opt-1">
                                None
                            </label><br>
                            <input type="radio" id="opt-2" value="inline-block" name="page">
                            <label for="opt-2">
                                Shadow
                            </label><br>
                            <input type="radio" id="opt-3" value="brightness(0.7) contrast(2.5)" name="page">
                            <label for="opt-3">
                                Scanner
                            </label><br>

                                </div>
</div>
 </div>


   
        <button class="icon-btn" onclick="toggleDarkMode()" title="Toggle Dark Mode" id="darkModeToggle"><i class="fas fa-moon" id="mode-icon"></i>
        </button> <center><div class="rightbar" >
       TEXT to<span> HANDWRITING</span>
    </div></center>

    </div>
    <div class="toolbar">
        <div class="toolbar-group">
            <button id="boldBtn" class="icon-btn" onclick="format('bold')" title="Bold"><i class="fas fa-bold"></i></button>
            <button id="italicBtn" class="icon-btn" onclick="format('italic')" title="Italic"><i class="fas fa-italic"></i></button>
            <button id="underlineBtn" class="icon-btn" onclick="format('underline')" title="Underline"><i class="fas fa-underline"></i></button>

            <button id="underlineBtn" class="icon-btn" onclick="format('superscript')" title="Underline"><i class="fas fa-superscript"></i></button>
            <button id="underlineBtn" class="icon-btn" onclick="format('subscript')" title="Underline"><i class="fas fa-subscript"></i></button>

        </div>




        <div class="toolbar-group">
            <div class="dropdown">
                <select id="fonttype" class="font-dropdown">
                    <option selected="" disabled="">Font</option>
                    <option value="'my'">Oldhand</option>
                    <option value="'newavs'">Vashand</option>
                    <option value="'shiv'">Shivam</option>
                    <option value="'ary'">Aryhand</option>
                    <option value="'abs'">Abhand</option>
                    <option value="'handlee'">Handlee</option>
                    <option value="'Indie Flower'">Indie</option>
                    <option value="'Kalam'">Hindi</option>
                    <option value="'Cedarville Cursive'">Cursive</option>
                </select>
            </div> 
        </div>
            <div class="toolbar-group">

				<input class="font-size-dropdown" type="float" id="fonts" value="22px">
                
                <button class="icon-btn" ><i class="fas fa-text-height"></i> </button><input class="font-size-dropdown" type="float" id="verp" value="12px">
                <button class="icon-btn" ><i class="fas fa-arrows-alt-h"></i> </button><input class="font-size-dropdown" type="float" id="spc" value="1px">
                <button class="icon-btn" ><i class="fas fa-text-width"></i> </button><input class="font-size-dropdown" type="float" id="lspc" value="0px">
			
	
            </div>

<div class="toolbar-group">
            <div class="color-picker-wrapper">
                &nbsp;<input class="icon-btn" type="color" id="pen" value="#16035c">
            </div>
         <button id="underlineBtn" class="icon-btn" onclick="format('ForeColor','#000000')" title="Nga"><i class="fas fa-square"></i></button>
                     </div>

        
        
        <div class="toolbar-group">
            <button class="icon-btn" onclick="format('justifyLeft')" title="Align Left"><i class="fas fa-align-left"></i></button>
            <button class="icon-btn" onclick="format('justifyCenter')" title="Align Center"><i class="fas fa-align-center"></i></button>
            <button class="icon-btn" onclick="format('justifyRight')" title="Align Right"><i class="fas fa-align-right"></i></button>
            <button class="icon-btn" onclick="format('justifyFull')" title="Justify"><i class="fas fa-align-justify"></i></button>
        </div>
        <div class="toolbar-group">
            <button class="icon-btn" onclick="setBulletStyle('disc')" title="Bullet List"><i class="fas fa-list-ul"></i></button>
            <button class="icon-btn" onclick="setNumberStyle('decimal')" title="Numbered List"><i class="fas fa-list-ol"></i></button>
        
            
            <div class="dropdown">
                <select class="font-dropdown" id="stamp" >
                    <option selected="" disabled="">Branding </option>   
                    <option value=" ">None</option>
                    <option value="<img class='stmpimg' src='stmp.png'>">Classmate</option>
                    <option value="<img class='stmpimg'  src='stmp3.png'>">Delta</option>
                    <option value="<img class='stmpimg'  src='stmp2.png'>">Plane</option>
                    <option value="<img class='stmpimg'  src='stmp1.png'>">Tara</option>
                    <option value="<img class='stmpimg'  src='stmp4.png'>">Simple</option>
                </select>
            </div>
        </div>

        <div class="toolbar-group">
        
            <button class="icon-btn" onclick="window.location.href='#pop'" title="Paper"><i class="fas fa-file-alt"></i></button>
          

            <div class="dropdown">
                    <select id="rel">
                       <option selected="" disabled="">Quality</option>
                        <option value="1">Low</option>
                        <option value="2">High</option>
                        <option value="3">Very High</option>
                        <option value="4">Best</option>
                        <option value="5">Too big</option>
                        <option value="6">Enough!!</option>
                    </select>
            </div>
        
            <button class="icon-btn"  onclick="doCapture();" title="Capture"><i class="fas fa-camera"></i></button>
           
            <button class="icon-btn" onclick="downloadit();" title="Download"><i class="fas fa-download"></i></button>
           
           
           
<button class="icon-btn"><i class="fas fa-print"></i></button>
         
    </div>








	<!---Buttons and Loading gif--><img src="load.gif" class="load" id="load" style="display:none" />
                            <div id="action"></div>

    <div id="editor-container">
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
    </div>
</div>


	


<!---Capture Canva -->
		<script>
		function doCapture() {
			$('#load').show();
			var node = document.getElementById('paper');
			domtoimage.toPng(node).then(function(dataUrl) {
				$('#load').hide();
				var img = new Image();
				img.src = dataUrl;
				let res=document.body.appendChild(img);
                res.style.width = "50%";
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
      









<script>

(function() {
    function setBulletStyle(style) {
        document.execCommand('insertUnorderedList');
        const editor = document.getElementById('editor');
        if (editor) {
            const lists = editor.getElementsByTagName('ul');
            for (const list of lists) {
                list.style.listStyleType = style;
            }
        }
    }

    function setNumberStyle(style) {
        document.execCommand('insertOrderedList');
        const editor = document.getElementById('editor');
        if (editor) {
            const lists = editor.getElementsByTagName('ol');
            for (const list of lists) {
                list.style.listStyleType = style;
            }
        }
    }

    function toggleSlider(sliderId) {
        const slider = document.getElementById(sliderId);
        if (slider) {
            slider.style.display = slider.style.display === 'block' ? 'none' : 'block';
        }
    }



    function adt() {
         alert("I am an alert box!");
    }


    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        const icon = document.getElementById('mode-icon');
        if (icon) {
            if (document.body.classList.contains('dark-mode')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        }
    }

    function getKerning() {
        const kerningValue = document.getElementById('kerningValue');
        return kerningValue ? kerningValue.innerText : '';
    }

    function getSpacing() {
        const spacingValue = document.getElementById('spacingValue');
        return spacingValue ? spacingValue.innerText : '';
    }

    function pasteText() {
        navigator.clipboard.readText().then(text => {
            document.execCommand('insertText', false, text);
        }).catch(err => {
            console.error('Failed to read clipboard contents:', err);
        });
    }


    function toggleDropdown(dropdown) {
        if (dropdown) {
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }
    }

    function fColor(color) {
        document.execCommand('foreColor', false, color);
        const fontColors = document.getElementById('fontColors');
        if (fontColors) {
            fontColors.style.display = 'none';
        }
    }

    function bColor(color) {
        document.execCommand('backColor', false, color);
    }

    window.addEventListener('load', function() {
        const sampleEditor = document.getElementById('sampleeditor');
        if (sampleEditor) {
            sampleEditor.setAttribute('contenteditable', 'true');
        }
    });

    function format(command, value) {
        document.execCommand(command, false, value);
    }

    const addChangeListener = (elementId, cssVar) => {
        const element = document.getElementById(elementId);
        if (element) {
            element.addEventListener('change', (e) => {
                console.log(e.target.value);
                document.documentElement.style.setProperty(cssVar, e.target.value);
            });
        }
    };

    addChangeListener('pen', '--ink');
    addChangeListener('verp', '--ver');
    addChangeListener('fonts', '--fontsz');
    addChangeListener('fonttype', '--fontfp');
    addChangeListener('prg', '--nprg');
    addChangeListener('prg2', '--nprg');
    addChangeListener('spc', '--spac');
    addChangeListener('lspc', '--lspac');
    addChangeListener('stamp', '--stmppr');
    addChangeListener('opt-1', '--shd');
    addChangeListener('opt-2', '--shd');
    addChangeListener('opt-3', '--shd');
    addChangeListener('opt-3', '--scnr');
    addChangeListener('ot-1', '--nbk');
    addChangeListener('ot-2', '--nbk');
    addChangeListener('bg-1', '--backg');
    addChangeListener('bg-2', '--backg');
    addChangeListener('bg-3', '--backg');
    addChangeListener('bg-4', '--backg');
    addChangeListener('bg-5', '--backg');
    addChangeListener('bg-4', '--backg');
    addChangeListener('bg-6', '--backg');
    addChangeListener('bg-7', '--backg');
    addChangeListener('bg-8', '--backg');
    addChangeListener('bgbr', '--bgbr');


     let bgbr = document.getElementById('bgbr')
		bgbr.addEventListener('change', (e) => {
      let q = "brightness(" + e.target.value + "%)"
			let a =	document.documentElement.style.setProperty('--bgbr', q )
    console.log(q)
     		})

let stp = document.getElementById('stamp')
		stp.addEventListener('change', (e) => {
				console.log(e.target.value)
				let stpr = document.getElementById('stmppr')
				stpr.innerHTML = e.target.value	})



/*Add Table Row Column*/
  



var button = document.getElementById("tbl");
button.addEventListener("click", addtable);
function addtable() {
    let vbl = "inline";
    var node = document.getElementById('sampleeditor');

    document.documentElement.style.setProperty('--vib', vbl);

    var tabledata =  "<div><table id='main'><thead><tr><th><textarea placeholder='Hi'></textarea></th></tr></thead><tbody><tr><td><textarea placeholder='Hi'></textarea></td></tr></tbody></table></div>";

    node.innerHTML = tabledata;
}
var button = document.getElementById("rw");
button.addEventListener("click", addRow);
function addRow() {
    var table = document.getElementById("main");
    var action = document.getElementById("action");

    if (table == null) {
        document.documentElement.style.setProperty('--vib', "none");
        action.innerHTML = "<b>Insert Table First</b>";
        return;
    }

    var rws = table.rows;
    var cols = table.rows[0].cells.length;
    var row = table.insertRow(rws.length);
    var cell;
    for (var i = 0; i < cols; i++) {
        cell = row.insertCell(i);
        cell.innerHTML = '<textarea placeholder="Hi"></textarea>';
    }
}
var button = document.getElementById("col");
button.addEventListener("click", addColumn);
function addColumn() {
    var table = document.getElementById("main");
    var action = document.getElementById("action");

    if (table == null) {
        document.documentElement.style.setProperty('--vib', "none");
        action.innerHTML = "<b>Insert Table First</b>";
        return;
    }

    var rws = table.rows;
    var cell;
    for (var i = 0; i < rws.length; i++) {
        cell = rws[i].insertCell(-1);
        cell.innerHTML = '<textarea placeholder="Hi"></textarea>';
    }
}


      
 
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('output_image');
            if (output) {
                output.src = reader.result;
            }
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    // Expose necessary functions to the global scope
    window.setBulletStyle = setBulletStyle;
    window.setNumberStyle = setNumberStyle;
    window.toggleSlider = toggleSlider;
    window.toggleDarkMode = toggleDarkMode;
    window.getKerning = getKerning;
    window.getSpacing = getSpacing;
    window.pasteText = pasteText;
    window.toggleDropdown = toggleDropdown;
    window.fColor = fColor;
    window.bColor = bColor;
    window.format = format;

    window.previewImage = previewImage;
})();




</script>





</body>
</html>
