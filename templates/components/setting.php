<script>function myFunction1() {
    document.getElementById('myDIV1').style.display ='block';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction2() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='block';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction3() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='block';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction4() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='block';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction5() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='block';
    
}
</script>

<br/><br/><br/><div class="container-fluid" Style="background-color:white">
<center><h1>Account Settings</h1></center><hr/>
<div class="row">
  <div class="col-md-3">
   <div class="mycontent-left">
<ul Style="margin:50px;color:grey;font-family:sans-serif; border-right: 1px solid #ccc;margin-right:60px;">
<li Style="margin:30px"><a href="#" onclick="myFunction1()">Profile picture</a></li>
<li Style="margin:30px;"><a href="#" onclick="myFunction2()">Change Username</a></li>
<li Style="margin:30px;"><a href="#" onclick="myFunction3()">Change Password</a></li>
<li Style="margin:30px;"><a href="#" onclick="myFunction4()">Deactivate Account</a></li>
<li Style="margin:30px;"><a  href="#" onclick="myFunction5()">Have a query? We are here for you.</a></li>
   </div>
  </div>
  <div class="col-md-9" Style="padding:50px;">
 
	
	<div id="myDIV1" style="display: block;">
    Hello world!! 1              
    </div>
	
	<div id="myDIV2" style="display: none;">
    Hello world!!  2             
    </div>
	
	<div id="myDIV3" style="display: none;">
    Hello world!!  3             
    </div>
	
	<div id="myDIV4" style="display: none;">
    Hello world!!  4             
    </div>
	
	<div id="myDIV5" style="display: none;">
    Hello world!!  5             
    </div>
	

</div>
</div>
</div>

