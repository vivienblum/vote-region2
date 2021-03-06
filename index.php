<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vote Stats</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Salaires et votes</h1>
    <div id="export-container">
      <a id="export-button" class="btn btn-primary" href="data.xml" role="button" download disabled>Loading ...</a>
    </div>

    <select id="code-dep-input" onChange="drawBasic();" class="form-control">
    </select>
    <div id="chart_div" style="width: 900px; height: 500px;">
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="scripts/PapaParse-4.4.0/papaparse.js"></script>
    <script src="scripts/parser.js"></script>
   <!-- <script src="scripts/Front/chart.js"></script> -->
    
  </body>
</html>