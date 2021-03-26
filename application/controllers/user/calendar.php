<?php
defined('BASEPATH') or exit('No direct script access allowed');

class calendar extends CI_Controller
{


    public function __construct()
    {
        //memanggil method kosntrukter di CI Controller
        parent::__construct();
        if($this->session->userdata('level') != "user"){
            redirect('login', 'refresh');
        }
        $this->load->model('admin/user_model');
        $this->load->model('user/fullcalendar_model');
    }

    public function index()
    {
        $data['title'] = 'Money Manager | Kalender keuangan';
        $data['user']      = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/user/header', $data);
        $this->load->view('user/calendar/index', $data);
        $this->load->view('template/user/footer_calendar');
        //$this->load->view('template/user/footer_user',$data);
    }

    public function load()
    {
        // $data['user']      = $this->user_model->getUser($this->session->userdata('id_user'));
        $event_data = $this->fullcalendar_model->fetch_all_event();
        foreach ($event_data->result_array() as $row) {
            $data[] = array(
                'id' => $row['id'],
                'title' => $row['title'],
                'start' => $row['start_event'],
                'end' => $row['end_event']
            );
        }
        echo json_encode($data);
    }

    function insert()
    {
        // $data['user']      = $this->user_model->getUser($this->session->userdata('id_user'));
        if ($this->input->post('title')) {
            $data = array(
                'title'  => $this->input->post('title'),
                'start_event' => $this->input->post('start'),
                'end_event' => $this->input->post('end')
            );
            $this->fullcalendar_model->insert_event($data);
        }
    }

    function update()
    {
        // $data['user']      = $this->user_model->getUser($this->session->userdata('id_user'));
        if ($this->input->post('id')) {
            $data = array(
                'title'   => $this->input->post('title'),
                'start_event' => $this->input->post('start'),
                'end_event'  => $this->input->post('end')
            );

            $this->fullcalendar_model->update_event($data, $this->input->post('id'));
        }
    }

    function delete()
    {
        // $data['user']      = $this->user_model->getUser($this->session->userdata('id_user'));
        if ($this->input->post('id')) {
            $this->fullcalendar_model->delete_event($this->input->post('id'));
        }
    }
}