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
 

 /*Lam sao goi toi link bang href
      + Dùng route
      + Dùng /url  cái này ở trong route

 */
 
 /*Lam sao truyen nhieu bien vo session
        set một mảng cho nó
 */


 /*lam sao tao comment nhu the nay

	  cai dat Doc​Blockr
 */

 

  /*Tao host ao de co the su dung cac file trong server*/
  vo file    E:\PROGRAM\XAMP\apache\conf\extra tim file Vhost va chinh su..bo phan comment di

  /* Ham isPostRequest duoc viet san hay o dau co*/
 

  /**
   * 	van de update_at va created_at
   *    thiet lap $timestamp = true; hoac false.
   *    chi dung voi update_at .. khong co created_at
   */
  
  
  /**
   * 	van de alias la gi:  ví dụ select* from Customer as Cu join Boss as Bo.. as là viết tắt của alias
   *   slug
   *   la bien ten bai viet thanh duong dan tren thanh address
   * 	
   */
  
  /**
   * 	vấn đề redirect
   *   khác với render vì nó không có dữ liệu truyền vào
   *   ???? khi nào dùng route, khi nào redirect
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
 *    tai sao dat code jquery trong document ready function thi khong thu cthi duoc'
 *
 *    +> nếu không dùng cách goi id de goi ham thi chi can dat rieng le mot ham thoi con
 *    neu su dung id de goi ham tuc la no sẽ cahyj ngay khi trinh duyet load xong nen dat trogn ready
 *    document la can thiet
 *    
 */

===================
/**
 *      trong file twig muon dung nhieu kieu dinh dang cho mot thuoc tinh
 *      {{ p.number | number_format | abs}}
 *
 *    //con be ten thi: quynh thi nguyen
 * 
 */

======================
/**
 *      cách lấy một chuỗi được tra ra từ controller ajax
 *      phai dung return mot chuoi
 *      nhất đinh phải trả về false nếu ajax đang url đến route nào đó
 */

=======================
/**
 *      VẤN ĐỀ GOI FUNCTION TRONG CÙNG MỘT CONTROLLER
 *        nếu hàm không liên quan đến rule thì không cần phải thêm action dsang sau
 *        và dung this dể tham chiếu
 */

==========================
/**
 *
 *    Cách định nghĩa rieng mot class cho mot cong viec nao do
 *    san pham dinh duong
 */

===========================
/**
 *    VẤN ĐỀ VỀ GET SESSION
 *    $this-> app['session']->get('user');
 *    và
 *    $this -> app['session']-> get('user', 'defaultvalue');
 *
 *    cái đầu tiên sẽ trả về giá trị của session hiện tại
 *    cái thứ 2 cũng sẽ trả về giá trị của session hiện tại 
 *    nhưng nếu session không tồn tại:
 *      + TH1 : trả về NULL
 *      + TH2  : trả về "default value".
 */
============================
MAU UA THICH 0d004c

=============================
/**
 *      co the dung ngay ham xoa database truc tiep trong controller  khong
 *      vidu:  DB::table('user')->delete();
 */

============================
/**
 *    Cach truyen url vao action trong view co an toan khong
 */
===========================
/**
 *   return false ajax trang load trang
 *   nen dung preventDefault vi trong dien thoai no se hien thi false neu tra ve false
 */
=============================
/**
 *    Khi nao nen su dung pimple
 */
=============================
/**
 *      phan trang:
 *
 *      muc tieu la lay du lieu theo so trang click va hien thi
 *      
 *      $['data'] = $this->paginate($id);
 *
 *      cần viết một class chung cho tat cả, với biến : 
 *       + bảng data
 *    
 *      
 */
==============================
/**
 *    một vài điều cần tìm hiểu về php
 *     + name convention
 *     + design patern
 *     + xml file
 *     + rss feed
 *     + elastic search
 *     + dung co so du lieu eloquent kieu khong can tao lai so so du lieu
 *     + SU DUNG MYSQL workbench
 *     + tao csdl lon cho trang web
 *     + xay dung he thong capacha voi checkout system
 *     + 
 */

============================
/**
 *     tao mot danh sach cac huong dan len github
 *     muon su dung ham document.ready.function phải load thư viện jquery
 */
============================
/**
 *    van de neu truyen link href = "/page/id" thi moi lan genarate mot page moi no se them VD: /product/page/id
 *    nen se loi khi truy cap tu trang khac
 * 
 */
==========================
/**
 *    van de star rating: 
 *
 *    table rating: {
 *    id:
 *    article:
 *    rate:
 *    
 *    }
 *    group by id của article sau do lay trung binh star rating
 *    
 *      
 */
