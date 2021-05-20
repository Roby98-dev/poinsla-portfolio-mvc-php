<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Hompage';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['tech'] = $this->model('m_tech_i_use')->getAllTech();
        $data['projects'] = $this->model('m_projects')->getAllProjects();

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('tech_i_use/index', $data);
        $this->view('projects/v_projects', $data);
        $this->view('templates/footer');
    }
}
