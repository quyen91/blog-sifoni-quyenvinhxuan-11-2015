<?php

namespace App\Model;

use Sifoni\Model\Base;
use Sifoni\Model\DB;
date_default_timezone_set( 'Asia/Ho_Chi_Minh' );

class News extends Base {

	protected $table = 'post';
  public $timestamp = true;
	protected $fillable = array('name', 'img', 'author', 'tag','description', 'content','slug');

	function getAll(){

		//return User::select('id', 'name')->get();
		return News::get();
	}
	function getById($id){
		return News::where('id',$id)->get();
		
	}
	function insertNews($news){
		 $post = News::create($news);
     return $post->id;
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
        $result = DB::table('tag')->where('name',$t)->get();
        if(count($result)==0){
            $temp = array(
              'name' => $t
              );
            $idTag = DB::table('tag')->insertGetId($temp);
        }
        else{
          //lay id cua tag nay
          $idTag = $result[0]['id'];
        }

        $temp2 = array(
          'post_id' => $idPost,
          'tag_id' => $idTag
        );
        DB::table('post_tag')->insertGetId($temp2);
        }
       
      }
  	}
    public function deletePostTag($id){
       return DB::table('post_tag')->where('post_id',$id)->delete();
    }
    public function getAllTag(){
        return DB::table('tag')->get();
    }
    public function getPostTag($id){
        return DB::table('tag')->join('post_tag','tag.id', '=', 'post_tag.tag_id')->select('tag.name','tag.id')->where('post_tag.post_id',$id)->get();
    }
  	public function save_comments($comment){
  		return DB::table('comments')->insertGetId($comment);
  	}
    public function get_comments($id){
	  
      return DB::table('comments')->where('on_post',$id)->orderBy('id','desc')->get(); 	

   	}
    public function getPaginate($start,$limit){
     return News::skip($start)->take($limit)->get();
    }

} 