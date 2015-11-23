<?php

namespace App\Model;

use Sifoni\Model\Base;
date_default_timezone_set( 'Asia/Ho_Chi_Minh' );

class News extends Base {

	protected $table = 'news';
	protected $fillable = array('name', 'img', 'author', 'tag','decription', 'content','slug');

	function getAll(){

		//return User::select('id', 'name')->get();
		return News::get();
	}
	function getById($id){
		return News::where('id',$id)->get();
		
	}
	function insertNews($news){
		return News::create($news);
	}
	function updateNews($id,$news){
		//return Product::where(`id`,$id)->update()
		$t = News::find($id)->update($news);
		return $t;
	}
	function add_tag($idPost,$tag){
      $idTag=NULL;
      $arrTag = explode(",",$tag);
      foreach ($arrTag as $t) {
        $t = trim($t);  //bo cac khoang trang
        if($t != ""){ //truong hop k co tag
           //query tag table
        $sql = "SELECT * FROM `{$this->table_tag}` where `name` = '$t'";
        $result = db_get_all($sql);
        if(count($result)==0){
            $temp = array(
              'name' => $t
              );
            db_insert($this->table_tag,$temp);
            $idTag = mysql_insert_id();
        }
        else{
          //lay id cua tag nay
          $idTag = $result[0]['id'];
        }

        $temp2 = array(
          'post_id' => $idPost,
          'tag_id' => $idTag
        );
        db_insert('post_tag',$temp2);
        }
       
      }
  	}
  	public function save_comments($comment){
  		return db_insert($this->table_comment, $comment);
  	}
    public function get_comments($id){
	    $sql = "SELECT * FROM `{$this->table_comment}` where `id_post`='$id'  order by `id` DESC" ;
	   	 return db_get_all($sql);

   	}

} 