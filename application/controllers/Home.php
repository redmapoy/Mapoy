<?php
    class Home extends CI_Controller{
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
            $data['title'] = 'Welcome to Tatay Boy\'s Tapsihan';
            $this->load->view('include/header', $data);

            $this->load->view('include/nav');
            $this->load->view('home_view');
            $this->load->view('include/footer');
        }

        public function show_menu(){
            $data['title'] = 'Tatay Boy\'s Tapsihan Menu';
            $this->load->view('include/header', $data);
            $this->load->view('include/nav');
            $this->load->view('menu_view');
            $this->load->view('include/footer');
            
        }

        public function show_pattern($num){
            for($i = 1; $i <= $num; $i++):
                for($j = $num; $j > $i; $j--):
                    echo '&nbsp;';
                endfor;
                for($k = 1; $k <= $i; $k++):
                    echo '*';
                endfor;
                echo '<br />';
            endfor;
        }

    }
?>