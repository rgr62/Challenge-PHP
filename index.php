<!DOCTYPE html>
<html>
<head>
<title>Test PHP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
</head>
  <body>
    <h1> Challenge Tableau PHP</h1>



      <?php
      $jeuxvideos = array("Street Fighter","Final Fantaisy","Mario","Doom","Pac-Man","Tekken","GTA","Pro Evolution Soccer","Metal Gear Solid","Zelda","Mortal Combat","Lineage 2","League of Legend","Sonic","Fable","Mario Kart","Counter Strike","Diabolo","Pokemon","Tomb Raider","Fifa","Half Life","One Piece","Halo","Naruto","Dragon Ball Z","The Sims","Gran Turismo","Prince of Percia","Rainbow Six","Splinter Cell","LFP Manager","Minecraft","Batman","Spiderman","Rayman","NBA 2K16","Uncharted","Fallout","Call of Duty","Resident Evil","Tetris","Crash Bandicoot","Formula One","V Rally","Medeviel","SoulCalibur","Tintin au Tibet");
      function Game($jeux){
          echo '<tr><td>'.$jeux.'</td></tr>';
      }
      ?>
      <section>
          <table id="tableau" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <td>Jeux Vidéos</td>
              </tr>
          </thead>
          <tbody>
          <?php
              for($i = 0; $i < count($jeuxvideos); $i++){
                  Game($jeuxvideos[$i]);
              }
          ?>
          </tbody>
          </table>
      </section>

          <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
          <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
          <script>
              $(document).ready(function() {
                  $('#tableau').DataTable();
              });
          </script>
      </body>
  </html>
