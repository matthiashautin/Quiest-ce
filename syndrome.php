<?php
// Les 3 syndrome : S1, S2, S3
          $S1 = $_POST['Q1'] + $_POST['Q3'] + $_POST['Q5'] + $_POST['Q7'];
          $S1 = $S1 % 2;

          $S2 = $_POST['Q2'] + $_POST['Q3'] + $_POST['Q5'] + $_POST['Q6'];
          $S2 = $S2 % 2;

          $S3 = $_POST['Q4'] + $_POST['Q5'] + $_POST['Q6'] + $_POST['Q7'];
          $S3 = $S3 % 2;
// La gestion des mensonges pour chaque question
          if ($_POST["envoyer"]) {
            if (($S1 == 1) && ($S2 == 0) && ($S3 == 0)) {
              echo "Vous avez menti à la question 1";
              if ($_POST['Q1'] == 1) {$_POST['Q1'] = 0;
              } else {$_POST['Q1'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 0)) {
              echo "Vous avez menti à la question 2";
              if ($_POST['Q2'] == 1) {$_POST['Q2'] = 0;
              } else {$_POST['Q2'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 0)) {
              echo "Vous avez menti à la question 3";
              if ($_POST['Q3'] == 1) {$_POST['Q3'] = 0;
              } else {$_POST['Q3'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 0) && ($S3 == 1)) {
              echo "Vous avez menti à la question 4";
              if ($_POST['Q4'] == 1) {$_POST['Q4'] = 0;
              } else {$_POST['Q4'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 1)) {
              echo "Vous avez menti à la question 5";
              if ($_POST['Q5'] == 1) {$_POST['Q5'] = 0;
              } else {$_POST['Q5'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 1)) {
              echo "Vous avez menti à la question 6";
              if ($_POST['Q6'] == 1) {$_POST['Q6'] = 0;
              } else {$_POST['Q6'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 0) && ($S3 == 1)) {
              echo "Vous avez menti à la question 7";
              if ($_POST['Q7'] == 1) {$_POST['Q7'] = 0;
              } else {$_POST['Q7'] = 1;
              }
            } else {
              echo 'Vous n\'avez pas menti';
            }
          }
          echo "<br/>";
          //Permet de renvoyer la réponse avec l'image qui correspond
          $personnage = $_POST['Q1'] . $_POST['Q2'] . $_POST['Q3'] . $_POST['Q4'] . $_POST['Q5'] . $_POST['Q6'] . $_POST['Q7'];
          if ($_POST["envoyer"]) {
            echo 'Vous avez choisi','<img src=http://btsio.org/2022/hautinm/Quiestce/images/' . $personnage . '.jpg';
          }
?>
