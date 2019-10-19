<?php

namespace Eccube\Twig\Extension;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class WordPressExtension extends AbstractExtension {
	public function getFunctions() {
		return [ 
				new TwigFunction ( 'getPosts', [ $this,'getPosts' ] ) ,
				new TwigFunction ( 'getGuids', [ $this,'getGuids' ] )
				
				
		];
	}
	public function getPosts($number=5) {
		
		
		$args = array (
				'numberposts' => $number,
				'order' => 'DESC',
				'post_status' => 'publish' ,
		);
		$con = mysqli_connect("localhost","root","root","wp1");
		
		$result = mysqli_query($con,"SELECT * FROM wp_posts   where post_status='publish' order by post_date desc limit 0, " .$number);
		mysqli_close($con);
		log_info('查询结果', [$result]);
		return $result;
	}
	
	public function getGuids($number=5) {
	
	
		$args = array (
				'numberposts' => $number,
				'order' => 'DESC',
				'post_status' => 'publish' ,
		);
		$con = mysqli_connect("localhost","root","root","wp1");
		
		$result = mysqli_query($con,"SELECT * FROM wp_posts   where post_status='publish' order by post_date desc limit 0, " .$number);
		mysqli_close($con);
		log_info('查询结果', [$result]);
		return $result;
	}
}