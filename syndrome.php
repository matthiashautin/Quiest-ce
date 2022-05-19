<?php
// Les 3 syndrome : S1, S2, S3
          $S1 = $_POST['question1'] + $_POST['question3'] + $_POST['question5'] + $_POST['question7'];
          $S1 = $S1 % 2;

          $S2 = $_POST['question2'] + $_POST['question3'] + $_POST['question5'] + $_POST['question6'];
          $S2 = $S2 % 2;

          $S3 = $_POST['question4'] + $_POST['question5'] + $_POST['question6'] + $_POST['question7'];
          $S3 = $S3 % 2;

          if ($_POST["envoyer"]) {
            if (($S1 == 1) && ($S2 == 0) && ($S3 == 0)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 1 </FONT COLOR>";
              if ($_POST['question1'] == 1) {
                $_POST['question1'] = 0;
              } else {
                $_POST['question1'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 0)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 2 </FONT COLOR>";
              if ($_POST['question2'] == 1) {
                $_POST['question2'] = 0;
              } else {
                $_POST['question2'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 0)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 3 </FONT COLOR>";
              if ($_POST['question3'] == 1) {
                $_POST['question3'] = 0;
              } else {
                $_POST['question3'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 0) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 4 </FONT COLOR>";
              if ($_POST['question4'] == 1) {
                $_POST['question4'] = 0;
              } else {
                $_POST['question4'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 5 </FONT COLOR>";
              if ($_POST['question5'] == 1) {
                $_POST['question5'] = 0;
              } else {
                $_POST['question5'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 6 </FONT COLOR>";
              if ($_POST['question6'] == 1) {
                $_POST['question6'] = 0;
              } else {
                $_POST['question6'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 0) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 7 </FONT COLOR>";
              if ($_POST['question7'] == 1) {
                $_POST['question7'] = 0;
              } else {
                $_POST['question7'] = 1;
              }
            } else {
              echo 'Vous n\'avez pas menti';
            }
          }

          echo "<br/>";

          // On obtient le id du personnage que l'utilisateur a choisi
          $personnage = $_POST['question1'] . $_POST['question2'] . $_POST['question3'] . $_POST['question4'] . $_POST['question5'] . $_POST['question6'] . $_POST['question7'];

          // Se déclenche après avoir appuyer sur le bouton envoyer, renvoie le personnage que l'utilisateur a choisi
          if ($_POST["envoyer"]) {
            echo 'Vous avez choisi';
            echo '<img src=http://btsio.org/2022/hautinm/Quiestce/images/' . $personnage . '.jpg alt=personnage>';
          }
?>