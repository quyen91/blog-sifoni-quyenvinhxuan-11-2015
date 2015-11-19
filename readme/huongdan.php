<?php 
public function helloAction($name,$tuoi) {
 
        echo $name;
        echo $tuoi;
        return "&nbsp;return";

//day la ham trong controller..2 ten bien phai giong ten luc truyen trong route
    }

//trong route thi the nay

 '/hello.html/{name}/{tuoi}' => 'HomeController:hello:hello_person:name=quyen,tuoi=12', 
 //ap dung cho nhieu bien


 /**Lam sao truyen get va post

  	+ mac dinh ban moi la get khi goi
 	+ chinh firefox network de xem che do post hay get
	+ cách generate link 
	{{ url('detail_r',{'id':p.id}) }} 

 */
 

 /*Lam sao goi toi link bang href*/
 
 /*Lam sao truyen nhieu bien vo session*/


 /*lam sao tao comment nhu the nay

	  cai dat Doc​Blockr
 */

 

  /*Tao host ao de co the su dung cac file trong server*/
  vo file    E:\PROGRAM\XAMP\apache\conf\extra tim file Vhost va chinh su..bo phan comment di

  /* Ham isPostRequest duoc viet san hay o dau co*/
  do minh viet

  /**
   * 	van de update_at va created_at
   *    thiet lap $timestamp = true; hoac false.
   *    chi dung voi update_at .. khong co created_at
   */
  
  
  /**
   * 	van de alias la gi
   *   slug
   *   la bien ten bai viet thanh duong dan tren thanh address
   * 	
   */
  
  /**
   * 	vấn đề tạo host ảo
   */
  
  /**
   * 	vấn đề redirect
   * 	redirect có sẵn chỉ việc gọi đến route nào đó
   */
  

  /**
   *  	Vấn đề hướng đối tượng để kiêm tra admin luc s đăn gnhat
   *  	workspace refactor admin
   *
   * 	-viec tao csdl rieng cho admin co can thiet khong
   * 	-cách tao folder admin cho toi uu
   */
  

  /**
   * 	cach rip mot template tren mang
   */
  

  /**
   * 	Upload file chay hay upload bằng plugin
   */
  
  /**
   *  Van de su dung nhieu bang trong mot class model
   */
  
  /**
   *    van de dung ajax de load san pham
   */
  
  //van de lay bien GET trong controller
  //   chi can truyen tham so vao ham
  //   vi moi lan tai trang deu la get
  
=================
  //van de truy cap bang khac tu model dung many to many
  //    su dung : DB::table();
  //
 =========================== 

  // lay bien session trong view 
  {% if app.session.get('logged') is defined %}

==================
  // van de mass assignment
  thay vi viec chen tung thuoc tinh cua form vao csdl ta co the do tat ca vao model voi fillable co chon loc cai nao se do vao.
  http://hndr.me/blog/laravel-mass-assignment-protection-blacklist-vs-whitelist/
  su dung whilelist thay vi backlist tuc la dung fillable thay vi guard

/**
 *  dung create:
 *  $user = User::create($u);
 *  
 *  update: dung find: update
 *  $t = User::find($id)->update($u)
 *
 * Luc xuat du lieu neu doan text van chua html tag thi dung
 *     {{ p.description | raw }}
 *  
 */

===================

/**
 *      van de su dung Ajax de truyen du lieu den controller: chua biet tai sao ???????????
 *      $.ajax({
 *
 *        data:{
 *          id: id
 *        }
 *
 *        //khong dung: data: id
 *      
 *      })
 *
 *      du co mot bien truyen vao nhung cung phai tao thanh mang neu khog se bi null o controller
 *      lay data o controllwe:
 *      $this->getPostData;
 *      
 */

===================
/**
 *    tai sao dat code jquery trong document ready function thi khong thu cthi duoc
 */

===================
/**
 *      trong file twig muon dung nhieu kieu dinh dang cho mot thuoc tinh
 *      {{ p.number | number_format | abs}}
 *
 *    //con be ten thi
 * 
 */

======================
/**
 *      cách lấy một chuỗi được tra ra từ controller ajax
 *      phai dung return mot chuoi
 */

