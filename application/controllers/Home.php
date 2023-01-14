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
        public function showconfig(){
            echo $this->config->site_url().'<br />';
            echo $this->config->base_url().'<br />';
            echo $this->config->system_url().'<br />';
        }
    }
?>