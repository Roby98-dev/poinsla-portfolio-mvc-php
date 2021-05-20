<?php

class Tech_i_use extends Controller
{
    public function index()
    {
        $data['tech'] = $this->model('m_tech_i_use')->getAllTech();
        $this->view('templates/header', $data);
        $this->view('tech_i_use/index', $data);
        $this->view('templates/footer');
    }
}
