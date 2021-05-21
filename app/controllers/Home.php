<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Hompage';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['tech'] = $this->model('M_tech_i_use')->getAllTech();
        $data['projects'] = $this->model('M_projects')->getAllProjects();
        $data['skills'] = $this->model('M_skills')->getAllSkills();


        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('home/v_techIUse', $data);
        $this->view('home/v_projects', $data);
        $this->view('home/v_skills', $data);
        $this->view('templates/footer');
    }
}
