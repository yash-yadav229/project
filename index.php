<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
					<?php endif ?>
	</div>



		
</body>
</html>

<html>
<head>
<style type="text/css">
body{background:url("background website.jpg"); background-size: 100% 100%;}
.btn{background-color: #7FFF00;
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-colour: #FFFF00;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:5px;}
.hovrrr:hover {background: #00FFFF;}

p.button{font-family:Lucida handwriting; font-size:small; }
</style>
<title> Hamara HTML</title>

</head>
<body leftmargin=15 Alink="Red" VLINK="Purple">
<h1><center><font face="Lucida handwriting" size =7 color="Red"><b> Your G@ming Lounge( ^_^ )</b></font></center></h1>
<H3><marquee><Font face="Imprint MT Shadow" size=6 color="Green">FoR ThE PlAyErS... By ThE PlAyErS</marquee></font></H3>
<h2><font color="Green" size=6 ><i>Click on the following links <br>
		( As Per Your Requirements )</i></font><h2>


<body>
<table><tr>
<td><img src="d1.jpg"></td><td align="right">
		<button class="btn hovrrr"><a href="Setups.html"><p class="button">Setups<br>_</p></a></button>
		<button class="btn hovrrr"><a href="Why Prime Membership.html"><p class="button">Why Prime<br> Membersip</p></a></button>
		<button class="btn hovrrr"><a href="Check Eligibility.html"><p class="button">Check<br>Eligibility</p></a></button>
		<button class="btn hovrrr"><a href="Photo Gallery.html"><p class="button">Photo <br>Gallery</p></a></button>
		<button class="btn hovrrr"><a href="Tournaments.html"><p class="button">Tournaments<br>_</p></a></button>
		<button class="btn hovrrr"><a href="Feedback.html"><p class="button">Feedback<br>_</p></a></button>
		<center><button class="btn hovrrr"><a href="Contact Us.html"><p class="button">Contact Us<br>_</p></a></button>
		<button class="btn hovrrr"><a href="Register for tournaments.html"><p class="button">Register For<br>Prime Membership</p></a></button>
</td></tr>
</table>		
<table align="center" border=2 NOSHADE> <TR><TD>
	<img src="Project/L2.jpg" width=1000 height=300>
	</TD></TR>
</Table>

<font size="5">
	<DT><Font color="Red"><i>Setups Available =></font></i>&nbsp&nbsp&nbsp&nbsp</font></DT>
	<DD><font color="White">=> Configurations of different Pc's are avaialble with series no. </DD>

<Br>
<br>
	<DT><Font color="Red"><i>Charges For Playing </font></i> </DT>
	<DD><font color="White">=>  Charges differ for normal members and prime members</DD>

<br>
<Br>

	<DT><Font color="Red"><i> Benifits for prime members </font></i> </DT>
	<DD>=> <font color="White">Special Members are given special benfits on Playing Charges as well as Special Setups are Provided</DD>

<br>
<Br>
	<DT><Font color="Red"><i>Check Your Eligibilty</font></DT>
	<DD><font color="White">=>Only few members are eligible For Prime Membership<br>Criterias Include age, income etc.</DD>


<br>
<Br>
	<DT><Font color="Red"><i> Photo Gallery</font></i> </font><DT>
	<DD><font color="White">=> Check Out the Enviornment of Your Gaming Lounge & Photos Of the Pro Winners</DD>

<br>
<Br>
	<DT><Font color="Red"><i> Details regarding Tournaments</font></i></DT>
	<DD>    <font color="White">     => Various Tournaments are organised with Cash Prizes</DD>
<br>
<Br>
	<DT><font color="REd"><i>Give Us A Feedback &nbsp&nbsp&nbsp&nbsp</i></font></DT>
	<DD><font color="White">=> Be Frank..!! Help Us Improve</DD>
<br>
<Br>
	<DT><font color="REd"><i>Contact Us</font></i> <DT>
	<DD><font color="White">=> Contact Details&nbsp&nbsp&nbsp&nbsp</DD>

</font>
<br>
<Br>
</DL>
<H3><marquee><Font face="Imprint MT Shadow" size=6 color="Green">Thanks for Visiting</marquee></font></H3>

</body>
</head>
</html>