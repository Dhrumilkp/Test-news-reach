<?php 

class Queries_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Query/Query_test');
    }
    public function queries()
    {
        $data['query_data'] = $this->Query_test->first_query();
        $data['employee_rewards'] = $this->Query_test->second_query();
        $data['join_date'] = $this->Query_test->third_query();
        $this->load->view('query_1',$data);
    }
}
