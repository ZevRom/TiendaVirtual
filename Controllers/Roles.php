<?php
class Roles extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Roles($params)
    {
        $data['page_id'] = 3;
        $data['tag_page'] = "Roles Usuario";
        $data['page_name'] = "rol_usuario";
        $data['page_title'] = "Roles Usuario <small>Tienda Sors </small>";

        $this->views->getView($this, "roles", $data);
    }
}
