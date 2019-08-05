<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.sections {
    background-color: sienna;
    color: white;
    margin: 20px;
    padding: 20px;
}
</style>
</head>
<body>
<a href="index.php"><img class="navbar-brand" src="public/images/Steve4_1.jpg" alt="Steve logo" /></a>-
    
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="StevesMap.php">Map</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<div style="padding-left:16px">
    <h1>Steve Serjeant</h1>
  <h2>My profile</h2>
</div>

<div class="sections">
  <h2>Info</h2>
  <p>Some information about me!</p>
  <p>Married with two children. Born in Aldershot and spent my early years shuttling between BAOR and the UK. Family settled in 
      Reading when I started senior school and I moved to Plymouth in 2004. <br>
      Currently working at Sainsbury's Marsh Mills store as part of the Customer Service team covering the tills, self-checkouts and the petrol station.</p>
</div>
<div class="sections">
  <h2>Why am I here!</h2>
  <p>Why study!<br> I have always had an interest in computers and have now combined this with a desire to continue my education and study for a degree.
  <br>I decided on Computing with information security to better protect myself and those around me in the modern technological environment.</p>
</div>
<div class ="sections">
    <h2> Something About Me!</h2>
    <p> I Love poker! I play whenever I can, not very much at the moment though, sadly. Mecca for me is obviously Las Vegas!!<br>
        Have been there twice in the past, winning a small Casino tournament while there. My dream is to someday play in the WSOP (World Series of Poker) Main Event!!!</p
</div>

</body>
</html>
    <?php include_once 'public/includes/footer2.php'; ?>

