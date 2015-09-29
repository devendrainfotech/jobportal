<?php
class Main{
	
	const PASSWORD_UPPER_CHAR_LENGTH = 1;
	const PASSWORD_LOWER_CHAR_LENGTH = 1;
	const PASSWORD_DIGIT_LENGTH = 1;
	const PASSWORD_SPECIAL_CHAR_LENGTH = 1;
	
	private $SpacialChar;
	private $upperCharCount;
	private $lowerCharCount;
	private $digitCount;
	private $specialCharCount;

	function __construct(){
		$this->SpacialChar = array('_','.',' ');
		$this->upperCharCount = 0;
		$this->lowerCharCount = 0;
		$this->digitCount = 0;
		$this->specialCharCount = 0;	
	}
	
	function ValidatePassword( $pass ){			
		for( $i=0; $i<strlen($pass); $i++ ){

			if( $pass[$i] >= 'a' && $pass[$i] <= 'z' ){
				$this->lowerCharCount++;				
			}
			else if( $pass[$i] >= 'A' && $pass[$i] <= 'Z' ){
				$this->upperCharCount++;
			}
			else if( $pass[$i] >= '0' && $pass[$i] <= '9' ){
				$this->digitCount++;
			}
			else{
				for( $j=0 ; $j<count($this->SpacialChar); $j++ ){
					if( $pass[$i] == $this->SpacialChar[$j]){
						$this->specialCharCount++;
					}
				}
			}
		}
		
		echo "<br/><br/><hr/> Data : ".$this->upperCharCount . ' , ' . $this->lowerCharCount . ' , ' . $this->digitCount . ' , ' . $this->specialCharCount ."<br/>";
		
		if( $this->upperCharCount >= self::PASSWORD_UPPER_CHAR_LENGTH 	&& 
			$this->lowerCharCount >= self::PASSWORD_LOWER_CHAR_LENGTH 	&&
			$this->digitCount		>= self::PASSWORD_DIGIT_LENGTH		&&
			$this->specialCharCount>=self::PASSWORD_LOWER_CHAR_LENGTH		){
			return true;
		}
		else{
			return false;
		}
	}
}
?>