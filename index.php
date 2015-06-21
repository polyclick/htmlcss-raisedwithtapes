<?php
  $colors = array(
    array('#ffd368', '#e5bf5e'),
    array('#a868ff', '#975ee5'),
    array('#ffa168', '#e5925e'),
    array('#ff6893', '#e55e84'),
    array('#68ffb3', '#5ee5a2'),
    array('#ff6868', '#e55e5e')
  );

  $colorset = $colors[array_rand($colors)];
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>raised with tapes</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="raised with tapes">
  <meta name="author" content="raised with tapes">

  <!--
          _______________________▓▓▓▓▓▓▓▓▓▓▓▓__________▂▂▂
          ____________▓▓▓▓▓▓▓▓▓▒▒▒▒▒▐▒▐▒▒▒▓▓▓▓▓__▒░░░▒
          ________▓▓▓▓▒▒▒▀▀▅▅▄▄▒▒▒▒▒▒▐▒▐▒▒▒▒▒▒▒▒▒░░░░▒
          ______▓▓▓▒▒▒▒▒▒▒▒▒▒▒▒▀▄▒▒▒▒▐▒▐▒▒▒▒▒▒▒▒░░░░░▒▒
          ___▓▓▓▒▒▒▒▄▄▄▄▄▒▒▒▒▒▒▒▀▒▒▒▒░░░░░░░░▒▒░░░░▒░▒
          __▓▓▓▄▅▀▀▀▒▒▒▒▒▒▀▀▀▅▒▒▒░░░░░░░░░░░░░░░░░░░▒░▒
          __▓▓▀▒▒▒▒▒▒▄▄▄▄▒▒▒▒▒░░░░░░░░░░░░░░░░░░░░░▒░░▒
          _▓▓▒▒▒▒▒▅▅▀▀▒▒▒▀▅▒▒░░░░░░░░░░░░░░░░░░░░░░▒░░░▒
          _▓▓▒▒▒▅▀▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░░░░▒░░░░▒▓
          ▓▓▒▒▒▌▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░░░░░░░░░░▓▒▓
          _▓▒▒▒▌▒▒▒▒▒▒▒▒▒▒░░░░░▄▄▄▄░░░░░░░░░░░░░░░░░░▓▒▒▓
          _▓▒▒▒▌▒▒▒▒▒▒▒▒▒▒░░░░█▀▀▀▀▀▅▅░░░░░░░░░░░░░░░▓▒▒▒▓
          _▓▒▒▒▌▒▒▒▒▒▒▒▒▒▒░░░░█____▓▓▓█▀▅▄░░░▄░░░░░░░░▓▒▒▒▓
          __▓▒▒▒▌▒▒▒▒▒▒▒▒▒░░░░▐___▓▓▓█▌____█▀▀░░▄░░░░░▓▒▒▒▒▓
          ___▓▒▒▐▌▒▒▒▒▒▒▒▒▒░░░░▐__▓▓▓██▄____███▀▀░▄░░░▓▒▒▒▒▓
          ____▓▒▒▒▌▒▒▒▒▒▒▒▒▒░░░░___▓▓▐█__█▄▄▓░░▀▀▀░░░▓▓▒▒▒▐▒▓
          _____▓▒▒▒▌▒▒▒▒▒▒▒▒░░░░░___▓▓██████▓░░░░░░░▓▒▒▒▒▒▐▒▓
          ______▓▒▒▒▌▒▒▒▒▒▒▒░░░░░░░__▓▓▀███▀▓░░░░░░▓▒▒▒▒▒▒▐▒▓
          _______▓▒▒▒▌▒▒▒▒▒░░░░░░░░____▓▓▓▓▓_░░░░░░▓▒▒▒▒▒▒▐▒▐▓
          _________▓▒▒▒█▒▒▒░▅▀░░░░░░░░░░░░░░░░░░░░▓▒▒▒▒▒▒▐▒▐▓
          ___________▓▓▒▒▌▒▒▒░░░▐░░░░░░░░░░░░░░░░▓▒▒▒▒▒▒▐▒▒▌▓
          ____________▓▓▒▒▐▌▒▒▒░▀░░░░░░░░░░░▒▒░░▓▒▒▒▒▒▒▒▐▒▐▒▓
          ______________▓▐▒▒▐▒▒▒▒▒▒▒▒▒▓_______▒░░▓▒▒▒▒▒▒▒█▒▒█▒▓
          ________________▓▌▒▒▐▒▒▒▒▒▒▒▒▓______▒░▓▒▒▒▒▒▒▒█▒▒█▒▒▓
          _________________▓▐▒▒▀▌▒▒▒▒▒▒▓______▒▓▒▒▒▒▒▒▒█▒▒█▒▒▒▓
          __________________▓▒▐▒▒▐▒▒▒▒▒▓______▓▓▒▒▒▒▒█▀▒▒█▒▒▒▒▓
          ___________________▓▒▐▒▒▐▒▒▒▒▓_____▓▓▒▒▒▒▄▀▒▒▄▀▒▒▒▒▒▓
          _______▓▓▓▓▓_____▓▒▐▒▒▒▌▒▒▓_____▓▓▒▒▒▄▀▒▒▄▀▒▒▒▒▒▓▓
          _____▓▓▒▓____▓____▓▒▐▒▒▒▐▒▒▓___▓▓▒▒▒▄▀▒▒▄▀▒▒▒▒▒▒▓
          _____▓▒▒▓________▓▒▒▒▌▒▒▒▌▓____▓▒▒▒▄▀▒▒▄▀▒▒▒▒▒▒▒▓
          _____▓▒▒▓______▓▒▒▒▒▌▒▒▒▌▓____▓▒▒▄▀▒▒▄▀▒▒▒▒▒▒▒▓
          ______▓▒▒▓▓▓▓▓▒▒▒▒▐▒▒▒▒▓____▓▒▒█▒▒▒█▒▒▒▒▒▒▒▒▓
          ________▓▒▒▒▒▒▒▒▒▒▐▒▒▒▓▓_____▓▒█▒▒▒█▒▒▒▒▒▒▒▒▓
          _________▓▓▒▒▒▒▒▒▒▐▒▓▓▓______▓▒▌▒▒▒▌▒▒▒▒▒▒▒▒▓
          ____________▓▓▓▓▓▓▓▓▓__________▓▌▒▒▒▌▒▒▒▒▒▒▒▒▓
          ___________________________________▓▓▒▒▌▒▒▒▒▒▒▒▒▓
          ___________________________________▓▒▒▒▌▒▒▒▒▒▒▒▓
          ___________________________________▓▒▒▒▌▒▒▒▒▒▒▒▓
          ____________________________________▓▒▒▐▒▒▒▒▒▒▒▓____▓▓▓
          _____________________________________▓▒▒▐▒▒▒▒▒▒▒▓_______▓
          ______________________________________▓▓▒▐▒▒▒▒▒▒▒▓▓____▓▓
          _________________________________________▓▌▒▒▒▒▒▒▒▒▓▓▓▒▓
          ____________________________________________▓▓▒▒▒▒▒▒▒▒▒▓
          ________________________________________________▓▓▓▓▓▓▓
  -->

  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <style>
    html, html a {
       -webkit-font-smoothing: antialiased;
       text-shadow: 1px 1px 1px rgba(0,0,0,0.004);
    }

    html {
      box-sizing: border-box;
    }

    *, *:before, *:after {
      box-sizing: inherit;
    }

    body {
      background-color: <?= $colorset[0] ?>;
      color:white;
      font-family: 'Oswald', sans-serif;
      font-size:38px;
      margin:0;
      padding:0;
      text-align:center;
    }

    .clearer {
      clear:both;
    }

    .content {
      position:absolute;
      top:50%;
      left:50%;
      width:280px;
      margin-top:-212px;
      margin-left:-140px;
    }

    .socialicons {
      margin-top:2px;
    }

    .socialicons a {
      display:inline-block;
    }

    a.sociallink {
      text-decoration:none;
    }

    textarea, input {
      outline: none;
    }

    input {
      display:inline-block;
      color:<?= $colorset[1] ?>;
    }

    input[type=submit] {
      display:none;
    }

    input:focus {
      background-color:#f9f9f9;
    }

    input.email {
      border:none;
      font-family: 'Oswald', sans-serif;
      font-size:18px;
      padding:10px;
      text-align:center;
      width:160px;
    }

    input.email.error {
      background-color:#ed5050;
      color:white;
    }

    input.email.success {
      background-color:#64e55e;
      color:white;
    }

    .submit {
      background-color:<?= $colorset[1] ?>;
      cursor:pointer;
      display:inline-block;
      font-size:18px;
      padding:10px;
      width:40px;
    }

    .submit:hover {
      background-color:#fff;
    }

    .jibberish {
      font-size:14px;
      font-style:italic;
    }

    svg path {
      fill:#fff;
    }

    svg:hover path {
      fill:#000;
    }
  </style>
</head>

<body>
  <div class="content">
    <!-- NAME -->
    <div class="band title">
      <span class="name">raised with tapes</span>
    </div>

    <!-- JIBBERISH -->
    <div class="band jibberish">
      <p>deep & soulful house, detroit techno</p><p>join me in my journey thru the usual <br/>suspects on the interwebs:</p>
    </div>

    <!-- SOCIAL -->
    <div class="socialicons">
      <a href="http://soundcloud.com/raisedwithtapes" target="_blank" class="sociallink">
        <svg version="1.1" id="two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
          <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
          <g>
            <g>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M128.591,281.609c-2.875,13.5,5.344,32,12.781,38.391v-64 C133.935,262.391,130.778,271.5,128.591,281.609z M347.341,250.188c-4.469,0-8.672,0.875-12.609,2.266 c-1.969-33.672-31-60.453-66.812-60.453c-22.891,0-50.609,8.938-62.703,25.594V320h142.125c20.25,0,36.656-15.625,36.656-34.891 C383.997,265.812,367.591,250.188,347.341,250.188z M179.685,320h12.766v-89.594h-12.766V320z M154.138,320h12.766v-76.812 h-12.766V320z"></path>
            </g>
          </g>
        </svg>
      </a>

      <a href="http://facebook.com/raisedwithtapes" target="_blank" class="sociallink">
        <svg version="1.1" id="one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
          <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M316.75,216.812h-44.531v-32.5c0-9.969,10.312-12.281,15.125-12.281 c4.781,0,28.766,0,28.766,0v-43.859L283.141,128c-44.984,0-55.25,32.703-55.25,53.672v35.141H195.25V262h32.641 c0,58.016,0,122,0,122h44.328c0,0,0-64.641,0-122h37.656L316.75,216.812z"></path>
        </svg>
      </a>

      <a href="http://twitter.com/raisedwithtapes" target="_blank" class="sociallink">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
          <path d="M256,0C114.609,0,0,114.609,0,256c0,141.392,114.609,256,256,256c141.392,0,256-114.608,256-256 C512,114.609,397.392,0,256,0z M256,472c-119.297,0-216-96.702-216-216c0-119.297,96.703-216,216-216c119.298,0,216,96.703,216,216 C472,375.298,375.298,472,256,472z"></path>
          <path d="M384,170.922c-4.313,2.562-17.248,7.671-29.313,8.953c7.736-4.491,19.188-19.203,22.016-30.89 c-7.435,5.109-24.516,12.562-32.95,12.562c0,0,0,0.023,0.016,0.039C334.141,150.75,320.608,144,305.577,144 c-29.154,0-52.81,25.461-52.81,56.875c0,4.36,0.481,8.595,1.357,12.672h-0.017c-39.562-1.094-85.811-22.446-111.874-59 c-16,29.852-2.156,63.046,16.015,75.141c-6.203,0.516-17.671-0.766-23.061-6.407c-0.375,19.797,8.484,46.048,40.735,55.563 c-6.221,3.61-17.19,2.579-21.984,1.781c1.687,16.75,23.437,38.623,47.202,38.623c-8.47,10.534-37.373,29.706-73.141,23.596 C152.298,358.782,180.625,368,210.608,368c85.205,0,151.376-74.359,147.814-166.093c0-0.11-0.031-0.219-0.031-0.313 c0-0.25,0.031-0.5,0.031-0.719c0-0.281-0.031-0.562-0.031-0.859C366.141,194.328,376.546,184.234,384,170.922z"></path>
        </svg>
      </a>

      <a href="http://instagram.com/raisedwithtapes" target="_blank" class="sociallink">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" x="0px" y="0px" width="26px" height="26px">
          <g id="post-instagram">
            <path d="M20,2H4C2.9,2,2,2.9,2,4l0,16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M12,8c2.2,0,4,1.8,4,4s-1.8,4-4,4c-2.2,0-4-1.8-4-4S9.8,8,12,8z M4.5,20C4.2,20,4,19.8,4,19.5V11h2.1C6,11.3,6,11.7,6,12c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6c0-0.3,0-0.7-0.1-1H20v8.5c0,0.3-0.2,0.5-0.5,0.5H4.5z M20,6.5C20,6.8,19.8,7,19.5,7h-2C17.2,7,17,6.8,17,6.5v-2C17,4.2,17.2,4,17.5,4h2C19.8,4,20,4.2,20,4.5V6.5z"></path>
          </g>
        </svg>
      </a>
    </div>

    <!-- MORE JIBBERISH -->
    <div class="band jibberish">
      <p>or, go crazy and get exclusive info and <br/>content by subscribing to my maillist:</p>
    </div>

    <!-- MAILCHIMP -->
    <div class="band">
      <div id="mc_embed_signup">
        <form action="//raisedwithtapes.us9.list-manage.com/subscribe/post-json?u=4de70475546cf8ee063408064&amp;id=0bfc8a223b&c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
            <div class="submit">go</div>

            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

            <div style="position: absolute; left: -5000px;"><input type="text" name="b_4de70475546cf8ee063408064_0bfc8a223b" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="scripts/jquery.html5-placeholder-shim.js"></script>

  <script>
    $(document).ready(function(){

      // Variables
      var form = $('#mc-embedded-subscribe-form');
      var emailField = $('#mce-EMAIL');
      var submitButton = $('.submit');

      // Validate email
      function validateEmail(email) {
          var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
      }

      // Subscribe
      function subscribe() {
        $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: form.serialize(),
          dataType: 'json',
          contentType: "application/json; charset=utf-8",
          success: function (data) {
            if (data['result'] != "success") {
              ga('send', 'event', 'subscribe-form', 'error', 'mailchimp-error');
            } else {
              showSuccess();
              ga('send', 'event', 'subscribe-form', 'success');
            }
          }
        });
      }

      // Success
      function showSuccess() {
        emailField.addClass('success');
      }

      // Error
      function showError() {
        emailField.addClass('error');
      }

      // Submit mailchimp form
      submitButton.click(function (e) {
        e.preventDefault();

        emailField.removeClass('error');
        ga('send', 'event', 'subscribe-form', 'go-clicked');

        if(validateEmail(emailField.val())) {
          subscribe();
        } else {
          showError();
          ga('send', 'event', 'subscribe-form', 'error', 'email-error');
        }
      });

      // Track outbound links
      $('a[target=_blank]').click(function(){
        ga('send', 'event', 'outbound', 'click', $(this).attr('href'));
      });
    });
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57429170-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>


