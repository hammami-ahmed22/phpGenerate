<html>
<head>
  <title>

  </title>
  <link rel="stylesheet" type="text/css" href="foundation.css">
  <style type="text/css">
  .mrg { margin-top:50px !important;}
  </style>
  <script type="text/javascript" src="jscolor.js"></script>
</head>

<body>

  <!-- includes -->
  <?php
    include ("Reader.php");    
  ?>


  <form action="generate.php" method="post">
   <div class="row">

    <!-- HeadLine -->
    <div class="large-12 small-12 columns">
      <div class="row mrg">
       <label class="large-1 small-2 columns">Headline: </label>
       <textarea class="large-11 small-10 columns" placeholder="tap your headline here" name="var_head" id="var_head">
          <?php echo $Reader->HeadLineContent; ?>
       </textarea>
     </div>

     <!-- HeadLine Color picker-->
     <input class="color right" value="000"  name="var_colhead" id="var_colhead">

     <!-- Explain text-->
     <div class="row mrg">
      <label class="large-1 small-2 columns">Text:</label>
      <textarea class="large-11 small-10  columns" placeholder="tap your text here" style="height:150px;" name="var_text" id="var_text">
          <?php echo $Reader->ExplainTextContent; ?>
      </textarea>
    </div>
    <!-- Explain text color picker-->
    <input class="color right" value="000" name="var_colparag" id="var_colparag">

    <!-- Impressum -->
    <div class="row mrg">
      <label class="large-1 small-2 columns">Impressum:</label>
      <textarea class="large-11 small-10  columns" placeholder="prename, name, address, Tel-Nr" name="var_foot" id="var_foot">
           <?php echo $Reader->ImpressumTextContent; ?>
      </textarea>

    </div>

     <!-- Code -->
    <div class="row mrg">
      <label class="large-1 small-2 columns">Code Block (opt-in):</label>
      <textarea class="large-11 small-10  columns" placeholder="code block" style="height:150px;" name="var_code" id="var_code">
           <?php echo $Reader->CodeTextContent; ?>
      </textarea>

    </div>

     <!-- CSS -->
    <div class="row mrg">
      <label class="large-1 small-2 columns">Styles.css:</label>
      <textarea class="large-11 small-10  columns" placeholder="stylesheet" style="height:300px;" name="var_css" id="var_css">
           <?php echo $Reader->CssTextContent; ?>
      </textarea>

    </div>

    <button type="submit" class="right">Generate & save</button>
  </form>

</div>
</div>    

</body>

</html>