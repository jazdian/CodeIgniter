<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        $data['page'] = "home";
        $data['items_menu'] = $this->GetDataMenu();
        $data['dat_page'] = $this->GetDataPage();

        $this->load->view('demo1/index_header', $data);
        $this->load->view('demo1/index_main');
        $this->load->view('demo1/index_footer');

    }

    private function GetDataMenu()
    {
        $idsistem = 1;
        $idsection = 1;

        $this->load->model('demo1/Home_model');
        $items_menu = $this->Home_model->get_menu_header($idsistem, $idsection);
        return $items_menu;
    }

    private function GetDataPage()
    {
        $id = 1;
        $idsistem = 1;

        $this->load->model('demo1/Home_model');
        $dat_page = $this->Home_model->get_data_page($id, $idsistem);
        return $dat_page;

    }

}
