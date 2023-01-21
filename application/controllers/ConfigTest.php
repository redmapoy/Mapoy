<?php
    class ConfigTest extends CI_Controller{
        public function index(){
            echo $this->config->item('user').'<br />';
            $this->config->set_item('user', 'Kahit Sino');
            echo $this->config->item('user');

            echo '<h1 style="text-align: center;">Hello Codeigniter</h1>';
        }
        public function test($fname, $lname){

            echo '<br />';

            echo $this->config->site_url().'<br />';
            echo $this->config->base_url().'<br />';
            echo $this->config->system_url().'<br />';

            echo '<br />';

            echo $fname.' '.$lname;
        }
    }
?>