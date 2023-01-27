<?php
    class PrintSequence extends CI_Controller{
        public function __construct(){
            parent::__construct();
            // Your codes here....
            // Initialization of attributes
            $monthsary = "January 1, 1901";
            // Load your configuration/packages/helpers/libraries
            //$this->load->database();
            $this->load->library('email');
            $this->load->helper('url','form_helper');
        }

        public function index(){
            $data['title'] = 'TSA1 HOME';
            $this->load->view('include/header', $data);
            $this->load->view('include/nav');
            $this->load->view('home_view');
            $this->load->view('include/footer');
        }

        public function MarioFlagPole($size){
            $data['title'] = 'Mario Flag Pole';
            $this->load->view('include/header', $data);
            $this->load->view('include/nav');
            $this->load->view('mario_view');
            $this->load->view('include/footer');

            $row = $this->uri->segment(3);

            echo "<p align = 'center'>";

            if(is_numeric($row)){
                echo "<p align = 'center'>";
                echo "Rows: " . $row . "<br><br>";

                $counter = 1;
                echo "<div style='text-align:right; width: 100%;'>";
                for($i=1; $i <= $size; $i++){
                    for ($j=1; $j<=$i+1; $j++){
                        echo $counter++;
                    }
                    echo "<br/>";
                }
                echo "</p>";
            } else{
                echo "Invalid Input";
            }
        }

        public function BoxedFrame($row, $cols){
            $data['title'] = 'Boxed Frame';
            $this->load->view('include/header', $data);
            $this->load->view('include/nav');
            $this->load->view('box_view');
            $this->load->view('include/footer'); 

            echo "<p align = 'center'>";

            if(is_numeric($row) && is_numeric($cols)){
                echo "Rows: " . $row . "<br>";
                echo "Columns: " . $cols . "<br><br>";

                for($i=1; $i<=$row; $i++){
                    for($j=1; $j<=$cols; $j++){
                        if(($j>1 && $j<$cols) && $i==2){
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;';
                        } else if(($j>1 && $j<$cols) && $i==$row-1){
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;';
                        } else if(($j==2) && ($i>1 && $i<$row)){
                            echo '&nbsp;&nbsp;&nbsp;';
                        } else if(($j==$cols-1) && ($i>1 && $i<$row)){
                            echo '&nbsp;&nbsp;&nbsp;';
                        } else{
                            echo "<font style='color: #d99696; font-size: 25px; '> * </font>";
                        }
                    }
                    echo "<br>";
                }
            } else {
                echo "Invalid Input";
            }
        }

        public function HoneyComb($row, $cols){
            $data['title'] = 'Honey Comb';
            $this->load->view('include/header', $data);
            $this->load->view('include/nav');
            $this->load->view('honey_view');
            $this->load->view('include/footer'); 

            $row=$this->uri->segment(3);
            $cols=$this->uri->segment(4);

            echo "<p align = 'center'>";

            if(is_numeric($row) && is_numeric($cols)){
                echo "Rows: " . $row . "<br>";
                echo "Columns: " . $cols . "<br><br>";

                $first = "&nbsp;&nbsp;**&nbsp;&nbsp;<br>";
                $second = "&nbsp;*&nbsp;&nbsp;*&nbsp;<br>";
                $second_2 = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
                $third = "&nbsp;&nbsp;&nbsp;&nbsp;*<br> ";
                $fourth = "&nbsp;&nbsp;**&nbsp;&nbsp;";

                $row1 = "<font style 'color: #d99696; font-size: 25px;'>
                    $first
                    $second
                    $third
                    $third
                    $second
                    $fourth
                </font>";

                $row2 = "<font style 'color: #732828; font-size: 25px;'>
                    $first
                    $second
                    $second_2
                    $second_2
                    $second             
                    $fourth
                </font>";

                $cols1 = "<font style 'color: #732828; font-size: 25px;'>
                    $second
                    $third
                    $third
                    $second               
                    $fourth
                </font>";

                $cols2 = "<font style 'color: #d99696; font-size: 25px;'>
                    $second
                    $second_2
                    $second_2
                    $second                  
                    $fourth
                </font>";

                echo "<table cellspacing=0 cellpadding=0>";
                for($i=1; $i<=$row; $i++){
                    echo "<tr>";
                    for($j=1; $j<=$cols; $j++){
                        if($j==1 && $i==1){
                            echo "<td>" . $row1 . "</td>";
                        } else if ($i==1 && $j>1){
                            echo "<td>" . $row2 . "</td>";
                        } else if ($i>1 && $j==1){
                            echo "<td>" . $cols1 . "</td>";
                        } else {
                            echo "<td>" . $cols2 . "</td>";
                        }
                    }
                }
                echo "</table>";
            } else {
                echo "Invalid Input";
            }
        }

    }
?>