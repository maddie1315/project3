<style type="text/css">
  h3 {
    font-family: 'Cormorant Garamond', serif;
    text-transform: uppercase;
    font-weight: normal;
  }

  p,
  a {
    font-family: 'Open Sans', sans-serif;
  }

  header nav ul li {
    display: inline-block;
  }

  header nav a {
    text-decoration: none;
    text-transform: uppercase;
    color: black;
    font-size: 14pt;
    margin: 10px 20px;
  }

  .container {
    max-width: 500px;
    text-align: center;
  }
</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="projects.html">Projects</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h3>Missing fields</h3>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
