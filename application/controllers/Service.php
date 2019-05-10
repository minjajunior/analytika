<?php


class Service extends CI_Controller
{

    public function index(){
        $this->load->view('service/cra_view');
    }

    public function ifrs(){
        $this->load->view('service/ifrs_view');
    }
    public function analytics(){
        $this->load->view('service/analytics_view');
    }
    public function crd(){
        $this->load->view('service/crd_view');
    }
    public function financial(){
        $this->load->view('service/financial_view');
    }
    public function training(){
        $this->load->view('service/training_view');
    }
}