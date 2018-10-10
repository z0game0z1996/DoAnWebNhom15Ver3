<?php 
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
	public function product_mobile($page,$count){
		
		$start = ($page-1)*$count;
		$sql = "select * from sanpham,hsx,loaisp where sanpham.IDHSX = hsx.IDHSX and sanpham.IDLoai = loaisp.IDLoai ORDER BY ID DESC LIMIT $start,$count";
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}

	public function getsanpham($id){
	 	
			$sql =  "select * from sanpham where ID = $id";
			$result = $this->conn->query($sql);
			return $this->getdata($result);
			$this->conn->close();
 	}

	public function TimKiem($tukhoa){
	
		$sql = "select * from sanpham, hsx, loaisp where sanpham.IDLoai = loaisp.IDLoai AND sanpham.IDHSX = hsx.IDHSX and TenSP like '%$tukhoa%'";
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

	public function soluongtatcaSP()
	{
		
		
		$sql = "select * from sanpham";
		$result = $this->conn->query($sql);
		return $result->num_rows;
		$this->conn->close();
	}

	public function create_links($base_url, $total_rows, $page, $count,$offset) {
		if($total_rows <= 0) {
			return " ";
		}
		$total_pages = ceil($total_rows/$count);
		if($total_pages <= 1) {
			return " ";
		}
		$first_link = " "; $prev_link =" "; $last_link=" "; $next_link=" ";
		if ($page > 1) {
			$first_link = "<a href='$base_url'> Trang đầu </a>";
			$prev = $page - 1;
			$prev_link = "<a href='$base_url?page=$prev'> << </a>";
		}
		if($page < $total_pages) {
			$last_link = "<a href='$base_url?page=$total_pages'> Trang cuối </a>";
			$next = $page + 1;
			$next_link = "<a href ='$base_url?page=$next'> >> </a>";
		}

		$total_pages = ceil($total_rows/$count);

		$from = $page - $offset;
		$to = $page + $offset;
		//$offset qui định số lượng trang hiển thị ở 2 đầu trang hiện hành
		//Ví dụ: $offset = 2 và $page = 5, lúc này thanh phân trang sẽ hiển thị: 3 4 5 6 7
		if($from <= 0) {
			$from = 1;
			$to = $page * 2;
		}
		if($to > $total_pages) {
			$to = $total_pages;
		}
		$links = "  ";
		for ($j = $from; $j <= $to; $j++) {
			$links = $links."<a href = '$base_url?page=$j'> $j </a>";
		}
		return $first_link.$prev_link.$links.$next_link.$last_link;
	}

	public function hangsx(){
		
		$sql = "select * from hsx";
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
	}

	public function gettenhangsx($id){
	 		
			$sql =  "select * from hsx where IDHSX = $id";
			$result = $this->conn->query($sql);
			return $this->getdata($result);
			$this->conn->close();
 	}
 	

 	public function loaisp(){
 		
		$sql = "select * from loaisp";
		$result = $this->conn->query($sql);
		return $this->getdata($result);
		$this->conn->close();
 	}

	public function themhangsx($tenhang){
		
		$sql = "insert into hsx (TenHSX) VALUES ('".$tenhang."') ";
		$result = $this->conn->query($sql);
		return $result;
		$this->conn->close();
	}

	public function suahangsx($tenhang, $idhang){
	
		$sql = "update hsx set TenHSX = '".$tenhang."' where IDHSX  = $idhang";
		$result = $this->conn->query($sql);
		return $result;
		$this->conn->close();
	}

	public function xoahangsx($idhang){
		
		$sql = "delete from hsx where IDHSX = $idhang";
		$result = $this->conn->query($sql);
		return $result;
		$this->conn->close();
	}

	public function themsanpham($tensp, $idloai, $idhsx, $mota, $giasp, $hinhanh){ 
	
		$sql = "insert into sanpham (TenSP, IDLoai, IDHSX, MoTa, GiaSP, HinhAnh) 
				values ('$tensp', $idloai, $idhsx, '$mota', $giasp, '$hinhanh') ";
		$result = $this->conn->query($sql);
		return $result;
		$this->conn->close();
	}

	public function suasanpham($tensp,$idloai, $idhsx,  $mota, $giasp, $hinhanh, $id){ 
	
		$sql = "update sanpham 
				set TenSP = '$tensp', IDLoai ='$idloai', IDHSX='$idhsx', MoTa='$mota',
		GiaSP='$giasp', HinhAnh='$hinhanh' where ID='$id'";
		$result = $this->conn->query($sql);
		return $result;
		$this->conn->close();
	}

	public function xoasanpham($id){
 	
		$sql = "delete from sanpham where ID ='$id'";
		$result = $this->conn->query($sql);
		return $result;
		$this->conn->close();
 	}
 }