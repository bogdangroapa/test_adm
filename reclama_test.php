<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */

.modal {
    /*display: none; /* Hidden by default */
    left: -200px;
    text-align: left;
    position: fixed; /* Stay in place */
    z-index: 1000000; /* Sit on top */
    -webkit-transform: translate(0,-50%);
    -moz-transform: translate(0,-50%);
    -ms-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    top: 60%;
    width: 30%; /* Full width */
    height: 30%; /* Full height */
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: solid 2px #fff;
    -webkit-box-shadow: 0px 0px 22px 7px rgba(0, 0, 0, 0.2);
    -moz-box-shadow:    0px 0px 22px 7px rgba(0, 0, 0, 0.2);
    box-shadow:         0px 0px 22px 7px rgba(0, 0, 0, 0.2);
    background: #EEE;
    padding-bottom: 100px; /* Location of the box */
    overflow: auto; /* Enable scroll if needed */
    
}

.bula-ultima-ora-titlu {
    box-sizing: border-box;
    background: #FF3B30;
    height: 40px;
    line-height: 40px;
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #FFFFFF;
    font-kerning: normal;
    padding-left: 20px;
}
.bula-ultima-ora-close {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    box-sizing: border-box;
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    width: 40px;
    height: 40px;
    /*background: url("../images/bula-ultima-ora-close.png") no-repeat center;*/

}

#bula-ultima-ora-close svg {
    margin: 12px 0 0 12px;
}
#bula-ultima-ora-close:hover {
    background-color: #000;
    background-color: rgba(0,0,0,0.7);
}
#bula-ultima-ora-link {
    box-sizing: border-box;
    display: block;
    position: relative;
    text-decoration: none;
    width: 100%;
    height: 260px;
}
#bula-ultima-ora-link span {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    box-sizing: border-box;
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px 20px;
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    font-size: 20px;
    color: #FFFFFF;
    line-height: 22px;
    font-weight: bold;
    background: #000;
    background: rgba(0,0,0,0.5);
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
    background: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,1));
    background: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,1));
    background: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,1));
    background: -o-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,1));
}

#bula-ultima-ora-link:hover span {
    padding: 40px 20px 20px;
}

#cookieContainer {
    max-width: 1000px;
    margin: 0 auto 10px;
}




</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn2").click(function(){
        $("#box").animate({height: "2000px"});
    });
    $("#btn3").click(function(){
        $("#box").animate({height: "100px"});
    });
});
//butoanele de animate si reset
</script>
<script>
$(document).ready(function(){
    $("#btn4").click(function(){
        $("#bula1").animate({left: "30px"}, 400);
    });
    $("#btn5").click(function(){
        $("#bula1").animate({left: "-500px"}, 400);
    });  
});
//butoanele de muta dr si st
var triggerFlag = true;
$(window).scroll(function () {
	var scroll = $(document).scrollTop();
	if (scroll > 20 && triggerFlag ) {
		$('#bula').animate({left: 20}, 400);
        triggerFlag = false;
	} else if (scroll < 20 && !triggerFlag) {
        $('#bula').animate({left: -500}, 400);
        triggerFlag = true;
    }
}); 
</script>

</head>
<body>

<h2>Modal Example</h2>

<button id="Btn1">Open bula</button>

<p>
With a user base of around 5,000 and records of over 30,000 
</p>


<button id="btn2">Animate height</button>
<button id="btn3">Reset height</button>
<button id="btn4">Muta dr bula</button>
<button id="btn5">Muta st bula</button>
<div id="box" style="background:#98bf21;height:100px;width:100px;margin:6px;"></div>


<div id="bula" class="modal">
	<div id="bula-ultima-ora-titlu" class="bula-ultima-ora-titlu">ULTIMA ORA</div>
    <div id="bula-ultima-ora-close" class="bula-ultima-ora-close"></div>
    	<a title="SOC INCREDIBIL TEST TEST " id="bula-ultima-ora-link" style='background-image: url("http://storage0.dms.mpinteractiv.ro/media/401/581/7962/16175958/5/medalie.jpg?width=400"); background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;' href="http://admin-online.ro" target="_blank">
        <span>BULA TEST BULA  BULA</span>
        </a>
</div>

<div id="bula1" class="modal">
	<div id="bula-ultima-ora-titlu" class="bula-ultima-ora-titlu">ULTIMA ORA</div>
    <div id="bula-ultima-ora-close" class="bula-ultima-ora-close"></div>
    	<a title="SOC INCREDIBIL TEST TEST " id="bula-ultima-ora-link" style='background-image: url("http://storage0.dms.mpinteractiv.ro/media/401/581/7962/16175958/5/medalie.jpg?width=400"); background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;' href="http://admin-online.ro" target="_blank">
        <span>SOC TEST BULA1</span>
        </a>
</div>

<script>
// Get the modal
var modal1 = document.getElementById('bula');
// Get the button that opens the modal
var btn1 = document.getElementById("Btn1");
// Get the <span> element that closes the modal
//var span1 = document.getElementsByClassName("close")[0];
var bula1 = document.getElementsByClassName("bula-ultima-ora-close")[0];
// When the user clicks the button, open the modal 
btn1.onclick = function() {
   modal1.style.display = "block";
  }

bula1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal1.style.display = "none";
    }
}
/*
var triggerFlag = true;
$(window).scroll(function () {
	var scroll = $(document).scrollTop();
	if (scroll > 20 && triggerFlag ) {
		$('#bula').animate({left: 20}, 400);
        triggerFlag = false;
	} else if (scroll < 20 && !triggerFlag) {
        $('#bula').animate({left: -500}, 400);
        triggerFlag = true;
    }
}); */
</script>

</body>
</html>