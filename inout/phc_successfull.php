<html>
<head>
    <title>NGO</title>
    <script src="tabcontent.js" type="text/javascript"></script>
    <link href="template2/tabcontent.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:#F6F9FC; font-family:Arial;">
<center><img src ="logo.jpg"   height ="79"></center>
<form align="right" name="form1" method="post" action="log_out.php">
  <label class="logoutLblPos">
  <input name="logout" type="submit" id="submit2" value="LOG OUT">
  </label>
</form>

    <div style="width: 700px; margin: 0 auto; padding: 30px 0 40px;">
                <ul class="tabs" data-persist="true">
            <li><a href="#view1">Request</a></li>
             <li><a href="#view2">Notification</a></li>
            
        </ul>
        <div class="tabcontents">
            <div id="view1">
                <b>Request</b>
                <p>You can request things for your health center  which will be dilevered by concerned NGO of your Region</p>
                 <form action="request.php" method="post">
                 Phone number : <br> 
                 <input name="phone_no" size="15" type="text" /><br><br>
                 Subject : <br> 
                 <input name="subject" size="100" type="text" /><br><br>
                 Message :<br>
                  <TEXTAREA name="message" ROWS=10 COLS=100 >
</TEXTAREA><br><br><br>
 Address :<br>
                  <TEXTAREA name="address" ROWS=3 COLS=50 >
</TEXTAREA><br><br>
                Pincode  :
                 <input name="pincode" size="10" type="text" />
</TEXTAREA>
  <input type="submit" >
</form>
<h3> Successfully Sent</h3>
               </div>
       
            <div id="view2">
                <b>Notification</b>
                <p>
            </div>
    </div>
</body>
</html>
