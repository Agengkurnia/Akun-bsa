<style type="text/css">
.horizontalcssmenu{
font: 9px Verdana;
background: url(images/bg2.png);
width: 950px;
}

.horizontalcssmenu ul{
margin: -1px;
padding: 1px;
list-style-type: none;

}


.horizontalcssmenu ul li{
position: relative;
display: inline;
float: right;
}


.horizontalcssmenu ul li a{
display: block;
background: url(images/bg2.png); 
padding: 8px 10px ;
color: white;
text-decoration: none;
}

* html .horizontalcssmenu ul li a{ 
display: inline-block;
}


.horizontalcssmenu ul li a:hover{
color: white;

}
	

.horizontalcssmenu ul li ul{
position: absolute;
display: block;
visibility: hidden;
}


.horizontalcssmenu ul li ul li{
display: list-item;
float: none;
}


.horizontalcssmenu ul li ul li ul{
top: 0;
}


.horizontalcssmenu ul li ul li a{
font: normal 10px Verdana, Arial, Helvetica, sans-serif ;
background: #669966;
width: 160px; /*width of sub menus*/
padding: 5px;
margin: 0 0;
border-top-width: 0;
border-top: 1px solid #CAD6EC;
border-left: 1px solid #CAD6EC;
border-right: 1px solid #CAD6EC;
color:white;
}

.horizontalcssmenu ul li ul li a:hover{ 
background: #009999;
color: white;
font: bold 10px Verdana ;
font-style:oblique;
}

</style>

<script type="text/javascript">
var cssmenuids=["cssmenu1"] 
var csssubmenuoffset=-1 

function createcssmenu2(){
for (var i=0; i<cssmenuids.length; i++){
  var ultags=document.getElementById(cssmenuids[i]).getElementsByTagName("ul")
    for (var t=0; t<ultags.length; t++){
			ultags[t].style.top=ultags[t].parentNode.offsetHeight+csssubmenuoffset+"px"
    	var spanref=document.createElement("span")
			spanref.className="arrowdiv"
			spanref.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;"
			ultags[t].parentNode.getElementsByTagName("a")[0].appendChild(spanref)
    	ultags[t].parentNode.onmouseover=function(){
					this.style.zIndex=100
    	this.getElementsByTagName("ul")[0].style.visibility="visible"
					this.getElementsByTagName("ul")[0].style.zIndex=0
    	}
    	ultags[t].parentNode.onmouseout=function(){
					this.style.zIndex=0
					this.getElementsByTagName("ul")[0].style.visibility="hidden"
					this.getElementsByTagName("ul")[0].style.zIndex=100
    	}
    }
  }
}

if (window.addEventListener)
window.addEventListener("load", createcssmenu2, false)
else if (window.attachEvent)
window.attachEvent("onload", createcssmenu2)
</script>


	<div class="horizontalcssmenu">
	<ul id="cssmenu1">
	<? echo $_SESSION[menu];?>
			
	</ul>
	<br style="clear: center;" />
	</div>
	