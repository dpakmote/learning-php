<?php
	class student {
		var $name="";
		var $rollno="";
		var $marks="";

		function __constructor($val1,$val2,$val3){
			$this->name=$val1;
			$this->rollno=$val2;
			$this->marks=$val3;
		}

		function set_name($name){
			$this->name=$name;
		}
		function get_name(){
			return $this->name;
		}
		function set_rollno($rollno){
			$this->rollno=$rollno;
		}
		function get_rollno(){
			return $this->rollno;
		}
		function set_marks($marks){
			$this->marks=$marks;
		}
		function get_marks(){
			return $this->marks;
		}
	}

	class high_school extends student {
		var $height="";
		var $weight="";
	
		function incr_height($height)
		{
			$this->height=$height;
		}
		function incr_weight($weight)
		{
			$this->weight=$weight;
		}
	}
	

	$new_student= new high_school;
	$new_student->incr_height(45);
	print_r($new_student);
	//$new_student->set_name("pradeep");
	//$new_student->set_rollno(35);
	//$new_student->set_marks(45);
	/*
	//print_r($new_student);

	$current_student=$new_student->get_name();
	$current_rollno=$new_student->get_rollno();
	$current_marks=$new_student->get_marks();

	echo "$current_student".'<br />';
	echo "$current_rollno".'<br />';
	echo "$current_marks".'<br />';*/
?>