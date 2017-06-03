<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" ></script>
  <script type="text/javascript" src="wp-content/themes/twentyfifteen-child/js/default.js"></script>
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-full nav-main" role="navigation">
    <div class="row between-xs center-xs middle-xs bare">
      <div class="col-xs-4 start-xs bare">
        <a href="javscript:void(0);" class="no-underline nav-trigger waves-effect" id="toc">
          <div class="hamburger-menu">
            <div class="bar"></div>	
          </div>
        <span class="nav-trigger_text show-sm-inline">Contents</span></a>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <aside class="sidebar sidebar-left sidebar--fixed" role="complementary">
      <?php if( dynamic_sidebar('sidebar_id') ) : else : endif; ?>
      <nav class="side-nav-container">
        <ol class="table-of-contents">
           <h3>Table of Contents</h3>
            <li><a href="https://learnpythonthehardway.org/book/preface.html">Preface</a></li>
            <li><a href="https://learnpythonthehardway.org/book/intro.html">The Hard Way Is Easier</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex0.html">Ex0: The Setup</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex1.html">Ex1: A Good First Program</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex2.html">Ex2: Comments And Pound Characters</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex3.html">Ex3: Numbers And Math</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex4.html">Ex4: Variables And Names</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex5.html">Ex5: More Variables And Printing</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex6.html">Ex6: Strings And Text</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex7.html">Ex7: More Printing</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex8.html">Ex8: Printing, Printing</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex9.html">Ex9: Printing, Printing, Printing</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex10.html">Ex10: What Was That?</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex11.html">Ex11: Asking Questions</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex12.html">Ex12: Prompting People</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex13.html">Ex13: Parameters, Unpacking, Variables</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex14.html">Ex14: Prompting And Passing</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex15.html">Ex15: Reading Files</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex16.html">Ex16: Reading And Writing Files</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex17.html">Ex17: More Files</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex18.html">Ex18: Names, Variables, Code, Functions</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex19.html">Ex19: Functions And Variables</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex20.html">Ex20: Functions And Files</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex21.html">Ex21: Functions Can Return Something</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex22.html">Ex22: What Do You Know So Far?</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex23.html">Ex23: Read Some Code</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex24.html">Ex24: More Practice</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex25.html">Ex25: Even More Practice</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex26.html">Ex26: Congratulations, Take A Test!</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex27.html">Ex27: Memorizing Logic</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex28.html">Ex28: Boolean Practice</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex29.html">Ex29: What If</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex30.html">Ex30: Else And If</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex31.html">Ex31: Making Decisions</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex32.html">Ex32: Loops And Lists</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex33.html">Ex33: While Loops</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex34.html">Ex34: Accessing Elements Of Lists</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex35.html">Ex35: Branches and Functions</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex36.html">Ex36: Designing and Debugging</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex37.html">Ex37: Symbol Review</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex38.html">Ex38: Doing Things To Lists</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex39.html">Ex39: Dictionaries, Oh Lovely Dictionaries</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex40.html">Ex40: Modules, Classes, And Objects</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex41.html">Ex41: Learning To Speak Object Oriented</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex42.html">Ex42: Is-A, Has-A, Objects, and Classes</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex43.html">Ex43: Gothons From Planet Percal #25</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex44.html">Ex44: Inheritance Vs. Composition</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex45.html">Ex45: You Make A Game</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex46.html">Ex46: A Project Skeleton</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex47.html">Ex47: Automated Testing</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex48.html">Ex48: Advanced User Input</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex49.html">Ex49: Making Sentences</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex50.html">Ex50: Your First Website</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex51.html">Ex51: Getting Input From A Browser</a></li>
            <li><a href="https://learnpythonthehardway.org/book/ex52.html">Ex52: The Start Of Your Web Game</a></li>
            <li><a href="https://learnpythonthehardway.org/book/advice.html">Advice From An Old Programmer</a></li>
            <li><a href="https://learnpythonthehardway.org/book/next.html">Next Steps</a></li>
            <li><a href="https://learnpythonthehardway.org/book/appendixa.html">Appendix A: Command Line Crash Course</a></li>
        </ol>
        <ul class="site-links">
          <h3>Learn the Hard Way</h3>
          <li><a href="index.html#" class="waves-effect"><i class="icon-information"></i> About LPTHW</a></li>
          <li><a href="index.html#" class="waves-effect"><i class="icon-question-mark"></i> Help &amp; Support</a></li>
          <li><a href="index.html#" class="waves-effect"><i class="socicon-twitter"></i> Follow us on Twitter</a></li>
        </ul>
      </nav> -->
      <div class="colophon text-center">
        <div class="intro">
          <p class="bare-bottom">
            The type for this book is set in 18px / 1.5
            <a href="https://www.google.com/fonts/specimen/Source+Serif+Pro">Adobe Serif</a>,
            <a href="https://www.google.com/fonts/specimen/Source+Sans+Pro">Sans</a>, and
            <a href="https://www.google.com/fonts/specimen/Source+Code+Pro">Code</a>.
          </p>
        </div>
        <div class="printers-mark">
          <div class="inscription">Docendo <i class="icon-repeat"></i> Discimus</div>
        </div>
      </div>
    </aside>
  
   <ul class="contents_bar">
    <li><a href="#sidr-left" class="sidr-left-link">
      <div class="hamburger-menu">
        <div class="bar"></div>	
      </div>
      <span>
        Contents
      </span>
    </a></li>
  </ul>

<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

  <div id="content" class="site-content">