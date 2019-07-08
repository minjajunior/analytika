<?php


class Training extends CI_Controller
{

    public function index(){
        $this->load->view('trainings/ifrs9_view');
    }

    public function ifrs9(){
        $this->load->view('trainings/ifrs9_view');
    }
    public function credit_risk(){
        $this->load->view('trainings/ifrs9_view');
    }
    public function credit_score(){
        $this->load->view('trainings/advanced_score_view');
    }
    public function crd(){
        $this->load->view('trainings/ifrs9_view');
    }

}