<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
?>

<html>
<head>
  <title>Dream Journaler</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="styles.css">
<body>

<ul>
  <li><img src="logo/logo.png" height="42" width="42"></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="my-journal.php">My Journal</a></li>
  <li><a class="active" href="learn.php">Learn</a></li>
  <li><a href="resources.php">Resources</a></li>
  <li><a href="browse-journals.php">Browse Journals</a></li>
  <li><a href="help.php">Help</a></li>
  <?php 
  if( !isset($_SESSION['user']) ) {
	echo '<li><a href="login.php">Login</a></li>';
	} else {
	echo '<li><a href="logout.php?logout">Sign Out</a></li>';
	} 
  ?>
</ul>

<div class="background">
<div id="content">
		<h1>Learn</h1>
        <h3>What Are Dreams?</h3>  
        <p>
            Dreams are a mysterious thing.  Sometimes you wake up from a deep sleep and realize everything that was just happening that seemed so real was actually just in your head while you were asleep.  For a long time scientists have tried to figure out exactly what dreams are.  Basically they are subconscious imaginings that contain sensations, such as images and sounds, while you are asleep.
        </p>     
        <p>
            Dreams most often happen during REM, also known as rapid eye movement, which is the deepest stage of sleep.  It is believed that everyone has dreams, even if some people do not remember them.  You are more likely to remember dreams if you wake up during a REM cycle.  Most dreams however are forgotten forever and can quickly fade soon after waking.  Dreams continue to remain mysterious as it is difficult to prove or disprove different theories.
        </p>
        <h3>What Are Lucid Dreams?</h3>  
        <p>
            Normally when you are dreaming, you are not really aware of what is going on.  You are sort of on a ride that your brain puts you through without making any decisions or having any control.  However when you are in a dream and realize you are actually dreaming, you can manipulate the dream.  This is known as lucid dreaming.
        </p>
        <p>
            When you lucid dream, you have the power to control what is happening.  This means you can fly around and explore, build anything you want, meet any celebrity, or anything you can possibly imagine.  There is no limit to what you can do!  Sounds pretty awesome right?  Most people don’t really know much about lucid dreams and don't experience them.  It can be difficult to achieve and prevent your brain from shutting off, however there are ways to train your brain to allow you to lucid dream more easily.
        </p>
        <h3>How To Lucid Dream</h3>
        <p>
            With time anyone can learn to lucid dream.  There are many ways you can read about online to train your brain but for now we will just start with some basics. 
        </p>
        <p>
            If you want to try to lucid dream quickly, there is a faster method you can try.  This does not always work and can be tricky.  Just be aware that these lucid dreams can be intense and the experience is different for everyone.  They will feel very real, but no matter what happens all you have to remember is that it is just a dream.  Now that that is out of the way, time to learn how to do it!
        </p>
        <p>
            For this first method, you will essentially be waking up earlier than usual and then going straight back to sleep again.  This method is known as the ‘Wake Back To Bed Technique’.  You set an alarm about 2 hours before you plan to get up in the morning.  This way you will wake up during the REM cycle.  Be sure to put your alarm or phone where you can turn it off without getting out of bed or even opening your eyes if you can help it.  Also the softer/least disturbing sound that wakes you up the better.  Be sure that the alarm gets turned off and not put on snooze mode.
        </p>
        <p>
            Once you wake up, try and keep your eyes closed and turn off the alarm.  Then, just go back to sleep.  But as you do so, you are going to attempt to go straight into a dream, consciously, as you fall asleep.  In order to do this you must keep your brain active.  The best way to do this is to focus on a location you would like to be in your dream.  Keep reminding yourself that you want to lucid dream and that you are awake.  This can be difficult as you can get nervous and really excited at first.  Once you succeed, you will be in a dream and know that you are.
        </p>
            There are a few things to keep in mind when lucid dreaming especially if it is your first time.
        <p>

        </p>

        <ul>
         <li>Try not to get too excited or you will wake yourself up before you want to.  This can be difficult the first few times, but don't worry!  You will get used to it after a few times.</li>
         <li>Relax and explore the dream before trying anything too extreme.</li>
         <li>If your surroundings start to become unclear, you can try spinning around.  This can help clear things up.  This is helpful because sometimes you will lose focus and drift back into a regular dream or wake up.</li>
         <li>In case you want to check if you are in a lucid dream for sure, look at one of your hands and count your fingers.  There will never be five.  You may have seven, nine, or more.</li>
          <span></span>
        </ul> 

        <p>
            This method has proved to be a quick and effective way to lucid dream.  However if you want to go through some long term training to be able to lucid dream all the time without setting an extra alarm every night, there are some other methods.
        </p>
        <p>
            The first thing you should do is keep a dream journal.  This can be a notebook at your bedside, or an app on your phone to record yourself verbally.  It is important to keep record of dreams so that you can follow patterns in the dreams.  After recording many dreams, you will be able to recognize patterns that happen often.  Then you can connect that event to a reality check to see if you are dreaming.  This also helps with improving your dream memory.
        </p>
        <p>
            The most important step is always doing reality checks throughout each day.  Once you are in the habit of checking if you are dreaming, you will do this in dreams as well.  Once you do a reality check in a dream, you will realize you are in a lucid dream.  You want to build subconscious habits that will tell you if you are dreaming.  Such as counting your fingers.  If you count more than five fingers then you know you are dreaming.  
        </p>
        <p>
            Another way is looking at a clock.  Check the time, and then look away from the clock.  Then look again, if the clock has changed time (other than a few seconds obviously) then you know you are dreaming.  This method only works with digital clocks.  Numbers never stay the same in dreams.  Another easy reality check is to try something that is impossible to do outside of a dream.  Such as push your hand through a wall.
        </p>
        <p>
            This might seem like a lot of work, but to many it is worth the effort.  Once you train your brain in such a way, you can lucid dream all the time.
        </p>

</div>
</div>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>