<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Explore California: Support</title>
    <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css" media="all">
    <script src="assets/javascripts/jquery-1.5.1.min.js"></script>
    <script src="assets/javascripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="assets/javascripts/menus.js"></script>
  </head>
  <body>
    <div id="wrapper">

	<?php include('nav.php'); ?>
  
      <div id="mainContent">
        <div id="contentHeader">
          <h1>Support Options</h1>
        </div>
        <div id="mainArticle">
          <h1>Need some help?</h1>
          <img src="assets/images/cyclist.jpg" alt="Biking along with Cycle California" class="articleImage" />
          <p>If you have booked one of our tours, or if you are currently on a tour and need our assistance, we've got a couple of options for you. </p>
          <div id="supportOptions">
            <h2>If you need immediate assistance, we have the following options:</h2>
            <p>Our 24-hour help line: <strong>866.555.4315</strong></p>
            <p>Our 24-hour chat support: <a href="contact/chat.html">Chat with an agent</a></p>
            <h2> Don't need us right away?</h2>
            <p>If your request isn't urgent, drop us a quick line and we'll get back to you within 24 hours</p>
          </div>
          
          <form id="frmSupport" name="frmSupport" method="post" action="support_process.html">
            <fieldset id="quickSupport">
              <legend><strong>Quick Support</strong></legend>
 			        <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" tabindex="10" required>
              </p>
              <p>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" tabindex="20" required>
              </p>
               <p>
                <label for="phone">Mobile:</label>
                <input type="tel" name="phone" id="phone" tabindex="25">
              </p>
              <p>
                <label for="tourID">Tour Name:</label>
                <input type="text" name="tourID" id="tourID" tabindex="30">
              </p>
              <p>Tour Status:<br />
                <label class="inline">
                  <input type="radio" name="tourStatus" value="booked" id="tourStatus_0" tabindex="40" />
                  I have booked a tour
                </label>
                <label class="inline"><br />
                  <input type="radio" name="tourStatus" value="current" id="tourStatus_1" tabindex="50" />
                  I am on a tour
                </label>
              </p>
              <p>
                <label for="comments">Comments </label>
                <br />
                <textarea name="comments" id="comments" cols="45" rows="5" tabindex="60"></textarea>
              </p>
              <p>
                <input type="submit" name="submit" id="submit" value="Send" tabindex="70" />
              </p>
            </fieldset>
          </form>
        </div>
      </div>
      
      <div id="secondaryContent">
        <div id="specials" class="callOut">
          <h1>Monthly Specials</h1>
          <h2 class="top"><img src="assets/images/calm_bug.gif" alt="California Calm" width="75" height="75" />California Calm</h2>
          <p>Day Spa Package <br />
            <a href="tours/tour_detail_cycle.html">$250</a></p>
          <h2><img src="assets/images/desert_bug.gif" alt="From desert to sea" width="75" height="75" />From Desert to Sea</h2>
          <p>2 Day Salton Sea <br />
            <a href="tours/tour_detail_cycle.html">$350</a></p>
          <h2><img src="assets/images/backpack_bug.gif" alt="Backpack Cal" width="75" height="41" />Backpack Cal</h2>
          <p>Big Sur Retreat <br />
            <a href="tours/tour_detail_cycle.html">$620</a></p>
          <h2><img src="assets/images/taste_bug.gif" alt="Taste of California" width="75" height="75" />Taste of California</h2>
          <p>Tapas &amp; Groves <br />
            <a href="tours/tour_detail_taste.html">$150</a></p>
        </div>
        <div id="trivia" class="callOut">
          <h1>Did You Know?</h1>
          <p>California is home to many natural hot springs, which contain a high mineral content that is considered therapeutic. Calistoga is probably our most famous example but many day spas have hot tubs and water treatments that mimic these conditions.</p>
        </div>
      </div>
  
      <div id="pageFooter">
        <div id="quickLinks">
          <h1>Quick Nav</h1>
          <ul id="quickNav">
            <li><a href="index.html" title="Our home page">Home</a></li>
            <li><a href="tours.html" title="Explore our tours">Tours</a></li>
            <li><a href="mission.html" title="What we think">Mission</a></li>
            <li><a href="resources.html" title="Guidance and planning">Resources</a></li>
            <li><a href="explorers.html" title="Join our community">Explorers</a></li>
            <li><a href="contact.html" title="Contact and support">Contact</a></li>
          </ul>
        </div>
        <div id="footerResources">
          <h1>Resources</h1>
          <ul id="quickNav">
            <li><a href="resources/faq.html" title="Our home page">FAQ</a></li>
            <li><a href="support.html" title="Need help?">Support</a></li>
            <li><a href="resources/legal.html" title="The fine print">Legal</a></li>
          </ul>
        </div>
        <div id="companyInfo">
          <h1>Contact</h1>
          <h2>Explore California</h2>
          <p>5605 Nota Street<br />
            Ventura, CA 93003</p>
          <p>866.555.4310<br />866.555.4315 <em>(24 hour support)</em></p>
        </div>
      </div>
    </div>
  </body>
</html>
