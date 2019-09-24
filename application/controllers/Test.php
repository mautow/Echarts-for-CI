<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
		/* Load lib and namespace. */
		$this->load->library('ide/property',null,null,'EchartsPHP\\');
		$this->load->library('echarts',null,null,'EchartsPHP\\');

		$this->echarts->title[]= array('text'=>'测试abc', 'x'=>'100px');
		$this->echarts->tooltip->show = true;
		$this->echarts->lengend->data[] = '销量';
		$this->echarts->xAxis[] = array(
			'type'=>'category',
			'data'=> array("血瓶","血气散","炼乳","精气丸","易筋经")
		);
		$this->echarts->yAxis[] = array(
			'type'=> 'value'
		);

		$this->echarts->series[] = array(
			'name'=> '销量',
			'type' => 'line',
			'data' => array(15,10,40,78,30)
		);
		$data['option'] = $this->echarts->getOption(null,true);

		$this->load->view('echarts/test',$data);
	}
}
