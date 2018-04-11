<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="../js/fabric.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="body">

<?php
require_once('../model/conexion.php');
require_once('../model/m_dientes.php');
function listarDientes(){
    $consultas=new Dientes();
    $filas=$consultas ->listar();
    
    foreach($filas as $fila){
        $id=$fila['id_dientes'];
        $p1_a=$fila['pieza1_a'];
        $p1_b=$fila['pieza1_b'];
        $p1_c=$fila['pieza1_c'];
        $p1_d=$fila['pieza1_d'];
        $p1_e=$fila['pieza1_e'];

        $p2_a=$fila['pieza2_a'];
        $p2_b=$fila['pieza2_b'];
        $p2_c=$fila['pieza2_c'];
        $p2_d=$fila['pieza2_d'];
        $p2_e=$fila['pieza2_e'];

        $p3_a=$fila['pieza3_a'];
        $p3_b=$fila['pieza3_b'];
        $p3_c=$fila['pieza3_c'];
        $p3_d=$fila['pieza3_d'];
        $p3_e=$fila['pieza3_e'];

        $p4_a=$fila['pieza4_a'];
        $p4_b=$fila['pieza4_b'];
        $p4_c=$fila['pieza4_c'];
        $p4_d=$fila['pieza4_d'];

        $p5_a=$fila['pieza5_a'];
        $p5_b=$fila['pieza5_b'];
        $p5_c=$fila['pieza5_c'];
        $p5_d=$fila['pieza5_d'];

        $p6_a=$fila['pieza6_a'];
        $p6_b=$fila['pieza6_b'];
        $p6_c=$fila['pieza6_c'];
        $p6_d=$fila['pieza6_d'];

        $p7_a=$fila['pieza7_a'];
        $p7_b=$fila['pieza7_b'];
        $p7_c=$fila['pieza7_c'];
        $p7_d=$fila['pieza7_d'];

        $p8_a=$fila['pieza8_a'];
        $p8_b=$fila['pieza8_b'];
        $p8_c=$fila['pieza8_c'];
        $p8_d=$fila['pieza8_d'];

        $p9_a=$fila['pieza9_a'];
        $p9_b=$fila['pieza9_b'];
        $p9_c=$fila['pieza9_c'];
        $p9_d=$fila['pieza9_d'];

        $p10_a=$fila['pieza10_a'];
        $p10_b=$fila['pieza10_b'];
        $p10_c=$fila['pieza10_c'];
        $p10_d=$fila['pieza10_d'];

        $p11_a=$fila['pieza11_a'];
        $p11_b=$fila['pieza11_b'];
        $p11_c=$fila['pieza11_c'];
        $p11_d=$fila['pieza11_d'];

        $p12_a=$fila['pieza12_a'];
        $p12_b=$fila['pieza12_b'];
        $p12_c=$fila['pieza12_c'];
        $p12_d=$fila['pieza12_d'];

        $p13_a=$fila['pieza13_a'];
        $p13_b=$fila['pieza13_b'];
        $p13_c=$fila['pieza13_c'];
        $p13_d=$fila['pieza13_d'];

        $p14_a=$fila['pieza14_a'];
        $p14_b=$fila['pieza14_b'];
        $p14_c=$fila['pieza14_c'];
        $p14_d=$fila['pieza14_d'];
        $p14_e=$fila['pieza14_e'];

        $p15_a=$fila['pieza15_a'];
        $p15_b=$fila['pieza15_b'];
        $p15_c=$fila['pieza15_c'];
        $p15_d=$fila['pieza15_d'];
        $p15_e=$fila['pieza15_e'];

        $p16_a=$fila['pieza16_a'];
        $p16_b=$fila['pieza16_b'];
        $p16_c=$fila['pieza16_c'];
        $p16_d=$fila['pieza16_d'];
        $p16_e=$fila['pieza16_e'];

        $p17_a=$fila['pieza17_a'];
        $p17_b=$fila['pieza17_b'];
        $p17_c=$fila['pieza17_c'];
        $p17_d=$fila['pieza17_d'];
        $p17_e=$fila['pieza17_e'];

        $p18_a=$fila['pieza18_a'];
        $p18_b=$fila['pieza18_b'];
        $p18_c=$fila['pieza18_c'];
        $p18_d=$fila['pieza18_d'];
        $p18_e=$fila['pieza18_e'];

        $p19_a=$fila['pieza19_a'];
        $p19_b=$fila['pieza19_b'];
        $p19_c=$fila['pieza19_c'];
        $p19_d=$fila['pieza19_d'];
        $p19_e=$fila['pieza19_e'];

        $p20_a=$fila['pieza20_a'];
        $p20_b=$fila['pieza20_b'];
        $p20_c=$fila['pieza20_c'];
        $p20_d=$fila['pieza20_d'];

        $p21_a=$fila['pieza21_a'];
        $p21_b=$fila['pieza21_b'];
        $p21_c=$fila['pieza21_c'];
        $p21_d=$fila['pieza21_d'];

        $p22_a=$fila['pieza22_a'];
        $p22_b=$fila['pieza22_b'];
        $p22_c=$fila['pieza22_c'];
        $p22_d=$fila['pieza22_d'];

        $p23_a=$fila['pieza23_a'];
        $p23_b=$fila['pieza23_b'];
        $p23_c=$fila['pieza23_c'];
        $p23_d=$fila['pieza23_d'];

        $p24_a=$fila['pieza24_a'];
        $p24_b=$fila['pieza24_b'];
        $p24_c=$fila['pieza24_c'];
        $p24_d=$fila['pieza24_d'];

        $p25_a=$fila['pieza25_a'];
        $p25_b=$fila['pieza25_b'];
        $p25_c=$fila['pieza25_c'];
        $p25_d=$fila['pieza25_d'];

        $p26_a=$fila['pieza26_a'];
        $p26_b=$fila['pieza26_b'];
        $p26_c=$fila['pieza26_c'];
        $p26_d=$fila['pieza26_d'];

        $p27_a=$fila['pieza27_a'];
        $p27_b=$fila['pieza27_b'];
        $p27_c=$fila['pieza27_c'];
        $p27_d=$fila['pieza27_d'];

        $p28_a=$fila['pieza28_a'];
        $p28_b=$fila['pieza28_b'];
        $p28_c=$fila['pieza28_c'];
        $p28_d=$fila['pieza28_d'];

        $p29_a=$fila['pieza29_a'];
        $p29_b=$fila['pieza29_b'];
        $p29_c=$fila['pieza29_c'];
        $p29_d=$fila['pieza29_d'];

        $p30_a=$fila['pieza30_a'];
        $p30_b=$fila['pieza30_b'];
        $p30_c=$fila['pieza30_c'];
        $p30_d=$fila['pieza30_d'];
        $p30_e=$fila['pieza30_d'];

        $p31_a=$fila['pieza31_a'];
        $p31_b=$fila['pieza31_b'];
        $p31_c=$fila['pieza31_c'];
        $p31_d=$fila['pieza31_d'];
        $p31_e=$fila['pieza31_d'];

        $p32_a=$fila['pieza32_a'];
        $p32_b=$fila['pieza32_b'];
        $p32_c=$fila['pieza32_c'];
        $p32_d=$fila['pieza32_d'];
        $p32_e=$fila['pieza32_d'];

}
//0 = no pintado
//1 = pintado
////////////////////////////////Pintar//////////////////////////////////////////////
if ($p1_a==1) {
    $a1='rgb(240,0,0)';
}else{
    $a1='rgb(237, 247, 250)';
}

if ($p1_b==1) {
    $a2='rgb(240,0,0)';
}else{
    $a2='rgb(237, 247, 250)';
}

if ($p1_c==1) {
    $a3='rgb(240,0,0)';
}else{
    $a3='rgb(237, 247, 250)';
}

if ($p1_d==1) {
    $a4='rgb(240,0,0)';
}else{
    $a4='rgb(237, 247, 250)';
}

if ($p1_e==1) {
    $a5='rgb(240,0,0)';
}else{
    $a5='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p2_a==1) {
    $b1='rgb(240,0,0)';
}else{
    $b1='rgb(237, 247, 250)';
}

if ($p2_b==1) {
    $b2='rgb(240,0,0)';
}else{
    $b2='rgb(237, 247, 250)';
}

if ($p2_c==1) {
    $b3='rgb(240,0,0)';
}else{
    $b3='rgb(237, 247, 250)';
}

if ($p2_d==1) {
    $b4='rgb(240,0,0)';
}else{
    $b4='rgb(237, 247, 250)';
}

if ($p2_e==1) {
    $b5='rgb(240,0,0)';
}else{
    $b5='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p3_a==1) {
    $c1='rgb(240,0,0)';
}else{
    $c1='rgb(237, 247, 250)';
}

if ($p3_b==1) {
    $c2='rgb(240,0,0)';
}else{
    $c2='rgb(237, 247, 250)';
}

if ($p3_c==1) {
    $c3='rgb(240,0,0)';
}else{
    $c3='rgb(237, 247, 250)';
}

if ($p3_d==1) {
    $c4='rgb(240,0,0)';
}else{
    $c4='rgb(237, 247, 250)';
}

if ($p3_e==1) {
    $c5='rgb(240,0,0)';
}else{
    $c5='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p4_a==1) {
    $d1='rgb(240,0,0)';
}else{
    $d1='rgb(237, 247, 250)';
}

if ($p4_b==1) {
    $d2='rgb(240,0,0)';
}else{
    $d2='rgb(237, 247, 250)';
}

if ($p4_c==1) {
    $d3='rgb(240,0,0)';
}else{
    $d3='rgb(237, 247, 250)';
}

if ($p4_d==1) {
    $d4='rgb(240,0,0)';
}else{
    $d4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p5_a==1) {
    $e1='rgb(240,0,0)';
}else{
    $e1='rgb(237, 247, 250)';
}

if ($p5_b==1) {
    $e2='rgb(240,0,0)';
}else{
    $e2='rgb(237, 247, 250)';
}

if ($p5_c==1) {
    $e3='rgb(240,0,0)';
}else{
    $e3='rgb(237, 247, 250)';
}

if ($p5_d==1) {
    $e4='rgb(240,0,0)';
}else{
    $e4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p6_a==1) {
    $f1='rgb(240,0,0)';
}else{
    $f1='rgb(237, 247, 250)';
}

if ($p6_b==1) {
    $f2='rgb(240,0,0)';
}else{
    $f2='rgb(237, 247, 250)';
}

if ($p6_c==1) {
    $f3='rgb(240,0,0)';
}else{
    $f3='rgb(237, 247, 250)';
}

if ($p6_d==1) {
    $f4='rgb(240,0,0)';
}else{
    $f4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p7_a==1) {
    $g1='rgb(240,0,0)';
}else{
    $g1='rgb(237, 247, 250)';
}

if ($p7_b==1) {
    $g2='rgb(240,0,0)';
}else{
    $g2='rgb(237, 247, 250)';
}

if ($p7_c==1) {
    $g3='rgb(240,0,0)';
}else{
    $g3='rgb(237, 247, 250)';
}

if ($p7_d==1) {
    $g4='rgb(240,0,0)';
}else{
    $g4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p8_a==1) {
    $h1='rgb(240,0,0)';
}else{
    $h1='rgb(237, 247, 250)';
}

if ($p8_b==1) {
    $h2='rgb(240,0,0)';
}else{
    $h2='rgb(237, 247, 250)';
}

if ($p8_c==1) {
    $h3='rgb(240,0,0)';
}else{
    $h3='rgb(237, 247, 250)';
}

if ($p8_d==1) {
    $h4='rgb(240,0,0)';
}else{
    $h4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p9_a==1) {
    $i1='rgb(240,0,0)';
}else{
    $i1='rgb(237, 247, 250)';
}

if ($p9_b==1) {
    $i2='rgb(240,0,0)';
}else{
    $i2='rgb(237, 247, 250)';
}

if ($p9_c==1) {
    $i3='rgb(240,0,0)';
}else{
    $i3='rgb(237, 247, 250)';
}

if ($p9_d==1) {
    $i4='rgb(240,0,0)';
}else{
    $i4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p10_a==1) {
    $j1='rgb(240,0,0)';
}else{
    $j1='rgb(237, 247, 250)';
}

if ($p10_b==1) {
    $j2='rgb(240,0,0)';
}else{
    $j2='rgb(237, 247, 250)';
}

if ($p10_c==1) {
    $j3='rgb(240,0,0)';
}else{
    $j3='rgb(237, 247, 250)';
}

if ($p10_d==1) {
    $j4='rgb(240,0,0)';
}else{
    $j4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p11_a==1) {
    $k1='rgb(240,0,0)';
}else{
    $k1='rgb(237, 247, 250)';
}

if ($p11_b==1) {
    $k2='rgb(240,0,0)';
}else{
    $k2='rgb(237, 247, 250)';
}

if ($p11_c==1) {
    $k3='rgb(240,0,0)';
}else{
    $k3='rgb(237, 247, 250)';
}

if ($p11_d==1) {
    $k4='rgb(240,0,0)';
}else{
    $k4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p12_a==1) {
    $l1='rgb(240,0,0)';
}else{
    $l1='rgb(237, 247, 250)';
}

if ($p12_b==1) {
    $l2='rgb(240,0,0)';
}else{
    $l2='rgb(237, 247, 250)';
}

if ($p12_c==1) {
    $l3='rgb(240,0,0)';
}else{
    $l3='rgb(237, 247, 250)';
}

if ($p12_d==1) {
    $l4='rgb(240,0,0)';
}else{
    $l4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p13_a==1) {
    $m1='rgb(240,0,0)';
}else{
    $m1='rgb(237, 247, 250)';
}

if ($p13_b==1) {
    $m2='rgb(240,0,0)';
}else{
    $m2='rgb(237, 247, 250)';
}

if ($p13_c==1) {
    $m3='rgb(240,0,0)';
}else{
    $m3='rgb(237, 247, 250)';
}

if ($p13_d==1) {
    $m4='rgb(240,0,0)';
}else{
    $m4='rgb(237, 247, 250)';
}
///////////////
///////////////
if ($p14_a==1) {
    $n1='rgb(240,0,0)';
}else{
    $n1='rgb(237, 247, 250)';
}

if ($p14_b==1) {
    $n2='rgb(240,0,0)';
}else{
    $n2='rgb(237, 247, 250)';
}

if ($p14_c==1) {
    $n3='rgb(240,0,0)';
}else{
    $n3='rgb(237, 247, 250)';
}

if ($p14_d==1) {
    $n4='rgb(240,0,0)';
}else{
    $n4='rgb(237, 247, 250)';
}

if ($p14_e==1) {
    $n5='rgb(240,0,0)';
}else{
    $n5='rgb(237, 247, 250)';
}
///////////
//////////
if ($p15_a==1) {
    $o1='rgb(240,0,0)';
}else{
    $o1='rgb(237, 247, 250)';
}

if ($p15_b==1) {
    $o2='rgb(240,0,0)';
}else{
    $o2='rgb(237, 247, 250)';
}

if ($p15_c==1) {
    $o3='rgb(240,0,0)';
}else{
    $o3='rgb(237, 247, 250)';
}

if ($p15_d==1) {
    $o4='rgb(240,0,0)';
}else{
    $o4='rgb(237, 247, 250)';
}

if ($p15_e==1) {
    $o5='rgb(240,0,0)';
}else{
    $o5='rgb(237, 247, 250)';
}
///////
///////
if ($p16_a==1) {
    $p1='rgb(240,0,0)';
}else{
    $p1='rgb(237, 247, 250)';
}

if ($p16_b==1) {
    $p2='rgb(240,0,0)';
}else{
    $p2='rgb(237, 247, 250)';
}

if ($p16_c==1) {
    $p3='rgb(240,0,0)';
}else{
    $p3='rgb(237, 247, 250)';
}

if ($p16_d==1) {
    $p4='rgb(240,0,0)';
}else{
    $p4='rgb(237, 247, 250)';
}

if ($p16_e==1) {
    $p5='rgb(240,0,0)';
}else{
    $p5='rgb(237, 247, 250)';
}///////////////////////////////////
//inferior//
////////////////////////////////////
if ($p17_a==1) {
    $aa1='rgb(240,0,0)';
}else{
    $aa1='rgb(237, 247, 250)';
}

if ($p17_b==1) {
    $aa2='rgb(240,0,0)';
}else{
    $aa2='rgb(237, 247, 250)';
}

if ($p17_c==1) {
    $aa3='rgb(240,0,0)';
}else{
    $aa3='rgb(237, 247, 250)';
}

if ($p17_d==1) {
    $aa4='rgb(240,0,0)';
}else{
    $aa4='rgb(237, 247, 250)';
}

if ($p17_e==1) {
    $aa5='rgb(240,0,0)';
}else{
    $aa5='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p18_a==1) {
    $bb1='rgb(240,0,0)';
}else{
    $bb1='rgb(237, 247, 250)';
}

if ($p18_b==1) {
    $bb2='rgb(240,0,0)';
}else{
    $bb2='rgb(237, 247, 250)';
}

if ($p18_c==1) {
    $bb3='rgb(240,0,0)';
}else{
    $bb3='rgb(237, 247, 250)';
}

if ($p18_d==1) {
    $bb4='rgb(240,0,0)';
}else{
    $bb4='rgb(237, 247, 250)';
}

if ($p18_e==1) {
    $bb5='rgb(240,0,0)';
}else{
    $bb5='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p19_a==1) {
    $cc1='rgb(240,0,0)';
}else{
    $cc1='rgb(237, 247, 250)';
}

if ($p19_b==1) {
    $cc2='rgb(240,0,0)';
}else{
    $cc2='rgb(237, 247, 250)';
}

if ($p19_c==1) {
    $cc3='rgb(240,0,0)';
}else{
    $cc3='rgb(237, 247, 250)';
}

if ($p19_d==1) {
    $cc4='rgb(240,0,0)';
}else{
    $cc4='rgb(237, 247, 250)';
}

if ($p19_e==1) {
    $cc5='rgb(240,0,0)';
}else{
    $cc5='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p20_a==1) {
    $dd1='rgb(240,0,0)';
}else{
    $dd1='rgb(237, 247, 250)';
}

if ($p20_b==1) {
    $dd2='rgb(240,0,0)';
}else{
    $dd2='rgb(237, 247, 250)';
}

if ($p20_c==1) {
    $dd3='rgb(240,0,0)';
}else{
    $dd3='rgb(237, 247, 250)';
}

if ($p20_d==1) {
    $dd4='rgb(240,0,0)';
}else{
    $dd4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p21_a==1) {
    $ee1='rgb(240,0,0)';
}else{
    $ee1='rgb(237, 247, 250)';
}

if ($p21_b==1) {
    $ee2='rgb(240,0,0)';
}else{
    $ee2='rgb(237, 247, 250)';
}

if ($p21_c==1) {
    $ee3='rgb(240,0,0)';
}else{
    $ee3='rgb(237, 247, 250)';
}

if ($p21_d==1) {
    $ee4='rgb(240,0,0)';
}else{
    $ee4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p22_a==1) {
    $ff1='rgb(240,0,0)';
}else{
    $ff1='rgb(237, 247, 250)';
}

if ($p22_b==1) {
    $ff2='rgb(240,0,0)';
}else{
    $ff2='rgb(237, 247, 250)';
}

if ($p22_c==1) {
    $ff3='rgb(240,0,0)';
}else{
    $ff3='rgb(237, 247, 250)';
}

if ($p22_d==1) {
    $ff4='rgb(240,0,0)';
}else{
    $ff4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p23_a==1) {
    $gg1='rgb(240,0,0)';
}else{
    $gg1='rgb(237, 247, 250)';
}

if ($p23_b==1) {
    $gg2='rgb(240,0,0)';
}else{
    $gg2='rgb(237, 247, 250)';
}

if ($p23_c==1) {
    $gg3='rgb(240,0,0)';
}else{
    $gg3='rgb(237, 247, 250)';
}

if ($p23_d==1) {
    $gg4='rgb(240,0,0)';
}else{
    $gg4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p24_a==1) {
    $hh1='rgb(240,0,0)';
}else{
    $hh1='rgb(237, 247, 250)';
}

if ($p24_b==1) {
    $hh2='rgb(240,0,0)';
}else{
    $hh2='rgb(237, 247, 250)';
}

if ($p24_c==1) {
    $hh3='rgb(240,0,0)';
}else{
    $hh3='rgb(237, 247, 250)';
}

if ($p24_d==1) {
    $hh4='rgb(240,0,0)';
}else{
    $hh4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p25_a==1) {
    $ii1='rgb(240,0,0)';
}else{
    $ii1='rgb(237, 247, 250)';
}

if ($p25_b==1) {
    $ii2='rgb(240,0,0)';
}else{
    $ii2='rgb(237, 247, 250)';
}

if ($p25_c==1) {
    $ii3='rgb(240,0,0)';
}else{
    $ii3='rgb(237, 247, 250)';
}

if ($p25_d==1) {
    $ii4='rgb(240,0,0)';
}else{
    $ii4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p26_a==1) {
    $jj1='rgb(240,0,0)';
}else{
    $jj1='rgb(237, 247, 250)';
}

if ($p26_b==1) {
    $jj2='rgb(240,0,0)';
}else{
    $jj2='rgb(237, 247, 250)';
}

if ($p26_c==1) {
    $jj3='rgb(240,0,0)';
}else{
    $jj3='rgb(237, 247, 250)';
}

if ($p26_d==1) {
    $jj4='rgb(240,0,0)';
}else{
    $jj4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p27_a==1) {
    $kk1='rgb(240,0,0)';
}else{
    $kk1='rgb(237, 247, 250)';
}

if ($p27_b==1) {
    $kk2='rgb(240,0,0)';
}else{
    $kk2='rgb(237, 247, 250)';
}

if ($p27_c==1) {
    $kk3='rgb(240,0,0)';
}else{
    $kk3='rgb(237, 247, 250)';
}

if ($p27_d==1) {
    $kk4='rgb(240,0,0)';
}else{
    $kk4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p28_a==1) {
    $ll1='rgb(240,0,0)';
}else{
    $ll1='rgb(237, 247, 250)';
}

if ($p28_b==1) {
    $ll2='rgb(240,0,0)';
}else{
    $ll2='rgb(237, 247, 250)';
}

if ($p28_c==1) {
    $ll3='rgb(240,0,0)';
}else{
    $ll3='rgb(237, 247, 250)';
}

if ($p28_d==1) {
    $ll4='rgb(240,0,0)';
}else{
    $ll4='rgb(237, 247, 250)';
}
/////////////////
/////////////////
if ($p29_a==1) {
    $mm1='rgb(240,0,0)';
}else{
    $mm1='rgb(237, 247, 250)';
}

if ($p29_b==1) {
    $mm2='rgb(240,0,0)';
}else{
    $mm2='rgb(237, 247, 250)';
}

if ($p29_c==1) {
    $mm3='rgb(240,0,0)';
}else{
    $mm3='rgb(237, 247, 250)';
}

if ($p29_d==1) {
    $mm4='rgb(240,0,0)';
}else{
    $mm4='rgb(237, 247, 250)';
}
///////////////
///////////////
if ($p30_a==1) {
    $nn1='rgb(240,0,0)';
}else{
    $nn1='rgb(237, 247, 250)';
}

if ($p30_b==1) {
    $nn2='rgb(240,0,0)';
}else{
    $nn2='rgb(237, 247, 250)';
}

if ($p30_c==1) {
    $nn3='rgb(240,0,0)';
}else{
    $nn3='rgb(237, 247, 250)';
}

if ($p30_d==1) {
    $nn4='rgb(240,0,0)';
}else{
    $nn4='rgb(237, 247, 250)';
}

if ($p30_e==1) {
    $nn5='rgb(240,0,0)';
}else{
    $nn5='rgb(237, 247, 250)';
}
///////////
//////////
if ($p31_a==1) {
    $oo1='rgb(240,0,0)';
}else{
    $oo1='rgb(237, 247, 250)';
}

if ($p31_b==1) {
    $oo2='rgb(240,0,0)';
}else{
    $oo2='rgb(237, 247, 250)';
}

if ($p31_c==1) {
    $oo3='rgb(240,0,0)';
}else{
    $oo3='rgb(237, 247, 250)';
}

if ($p31_d==1) {
    $oo4='rgb(240,0,0)';
}else{
    $oo4='rgb(237, 247, 250)';
}

if ($p31_e==1) {
    $oo5='rgb(240,0,0)';
}else{
    $oo5='rgb(237, 247, 250)';
}
///////
///////
if ($p32_a==1) {
    $pp1='rgb(240,0,0)';
}else{
    $pp1='rgb(237, 247, 250)';
}

if ($p32_b==1) {
    $pp2='rgb(240,0,0)';
}else{
    $pp2='rgb(237, 247, 250)';
}

if ($p32_c==1) {
    $pp3='rgb(240,0,0)';
}else{
    $pp3='rgb(237, 247, 250)';
}

if ($p32_d==1) {
    $pp4='rgb(240,0,0)';
}else{
    $pp4='rgb(237, 247, 250)';
}

if ($p32_e==1) {
    $pp5='rgb(240,0,0)';
}else{
    $pp5='rgb(237, 247, 250)';
}
////////////////////////////////Canvas//////////////////////////////////////////////
echo "<canvas id='c' name='c' width='2800' height='500'></canvas>";
echo "<script type='text/javascript'>";

echo "var canvas = new fabric.Canvas('c');
      var nEscala     = 1;";
/////////////////////////////////Figuras//////////////////////////////////////////
echo "
var fig_a1 = new fabric.Path('M 78 72 L 40 45 C 39 22 160 21 162 44 L 123 72 C 125 64 81 60 78 72 Z');
    fig_a1.set({scaleX:nEscala , scaleY:nEscala, fill: '$a1' });
    canvas.add(fig_a1);
    var text = new fabric.Text('1', { left: 100, top: 150 });
    canvas.add(text);

var fig_a2 = new fabric.Path('M 75 74 L 40 48 C 27 48 30 114 42 114 L 75 93 C 69 94 68 75 75 74 Z');
    fig_a2.set({scaleX:nEscala , scaleY:nEscala, fill: '$a2' });
    canvas.add(fig_a2);

var fig_a3 = new fabric.Path('M 76 97 L 43 117 C 43 145 163 141 163 116 L 125 97 C 126 105 77 106 76 97 Z');
    fig_a3.set({scaleX:nEscala , scaleY:nEscala, fill: '$a3' });
    canvas.add(fig_a3);

var fig_a4 = new fabric.Path('M 127 73 L 160 49 C 171 44 183 104 164 113 L 127 95 C 132 96 135 75 127 73 Z');
    fig_a4.set({scaleX:nEscala , scaleY:nEscala, fill: '$a4'});
    canvas.add(fig_a4);

var fig_a5 = new fabric.Path('M 81 76 C 83 66 124 69 123 76 C 132 75 131 94 123 95 C 124 101 84 105 82 95 C 72 92 73 73 81 76 Z');
    fig_a5.set({scaleX:nEscala , scaleY:nEscala, fill: '$a5' });
    canvas.add(fig_a5);

var fig_b1 = new fabric.Path('M 228 72 L 190 45 C 189 22 310 21 312 44 L 273 72 C 275 64 231 60 228 72 Z');
    fig_b1.set({scaleX:nEscala , scaleY:nEscala, fill: '$b1' });
    canvas.add(fig_b1);
var text = new fabric.Text('2', { left: 250, top: 150 });
canvas.add(text);

var fig_b2 = new fabric.Path('M 225 74 L 190 48 C 177 48 180 114 192 114 L 225 93 C 219 94 218 75 225 74 Z');
    fig_b2.set({scaleX:nEscala , scaleY:nEscala, fill: '$b2' });
    canvas.add(fig_b2);

var fig_b3 = new fabric.Path('M 226 97 L 193 117 C 193 145 313 141 313 116 L 275 97 C 276 105 227 106 226 97 Z');
    fig_b3.set({scaleX:nEscala , scaleY:nEscala, fill: '$b3' });
    canvas.add(fig_b3);

var fig_b4 = new fabric.Path('M 277 73 L 310 49 C 321 44 333 104 314 113 L 277 95 C 282 96 285 75 277 73 Z');
    fig_b4.set({scaleX:nEscala , scaleY:nEscala, fill: '$b4'});
    canvas.add(fig_b4);

var fig_b5 = new fabric.Path('M 231 76 C 233 66 274 69 273 76 C 282 75 281 94 273 95 C 274 101 234 105 232 95 C 222 92 223 73 231 76 Z');
    fig_b5.set({scaleX:nEscala , scaleY:nEscala, fill: '$b5' });
    canvas.add(fig_b5);

var fig_c1 = new fabric.Path('M 378 72 L 340 45 C 339 22 460 21 462 44 L 423 72 C 425 64 381 60 378 72 Z');
    fig_c1.set({scaleX:nEscala , scaleY:nEscala, fill: '$c1' });
    canvas.add(fig_c1);
var text = new fabric.Text('3', { left: 400, top: 150 });
canvas.add(text);

var fig_c2 = new fabric.Path('M 375 74 L 340 48 C 327 48 330 114 342 114 L 375 93 C 369 94 368 75 375 74 Z');
    fig_c2.set({scaleX:nEscala , scaleY:nEscala, fill: '$c2' });
    canvas.add(fig_c2);

var fig_c3 = new fabric.Path('M 376 97 L 343 117 C 343 145 463 141 463 116 L 425 97 C 426 105 377 106 376 97 Z');
    fig_c3.set({scaleX:nEscala , scaleY:nEscala, fill: '$c3' });
    canvas.add(fig_c3);

var fig_c4 = new fabric.Path('M 427 73 L 460 49 C 471 44 483 104 464 113 L 427 95 C 432 96 435 75 427 73 Z');
    fig_c4.set({scaleX:nEscala , scaleY:nEscala, fill: '$c4'});
    canvas.add(fig_c4);

var fig_c5 = new fabric.Path('M 381 76 C 383 66 424 69 423 76 C 432 75 431 94 423 95 C 424 101 384 105 382 95 C 372 92 373 73 381 76 Z');
    fig_c5.set({scaleX:nEscala , scaleY:nEscala, fill: '$c5' });
    canvas.add(fig_c5);

var fig_d1 = new fabric.Path('M 533 73 C 533 75 610 74 610 72 L 635 38 C 636 21 502 17 500 40 L 533 73 Z');
    fig_d1.set({scaleX:nEscala , scaleY:nEscala, fill: '$d1' });
    canvas.add(fig_d1);
var text = new fabric.Text('4', { left: 550, top: 150 });
canvas.add(text);
var fig_d2 = new fabric.Path('M 535 78 C 535 75 609 75 609 77 L 639 110 C 636 140 515 136 507 115 L 535 78 Z');
    fig_d2.set({scaleX:nEscala , scaleY:nEscala, fill: '$d2' });
    canvas.add(fig_d2);

var fig_d3 = new fabric.Path('M 497 43 L 531 76 L 501 114 C 484 112 481 41 497 43 Z');
    fig_d3.set({scaleX:nEscala , scaleY:nEscala, fill: '$d3' });
    canvas.add(fig_d3);

var fig_d4 = new fabric.Path('M 638 41 L 612 75 L 642 108 C 660 112 661 46 638 41 Z');
    fig_d4.set({scaleX:nEscala , scaleY:nEscala, fill: '$d4'});
    canvas.add(fig_d4);

var fig_e1 = new fabric.Path('M 713 73 C 713 75 790 74 790 72 L 815 38 C 816 21 682 17 680 40 L 713 73 Z');
    fig_e1.set({scaleX:nEscala , scaleY:nEscala, fill: '$e1' });
    canvas.add(fig_e1);
var text = new fabric.Text('5', { left: 750, top: 150 });
canvas.add(text);

var fig_e2 = new fabric.Path('M 715 78 C 715 75 789 75 789 77 L 819 110 C 816 140 695 136 687 115 L 715 78 Z');
    fig_e2.set({scaleX:nEscala , scaleY:nEscala, fill: '$e2' });
    canvas.add(fig_e2);

var fig_e3 = new fabric.Path('M 677 43 L 711 76 L 681 114 C 664 112 661 41 677 43 Z');
    fig_e3.set({scaleX:nEscala , scaleY:nEscala, fill: '$e3' });
    canvas.add(fig_e3);

var fig_e4 = new fabric.Path('M 818 41 L 792 75 L 822 108 C 840 112 841 46 818 41 Z');
    fig_e4.set({scaleX:nEscala , scaleY:nEscala, fill: '$e4'});
    canvas.add(fig_e4);

var fig_f1 = new fabric.Path('M 893 73 C 893 75 970 74 970 72 L 995 38 C 996 21 862 17 860 40 L 893 73 Z');
    fig_f1.set({scaleX:nEscala , scaleY:nEscala, fill: '$f1' });
    canvas.add(fig_f1);
var text = new fabric.Text('6', { left: 925, top: 150 });
canvas.add(text);

var fig_f2 = new fabric.Path('M 895 78 C 895 75 969 75 969 77 L 999 110 C 996 140 875 136 867 115 L 895 78 Z');
    fig_f2.set({scaleX:nEscala , scaleY:nEscala, fill: '$f2' });
    canvas.add(fig_f2);

var fig_f3 = new fabric.Path('M 857 43 L 891 76 L 861 114 C 844 112 841 41 857 43 Z');
    fig_f3.set({scaleX:nEscala , scaleY:nEscala, fill: '$f3' });
    canvas.add(fig_f3);

var fig_f4 = new fabric.Path('M 998 41 L 972 75 L 1002 108 C 1020 112 1021 46 998 41 Z');
    fig_f4.set({scaleX:nEscala , scaleY:nEscala, fill: '$f4'});
    canvas.add(fig_f4);

var fig_g1 = new fabric.Path('M 1073 73 C 1073 75 1150 74 1150 72 L 1175 38 C 1176 21 1042 17 1040 40 L 1073 73 Z');
    fig_g1.set({scaleX:nEscala , scaleY:nEscala, fill: '$g1' });
    canvas.add(fig_g1);
var text = new fabric.Text('7', { left: 1100, top: 150 });
canvas.add(text);

var fig_g2 = new fabric.Path('M 1075 78 C 1075 75 1149 75 1149 77 L 1179 110 C 1176 140 1055 136 1047 115 L 1075 78 Z');
    fig_g2.set({scaleX:nEscala , scaleY:nEscala, fill: '$g2' });
    canvas.add(fig_g2);

var fig_g3 = new fabric.Path('M 1037 43 L 1071 76 L 1041 114 C 1024 112 1021 41 1037 43 Z');
    fig_g3.set({scaleX:nEscala , scaleY:nEscala, fill: '$g3' });
    canvas.add(fig_g3);

var fig_g4 = new fabric.Path('M 1178 41 L 1152 75 L 1182 108 C 1200 112 1201 46 1178 41 Z');
    fig_g4.set({scaleX:nEscala , scaleY:nEscala, fill: '$g4'});
    canvas.add(fig_g4);

var fig_h1 = new fabric.Path('M 1253 73 C 1253 75 1330 74 1330 72 L 1355 38 C 1356 21 1222 17 1220 40 L 1253 73 Z');
    fig_h1.set({scaleX:nEscala , scaleY:nEscala, fill: '$h1' });
    canvas.add(fig_h1);
var text = new fabric.Text('8', { left: 1275, top: 150 });
canvas.add(text);

var fig_h2 = new fabric.Path('M 1255 78 C 1255 75 1329 75 1329 77 L 1359 110 C 1356 140 1235 136 1227 115 L 1255 78 Z');
    fig_h2.set({scaleX:nEscala , scaleY:nEscala, fill: '$h2' });
    canvas.add(fig_h2);

var fig_h3 = new fabric.Path('M 1217 43 L 1251 76 L 1221 114 C 1204 112 1201 41 1217 43 Z');
    fig_h3.set({scaleX:nEscala , scaleY:nEscala, fill: '$h3' });
    canvas.add(fig_h3);

var fig_h4 = new fabric.Path('M 1358 41 L 1332 75 L 1362 108 C 1380 112 1381 46 1358 41 Z');
    fig_h4.set({scaleX:nEscala , scaleY:nEscala, fill: '$h4'});
    canvas.add(fig_h4);

var fig_i1 = new fabric.Path('M 1433 73 C 1433 75 1510 74 1510 72 L 1535 38 C 1536 21 1402 17 1400 40 L 1433 73 Z');
    fig_i1.set({scaleX:nEscala , scaleY:nEscala, fill: '$i1' });
    canvas.add(fig_i1);
var text = new fabric.Text('9', { left: 1460, top: 150 });
canvas.add(text);

var fig_i2 = new fabric.Path('M 1435 78 C 1435 75 1509 75 1509 77 L 1539 110 C 1536 140 1415 136 1407 115 L 1435 78 Z');
    fig_i2.set({scaleX:nEscala , scaleY:nEscala, fill: '$i2' });
    canvas.add(fig_i2);

var fig_i3 = new fabric.Path('M 1397 43 L 1431 76 L 1401 114 C 1384 112 1381 41 1397 43 Z');
    fig_i3.set({scaleX:nEscala , scaleY:nEscala, fill: '$i3' });
    canvas.add(fig_i3);

var fig_i4 = new fabric.Path('M 1538 41 L 1512 75 L 1542 108 C 1560 112 1561 46 1538 41 Z');
    fig_i4.set({scaleX:nEscala , scaleY:nEscala, fill: '$i4'});
    canvas.add(fig_i4);

var fig_j1 = new fabric.Path('M 1613 73 C 1613 75 1690 74 1690 72 L 1715 38 C 1716 21 1582 17 1580 40 L 1613 73 Z');
    fig_j1.set({scaleX:nEscala , scaleY:nEscala, fill: '$j1' });
    canvas.add(fig_j1);
var text = new fabric.Text('10', { left: 1630, top: 150 });
canvas.add(text);

var fig_j2 = new fabric.Path('M 1615 78 C 1615 75 1689 75 1689 77 L 1719 110 C 1716 140 1595 136 1587 115 L 1615 78 Z');
    fig_j2.set({scaleX:nEscala , scaleY:nEscala, fill: '$j2' });
    canvas.add(fig_j2);

var fig_j3 = new fabric.Path('M 1577 43 L 1611 76 L 1581 114 C 1564 112 1561 41 1577 43 Z');
    fig_j3.set({scaleX:nEscala , scaleY:nEscala, fill: '$j3' });
    canvas.add(fig_j3);

var fig_j4 = new fabric.Path('M 1718 41 L 1692 75 L 1722 108 C 1740 112 1741 46 1718 41 Z');
    fig_j4.set({scaleX:nEscala , scaleY:nEscala, fill: '$j4'});
    canvas.add(fig_j4);

var fig_k1 = new fabric.Path('M 1793 73 C 1793 75 1870 74 1870 72 L 1895 38 C 1896 21 1762 17 1760 40 L 1793 73 Z');
    fig_k1.set({scaleX:nEscala , scaleY:nEscala, fill: '$k1' });
    canvas.add(fig_k1);
var text = new fabric.Text('11', { left: 1810, top: 150 });
canvas.add(text);

var fig_k2 = new fabric.Path('M 1795 78 C 1795 75 1869 75 1869 77 L 1899 110 C 1896 140 1775 136 1767 115 L 1795 78 Z');
    fig_k2.set({scaleX:nEscala , scaleY:nEscala, fill: '$k2' });
    canvas.add(fig_k2);

var fig_k3 = new fabric.Path('M 1757 43 L 1791 76 L 1761 114 C 1744 112 1741 41 1757 43 Z');
    fig_k3.set({scaleX:nEscala , scaleY:nEscala, fill: '$k3' });
    canvas.add(fig_k3);

var fig_k4 = new fabric.Path('M 1898 41 L 1872 75 L 1902 108 C 1920 112 1921 46 1898 41 Z');
    fig_k4.set({scaleX:nEscala , scaleY:nEscala, fill: '$k4'});
    canvas.add(fig_k4);

var fig_l1 = new fabric.Path('M 1973 73 C 1973 75 2050 74 2050 72 L 2075 38 C 2076 21 1942 17 1940 40 L 1973 73 Z');
    fig_l1.set({scaleX:nEscala , scaleY:nEscala, fill: '$l1' });
    canvas.add(fig_l1);
var text = new fabric.Text('12', { left: 1990, top: 150 });
canvas.add(text);

var fig_l2 = new fabric.Path('M 1975 78 C 1975 75 2049 75 2049 77 L 2079 110 C 2076 140 1955 136 1947 115 L 1975 78 Z');
    fig_l2.set({scaleX:nEscala , scaleY:nEscala, fill: '$l2' });
    canvas.add(fig_l2);

var fig_l3 = new fabric.Path('M 1937 43 L 1971 76 L 1941 114 C 1924 112 1921 41 1937 43 Z');
    fig_l3.set({scaleX:nEscala , scaleY:nEscala, fill: '$l3' });
    canvas.add(fig_l3);

var fig_l4 = new fabric.Path('M 2078 41 L 2052 75 L 2082 108 C 2100 112 2101 46 2078 41 Z');
    fig_l4.set({scaleX:nEscala , scaleY:nEscala, fill: '$l4'});
    canvas.add(fig_l4);

var fig_m1 = new fabric.Path('M 2153 73 C 2153 75 2230 74 2230 72 L 2255 38 C 2256 21 2122 17 2120 40 L 2153 73 Z');
    fig_m1.set({scaleX:nEscala , scaleY:nEscala, fill: '$m1' });
    canvas.add(fig_m1);
var text = new fabric.Text('13', { left: 2170, top: 150 });
canvas.add(text);
var fig_m2 = new fabric.Path('M 2155 78 C 2155 75 2229 75 2229 77 L 2259 110 C 2256 140 2135 136 2127 115 L 2155 78 Z');
    fig_m2.set({scaleX:nEscala , scaleY:nEscala, fill: '$m2' });
    canvas.add(fig_m2);

var fig_m3 = new fabric.Path('M 2117 43 L 2151 76 L 2121 114 C 2104 112 2101 41 2117 43 Z');
    fig_m3.set({scaleX:nEscala , scaleY:nEscala, fill: '$m3' });
    canvas.add(fig_m3);

var fig_m4 = new fabric.Path('M 2258 41 L 2232 75 L 2262 108 C 2280 112 2281 46 2258 41 Z');
    fig_m4.set({scaleX:nEscala , scaleY:nEscala, fill: '$m4'});
    canvas.add(fig_m4);

var fig_n1 = new fabric.Path('M 2338 72 L 2300 45 C 2299 22 2420 21 2422 44 L 2383 72 C 2385 64 2341 60 2338 72 Z');
    fig_n1.set({scaleX:nEscala , scaleY:nEscala, fill: '$n1' });
    canvas.add(fig_n1);
var text = new fabric.Text('14', { left: 2340, top: 150 });
canvas.add(text);
var fig_n2 = new fabric.Path('M 2335 74 L 2300 48 C 2287 48 2290 114 2302 114 L 2335 93 C 2329 94 2328 75 2335 74 Z');
    fig_n2.set({scaleX:nEscala , scaleY:nEscala, fill: '$n2' });
    canvas.add(fig_n2);

var fig_n3 = new fabric.Path('M 2336 97 L 2303 117 C 2303 145 2423 141 2423 116 L 2385 97 C 2386 105 2337 106 2336 97 Z');
    fig_n3.set({scaleX:nEscala , scaleY:nEscala, fill: '$n3' });
    canvas.add(fig_n3);

var fig_n4 = new fabric.Path('M 2387 73 L 2420 49 C 2431 44 2443 104 2424 113 L 2387 95 C 2392 96 2395 75 2387 73 Z');
    fig_n4.set({scaleX:nEscala , scaleY:nEscala, fill: '$n4'});
    canvas.add(fig_n4);

var fig_n5 = new fabric.Path('M 2341 76 C 2343 66 2384 69 2383 76 C 2392 75 2391 94 2383 95 C 2384 101 2344 105 2342 95 C 2332 92 2333 73 2341 76 Z');
    fig_n5.set({scaleX:nEscala , scaleY:nEscala, fill: '$n5' });
    canvas.add(fig_n5);

var fig_o1 = new fabric.Path('M 2498 72 L 2460 45 C 2459 22 2580 21 2582 44 L 2543 72 C 2545 64 2501 60 2498 72 Z');
    fig_o1.set({scaleX:nEscala , scaleY:nEscala, fill: '$o1' });
    canvas.add(fig_o1);
var text = new fabric.Text('15', { left: 2500, top: 150 });
canvas.add(text);
var fig_o2 = new fabric.Path('M 2495 74 L 2460 48 C 2447 48 2450 114 2462 114 L 2495 93 C 2489 94 2488 75 2495 74 Z');
    fig_o2.set({scaleX:nEscala , scaleY:nEscala, fill: '$o2' });
    canvas.add(fig_o2);

var fig_o3 = new fabric.Path('M 2496 97 L 2463 117 C 2463 145 2583 141 2583 116 L 2545 97 C 2546 105 2497 106 2496 97 Z');
    fig_o3.set({scaleX:nEscala , scaleY:nEscala, fill: '$o3' });
    canvas.add(fig_o3);

var fig_o4 = new fabric.Path('M 2547 73 L 2580 49 C 2591 44 2603 104 2584 113 L 2547 95 C 2552 96 2555 75 2547 73 Z');
    fig_o4.set({scaleX:nEscala , scaleY:nEscala, fill: '$o4'});
    canvas.add(fig_o4);

var fig_o5 = new fabric.Path('M 2501 76 C 2503 66 2544 69 2543 76 C 2552 75 2551 94 2543 95 C 2544 101 2504 105 2502 95 C 2492 92 2493 73 2501 76 Z');
    fig_o5.set({scaleX:nEscala , scaleY:nEscala, fill: '$o5' });
    canvas.add(fig_o5);

var fig_p1 = new fabric.Path('M 2658 72 L 2620 45 C 2619 22 2740 21 2742 44 L 2703 72 C 2705 64 2661 60 2658 72 Z');
    fig_p1.set({scaleX:nEscala , scaleY:nEscala, fill: '$p1' });
    canvas.add(fig_p1);
var text = new fabric.Text('16', { left: 2660, top: 150 });
canvas.add(text);
var fig_p2 = new fabric.Path('M 2655 74 L 2620 48 C 2607 48 2610 114 2622 114 L 2655 93 C 2649 94 2648 75 2655 74 Z');
    fig_p2.set({scaleX:nEscala , scaleY:nEscala, fill: '$p2' });
    canvas.add(fig_p2);

var fig_p3 = new fabric.Path('M 2656 97 L 2623 117 C 2623 145 2743 141 2743 116 L 2705 97 C 2706 105 2657 106 2656 97 Z');
    fig_p3.set({scaleX:nEscala , scaleY:nEscala, fill: '$p3' });
    canvas.add(fig_p3);

var fig_p4 = new fabric.Path('M 2707 73 L 2740 49 C 2751 44 2763 104 2744 113 L 2707 95 C 2712 96 2715 75 2707 73 Z');
    fig_p4.set({scaleX:nEscala , scaleY:nEscala, fill: '$p4'});
    canvas.add(fig_p4);

var fig_p5 = new fabric.Path('M 2661 76 C 2663 66 2704 69 2703 76 C 2712 75 2711 94 2703 95 C 2704 101 2664 105 2662 95 C 2652 92 2653 73 2661 76 Z');
    fig_p5.set({scaleX:nEscala , scaleY:nEscala, fill: '$p5' });
    canvas.add(fig_p5);
//////////////////////////inferior/////////////////////////////////
var fig_aa1 = new fabric.Path('M 78 272 L 40 245 C 39 222 160 221 162 244 L 123 272 C 125 264 81 260 78 272 Z');
    fig_aa1.set({scaleX:nEscala , scaleY:nEscala, fill: '$aa1' });
    canvas.add(fig_aa1);
var text = new fabric.Text('17', { left: 100, top: 400 });
canvas.add(text);

var fig_aa2 = new fabric.Path('M 75 274 L 40 248 C 27 248 30 314 42 314 L 75 293 C 69 294 68 275 75 274 Z');
    fig_aa2.set({scaleX:nEscala , scaleY:nEscala, fill: '$aa2' });
    canvas.add(fig_aa2);

var fig_aa3 = new fabric.Path('M 76 297 L 43 317 C 43 345 163 341 163 316 L 125 297 C 126 305 77 306 76 297 Z');
    fig_aa3.set({scaleX:nEscala , scaleY:nEscala, fill: '$aa3' });
    canvas.add(fig_aa3);

var fig_aa4 = new fabric.Path('M 127 273 L 160 249 C 171 244 183 304 164 313 L 127 295 C 132 296 135 275 127 273 Z');
    fig_aa4.set({scaleX:nEscala , scaleY:nEscala, fill: '$aa4'});
    canvas.add(fig_aa4);

var fig_aa5 = new fabric.Path('M 81 276 C 83 266 124 269 123 276 C 132 275 131 294 123 295 C 124 301 84 305 82 295 C 72 292 73 273 81 276 Z');
    fig_aa5.set({scaleX:nEscala , scaleY:nEscala, fill: '$aa5' });
    canvas.add(fig_aa5);
    //

var fig_bb1 = new fabric.Path('M 228 272 L 190 245 C 189 222 310 221 312 244 L 273 272 C 275 264 231 260 228 272 Z');
    fig_bb1.set({scaleX:nEscala , scaleY:nEscala, fill: '$bb1' });
    canvas.add(fig_bb1);
var text = new fabric.Text('18', { left: 250, top: 400 });
canvas.add(text);

var fig_bb2 = new fabric.Path('M 225 274 L 190 248 C 177 248 180 314 192 314 L 225 293 C 219 294 218 275 225 274 Z');
    fig_bb2.set({scaleX:nEscala , scaleY:nEscala, fill: '$bb2' });
    canvas.add(fig_bb2);

var fig_bb3 = new fabric.Path('M 226 297 L 193 317 C 193 345 313 341 313 316 L 275 297 C 276 305 227 306 226 297 Z');
    fig_bb3.set({scaleX:nEscala , scaleY:nEscala, fill: '$bb3' });
    canvas.add(fig_bb3);

var fig_bb4 = new fabric.Path('M 277 273 L 310 249 C 321 244 333 304 314 313 L 277 295 C 282 296 285 275 277 273 Z');
    fig_bb4.set({scaleX:nEscala , scaleY:nEscala, fill: '$bb4'});
    canvas.add(fig_bb4);

var fig_bb5 = new fabric.Path('M 231 276 C 233 266 274 269 273 276 C 282 275 281 294 273 295 C 274 301 234 305 232 295 C 222 292 223 273 231 276 Z');
    fig_bb5.set({scaleX:nEscala , scaleY:nEscala, fill: '$bb5' });
    canvas.add(fig_bb5);

    //

var fig_cc1 = new fabric.Path('M 378 272 L 340 245 C 339 222 460 221 462 244 L 423 272 C 425 264 381 260 378 272 Z');
    fig_cc1.set({scaleX:nEscala , scaleY:nEscala, fill: '$cc1' });
    canvas.add(fig_cc1);
var text = new fabric.Text('19', { left: 400, top: 400 });
canvas.add(text);

var fig_cc2 = new fabric.Path('M 375 274 L 340 248 C 327 248 330 314 342 314 L 375 293 C 369 294 368 275 375 274 Z');
    fig_cc2.set({scaleX:nEscala , scaleY:nEscala, fill: '$cc2' });
    canvas.add(fig_cc2);

var fig_cc3 = new fabric.Path('M 376 297 L 343 317 C 343 345 463 341 463 316 L 425 297 C 426 305 377 306 376 297 Z');
    fig_cc3.set({scaleX:nEscala , scaleY:nEscala, fill: '$cc3' });
    canvas.add(fig_cc3);

var fig_cc4 = new fabric.Path('M 427 273 L 460 249 C 471 244 483 304 464 313 L 427 295 C 432 296 435 275 427 273 Z');
    fig_cc4.set({scaleX:nEscala , scaleY:nEscala, fill: '$cc4'});
    canvas.add(fig_cc4);

var fig_cc5 = new fabric.Path('M 381 276 C 383 266 424 269 423 276 C 432 275 431 294 423 295 C 424 301 384 305 382 295 C 372 292 373 273 381 276 Z');
    fig_cc5.set({scaleX:nEscala , scaleY:nEscala, fill: '$cc5' });
    canvas.add(fig_cc5);

    //

var fig_dd1 = new fabric.Path('M 533 273 C 533 275 610 274 610 272 L 635 238 C 636 221 502 217 500 240 L 533 273 Z');
    fig_dd1.set({scaleX:nEscala , scaleY:nEscala, fill: '$dd1' });
    canvas.add(fig_dd1);
var text = new fabric.Text('20', { left: 550, top: 400 });
canvas.add(text);

var fig_dd2 = new fabric.Path('M 535 278 C 535 275 609 275 609 277 L 639 310 C 636 340 515 336 507 315 L 535 278 Z');
    fig_dd2.set({scaleX:nEscala , scaleY:nEscala, fill: '$dd2' });
    canvas.add(fig_dd2);

var fig_dd3 = new fabric.Path('M 497 243 L 531 276 L 501 314 C 484 312 481 241 497 243 Z');
    fig_dd3.set({scaleX:nEscala , scaleY:nEscala, fill: '$dd3' });
    canvas.add(fig_dd3);

var fig_dd4 = new fabric.Path('M 638 241 L 612 275 L 642 308 C 660 312 661 246 638 241 Z');
    fig_dd4.set({scaleX:nEscala , scaleY:nEscala, fill: '$dd4'});
    canvas.add(fig_dd4);

    //+180

var fig_ee1 = new fabric.Path('M 713 273 C 713 275 790 274 790 272 L 815 238 C 816 221 682 217 680 240 L 713 273 Z');
    fig_ee1.set({scaleX:nEscala , scaleY:nEscala, fill: '$ee1' });
    canvas.add(fig_ee1);
var text = new fabric.Text('21', { left: 750, top: 400 });
canvas.add(text);

var fig_ee2 = new fabric.Path('M 715 278 C 715 275 789 275 789 277 L 819 310 C 816 340 695 336 687 315 L 715 278 Z');
    fig_ee2.set({scaleX:nEscala , scaleY:nEscala, fill: '$ee2' });
    canvas.add(fig_ee2);

var fig_ee3 = new fabric.Path('M 677 243 L 711 276 L 681 314 C 664 312 661 241 677 243 Z');
    fig_ee3.set({scaleX:nEscala , scaleY:nEscala, fill: '$ee3' });
    canvas.add(fig_ee3);

var fig_ee4 = new fabric.Path('M 818 241 L 792 275 L 822 308 C 840 312 841 246 818 241 Z');
    fig_ee4.set({scaleX:nEscala , scaleY:nEscala, fill: '$ee4'});
    canvas.add(fig_ee4);

    //+180

var fig_ff1 = new fabric.Path('M 893 273 C 893 275 970 274 970 272 L 995 238 C 996 221 862 217 860 240 L 893 273 Z');
    fig_ff1.set({scaleX:nEscala , scaleY:nEscala, fill: '$ff1'});
    canvas.add(fig_ff1);
var text = new fabric.Text('22', { left: 925, top: 400 });
canvas.add(text);

var fig_ff2 = new fabric.Path('M 895 278 C 895 275 969 275 969 277 L 999 310 C 996 340 875 336 867 315 L 895 278 Z');
    fig_ff2.set({scaleX:nEscala , scaleY:nEscala, fill: '$ff2' });
    canvas.add(fig_ff2);

var fig_ff3 = new fabric.Path('M 857 243 L 891 276 L 861 314 C 844 312 841 241 857 243 Z');
    fig_ff3.set({scaleX:nEscala , scaleY:nEscala, fill: '$ff3' });
    canvas.add(fig_ff3);

var fig_ff4 = new fabric.Path('M 998 241 L 972 275 L 1002 308 C 1020 312 1021 246 998 241 Z');
    fig_ff4.set({scaleX:nEscala , scaleY:nEscala, fill: '$ff4'});
    canvas.add(fig_ff4);

    //+180

var fig_gg1 = new fabric.Path('M 1073 273 C 1073 275 1150 274 1150 272 L 1175 238 C 1176 221 1042 217 1040 240 L 1073 273 Z');
    fig_gg1.set({scaleX:nEscala , scaleY:nEscala, fill: '$gg1'});
    canvas.add(fig_gg1);
var text = new fabric.Text('23', { left: 1100, top: 400 });
canvas.add(text);

var fig_gg2 = new fabric.Path('M 1075 278 C 1075 275 1149 275 1149 277 L 1179 310 C 1176 340 1055 336 1047 315 L 1075 278 Z');
    fig_gg2.set({scaleX:nEscala , scaleY:nEscala, fill: '$gg2'});
    canvas.add(fig_gg2);

var fig_gg3 = new fabric.Path('M 1037 243 L 1071 276 L 1041 314 C 1024 312 1021 241 1037 243 Z');
    fig_gg3.set({scaleX:nEscala , scaleY:nEscala, fill: '$gg3' });
    canvas.add(fig_gg3);

var fig_gg4 = new fabric.Path('M 1178 241 L 1152 275 L 1182 308 C 1200 312 1201 246 1178 241 Z');
    fig_gg4.set({scaleX:nEscala , scaleY:nEscala, fill: '$gg4'});
    canvas.add(fig_gg4);

    //+180

var fig_hh1 = new fabric.Path('M 1253 273 C 1253 275 1330 274 1330 272 L 1355 238 C 1356 221 1222 217 1220 240 L 1253 273 Z');
    fig_hh1.set({scaleX:nEscala , scaleY:nEscala, fill: '$hh1' });
    canvas.add(fig_hh1);
var text = new fabric.Text('24', { left: 1275, top: 400 });
canvas.add(text);

var fig_hh2 = new fabric.Path('M 1255 278 C 1255 275 1329 275 1329 277 L 1359 310 C 1356 340 1235 336 1227 315 L 1255 278 Z');
    fig_hh2.set({scaleX:nEscala , scaleY:nEscala, fill: '$hh2' });
    canvas.add(fig_hh2);

var fig_hh3 = new fabric.Path('M 1217 243 L 1251 276 L 1221 314 C 1204 312 1201 241 1217 243 Z');
    fig_hh3.set({scaleX:nEscala , scaleY:nEscala, fill: '$hh3'});
    canvas.add(fig_hh3);

var fig_hh4 = new fabric.Path('M 1358 241 L 1332 275 L 1362 308 C 1380 312 1381 246 1358 241 Z');
    fig_hh4.set({scaleX:nEscala , scaleY:nEscala, fill: '$hh4'});
    canvas.add(fig_hh4);

    //+180

var fig_ii1 = new fabric.Path('M 1433 273 C 1433 275 1510 274 1510 272 L 1535 238 C 1536 221 1402 217 1400 240 L 1433 273 Z');
    fig_ii1.set({scaleX:nEscala , scaleY:nEscala, fill: '$ii1'});
    canvas.add(fig_ii1);
var text = new fabric.Text('25', { left: 1460, top: 400 });
canvas.add(text);

var fig_ii2 = new fabric.Path('M 1435 278 C 1435 275 1509 275 1509 277 L 1539 310 C 1536 340 1415 336 1407 315 L 1435 278 Z');
    fig_ii2.set({scaleX:nEscala , scaleY:nEscala, fill: '$ii2' });
    canvas.add(fig_ii2);

var fig_ii3 = new fabric.Path('M 1397 243 L 1431 276 L 1401 314 C 1384 312 1381 241 1397 243 Z');
    fig_ii3.set({scaleX:nEscala , scaleY:nEscala, fill: '$ii3' });
    canvas.add(fig_ii3);

var fig_ii4 = new fabric.Path('M 1538 241 L 1512 275 L 1542 308 C 1560 312 1561 246 1538 241 Z');
    fig_ii4.set({scaleX:nEscala , scaleY:nEscala, fill: '$ii4'});
    canvas.add(fig_ii4);

    //+180

var fig_jj1 = new fabric.Path('M 1613 273 C 1613 275 1690 274 1690 272 L 1715 238 C 1716 221 1582 217 1580 240 L 1613 273 Z');
    fig_jj1.set({scaleX:nEscala , scaleY:nEscala, fill: '$jj1' });
    canvas.add(fig_jj1);
var text = new fabric.Text('26', { left: 1630, top: 400 });
canvas.add(text);

var fig_jj2 = new fabric.Path('M 1615 278 C 1615 275 1689 275 1689 277 L 1719 310 C 1716 340 1595 336 1587 315 L 1615 278 Z');
    fig_jj2.set({scaleX:nEscala , scaleY:nEscala, fill: '$jj2' });
    canvas.add(fig_jj2);

var fig_jj3 = new fabric.Path('M 1577 243 L 1611 276 L 1581 314 C 1564 312 1561 241 1577 243 Z');
    fig_jj3.set({scaleX:nEscala , scaleY:nEscala, fill: '$jj3' });
    canvas.add(fig_jj3);

var fig_jj4 = new fabric.Path('M 1718 241 L 1692 275 L 1722 308 C 1740 312 1741 246 1718 241 Z');
    fig_jj4.set({scaleX:nEscala , scaleY:nEscala, fill: '$jj4'});
    canvas.add(fig_jj4);

    //+180

var fig_kk1 = new fabric.Path('M 1793 273 C 1793 275 1870 274 1870 272 L 1895 238 C 1896 221 1762 217 1760 240 L 1793 273 Z');
    fig_kk1.set({scaleX:nEscala , scaleY:nEscala, fill: '$kk1' });
    canvas.add(fig_kk1);
var text = new fabric.Text('27', { left: 1810, top: 400 });
canvas.add(text);

var fig_kk2 = new fabric.Path('M 1795 278 C 1795 275 1869 275 1869 277 L 1899 310 C 1896 340 1775 336 1767 315 L 1795 278 Z');
    fig_kk2.set({scaleX:nEscala , scaleY:nEscala, fill: '$kk2' });
    canvas.add(fig_kk2);

var fig_kk3 = new fabric.Path('M 1757 243 L 1791 276 L 1761 314 C 1744 312 1741 241 1757 243 Z');
    fig_kk3.set({scaleX:nEscala , scaleY:nEscala, fill: '$kk3' });
    canvas.add(fig_kk3);

var fig_kk4 = new fabric.Path('M 1898 241 L 1872 275 L 1902 308 C 1920 312 1921 246 1898 241 Z');
    fig_kk4.set({scaleX:nEscala , scaleY:nEscala, fill: '$kk4'});
    canvas.add(fig_kk4);

    //+180

var fig_ll1 = new fabric.Path('M 1973 273 C 1973 275 2050 274 2050 272 L 2075 238 C 2076 221 1942 217 1940 240 L 1973 273 Z');
    fig_ll1.set({scaleX:nEscala , scaleY:nEscala, fill: '$ll1' });
    canvas.add(fig_ll1);
var text = new fabric.Text('28', { left: 1990, top: 400 });
canvas.add(text);

var fig_ll2 = new fabric.Path('M 1975 278 C 1975 275 2049 275 2049 277 L 2079 310 C 2076 340 1955 336 1947 315 L 1975 278 Z');
    fig_ll2.set({scaleX:nEscala , scaleY:nEscala, fill: '$ll2'});
    canvas.add(fig_ll2);

var fig_ll3 = new fabric.Path('M 1937 243 L 1971 276 L 1941 314 C 1924 312 1921 241 1937 243 Z');
    fig_ll3.set({scaleX:nEscala , scaleY:nEscala, fill: '$ll3' });
    canvas.add(fig_ll3);

var fig_ll4 = new fabric.Path('M 2078 241 L 2052 275 L 2082 308 C 2100 312 2101 246 2078 241 Z');
    fig_ll4.set({scaleX:nEscala , scaleY:nEscala, fill: '$ll4'});
    canvas.add(fig_ll4);


var fig_mm1 = new fabric.Path('M 2153 273 C 2153 275 2230 274 2230 272 L 2255 238 C 2256 221 2122 217 2120 240 L 2153 273 Z');
    fig_mm1.set({scaleX:nEscala , scaleY:nEscala, fill: '$mm1' });
    canvas.add(fig_mm1);
var text = new fabric.Text('29', { left: 2170, top: 400 });
canvas.add(text);

var fig_mm2 = new fabric.Path('M 2155 278 C 2155 275 2229 275 2229 277 L 2259 310 C 2256 340 2135 336 2127 315 L 2155 278 Z');
    fig_mm2.set({scaleX:nEscala , scaleY:nEscala, fill: '$mm2' });
    canvas.add(fig_mm2);

var fig_mm3 = new fabric.Path('M 2117 243 L 2151 276 L 2121 314 C 2104 312 2101 241 2117 243 Z');
    fig_mm3.set({scaleX:nEscala , scaleY:nEscala, fill: '$mm3' });
    canvas.add(fig_mm3);

var fig_mm4 = new fabric.Path('M 2258 241 L 2232 275 L 2262 308 C 2280 312 2281 246 2258 241 Z');
    fig_mm4.set({scaleX:nEscala , scaleY:nEscala, fill: '$mm4'});
    canvas.add(fig_mm4);

    //+1800 +160 =1960

var fig_nn1 = new fabric.Path('M 2338 272 L 2300 245 C 2299 222 2420 221 2422 244 L 2383 272 C 2385 264 2341 260 2338 272 Z');
    fig_nn1.set({scaleX:nEscala , scaleY:nEscala, fill: '$nn1' });
    canvas.add(fig_nn1);
var text = new fabric.Text('30', { left: 2340, top: 400 });
canvas.add(text);

var fig_nn2 = new fabric.Path('M 2335 274 L 2300 248 C 2287 248 2290 314 2302 314 L 2335 293 C 2329 294 2328 275 2335 274 Z');
    fig_nn2.set({scaleX:nEscala , scaleY:nEscala, fill: '$nn2' });
    canvas.add(fig_nn2);

var fig_nn3 = new fabric.Path('M 2336 297 L 2303 317 C 2303 345 2423 341 2423 316 L 2385 297 C 2386 305 2337 306 2336 297 Z');
    fig_nn3.set({scaleX:nEscala , scaleY:nEscala, fill: '$nn3' });
    canvas.add(fig_nn3);

var fig_nn4 = new fabric.Path('M 2387 273 L 2420 249 C 2431 244 2443 304 2424 313 L 2387 295 C 2392 296 2395 275 2387 273 Z');
    fig_nn4.set({scaleX:nEscala , scaleY:nEscala, fill: '$nn4'});
    canvas.add(fig_nn4);

var fig_nn5 = new fabric.Path('M 2341 276 C 2343 266 2384 269 2383 276 C 2392 275 2391 294 2383 295 C 2384 301 2344 305 2342 295 C 2332 292 2333 273 2341 276 Z');
    fig_nn5.set({scaleX:nEscala , scaleY:nEscala, fill: '$nn5' });
    canvas.add(fig_nn5);

    // +160 

var fig_oo1 = new fabric.Path('M 2498 272 L 2460 245 C 2459 222 2580 221 2582 244 L 2543 272 C 2545 264 2501 260 2498 272 Z');
    fig_oo1.set({scaleX:nEscala , scaleY:nEscala, fill: '$oo1' });
    canvas.add(fig_oo1);
var text = new fabric.Text('31', { left: 2500, top: 400 });
canvas.add(text);

var fig_oo2 = new fabric.Path('M 2495 274 L 2460 248 C 2447 248 2450 314 2462 314 L 2495 293 C 2489 294 2488 275 2495 274 Z');
    fig_oo2.set({scaleX:nEscala , scaleY:nEscala, fill: '$oo2' });
    canvas.add(fig_oo2);

var fig_oo3 = new fabric.Path('M 2496 297 L 2463 317 C 2463 345 2583 341 2583 316 L 2545 297 C 2546 305 2497 306 2496 297 Z');
    fig_oo3.set({scaleX:nEscala , scaleY:nEscala, fill: '$oo3' });
    canvas.add(fig_oo3);

var fig_oo4 = new fabric.Path('M 2547 273 L 2580 249 C 2591 244 2603 304 2584 313 L 2547 295 C 2552 296 2555 275 2547 273 Z');
    fig_oo4.set({scaleX:nEscala , scaleY:nEscala, fill: '$oo4'});
    canvas.add(fig_oo4);

var fig_oo5 = new fabric.Path('M 2501 276 C 2503 266 2544 269 2543 276 C 2552 275 2551 294 2543 295 C 2544 301 2504 305 2502 295 C 2492 292 2493 273 2501 276 Z');
    fig_oo5.set({scaleX:nEscala , scaleY:nEscala, fill: '$oo5' });
    canvas.add(fig_oo5);

    // +160 

var fig_pp1 = new fabric.Path('M 2658 272 L 2620 245 C 2619 222 2740 221 2742 244 L 2703 272 C 2705 264 2661 260 2658 272 Z');
    fig_pp1.set({scaleX:nEscala , scaleY:nEscala, fill: '$pp1' });
    canvas.add(fig_pp1);
var text = new fabric.Text('32', { left: 2660, top: 400 });
canvas.add(text);

var fig_pp2 = new fabric.Path('M 2655 274 L 2620 248 C 2607 248 2610 314 2622 314 L 2655 293 C 2649 294 2648 275 2655 274 Z');
    fig_pp2.set({scaleX:nEscala , scaleY:nEscala, fill: '$pp2' });
    canvas.add(fig_pp2);

var fig_pp3 = new fabric.Path('M 2656 297 L 2623 317 C 2623 345 2743 341 2743 316 L 2705 297 C 2706 305 2657 306 2656 297 Z');
    fig_pp3.set({scaleX:nEscala , scaleY:nEscala, fill: '$pp3' });
    canvas.add(fig_pp3);

var fig_pp4 = new fabric.Path('M 2707 273 L 2740 249 C 2751 244 2763 304 2744 313 L 2707 295 C 2712 296 2715 275 2707 273 Z');
    fig_pp4.set({scaleX:nEscala , scaleY:nEscala, fill: '$pp4'});
    canvas.add(fig_pp4);

var fig_pp5 = new fabric.Path('M 2661 276 C 2663 266 2704 269 2703 276 C 2712 275 2711 294 2703 295 C 2704 301 2664 305 2662 295 C 2652 292 2653 273 2661 276 Z');
    fig_pp5.set({scaleX:nEscala , scaleY:nEscala, fill: '$pp5' });
    canvas.add(fig_pp5);
//Fin
    ";
////////////////////////////
echo "</script>";
}
?>
</body>
</html>