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
        $data['page_tag'] = "Roles Usuario";
        $data['page_name'] = "rol_usuario";
        $data['page_title'] = "Roles Usuario <small>Tienda Sors </small>";

        $this->views->getView($this, "roles", $data);
    }
}
