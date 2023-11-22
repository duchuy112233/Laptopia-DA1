<?php
//ram
function loadall_ram(){
    $sql="SELECT * FROM ramsp order by id desc";
    $list=pdo_query($sql);
    return $list;
}
function add_ram($ramsp){
    $sql = "INSERT INTO ramsp (ram_sp) VALUES ('$ramsp')";
    pdo_execute($sql);
}
function loadone_ram($id){
    $sql = "SELECT * FROM ramsp where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function update_ram($id, $ramsp){
    $sql = "UPDATE ramsp SET ram_sp ='$ramsp' WHERE id = $id";
    pdo_execute($sql);
}
function delete_ram($id){
    $sql = "DELETE FROM ramsp where id = $id";
    pdo_execute($sql);
}
//màu
function loadall_mau(){
    $sql="SELECT * FROM mausp order by id desc";
    $list=pdo_query($sql);
    return $list;
}
function add_mau($mausp){
    $sql = "INSERT INTO mausp (mau_sp) VALUES ('$mausp')";
    pdo_execute($sql);
}
function loadone_mau($id){
    $sql = "SELECT * FROM mausp where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function update_mau($id, $mausp){
    $sql = "UPDATE mausp SET mau_sp ='$mausp' WHERE id = $id";
    pdo_execute($sql);
}
function delete_mau($id){
    $sql = "DELETE FROM mausp where id = $id";
    pdo_execute($sql);
}
//sản phẩm biến thể
function loadall_spbt(){
    $sql="SELECT bienthe_sp.id, san_pham.name, mausp.mau_sp, ramsp.ram_sp, bienthe_sp.soluong FROM bienthe_sp 
    join san_pham on bienthe_sp.idsp=san_pham.id 
    join ramsp on bienthe_sp.idram=ramsp.id
    join mausp on bienthe_sp.idmau=mausp.id
    order by id desc";
    $list=pdo_query($sql);
    return $list;
}
function load_spbt($id){
    $sql="SELECT san_pham.name, mausp.mau_sp, ramsp.ram_sp, bienthe_sp.soluong FROM bienthe_sp 
    join san_pham on bienthe_sp.idsp=san_pham.id 
    join ramsp on bienthe_sp.idram=ramsp.id
    join mausp on bienthe_sp.idmau=mausp.id
    where bienthe_sp.idsp=$id";
    $list=pdo_query($sql);
    return $list;
}
function loadone_spbt($id){
    $sql = "SELECT * FROM bienthe_sp where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function add_spbt($idsp,$idram,$idmau,$soluong){
    $sql = "INSERT INTO bienthe_sp (idsp,idram,idmau,soluong) VALUES ('$idsp','$idram','$idmau','$soluong')";
    pdo_execute($sql);
}
function update_spbt($idbt,$idsp,$idram,$idmau,$soluong){
    $sql = "UPDATE bienthe_sp SET idsp ='$idsp', idram='$idram', idmau='$idmau', soluong='$soluong' WHERE id = $idbt";
    pdo_execute($sql);
}
function delete_spbt($id){
    $sql = "DELETE FROM bienthe_sp where id = $id";
    pdo_execute($sql);
}
?>