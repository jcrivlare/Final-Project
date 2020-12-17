<style type="text/css">
*{
  margin: 0;
  padding: 0;
  border: 0;
}

body {
  background: #F1DADA;
}

.container {
  max-width: 900px;
  margin: 50px auto 180px;
  text-align: center;
}

header {
  text-align: center;
  background: black;
  padding: 20px 0;
}

nav ul li {
  display: inline;
}

nav a {
  text-decoration: none;
  color: black;
  background: white;
  padding: 5px;
}
footer {
  text-align: center;
  background: black;
  padding: 20px 0;
  color: white;
}

footer a {
  text-align: center;
  color: white;
  font-size: 25px;
  margin: 0 5px;
  transition: .3s;
}

footer a:hover {
  color: grey;
  transition: .3s;
}
</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="work/liveperformance.html">Work/Live Performance</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <p>Website by Jacqueline Crivlare | Follow me at
    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram-square"></i></a>
    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
  </p>
</footer>
