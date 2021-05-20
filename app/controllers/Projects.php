<?php

class Tech_i_use extends Controller
{
    public function index()
    {
        $data['projects'] = $this->model('m_projects')->getAllProjects();
        $this->view('templates/header', $data);
        $this->view('projects/index', $data);
        $this->view('templates/footer');
    }
}
