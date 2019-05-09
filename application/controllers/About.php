<?php


class About extends CI_Controller
{

    public function index(){
        $this->load->view('about/about_view');
    }

    public function began(){
        $this->load->view('about/began_view');
    }

    public function mission(){
        $this->load->view('about/mission_view');
    }

    public function vision(){
        $this->load->view('about/vision_view');
    }

    public function social(){
        $this->load->view('about/social_view');
    }
}