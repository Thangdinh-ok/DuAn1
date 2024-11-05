<?php

function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham($kyw,$iddm){
    $sql="SELECT * FROM sanpham where 1"; 
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;   
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;   
}
function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;        
        $dm=pdero_quy_one($sql);
        return $dm;
}
function update_sanpham($iddm,$id,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
    $sql="update sanpham set name='".$tensp."',iddm='".$iddm."',price='".$giasp."',mota='".$mota."',img='".$hinh."', where id=".$id;
else
    $sql="update sanpham set name='".$tensp."',iddm='".$iddm."',price='".$giasp."',mota='".$mota."' where id=".$id;

    pdo_execute($sql);
}

?>