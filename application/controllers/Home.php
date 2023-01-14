<?php
    class Home extends CI_Controller{
        public function index(){
            $this->load->helper('url');
            $this->load->view('Home_view');
        }

        public function about(){
            $this->load->helper('url');
            $this->load->view('About_view');
        }
    }
?>