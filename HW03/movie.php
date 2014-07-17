<!DOCTYPE html>
<html>
   <head>
      <title>Rancid Tomatoes</title>
      <meta charset="utf-8" />
      <link href="movie.css" type="text/css" rel="stylesheet"/>
   </head>

   <body>
      <div id="banner">
         <center><img src="rancidbanner.png" alt="Rancid Tomatoes" /></center>
      </div>
<?php

GLOBAL $movie;
$movie = $_GET["film"];
list($name, $time, $score) = file("$movie/info.txt");

?>

      <h1 id="heading"><center><? echo $name ?> (<? echo $time?>)</center></h1>

      <div id="container"> <!-- for container -->

         <div id="overview"> <!-- for overview -->
            <div>
                  <img src="<? echo $movie ?>/overview.png" alt="general overview" />
            </div>


            <dl id="overview-font">
           
<?php
// print Overview Block
$overview = file("$movie/overview.txt");

$i = 0;
foreach ($overview as $line) {

   $pattern = array('/:/');
   $replacement = array(' ');
   $tmpArray = explode(" ", preg_replace($pattern, $replacement, $line));
   echo "<dt>$tmpArray[$i]</dt>";
   $description = array_shift($tmpArray);
   echo "<dd>";
   foreach ($tmpArray as $ddLine)
      echo "$ddLine ";
   echo "</dd>";

}
?>

            </dl>

         </div> <!-- for overview -->

         <div id="banner-review">
            <img src="<? if ($score >= 60) echo 'freshlarge.png'; else echo 'rottenlarge.png'?>" alt="Rotten" />
            <span id="number"><?echo $score ?></span>
         </div>

         <div id="review-block"> <!-- user review -->

<?php
// print Review Block
$allReviews = glob("$movie/review*.txt");
$numReview = count($allReviews);

reviewParser($numReview, $movie);

function reviewParser($numReview, $movie) {
   $bound = ceil($numReview / 2);  

   // print each block
   for ($i = 1; $i <= $numReview; $i++) {

      if ($i == 1 || $i == ($bound + 1)) {
         echo '<span class="review">';
      }

      // Deal the problem, when reviews more than 10 
      if ($numReview >= 10) {
         if ($i < 10)
            $location = $movie . "/review" . '0'. $i .".txt";
         else 
            $location = $movie . "/review" . $i .".txt";
      } else {
         $location = $movie . "/review" . $i .".txt";
      }
      list($review, $score, $name, $from) = file($location);


      // print out quote
      echo '<p class="quote">';
      if ($score == "ROTTEN\n") {
         echo '<img src="rotten.gif" alt="Rotten/>"';
      } else {
         echo '<img src="fresh.gif" alt="Fresh/>"';
      }
      echo '<q>' . $review . '</q>';
      echo '</p>';

      // print out reviewer
      echo '<p>';
      echo '<img src="critic.gif" alt="Critic" align="left" />';
      echo $name .' <br />';
      echo $from;
      echo '</p>';

      if ($i == $bound || $i == $numReview) {
         echo '</span>';
      }

   }

}
?>
      </div> <!-- user review --> 
      <div id="page"><p>(1-10) of 88</p></div>
      </div> <!-- for container -->


      <div align="right">
               <a href="https://webster.cs.washington.edu/validate-html.php"><img src="w3c-html.png" alt="Valid HTML5" /></a><br>
               <a href="https://webster.cs.washington.edu/validate-css.php"><img src="w3c-css.png" alt="Valid CSS" /></a>
      </div>
   </body>
</html>
