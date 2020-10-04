<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.parent{
			position: relative;
            top: 110px;
            left: 370px; 
			width: 500px;
			height: 400px;
			background-color: black;
		}
        #child{
			position: relative;
            top: 100px;
            width: 250px;
            height: 200px;
            left: 125px;
                 
			background-color: yellow;
		}
        #son{
			position: absolute;
            top: 17px;
            width: 220px;
            height: 170px;
            left: 15px;
            background-color: aqua;
    
		}
        
	</style>
	
</head>

<body>


<div class="parent">
    <div id="child">
        <div id="son" imgsrc="img/cc1.jpg"></div>

    </div>
</div>
</body>
</html>