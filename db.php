<?php 
	require_once "config.php";
class db{

	public $conn ="";

	public function __construct(){
		$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$this->conn->set_charset('utf8');
		return $this->conn;
	}
	
	public function getdata($obj){
		$arr = array();
		while ($row = $obj->fetch_assoc()) {
			$arr[] = $row; 
		}
		return $arr;
	}

	public function sanpham($page,$count){
		
		$start = ($page-1)*$count;
		$sql = "select * from sanpham ORDER BY Id DESC LIMIT $start,$count"; /* order by  ID desc limit 4 */
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}

	public function allsanpham(){
		
		$sql = "select * from sanpham";
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}

	public function getsanpham($id){
		
		$sql = "select * from sanpham where IDHSX = '$id'";
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}
	
	public function TenHang(){
		
		$sql = "select * from hsx,loaisp where IDLoai = 2";
		
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}


	public function TimKiem($tukhoa){
		
		$sql = "SELECT * FROM sanpham WHERE TenSP LIKE '%$tukhoa%'";
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}

	public function phantrang($base_url, $total_rows, $page, $per_page){
		$total_links = ceil($total_rows/$per_page);
		$link =""; 
		for($j=1; $j <= $total_links ; $j++) 
		{ 
			$link = $link."<a href='$base_url?page=$j'> $j </a>"; 
		} 
		return $link; 
	}

	public function chitietsp($id){
		
		$sql = "select * from sanpham where ID = '$id'";
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}

}

?>