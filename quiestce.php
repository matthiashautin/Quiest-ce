<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style.css">
  <meta charset="utf-8">
  <title>Qui-est ce ?</title>
</head>
<body>
  <h1>Qui est ce ?</h1>
  <table>
    <tbody>
      <tr>
        <td>
          <img src="./images/0000000.jpg" alt="image0">
          <img src="./images/0001111.jpg" alt="image1">
          <img src="./images/0010011.jpg" alt="image2">
          <img src="./images/0011100.jpg" alt="image3">
        </td>
        <td>
          <img src="./images/0100101.jpg" alt="image4">
          <img src="./images/0101010.jpg" alt="image5">
          <img src="./images/0110110.jpg" alt="image6">
          <img src="./images/0111001.jpg" alt="image7">
        </td>
        <td>
          <img src="./images/1000110.jpg" alt="image8">
          <img src="./images/1001001.jpg" alt="image9">
          <img src="./images/1010101.jpg" alt="image10">
          <img src="./images/1011010.jpg" alt="image11">
        </td>
        <td>
          <img src="./images/1100011.jpg" alt="image12">
          <img src="./images/1101100.jpg" alt="image13">
          <img src="./images/1110000.jpg" alt="image14">
          <img src="./images/1111111.jpg" alt="image15">
        </td>
      </tr>
      <tr>
        </td>
        <td>
          <form method="post" action="quiestce.php">

        <h5>Q1: Votre personnage porte-il des lunettes ?</h5>
          Oui<input name="Q1" value="1" type="radio" /> --
          Non<input name="Q1" value="0" type="radio" />
        </br>
        <h5>Q2: Votre personnage a-t-il une moustache ?</h5>
          Oui<input name="Q2" value="1" type="radio" /> --
          Non<input name="Q2" value="0" type="radio" />
        </br>
        <h5>Q3: Votre personnage a-t-il un chapeau ?</h5>
          Oui<input name="Q3" value="1" type="radio" /> --
          Non<input name="Q3" value="0" type="radio" />
        </br>
        <h5>Q4: Votre personnage a-t-il des cheveux ?</h5>
          Oui<input name="Q4" value="1" type="radio" /> --
          Non<input name="Q4" value="0" type="radio" />
        </br>
        <h5>Q5: Votre personnage a-t-il une boucle d'oreille ?</h5>
          Oui<input name="Q5" value="1" type="radio" /> --
          Non<input name="Q5" value="0" type="radio" />
        </br>
        <h5>Q6: Votre personnage a-t-il une barbe ?</h5>
          Oui<input name="Q6" value="1" type="radio" /> --
          Non<input name="Q6" value="0" type="radio" />
        </br>
        <h5>Q7: Votre personnage a-t-il un noeud papillon ?</h5>
          Oui<input  name="Q7" value="1" type="radio" /> --
          Non<input  name="Q7" value="0" type="radio" />
        <br/>
        <input type="submit" name="envoyer" value="Envoyer">
        <br/>
          <?php
          include_once "syndrome.php";
          ?>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>
