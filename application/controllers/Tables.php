<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tables extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load form helper library
        $this->load->helper('url');
        $this->load->helper('login_helper');
        // Load session library
        $this->load->library('session');
        //load library ignited-dataTable
        $this->load->library('datatables');
        // Load model
        $this->load->model('crud_model'); 
        
    }

    public function basic_table()
    {
        display('tables/basic_table');
    }

    public function data_table()
    {
        display_custom_header('templates/header_data_table', 'tables/data_table');
    }

    public function manage_data_table()
    {
        $dataproduct['category'] = $this->crud_model->get_category();
        $this->load->view('templates/header_data_table');
        $this->load->view('templates/menu');
        $this->load->view('tables/manage_data_table', $dataproduct);
        //display_custom_header('templates/header_data_table', 'tables/manage_data_table');
    }

    function save(){ //insert record method
        $this->crud_model->insert_product();
        redirect('tables/manage_data_table');
    }
   
    function update(){ //update record method
        $this->crud_model->update_product();
        redirect('tables/manage_data_table');
    }
   
    function delete(){ //delete record method
        $this->crud_model->delete_product();
        redirect('tables/manage_data_table');
    }
    function get_product_json() { //get product data and encode to be JSON object
        header('Content-Type: application/json');
        echo $this->crud_model->get_all_product();
    }
}