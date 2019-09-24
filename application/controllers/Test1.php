<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		/* Load lib and namespace. */
		$this->load->library('ide/property',null,null,'EchartsPHP\\');
		$this->load->library('echarts',null,null,'EchartsPHP\\');
		$this->load->library('ide/xaxis',null,null,'EchartsPHP\\ide\\');
		$this->load->library('ide/yaxis',null,null,'EchartsPHP\\ide\\');
		$this->load->library('ide/series',null,null,'EchartsPHP\\ide\\');
	}
	
	public function index()
	{
		$data['option'] = $this->chartline(
			['2018-01-01','2018-01-02','2018-01-03','2018-01-04','2018-01-05','2018-01-06','2018-01-07','2018-01-08','2018-01-09','2018-01-10'],
			[
				['name' => '数据1', 'data' => [99,102,20,235,112,675,76,24,657,32]],
				['name' => '数据2', 'data' => [199,202,30,335,212,575,176,124,457,132]],
			],
			'测试数据'
		);
		$this->load->view('echarts/test',$data);
	}
	function chartline($xAxisData, $seriesData, $title = '')
	{
		$color = ['#c23531','#2f4554', '#61a0a8', '#d48265', '#91c7ae','#749f83',  '#ca8622', '#bda29a','#6e7074', '#546570', '#c4ccd3'];
		//shuffle($color);
		//print_r($color);
		$title && $this->echarts->title->text = $title;
		$this->echarts->color = $color;
		$this->echarts->tooltip->trigger = 'axis';
		$this->echarts->toolbox->show = true;
		$this->echarts->toolbox->feature->dataZoom->yAxisIndex = 'none';
		$this->echarts->toolbox->feature->dataView->readOnly = false;
		$this->echarts->toolbox->feature->magicType->type = ['line', 'bar'];
		$this->echarts->toolbox->feature->saveAsImage = [];

		$this->xaxis->type = 'category';
		$this->xaxis->boundaryGap = false;
		$this->xaxis->data = $xAxisData;

		foreach($seriesData as $ser){
			$this->echarts->legend->data[] = $ser['name'];
			$this->series->name = $ser['name'];
			$this->series->type = isset($ser['type']) ?: 'line';
			$this->series->data = $ser['data'];
			$this->echarts->addSeries($this->series);
		}

		$this->echarts->addXAxis($this->xaxis);
		$this->echarts->addYAxis($this->yaxis);

		return $this->echarts->getOption(null,true);
	}
}
