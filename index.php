<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="./scripts.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js" ></script>
    <meta charset="utf-8">
    <title>iLists.fm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="./images/favicon.ico">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://www.farragar.com/iListsfm">iLists.fm</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="./about.html">About</a></li>
              <li><a href="mailto:laurie@farragar.com">Contact</a></li>
              <li><a href="https://github.com/farragar/MyLovedPlaylists">Source</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


    <div class="container">
      <div class="hero-unit">
      <h1>iLists.Fm</h1>
      <div class="row-fluid">
        <div class="span12">
          <p>The following tool will generate an m3u playlist (compatible with all main media players) based on Last.FM data and iTunes library information. For instructions on importing your file, see <a href="./about.html#m3uUse">here</a>. For the gory technical details, see <a href="./about.html">here</a>.</p>
          <p>You must provide (drag &amp; drop) an iTunes music library xml file, found at 'C:\Users\username\Music\iTunes\iTunes Music Library.xml' on Windows, and '/Users/username/Music/iTunes/iTunes Library.xml' on Mac. These are processed locally and not transmitted to our server.
          <p>The matching threshold allows you to control how strict the system is. A very strong threshold will reduce the number of incorrect matches (false positives), but may also ignore correct matches (false negatives); visa versa for weak thresholds. The intermediate setting is recommended unless your library contains a large quantity of poorly tagged music (often pirated, or badly imported). In this case, a slightly weaker threshold may be necessary.
</div>
    <div class="row-fluid">
      <div class="span12">
            <output id="list"></output>
            <div id="dropZone"> Drop library file here </div>
              <script>
                // Setup the dnd listeners.
                var dropZone = document.getElementById('dropZone');
                dropZone.addEventListener('dragover', handleDragOver, false);
                dropZone.addEventListener('drop', handleFileSelect, false);
              </script>            
      <form class="well form-inline" id="inputForm" name="inputForm" onsubmit="runForm(getJSLovedTracks); return false;" action="returnFile.php" method="post">
        <input type="text" id="username" name="username" placeholder="Last.FM Username" onChange="checkActivateSubmit();" />
        <select id="selectType" onChange="handleSelectChange(); checkActivateSubmit();">
          <option value="lovedAndTop">Loved and top tracks</option>
          <option value="loved">Loved tracks only</option>
          <option value="top">Top tracks only</option>
        </select>
        <script>
          handleSelectChange();
        </script>
      <select id="matchThreshold" onchange="handleThreshChange(); checkActivateSubmit();" class="nullSelect">
        <option value="default" >Matching Threshold</option>
        <option value="perfect">Perfect</option>
        <option value="strong">Strong</option>
        <option value="intermediate">Intermediate (recommended)</option>
        <option value="weak">Weak</option>
        <option value="anything">Anything goes!</option>
      </select>
      <button id="submitBtn" class="btn btn-primary" type="submit" disabled>Submit</button>
<input type="hidden" id="trackObjStr" name="trackObjstr" />
<input type="hidden" id="perfectMatches" name="perfectMatches" />
<input type="hidden" id="semiMatches" name="semiMatches" />
<input type="hidden" id="failedMatches" name="failedMatches" />
</form>
</div>
      </div>
</div>

      <footer>
        <p>&copy; farragar.com 2012</p>
      </footer>

    </div> <!-- /container -->
  
    
  </body>
</html>

