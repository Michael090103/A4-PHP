<?php require_once("../php/includes/default.inc.php")  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
<head>
     <meta charset="utf-8">
     <title>MVC structuur</title>
     <link rel="stylesheet" href="css/master.css">
     <script src="https://cdn.tailwindcss.com"></script>
   </head>
      <body class="bg-slate-800 text-white">
      <nav class="bg-white border-gray-300 px-2 sm:px-4 py-2.5  dark:bg-gray-800">
          <div >
              <button onclick='window.location.href="/A4-PHP/home"'>
                  <span>Home</span>
              </button>
              <button onclick='window.location.href="/A4-PHP/form"'>
                  <span class="">Form</span>
              </button>
              <button onclick='window.location.href="/A4-PHP/results"'>
                  <span class="">Result</span>
              </button>
              <button onclick='window.location.href="/A4-PHP/data"'>
                  <span class="">Data</span>
              </button>
          </div>
      </nav>
      <?php
        $app = new \mvc\App();
        echo $app;
      ?>
   </body>
 </html>
