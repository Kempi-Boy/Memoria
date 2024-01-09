<?php
header("HTTP/1.1 500 Internal Server Error");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Erreur 500 - Erreur interne du serveur</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: /*#a7efdf*/white;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
  }


  h1 {
    font-size: 24px;
    color: #333;
    margin-top: 0;
  }

  .ar{
    font-size: 50px;
    white-space: nowrap;
    
  }

  @keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
  }
  
  .icon {
    display: inline-block;
    font-size: 100px;
    color: red;
    margin-bottom: 20px;
    animation: blink 1s infinite;
  }

  p {
    color: #777;
    margin-bottom: 20px;
  }

  .btn {
    display: inline-block;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .btn:hover {
    background-color: #45a049;
  }
    </style>
</head>
<body>
<div class="container">
        <h1 class="ar"> <span class="icon">&#x26D4;</span> Error 500 <span class="icon">&#x26D4;</span>  </h1>
        <h1>Problème de serveur</h1>
        <p>Une erreur interne s'est produite sur le serveur.</p>
        <p>Nous nous excusons pour le désagrément. Veuillez réessayer ultérieurement.</p>
        <a class="btn" href="/">Retourner à la page d'accueil</a>
    </div>
</body>
</html>