<?PHP

//get form input  
$heading = $_POST['var_head']; 
$text = $_POST['var_text']; 
$code = $_POST['var_code'];
$foot = $_POST['var_foot'];
$css = $_POST['var_css'];

//color variable
$color_head=$_POST['var_colhead'];
$color_parag=$_POST['var_colparag'];

//create the output files 
$css_file = file_put_contents("output/stylesheet.css", $css);
$txt_file = file_put_contents("output/index.txt", " heading: ".$heading."\n\r text: ".$text."\n\r code: ".$code."\n\r foot: ".$foot."\n\r css: ".$css."\n\r");



$stylesheet= "../output/stylesheet.css";
$sHTML_Header = '<html><head><title>Test an html page</title><link rel="stylesheet" href="'.$stylesheet.'" type="text/css"></head><body><header><h1 style="color:#'.$color_head.'">'.$heading.'</h1></header> <div class="content">'; 
$sHTML_Content = '<section class="text"><p style="color:#'.$color_parag.'">'.$text.'</p></section>'.$code; 
$sHTML_Footer =  '</div><footer>'.$foot.'</footer></body></html>'; 

$filename = "output/index.html"; 

IF (IS_WRITABLE($filename)) { 

  
 IF (!$handle = FOPEN($filename, 'w')) { 
   ECHO "Cannot open file ($filename)"; 
   EXIT; 
 } 
 
 IF (FWRITE($handle, $sHTML_Header) === FALSE) { 
   ECHO "Cannot write to file ($filename)"; 
   EXIT; 
 }ELSE{ 
  FWRITE($handle, $sHTML_Content); 
  FWRITE($handle, $sHTML_Footer); 
} 

FCLOSE($handle); 

}ELSE{ 
 ECHO "The file $filename is not writable"; 
} 

//redirect the user to the html page 
HEADER("location:$filename"); 

?>