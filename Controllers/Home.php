<?php
class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home($params)
    {
        $data['tag_page'] = "Home";
        $data['page_title'] = "Página Principal";
        $data['page_name'] = "Home";
        $this->views->getView($this, "home", $data);
    }

    public function insertar()
    {
        $data = $this->model->setUser("Sors", 27);
        print_r($data);
    }

    public function verusuario($id)
    {
        $data = $this->model->getUser($id);
        print_r($data);
    }

    public function actualizar()
    {
        $data = $this->model->updateuser(1, "Diego", 27);
        print_r($data);
    }

    public function verusuarios()
    {
        $data = $this->model->getUsers();
        print_r($data);
    }

    public function eliminarusuario($id)
    {
        $data = $this->model->delUser($id);
        print_r($data);
    }
}
