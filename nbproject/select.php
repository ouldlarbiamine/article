
      $query5=  mysqli_query($con,"SELECT `libelle_sp`,`code_sp` FROM `specialite`"
         . " WHERE `code_sp` IN ( SELECT code_sp_or FROM orientation "
         . "WHERE code_sp_origin =( SELECT code_sp_insc FROM etudiant WHERE num_insc='$num_insc'));");
$i=1;


 while ($row5 = mysqli_fetch_assoc($query5)){
    echo " <label>l'auteur  numero $i &nbsp:&nbsp </label><select name=\"choix$i\" >";
        $query6=  mysqli_query($con,"SELECT `libelle_sp`,`code_sp` FROM `specialite` WHERE `code_sp` IN ( SELECT code_sp_or FROM orientation WHERE code_sp_origin =( SELECT code_sp_insc FROM etudiant WHERE num_insc=$num_insc));");
 while ($row6 = mysqli_fetch_assoc($query6)){
               $sp=$row6['libelle_sp'];
               $codsp=$row6['code_sp'];
            echo "<option  value=\"$codsp\">$sp</option>";
               echo "$sp :$codsp";             
 echo "</select><br>";
$i++;}
 $i--;
  $_SESSION['choix']=$i;
        
  
  
  
  echo "   <input type=\"submit\"  value=\"enregistrer\"   name=\"submit\">
        <input type=\"reset\"  value=\"annuler\"   >";

                  }
              
