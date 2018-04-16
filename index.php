<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
?>

<html>

<head>
  <title>Dream Journaler</title>
  <link rel="icon" href="logo/favicon.ico" type="image/x-icon" />
</head>

<link rel="stylesheet" href="css/styles.css">
<body>

<ul class="navbar">
  <li class="navbar"><img src="logo/logo.png" height="42" width="42"></li>
  <li class="navbar"><a class="active" href="index.php">Home</a></li>
  <li class="navbar"><a href="my-journal.php">My Journal</a></li>
  <li class="navbar"><a href="learn.php">Learn</a></li>
  <li class="navbar"><a href="resources.php">Resources</a></li>
  <li class="navbar"><a href="browse-journals.php">Browse Journals</a></li>
  <?php 
  if( !isset($_SESSION['user']) ) {
	echo '<li class="navbar"><a href="login.php">Login</a></li>';
	} else {
	echo '<li class="navbar"><a href="logout.php?logout">Sign Out</a></li>';
	} 
  ?>
</ul>

<body>
<div class="background">
	<div id="content">
		<h1>Home</h1>
        <h3>What is Dream Journaler?</h3>
		<p>
            Dream Journaler is a free website service that allows you to record your dreams for either private use or to share with others.  Journal entries are kept private unless you would like to share them for others to read.  Anyone is free to browse shared journal entries.  If you would like to write your own, you can register </p><a href="register.php">here</a><p> and begin right away!
		</p>
        <h3>Why Keep a Dream Journal?</h3>
        <h4>Dream Memory</h4>
		<p> 
            While it is true that everyone has dreams, not everyone remembers them.  Some people might say that they do not dream.  What they do not realize is that they do, but they don't remember them.  Some people have a better memory of their dreams than others.  
		</p>
        <p>
            Anyone can train their mind to better recall dreams.  Keeping a dream journal is the best way to do this.  By keeping a dream journal, you can tell your mind that the dream you just had is worth remembering.  This is best done right away after waking up.  The longer you wait the more memory you will lose.  With time and more journal entries, you will eventually start recalling dreams much clearer and forget less.

        </p>
        <h4>Lucid Dreaming</h4>
        <p>
            If you want to practice lucid dreaming then you will probably want to keep a dream journal.  This helps to recognize patterns across your dreams.  If you want to know more about lucid dreaming I recommend checking out the learn page.
        </p>
        <h4>Creativity</h4>
        <p>
            Dreams can make you more creative.  There have been a lot of famous ideas that have come from dreaming.  Many books, movies, and music have been heavily influenced by dreams.  If you are looking for a source of creativity and new ideas, look no further than your own dreams.

        </p>
        <h4>It's fun</h4>
        <p>
            The most important part of keeping a dream journal is that it is enjoyable and fun to do.  Dreaming is an amazing experience that can be looked back on by use of a dream journal.  Whether it be a scary, funny, or exciting dream; they can be looked back on or shared for others to enjoy.
        </p>

		</div>
	
	
</div>

<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
	
</body>

</html>