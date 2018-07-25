<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->library('mongo_db');
//        $order_by = ['id' => -1];
//        $where    = ['status' => 1];
//        $res      = $this->mongo_db
//            ->select('name')
//            ->order_by($order_by)
//            ->limit(21)
////            ->where_between('time_stamp', $start_date, $end_date)
//            ->where($where)
//            ->get('table_name');
        var_dump($this->mongo_db->where_gte('age', 18)->where(array('country' => 'UK', 'can_drink' => TRUE))->get('people'));
		$this->load->view('welcome_message');
	}
}
