<?php	

	class Reader{


		//file name
		var $HEADLINE_FILE = "input/headline.txt";
		var $EXPLAIN_TEXT_FILE = "input/explaintext.txt";
		var $CODE_TEXT_FILE = "input/code.txt";
		var $CSS_TEXT_FILE = "input/css.txt";
		var $IMPRESSUM_TEXT_FILE = "input/impressum.txt";


		//file content
		var $HeadLineContent;
		var $ExplainTextContent;
		var $CodeTextContent;
		var $CssTextContent;
		var $ImpressumTextContent;


		//Constuctor
		function __construct() {
			$this->HeadLineContent 		= $this->readHeadLineFile();
			$this->ExplainTextContent 	= $this->readExplainTextFile(); 
			$this->CodeTextContent 		= $this->readCodeTextFile();
			$this->CssTextContent 		= $this->readCssTextFile();
			$this->ImpressumTextContent = $this->readImpressumTextFile();
		}

		//File readers
		public function readHeadLineFile(){
			return $this->readFromFile($this->HEADLINE_FILE);
		}

		public function readExplainTextFile(){
			return $this->readFromFile($this->EXPLAIN_TEXT_FILE);
		}

		public function readCodeTextFile(){
			return $this->readFromFile($this->CODE_TEXT_FILE);
		}

		public function readCssTextFile(){
			return $this->readFromFile($this->CSS_TEXT_FILE);
		}

		public function readImpressumTextFile(){
			return $this->readFromFile($this->IMPRESSUM_TEXT_FILE);
		}

		//Utils
		public function readFromFile($fileName) {
			$myfile = fopen($fileName, "r") or die("Unable to open file!");
			$contents = fread($myfile,filesize($fileName));
			fclose($myfile);  

			return $this->IsNullOrEmptyString($contents);  
	    }

	    public function IsNullOrEmptyString($contents){
		    return (!isset($contents) || trim($contents)== '' ? '' : $contents);
		}
	}

	$Reader = new Reader();

?>


