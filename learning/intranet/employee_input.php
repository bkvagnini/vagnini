<?php
if(isset($_POST['submit'])) {
	$file = "cala-employees.xml";
	$userNode = 'employee';
	
    $doc = new DOMDocument('1.0');
	$doc->preserveWhiteSpace = false;   
	$doc->load($file);
    $doc->formatOutput = true;
	
	$root = $doc->documentElement; 

    $post = $_POST;
    unset($post['submit']);

    $user = $doc->createElement($userNode);
    $user = $root->appendChild($user);
	
	foreach ($post as $key => $value) {
        $node = $doc->createElement($key, $value);
		$user->appendChild($node);
    }
	$doc->save($file) or die("Sorry, there's a problem saving the file.");
	header('Location: thanks.php'); 
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CALA Intranet- adding employees</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="../_scripts/respond.min.js"></script>
<![endif]-->
<link href="styles/main.css" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
<link rel="stylesheet" href="styles/base.css" type="text/css">
</head>
<body id="blogPage">
<header class="blogHeader pageHeader">
  <h1>CALA Intranet Page<a href="/index.htm" title="home"></a></h1>
  <nav id="pageNav" class="cf">
    <ul>
      <li><a href="programs/programs.htm" title="programs">Programs</a></li>
      <li><a href="admissions.htm" title="admissions">Admissions</a></li>
      <li><a href="student_portal.htm" title="student portal">Student Portal</a></li>
      <li><a href="campus_portal.htm" title="campus portal">Campus</a></li>
      <li><a href="alumni.htm" title="alumni">Alumni</a></li>
      <li><a href="store/index.php"  title="Roux Academy Store">store</a></li>
      <li><a href="about/about.htm"  title="about Roux Academy">About</a></li>
    </ul>
  </nav>
</header>
<div id="contentWrapper">
  <article id="mainContent">
    <h1>New Employee</h1>

        <div id="container">
          <form name="form1" method="post" action="">
            <p>
              <label for="firstName">First Name: </label>
              <input type="text" name="firstName" id="firstName" placeholder="Your first name" autofocus required>
            </p>
			<p>
              <label for="lastName">Last Name: </label>
              <input type="text" name="lastName" id="lastName" placeholder="Your last name" required>
            </p>
				   <p>
              <label for="Ext">Ext: </label>
              <input type="tel" name="Ext" id="Ext">
            </p>
				   <p>
              <label for="Int">Int: </label>
              <input type="tel" name="Int" id="Int">
            </p>
				<p>
              <label for="room">Room #: </label>
              <input type="text" name="room" id="room" placeholder="Room#" required>
            </p>
            <p>
              <label for="email">Email: </label>
              <input type="email" name="email" id="email">
            </p>
         
            <p>
              <label for="birthday">Date of birth: </label>
              <input type="date" name="birthday" id="birthday">
            </p>
            <p>
              
            <p style="text-align: center;">
              <input type="submit" name="submit" id="submit" value="Submit">
            </p>
          </form>
        </div>
  </article>
  
</div>
<footer id="pageFooter" class="cf">
  <nav class="footerNav">
    <section class="col">
      <h3>About CALA</h3>
      <div class="col1">
        <ul>
          <li><a href="_source/mission.htm" title="Our mission">Mission Statement</a></li>
          <li><a href="_source/history.htm" title="school history">School History</a></li>
          <li><a href="_source/accreditation.htm" title="accreditation and affliates">Accreditation &amp; Affiliates</a></li>
          <li><a href="_source/board.htm" title="board members">Board Members</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="_source/faculty.htm" title="faculty and staff">Faculty &amp; Staff</a></li>
          <li><a href="_source/visiting_professors.htm" title="visiting professors">Visiting Professors</a></li>
          <li><a href="_source/museum.htm" title="Maribielle Roux Museum">Marbielle Roux Museum</a></li>
          <li><a href="_source/directions.htm" title="directions">Map &amp; Directions</a></li>
        </ul>
      </div>
    </section>
    <section class="col">
      <h3>Admissions &amp; Programs</h3>
      <div class="col1">
        <ul>
          <li><a href="_source/degrees.htm" title="Degree programs">Degree Programs</a></li>
          <li><a href="_source/catalog.htm" title="course catalog">Course Catalog</a></li>
          <li><a href="_source/fine_art.htm" title="fine art programs">Fine Art Programs</a></li>
          <li><a href="_source/design.htm" title="design concentration">Design Concentration</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="_source/fashion.htm" title="fashion program">Fashion Program</a></li>
          <li><a href="_source/product_design.htm" title="product design">Product Design</a></li>
          <li><a href="_source/continuing_ed.htm" title="Continuing Education">Continuing Education</a></li>
          <li><a href="_source/financial_aid.htm" title="tuition and financial aid">Tuition &amp; Financial Aid</a></li>
        </ul>
      </div>
    </section>
    <section class="col">
      <h3>Student Resources</h3>
      <div class="col1">
        <ul>
          <li><a href="campus.htm" title="Campus information">Campus Information</a></li>
          <li><a href="housing.htm" title="student housing">Student Housing</a></li>
          <li><a href="contact.htm" title="transcript request">Transcript Request</a></li>
          <li><a href="applying.htm" title="application process">Application Process</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="portfolio_review.htm" title="portfolio review">Portfolio Review</a></li>
          <li><a href="conselling.htm" title="career counselling">Career Counselling</a></li>
          <li><a href="internships.htm" title="internship programs">Internship Programs</a></li>
          <li><a href="student_portal.htm" title="student portal login">Student Portal Login</a></li>
        </ul>
      </div>
    </section>
  </nav>
  <p>&copy;Copyright  Center for Advancement of Learning and Assessment (CALA) &amp; Design.  All rights reserved. <a href="_source/privacy.htm" title="privacy statement">Privacy Statement</a> |<a href="_source/legal.htm" title="legal terms"> Legal Terms and Conditions</a> </p>
</footer>
</body>
</html>
