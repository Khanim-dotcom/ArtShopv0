<?php

class Acon extends CI_Controller{

    public function index(){
        $this->load->view('admin/login');
    }

    public function loginAct(){
        echo 'Action';
    }

    public function dashboard()
    {
        $this->load->view('admin/dashboard');
    }




}