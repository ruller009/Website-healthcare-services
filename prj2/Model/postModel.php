<?php  
class postModel extends DB{
	public function page_max(){
		$qr=" select max(no) from news_general ";
		$res=pg_query($this->connect,$qr);
		$row=pg_fetch_array($res);
		$max=$row["max"];
		$mod=$max%4;
		if($mod){
			$page_max=($max-$mod)/4+1;
		}else{
			$page_max=$max/4;
		}
		return $page_max;
	}
	public function post_max(){
		$qr=" select max(no) from news_general ";
		$res=pg_query($this->connect,$qr);
		$row=pg_fetch_array($res);
		$max=$row["max"];
		return $max;
	}
	public function post_table_data($post_max){
		/*
		$qr = " select short_title, short_heading, intro_img from news_general where no = 1113 ";
		$res = pg_query($this->connect,$qr);
		$save = pg_fetch_array($res);
		return $save;
		*/
		$save = array();
		for($no = $post_max; $no >= 1 ; $no--){
			$qr=" select id, short_title, short_heading, intro_img from news_general where no = '$no' ";
			$res=pg_query($this->connect,$qr);
			$save["$no"]=pg_fetch_array($res);
		}
		return $save;
	}

	public function news_detail($id){
		$qr=" select * from news_detail where id = '$id' ";
		$res=pg_query($this->connect,$qr);
		$row=pg_fetch_array($res);
		return $row;
	}

	public function add_post_detail($postcontent){
		$qr=" insert into post(postcontent) values ('$postcontent') ";
		$res=pg_query($this->connect,$qr);
	}

	#############################################################################
	#############################################################################
	# LẤY DỮ LIỆU CHI TIẾT CỦA BÀI VIẾT
	public function show_post_detail($category, $id){
		$qr = "select * from $category where id = '$id' ";
		$res=pg_query($this->connect,$qr);
		$row=pg_fetch_array($res);
		return $row['post_content'];
	}

	#############################################################################
	#############################################################################
	# VIẾT BÀI
	public function write($category, $title, $heading, $image, $post_content){
		echo $_SESSION['username'];
		$qr = "select max(no) from $category";
		$max_no = pg_fetch_array(pg_query($this->connect, $qr))['max'];
		$qr = "select max(id) from $category";
		$max_id = pg_fetch_array(pg_query($this->connect, $qr))['max'];
		$no = $max_no + 1;
		$id = $max_id + 1;
		$qr = "insert into $category (no, id, title, heading, image, post_content) 
		values ('$no', '$id', '$title', '$heading', '$image', '$post_content')";
		pg_query($this->connect, $qr);

	}

	#############################################################################
	#############################################################################
	# HIỂN THỊ BẢNG TIN
	public function post_table($category, $page){
		$save = array();
		$qr = "select max(no) from $category";
		$post_max = pg_fetch_array(pg_query($this->connect, $qr))['max'];
		$mod = $post_max % 12;
		if($mod){
			$page_max = ($post_max-$mod)/12 + 1;
		}else{
			$page_max = $post_max/12;
		}
		if ($page > $page_max){
			$page = 1;
		}
		if($page == $page_max){
			$save["start"] = $post_max % 12;
			$save["end"] = 1;
		}else{
			$save["start"]= $post_max - ($page - 1) * 12;
			$save["end"] = $save["start"] - 11;
		}
		for($no = $save["start"]; $no >= $save["end"] ; $no--){
			$qr=" select id, title, image, heading from $category where no = '$no' ";
			$res=pg_query($this->connect,$qr);
			$save["$no"]=pg_fetch_array($res);
		}
		$save['page-max'] = $page_max;
		return $save;
	}
	#############################################################################
	#############################################################################
	# LIST POST
	public function listpost($category){
		$qr = "select * from $category";
		$run = pg_query($this->connect, $qr);
		return $run;
	}

	###########################################################3
	################################
	######### XÓA BÀI
	public function deletePost($category, $no){
		$qr = " delete from $category where no = $no ";
		pg_query($this->connect, $qr);
		$qr = " update $category set no = no - 1 where no > $no ";
		pg_query($this->connect, $qr);
	}

	############################################
	#########################
	public function callPost($category, $id){
		$qr = " select * from $category where id = '$id' ";
		$run = pg_query($this->connect, $qr);
		$res = pg_fetch_array($run);
		return $res;
	}

	public function updatePost($category, $id, $title, $heading, $image, $post_content){
		$qr = " update $category set (title, heading, image, post_content) = ('$title', '$heading', '$image', '$post_content')
		where id = $id  ";
		pg_query($this->connect, $qr);
	}	

}