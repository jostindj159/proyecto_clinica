<!DOCTYPE html>
<html>
<head>
	<title>Dientes</title>
<script type="text/javascript" src="../js/fabric.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="body">

<canvas id="c" name="c" width="1375" height="300"></canvas>
<!--<canvas id="c2" name="c2" width="560px" height="300px"></canvas>-->
<script>
function grabar1(){
	if(fig_a1.get('fill')=='rgb(240,0,0)'){
		var a1=fig_a1=1;
	}else{
		var a1=fig_a1=0;
	}
	if(fig_a2.get('fill')=='rgb(240,0,0)'){
		var a2=fig_a2=1;
	}else{
		var a2=fig_a2=0;
	}
	if(fig_a3.get('fill')=='rgb(240,0,0)'){
		var a3=fig_a3=1;
	}else{
		var a3=fig_a3=0;
	}
	if(fig_a4.get('fill')=='rgb(240,0,0)'){
		var a4=fig_a4=1;
	}else{
		var a4=fig_a4=0;
	}
	if(fig_a5.get('fill')=='rgb(240,0,0)'){
		var a5=fig_a5=1;
	}else{
		var a5=fig_a5=0;
	}
	////////////////////////////////////////////
	if(fig_b1.get('fill')=='rgb(240,0,0)'){
		var b1=fig_b1=1;
	}else{
		var b1=fig_b1=0;
	}
	if(fig_b2.get('fill')=='rgb(240,0,0)'){
		var b2=fig_b2=1;
	}else{
		var b2=fig_b2=0;
	}
	if(fig_b3.get('fill')=='rgb(240,0,0)'){
		var b3=fig_b3=1;
	}else{
		var b3=fig_b3=0;
	}
	if(fig_b4.get('fill')=='rgb(240,0,0)'){
		var b4=fig_b4=1;
	}else{
		var b4=fig_b4=0;
	}
	if(fig_b5.get('fill')=='rgb(240,0,0)'){
		var b5=fig_b5=1;
	}else{
		var b5=fig_b5=0;
	}
	////////////////////////////////////////////
	if(fig_c1.get('fill')=='rgb(240,0,0)'){
		var c1=fig_c1=1;
	}else{
		var c1=fig_c1=0;
	}
	if(fig_c2.get('fill')=='rgb(240,0,0)'){
		var c2=fig_c2=1;
	}else{
		var c2=fig_c2=0;
	}
	if(fig_c3.get('fill')=='rgb(240,0,0)'){
		var c3=fig_c3=1;
	}else{
		var c3=fig_c3=0;
	}
	if(fig_c4.get('fill')=='rgb(240,0,0)'){
		var c4=fig_c4=1;
	}else{
		var c4=fig_c4=0;
	}
	if(fig_c5.get('fill')=='rgb(240,0,0)'){
		var c5=fig_c5=1;
	}else{
		var c5=fig_c5=0;
	}
	////////////////////////////////////////////
	if(fig_d1.get('fill')=='rgb(240,0,0)'){
		var d1=fig_d1=1;
	}else{
		var d1=fig_d1=0;
	}
	if(fig_d2.get('fill')=='rgb(240,0,0)'){
		var d2=fig_d2=1;
	}else{
		var d2=fig_d2=0;
	}
	if(fig_d3.get('fill')=='rgb(240,0,0)'){
		var d3=fig_d3=1;
	}else{
		var d3=fig_d3=0;
	}
	if(fig_d4.get('fill')=='rgb(240,0,0)'){
		var d4=fig_d4=1;
	}else{
		var d4=fig_d4=0;
	}
	////////////////////////////////////////////
	if(fig_e1.get('fill')=='rgb(240,0,0)'){
		var e1=fig_e1=1;
	}else{
		var e1=fig_e1=0;
	}
	if(fig_e2.get('fill')=='rgb(240,0,0)'){
		var e2=fig_e2=1;
	}else{
		var e2=fig_e2=0;
	}
	if(fig_e3.get('fill')=='rgb(240,0,0)'){
		var e3=fig_e3=1;
	}else{
		var e3=fig_e3=0;
	}
	if(fig_e4.get('fill')=='rgb(240,0,0)'){
		var e4=fig_e4=1;
	}else{
		var e4=fig_e4=0;
	}
	////////////////////////////////////////////
	if(fig_f1.get('fill')=='rgb(240,0,0)'){
		var f1=fig_f1=1;
	}else{
		var f1=fig_f1=0;
	}
	if(fig_f2.get('fill')=='rgb(240,0,0)'){
		var f2=fig_f2=1;
	}else{
		var f2=fig_f2=0;
	}
	if(fig_f3.get('fill')=='rgb(240,0,0)'){
		var f3=fig_f3=1;
	}else{
		var f3=fig_f3=0;
	}
	if(fig_f4.get('fill')=='rgb(240,0,0)'){
		var f4=fig_f4=1;
	}else{
		var f4=fig_f4=0;
	}
	////////////////////////////////////////////
	if(fig_g1.get('fill')=='rgb(240,0,0)'){
		var g1=fig_g1=1;
	}else{
		var g1=fig_g1=0;
	}
	if(fig_g2.get('fill')=='rgb(240,0,0)'){
		var g2=fig_g2=1;
	}else{
		var g2=fig_g2=0;
	}
	if(fig_g3.get('fill')=='rgb(240,0,0)'){
		var g3=fig_g3=1;
	}else{
		var g3=fig_g3=0;
	}
	if(fig_g4.get('fill')=='rgb(240,0,0)'){
		var g4=fig_g4=1;
	}else{
		var g4=fig_g4=0;
	}
	////////////////////////////////////////////
	if(fig_h1.get('fill')=='rgb(240,0,0)'){
		var h1=fig_h1=1;
	}else{
		var h1=fig_h1=0;
	}
	if(fig_h2.get('fill')=='rgb(240,0,0)'){
		var h2=fig_h2=1;
	}else{
		var h2=fig_h2=0;
	}
	if(fig_h3.get('fill')=='rgb(240,0,0)'){
		var h3=fig_h3=1;
	}else{
		var h3=fig_h3=0;
	}
	if(fig_h4.get('fill')=='rgb(240,0,0)'){
		var h4=fig_h4=1;
	}else{
		var h4=fig_h4=0;
	}
	////////////////////////////////////////////
	if(fig_i1.get('fill')=='rgb(240,0,0)'){
		var i1=fig_i1=1;
	}else{
		var i1=fig_i1=0;
	}
	if(fig_i2.get('fill')=='rgb(240,0,0)'){
		var i2=fig_i2=1;
	}else{
		var i2=fig_i2=0;
	}
	if(fig_i3.get('fill')=='rgb(240,0,0)'){
		var i3=fig_i3=1;
	}else{
		var i3=fig_i3=0;
	}
	if(fig_i4.get('fill')=='rgb(240,0,0)'){
		var i4=fig_i4=1;
	}else{
		var i4=fig_i4=0;
	}
	////////////////////////////////////////////
	if(fig_j1.get('fill')=='rgb(240,0,0)'){
		var j1=fig_j1=1;
	}else{
		var j1=fig_j1=0;
	}
	if(fig_j2.get('fill')=='rgb(240,0,0)'){
		var j2=fig_j2=1;
	}else{
		var j2=fig_j2=0;
	}
	if(fig_j3.get('fill')=='rgb(240,0,0)'){
		var j3=fig_j3=1;
	}else{
		var j3=fig_j3=0;
	}
	if(fig_j4.get('fill')=='rgb(240,0,0)'){
		var j4=fig_j4=1;
	}else{
		var j4=fig_j4=0;
	}
	////////////////////////////////////////////
	if(fig_k1.get('fill')=='rgb(240,0,0)'){
		var k1=fig_k1=1;
	}else{
		var k1=fig_k1=0;
	}
	if(fig_k2.get('fill')=='rgb(240,0,0)'){
		var k2=fig_k2=1;
	}else{
		var k2=fig_k2=0;
	}
	if(fig_k3.get('fill')=='rgb(240,0,0)'){
		var k3=fig_k3=1;
	}else{
		var k3=fig_k3=0;
	}
	if(fig_k4.get('fill')=='rgb(240,0,0)'){
		var k4=fig_k4=1;
	}else{
		var k4=fig_k4=0;
	}
	////////////////////////////////////////////
	if(fig_l1.get('fill')=='rgb(240,0,0)'){
		var l1=fig_l1=1;
	}else{
		var l1=fig_l1=0;
	}
	if(fig_l2.get('fill')=='rgb(240,0,0)'){
		var l2=fig_l2=1;
	}else{
		var l2=fig_l2=0;
	}
	if(fig_l3.get('fill')=='rgb(240,0,0)'){
		var l3=fig_l3=1;
	}else{
		var l3=fig_l3=0;
	}
	if(fig_l4.get('fill')=='rgb(240,0,0)'){
		var l4=fig_l4=1;
	}else{
		var l4=fig_l4=0;
	}
	////////////////////////////////////////////
	if(fig_m1.get('fill')=='rgb(240,0,0)'){
		var m1=fig_m1=1;
	}else{
		var m1=fig_m1=0;
	}
	if(fig_m2.get('fill')=='rgb(240,0,0)'){
		var m2=fig_m2=1;
	}else{
		var m2=fig_m2=0;
	}
	if(fig_m3.get('fill')=='rgb(240,0,0)'){
		var m3=fig_m3=1;
	}else{
		var m3=fig_m3=0;
	}
	if(fig_m4.get('fill')=='rgb(240,0,0)'){
		var m4=fig_m4=1;
	}else{
		var m4=fig_m4=0;
	}
	////////////////////////////////////////////
	if(fig_n1.get('fill')=='rgb(240,0,0)'){
		var n1=fig_n1=1;
	}else{
		var n1=fig_n1=0;
	}
	if(fig_n2.get('fill')=='rgb(240,0,0)'){
		var n2=fig_n2=1;
	}else{
		var n2=fig_n2=0;
	}
	if(fig_n3.get('fill')=='rgb(240,0,0)'){
		var n3=fig_n3=1;
	}else{
		var n3=fig_n3=0;
	}
	if(fig_n4.get('fill')=='rgb(240,0,0)'){
		var n4=fig_n4=1;
	}else{
		var n4=fig_n4=0;
	}
	if(fig_n5.get('fill')=='rgb(240,0,0)'){
		var n5=fig_n5=1;
	}else{
		var n5=fig_n5=0;
	}
	////////////////////////////////////////////
	if(fig_o1.get('fill')=='rgb(240,0,0)'){
		var o1=fig_o1=1;
	}else{
		var o1=fig_o1=0;
	}
	if(fig_o2.get('fill')=='rgb(240,0,0)'){
		var o2=fig_o2=1;
	}else{
		var o2=fig_o2=0;
	}
	if(fig_o3.get('fill')=='rgb(240,0,0)'){
		var o3=fig_o3=1;
	}else{
		var o3=fig_o3=0;
	}
	if(fig_o4.get('fill')=='rgb(240,0,0)'){
		var o4=fig_o4=1;
	}else{
		var o4=fig_o4=0;
	}
	if(fig_o5.get('fill')=='rgb(240,0,0)'){
		var o5=fig_o5=1;
	}else{
		var o5=fig_o5=0;
	}
	////////////////////////////////////////////
	if(fig_p1.get('fill')=='rgb(240,0,0)'){
		var p1=fig_p1=1;
	}else{
		var p1=fig_p1=0;
	}
	if(fig_p2.get('fill')=='rgb(240,0,0)'){
		var p2=fig_p2=1;
	}else{
		var p2=fig_p2=0;
	}
	if(fig_p3.get('fill')=='rgb(240,0,0)'){
		var p3=fig_p3=1;
	}else{
		var p3=fig_p3=0;
	}
	if(fig_p4.get('fill')=='rgb(240,0,0)'){
		var p4=fig_p4=1;
	}else{
		var p4=fig_p4=0;
	}
	if(fig_p5.get('fill')=='rgb(240,0,0)'){
		var p5=fig_p5=1;
	}else{
		var p5=fig_p5=0;
	}
	//////	//////	//////	//////	//////	//////	//////	//////	//////	//////	//////	//////	//////	//////
	//parte inferior
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if(fig_aa1.get('fill')=='rgb(240,0,0)'){
		var aa1=fig_a1=1;
	}else{
		var aa1=fig_a1=0;
	}
	if(fig_aa2.get('fill')=='rgb(240,0,0)'){
		var aa2=fig_aa2=1;
	}else{
		var aa2=fig_aa2=0;
	}
	if(fig_aa3.get('fill')=='rgb(240,0,0)'){
		var aa3=fig_aa3=1;
	}else{
		var aa3=fig_aa3=0;
	}
	if(fig_aa4.get('fill')=='rgb(240,0,0)'){
		var aa4=fig_aa4=1;
	}else{
		var aa4=fig_aa4=0;
	}
	if(fig_aa5.get('fill')=='rgb(240,0,0)'){
		var aa5=fig_aa5=1;
	}else{
		var aa5=fig_aa5=0;
	}
	////////////////////////////////////////////
	if(fig_bb1.get('fill')=='rgb(240,0,0)'){
		var bb1=fig_bb1=1;
	}else{
		var bb1=fig_bb1=0;
	}
	if(fig_bb2.get('fill')=='rgb(240,0,0)'){
		var bb2=fig_bb2=1;
	}else{
		var bb2=fig_bb2=0;
	}
	if(fig_bb3.get('fill')=='rgb(240,0,0)'){
		var bb3=fig_bb3=1;
	}else{
		var bb3=fig_bb3=0;
	}
	if(fig_bb4.get('fill')=='rgb(240,0,0)'){
		var bb4=fig_bb4=1;
	}else{
		var bb4=fig_bb4=0;
	}
	if(fig_bb5.get('fill')=='rgb(240,0,0)'){
		var bb5=fig_bb5=1;
	}else{
		var bb5=fig_bb5=0;
	}
	////////////////////////////////////////////
	if(fig_cc1.get('fill')=='rgb(240,0,0)'){
		var cc1=fig_cc1=1;
	}else{
		var cc1=fig_cc1=0;
	}
	if(fig_cc2.get('fill')=='rgb(240,0,0)'){
		var cc2=fig_cc2=1;
	}else{
		var cc2=fig_cc2=0;
	}
	if(fig_cc3.get('fill')=='rgb(240,0,0)'){
		var cc3=fig_cc3=1;
	}else{
		var cc3=fig_cc3=0;
	}
	if(fig_cc4.get('fill')=='rgb(240,0,0)'){
		var cc4=fig_cc4=1;
	}else{
		var cc4=fig_cc4=0;
	}
	if(fig_cc5.get('fill')=='rgb(240,0,0)'){
		var cc5=fig_cc5=1;
	}else{
		var cc5=fig_cc5=0;
	}
	////////////////////////////////////////////
	if(fig_dd1.get('fill')=='rgb(240,0,0)'){
		var dd1=fig_dd1=1;
	}else{
		var dd1=fig_dd1=0;
	}
	if(fig_dd2.get('fill')=='rgb(240,0,0)'){
		var dd2=fig_dd2=1;
	}else{
		var dd2=fig_dd2=0;
	}
	if(fig_dd3.get('fill')=='rgb(240,0,0)'){
		var dd3=fig_dd3=1;
	}else{
		var dd3=fig_dd3=0;
	}
	if(fig_dd4.get('fill')=='rgb(240,0,0)'){
		var dd4=fig_dd4=1;
	}else{
		var dd4=fig_dd4=0;
	}
	////////////////////////////////////////////
	if(fig_ee1.get('fill')=='rgb(240,0,0)'){
		var ee1=fig_ee1=1;
	}else{
		var ee1=fig_ee1=0;
	}
	if(fig_ee2.get('fill')=='rgb(240,0,0)'){
		var ee2=fig_ee2=1;
	}else{
		var ee2=fig_ee2=0;
	}
	if(fig_ee3.get('fill')=='rgb(240,0,0)'){
		var ee3=fig_ee3=1;
	}else{
		var ee3=fig_ee3=0;
	}
	if(fig_ee4.get('fill')=='rgb(240,0,0)'){
		var ee4=fig_ee4=1;
	}else{
		var ee4=fig_ee4=0;
	}
	////////////////////////////////////////////
	if(fig_ff1.get('fill')=='rgb(240,0,0)'){
		var ff1=fig_ff1=1;
	}else{
		var ff1=fig_ff1=0;
	}
	if(fig_ff2.get('fill')=='rgb(240,0,0)'){
		var ff2=fig_ff2=1;
	}else{
		var ff2=fig_ff2=0;
	}
	if(fig_ff3.get('fill')=='rgb(240,0,0)'){
		var ff3=fig_ff3=1;
	}else{
		var ff3=fig_ff3=0;
	}
	if(fig_ff4.get('fill')=='rgb(240,0,0)'){
		var ff4=fig_ff4=1;
	}else{
		var ff4=fig_ff4=0;
	}
	////////////////////////////////////////////
	if(fig_gg1.get('fill')=='rgb(240,0,0)'){
		var gg1=fig_gg1=1;
	}else{
		var gg1=fig_gg1=0;
	}
	if(fig_gg2.get('fill')=='rgb(240,0,0)'){
		var gg2=fig_gg2=1;
	}else{
		var gg2=fig_gg2=0;
	}
	if(fig_gg3.get('fill')=='rgb(240,0,0)'){
		var gg3=fig_gg3=1;
	}else{
		var gg3=fig_gg3=0;
	}
	if(fig_gg4.get('fill')=='rgb(240,0,0)'){
		var gg4=fig_gg4=1;
	}else{
		var gg4=fig_gg4=0;
	}
	////////////////////////////////////////////
	if(fig_hh1.get('fill')=='rgb(240,0,0)'){
		var hh1=fig_hh1=1;
	}else{
		var hh1=fig_hh1=0;
	}
	if(fig_hh2.get('fill')=='rgb(240,0,0)'){
		var hh2=fig_hh2=1;
	}else{
		var hh2=fig_hh2=0;
	}
	if(fig_hh3.get('fill')=='rgb(240,0,0)'){
		var hh3=fig_hh3=1;
	}else{
		var hh3=fig_hh3=0;
	}
	if(fig_hh4.get('fill')=='rgb(240,0,0)'){
		var hh4=fig_hh4=1;
	}else{
		var hh4=fig_hh4=0;
	}
	////////////////////////////////////////////
	if(fig_ii1.get('fill')=='rgb(240,0,0)'){
		var ii1=fig_ii1=1;
	}else{
		var ii1=fig_ii1=0;
	}
	if(fig_ii2.get('fill')=='rgb(240,0,0)'){
		var ii2=fig_ii2=1;
	}else{
		var ii2=fig_ii2=0;
	}
	if(fig_ii3.get('fill')=='rgb(240,0,0)'){
		var ii3=fig_ii3=1;
	}else{
		var ii3=fig_ii3=0;
	}
	if(fig_ii4.get('fill')=='rgb(240,0,0)'){
		var ii4=fig_ii4=1;
	}else{
		var ii4=fig_ii4=0;
	}
	////////////////////////////////////////////
	if(fig_jj1.get('fill')=='rgb(240,0,0)'){
		var jj1=fig_jj1=1;
	}else{
		var jj1=fig_jj1=0;
	}
	if(fig_jj2.get('fill')=='rgb(240,0,0)'){
		var jj2=fig_jj2=1;
	}else{
		var jj2=fig_jj2=0;
	}
	if(fig_jj3.get('fill')=='rgb(240,0,0)'){
		var jj3=fig_jj3=1;
	}else{
		var jj3=fig_jj3=0;
	}
	if(fig_jj4.get('fill')=='rgb(240,0,0)'){
		var jj4=fig_jj4=1;
	}else{
		var jj4=fig_jj4=0;
	}
	////////////////////////////////////////////
	if(fig_kk1.get('fill')=='rgb(240,0,0)'){
		var kk1=fig_kk1=1;
	}else{
		var kk1=fig_kk1=0;
	}
	if(fig_kk2.get('fill')=='rgb(240,0,0)'){
		var kk2=fig_kk2=1;
	}else{
		var kk2=fig_kk2=0;
	}
	if(fig_kk3.get('fill')=='rgb(240,0,0)'){
		var kk3=fig_kk3=1;
	}else{
		var kk3=fig_kk3=0;
	}
	if(fig_kk4.get('fill')=='rgb(240,0,0)'){
		var kk4=fig_kk4=1;
	}else{
		var kk4=fig_kk4=0;
	}
	////////////////////////////////////////////
	if(fig_ll1.get('fill')=='rgb(240,0,0)'){
		var ll1=fig_ll1=1;
	}else{
		var ll1=fig_ll1=0;
	}
	if(fig_ll2.get('fill')=='rgb(240,0,0)'){
		var ll2=fig_ll2=1;
	}else{
		var ll2=fig_ll2=0;
	}
	if(fig_ll3.get('fill')=='rgb(240,0,0)'){
		var ll3=fig_ll3=1;
	}else{
		var ll3=fig_ll3=0;
	}
	if(fig_ll4.get('fill')=='rgb(240,0,0)'){
		var ll4=fig_ll4=1;
	}else{
		var ll4=fig_ll4=0;
	}
	////////////////////////////////////////////
	if(fig_mm1.get('fill')=='rgb(240,0,0)'){
		var mm1=fig_mm1=1;
	}else{
		var mm1=fig_mm1=0;
	}
	if(fig_mm2.get('fill')=='rgb(240,0,0)'){
		var mm2=fig_mm2=1;
	}else{
		var mm2=fig_mm2=0;
	}
	if(fig_mm3.get('fill')=='rgb(240,0,0)'){
		var mm3=fig_mm3=1;
	}else{
		var mm3=fig_mm3=0;
	}
	if(fig_mm4.get('fill')=='rgb(240,0,0)'){
		var mm4=fig_mm4=1;
	}else{
		var mm4=fig_mm4=0;
	}
	////////////////////////////////////////////
	if(fig_nn1.get('fill')=='rgb(240,0,0)'){
		var nn1=fig_nn1=1;
	}else{
		var nn1=fig_nn1=0;
	}
	if(fig_nn2.get('fill')=='rgb(240,0,0)'){
		var nn2=fig_nn2=1;
	}else{
		var nn2=fig_nn2=0;
	}
	if(fig_nn3.get('fill')=='rgb(240,0,0)'){
		var nn3=fig_nn3=1;
	}else{
		var nn3=fig_nn3=0;
	}
	if(fig_nn4.get('fill')=='rgb(240,0,0)'){
		var nn4=fig_nn4=1;
	}else{
		var nn4=fig_nn4=0;
	}
	if(fig_nn5.get('fill')=='rgb(240,0,0)'){
		var nn5=fig_nn5=1;
	}else{
		var nn5=fig_nn5=0;
	}
	////////////////////////////////////////////
	if(fig_oo1.get('fill')=='rgb(240,0,0)'){
		var oo1=fig_oo1=1;
	}else{
		var oo1=fig_oo1=0;
	}
	if(fig_oo2.get('fill')=='rgb(240,0,0)'){
		var oo2=fig_oo2=1;
	}else{
		var oo2=fig_oo2=0;
	}
	if(fig_oo3.get('fill')=='rgb(240,0,0)'){
		var oo3=fig_oo3=1;
	}else{
		var oo3=fig_oo3=0;
	}
	if(fig_oo4.get('fill')=='rgb(240,0,0)'){
		var oo4=fig_oo4=1;
	}else{
		var oo4=fig_oo4=0;
	}
	if(fig_oo5.get('fill')=='rgb(240,0,0)'){
		var oo5=fig_oo5=1;
	}else{
		var oo5=fig_oo5=0;
	}
	////////////////////////////////////////////
	if(fig_pp1.get('fill')=='rgb(240,0,0)'){
		var pp1=fig_pp1=1;
	}else{
		var pp1=fig_pp1=0;
	}
	if(fig_pp2.get('fill')=='rgb(240,0,0)'){
		var pp2=fig_pp2=1;
	}else{
		var pp2=fig_pp2=0;
	}
	if(fig_pp3.get('fill')=='rgb(240,0,0)'){
		var pp3=fig_pp3=1;
	}else{
		var pp3=fig_pp3=0;
	}
	if(fig_pp4.get('fill')=='rgb(240,0,0)'){
		var pp4=fig_pp4=1;
	}else{
		var pp4=fig_pp4=0;
	}
	if(fig_pp5.get('fill')=='rgb(240,0,0)'){
		var pp5=fig_pp5=1;
	}else{
		var pp5=fig_pp5=0;
	}
	//////
		var texto = {
	    "pieza1_a": a1,
	    "pieza1_b": a2,
	    "pieza1_c": a3,
	    "pieza1_d": a4,
	    "pieza1_e": a5,
	    ///
	  	"pieza2_a": b1,
	    "pieza2_b": b2,
	    "pieza2_c": b3,
	    "pieza2_d": b4,
	    "pieza2_e": b5,
	    ///
	  	"pieza3_a": c1,
	    "pieza3_b": c2,
	    "pieza3_c": c3,
	    "pieza3_d": c4,
	    "pieza3_e": c5,
	    //////
	  	"pieza4_a": d1,
	    "pieza4_b": d2,
	    "pieza4_c": d3,
	    "pieza4_d": d4,
	    ///
	  	"pieza5_a": e1,
	    "pieza5_b": e2,
	    "pieza5_c": e3,
	    "pieza5_d": e4,
	    ///
	  	"pieza6_a": f1,
	    "pieza6_b": f2,
	    "pieza6_c": f3,
	    "pieza6_d": f4,
	    ///
	  	"pieza7_a": g1,
	    "pieza7_b": g2,
	    "pieza7_c": g3,
	    "pieza7_d": g4,
	    ///
	  	"pieza8_a": h1,
	    "pieza8_b": h2,
	    "pieza8_c": h3,
	    "pieza8_d": h4,
	    ///
	  	"pieza9_a": i1,
	    "pieza9_b": i2,
	    "pieza9_c": i3,
	    "pieza9_d": i4,
	    ///
	  	"pieza10_a": j1,
	    "pieza10_b": j2,
	    "pieza10_c": j3,
	    "pieza10_d": j4,
	    ///
	  	"pieza11_a": k1,
	    "pieza11_b": k2,
	    "pieza11_c": k3,
	    "pieza11_d": k4,
	    ///
	  	"pieza12_a": l1,
	    "pieza12_b": l2,
	    "pieza12_c": l3,
	    "pieza12_d": l4,
	    ///
	  	"pieza13_a": m1,
	    "pieza13_b": m2,
	    "pieza13_c": m3,
	    "pieza13_d": m4,
	    ///
	  	"pieza14_a": n1,
	    "pieza14_b": n2,
	    "pieza14_c": n3,
	    "pieza14_d": n4,
	    "pieza14_e": n5,
	    ///
	  	"pieza15_a": o1,
	    "pieza15_b": o2,
	    "pieza15_c": o3,
	    "pieza15_d": o4,
	    "pieza15_e": o5,
	    ///
	  	"pieza16_a": p1,
	    "pieza16_b": p2,
	    "pieza16_c": p3,
	    "pieza16_d": p4,
	    "pieza16_e": p5,
	    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	    "pieza17_a": aa1,
	    "pieza17_b": aa2,
	    "pieza17_c": aa3,
	    "pieza17_d": aa4,
	    "pieza17_e": aa5,
	    ///
	  	"pieza18_a": bb1,
	    "pieza18_b": bb2,
	    "pieza18_c": bb3,
	    "pieza18_d": bb4,
	    "pieza18_e": bb5,
	    ///
	  	"pieza19_a": cc1,
	    "pieza19_b": cc2,
	    "pieza19_c": cc3,
	    "pieza19_d": cc4,
	    "pieza19_e": cc5,
	   	//////
	  	"pieza20_a": dd1,
	    "pieza20_b": dd2,
	    "pieza20_c": dd3,
	    "pieza20_d": dd4,
	    ///
	  	"pieza21_a": ee1,
	    "pieza21_b": ee2,
	    "pieza21_c": ee3,
	    "pieza21_d": ee4,
	    ///
	  	"pieza22_a": ff1,
	    "pieza22_b": ff2,
	    "pieza22_c": ff3,
	    "pieza22_d": ff4,
	    ///
	  	"pieza23_a": gg1,
	    "pieza23_b": gg2,
	    "pieza23_c": gg3,
	    "pieza23_d": gg4,
	    ///
	  	"pieza24_a": hh1,
	    "pieza24_b": hh2,
	    "pieza24_c": hh3,
	    "pieza24_d": hh4,
	    ///
	  	"pieza25_a": ii1,
	    "pieza25_b": ii2,
	    "pieza25_c": ii3,
	    "pieza25_d": ii4,
	    ///
	  	"pieza26_a": jj1,
	    "pieza26_b": jj2,
	    "pieza26_c": jj3,
	    "pieza26_d": jj4,
	    ///
	  	"pieza27_a": kk1,
	    "pieza27_b": kk2,
	    "pieza27_c": kk3,
	    "pieza27_d": kk4,
	    ///
	  	"pieza28_a": ll1,
	    "pieza28_b": ll2,
	    "pieza28_c": ll3,
	    "pieza28_d": ll4,
	    ///
	  	"pieza29_a": mm1,
	    "pieza29_b": mm2,
	    "pieza29_c": mm3,
	    "pieza29_d": mm4,
	    //////
	    "pieza30_a": nn1,
	    "pieza30_b": nn2,
	    "pieza30_c": nn3,
	    "pieza30_d": nn4,
	    "pieza30_e": nn5,
	    ///
	  	"pieza31_a": oo1,
	    "pieza31_b": oo2,
	    "pieza31_c": oo3,
	    "pieza31_d": oo4,
	    "pieza31_e": oo5,
	    ///
	  	"pieza32_a": pp1,
	    "pieza32_b": pp2,
	    "pieza32_c": pp3,
	    "pieza32_d": pp4,
	    "pieza32_e": pp5
	};
	var tjson = JSON.stringify(texto);
	//alert(tjson);
	window.location="demo_json.php?x=" + tjson;
}
</script>

<input type="button" value="Guardar" class="btn btn-default" onclick="grabar1();">
<script type="text/javascript">

var canvas = new fabric.Canvas('c');
var nEscala 	= 1;

var fig_a1 = new fabric.Path('M 39	36 L 20	22.5 C 19.5	11	80	10.5	81	22 L 61.5 36 C 62.5	32	40.5	30	39	36 Z');
	fig_a1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a1);
var text = new fabric.Text('1', { left: 40, top: 62 });
canvas.add(text);

var fig_a2 = new fabric.Path('M 37.5 37 L 20 24 C 13.5	24	15	57	21	57 L 37.5 46.5 C 34.5	47	34	37.5	37.5	37 Z');
	fig_a2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a2);

var fig_a3 = new fabric.Path('M 38	48.5 L 21.5	58.5 C 21.5	72.5 81.5 70.5 81.5 58 L 62.5 48.5 C 63 52.5 38.5 53 38 48.5 Z');
	fig_a3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a3);

var fig_a4 = new fabric.Path('M 63.5 36.5 L 80 24.5 C 85.5 22 91.5 52 82 56.5 L 63.5 47.5 C 66	48 67.5	37.5	63.5	36.5 Z');
	fig_a4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_a4);

var fig_a5 = new fabric.Path('M 40.5 38 C 41.5 33 62 34.5 61.5 38 C 66 37.5 65.5 47 61.5 47.5 C 62 50.5	42 52.5	41 47.5 C 36 46 36.5 36.5	40.5 38 Z');
	fig_a5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a5);
	//

var fig_b1 = new fabric.Path('M 114	36 L 95	22.5 C 94.5	11	155	10.5	156	22 L 136.5	36 C 137.5	32	115.5	30	114	36 Z');
	fig_b1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b1);
var text = new fabric.Text('2', { left: 120, top: 62 });
canvas.add(text);

var fig_b2 = new fabric.Path('M 112.5	37 L 95	24 C 88.5	24	90	57	96	57 L 112.5	46.5 C 109.5	47	109	37.5	112.5	37 Z');
	fig_b2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b2);

var fig_b3 = new fabric.Path('M 113	48.5 L 96.5	58.5 C 96.5	72.5	156.5	70.5	156.5	58 L 137.5 48.5 C 138	52.5	113.5	53	113	48.5 Z');
	fig_b3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b3);

var fig_b4 = new fabric.Path('M 138.5	36.5 L 155	24.5 C 160.5	22	166.5	52	157	56.5 L 138.5	47.5 C 141	48	142.5	37.5	138.5	36.5 Z');
	fig_b4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_b4);

var fig_b5 = new fabric.Path('M 115.5	38 C 116.5	33	137	34.5	136.5	38 C 141	37.5	140.5	47	136.5	47.5 C 137	50.5	117	52.5	116	47.5 C 111	46	111.5	36.5	115.5	38 Z');
	fig_b5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b5);

	//

var fig_c1 = new fabric.Path('M 189	36 L 170	22.5 C 169.5	11	230	10.5	231	22 L 211.5	36 C 212.5	32	190.5	30	189	36 Z');
	fig_c1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c1);
var text = new fabric.Text('3', { left: 190, top: 62 });
canvas.add(text);

var fig_c2 = new fabric.Path('M 187.5	37 L 170	24 C 163.5	24	165	57	171	57 L 187.5	46.5 C 184.5	47	184	37.5	187.5	37 Z');
	fig_c2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c2);

var fig_c3 = new fabric.Path('M 188	48.5 L 171.5	58.5 C 171.5	72.5	231.5	70.5	231.5	58 L 212.5	48.5 C 213	52.5	188.5	53	188	48.5 Z');
	fig_c3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c3);

var fig_c4 = new fabric.Path('M 213.5	36.5 L 230	24.5 C 235.5	22	241.5	52	232	56.5 L 213.5	47.5 C 216	48	217.5	37.5	213.5	36.5 Z');
	fig_c4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_c4);

var fig_c5 = new fabric.Path('M 190.5	38 C 191.5	33	212	34.5	211.5 38 C 216	37.5	215.5	47	211.5	47.5 C 212	50.5	192	52.5	191	47.5 C 186	46	186.5	36.5	190.5	38 Z');
	fig_c5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c5);

	//

var fig_d1 = new fabric.Path('M 266.5	36.5 C 266.5	37.5	305	37	305	36 L 317.5	19 C 318	10.5	251	8.5	250	20 L 266.5	36.5 Z');
	fig_d1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d1);
var text = new fabric.Text('4', { left: 270, top: 62 });
canvas.add(text);
var fig_d2 = new fabric.Path('M 267.5	39 C 267.5	37.5	304.5	37.5	304.5	38.5 L 319.5	55 C 318	70	257.5	68	253.5	57.5 L 267.5	39 Z');
	fig_d2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d2);

var fig_d3 = new fabric.Path('M 248.5	21.5 L 265.5	38 L 250.5	57 C 242	56	240.5	20.5	248.5	21.5 Z');
	fig_d3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d3);

var fig_d4 = new fabric.Path('M 319	20.5 L 306	37.5 L 321	54 C 330	56	330.5	23	319	20.5 Z');
	fig_d4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_d4);

	//+180

var fig_e1 = new fabric.Path('M 356.5	36.5 C 356.5	37.5	395	37	395	36 L 407.5	19 C 408	10.5	341	8.5	340	20 L 356.5	36.5 Z');
	fig_e1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e1);
var text = new fabric.Text('5', { left: 360, top: 62 });
canvas.add(text);

var fig_e2 = new fabric.Path('M 357.5	39 C 357.5	37.5	394.5	37.5	394.5	38.5 L 409.5	55 C 408	70	347.5	68	343.5	57.5 L 357.5	39 Z');
	fig_e2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e2);

var fig_e3 = new fabric.Path('M 338.5	21.5 L 355.5	38 L 340.5	57 C 332	56	330.5	20.5	338.5	21.5 Z');
	fig_e3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e3);

var fig_e4 = new fabric.Path('M 409	20.5 L 396	37.5 L 411	54 C 420	56	420.5	23	409	20.5 Z');
	fig_e4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_e4);

	//+180

var fig_f1 = new fabric.Path('M 446.5	36.5 C 446.5	37.5	485	37	485	36 L 497.5	19 C 498	10.5	431	8.5	430	20 L 446.5	36.5 Z');
	fig_f1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f1);
var text = new fabric.Text('6', { left: 450, top: 62 });
canvas.add(text);

var fig_f2 = new fabric.Path('M 447.5	39 C 447.5	37.5	484.5	37.5	484.5	38.5 L 499.5	55 C 498	70	437.5	68	433.5	57.5 L 447.5	39 Z');
	fig_f2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f2);

var fig_f3 = new fabric.Path('M 428.5	21.5 L 445.5	38 L 430.5	57 C 422	56	420.5	20.5	428.5	21.5 Z');
	fig_f3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f3);

var fig_f4 = new fabric.Path('M 499	20.5 L 486	37.5 L 501	54 C 510	56	510.5	23	499	20.5 Z');
	fig_f4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_f4);

	//+180

var fig_g1 = new fabric.Path('M 536.5	36.5 C 536.5	37.5	575	37	575	36 L 587.5	19 C 588	10.5	521	8.5	520	20 L 536.5	36.5 Z');
	fig_g1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g1);
var text = new fabric.Text('7', { left: 540, top: 62 });
canvas.add(text);

var fig_g2 = new fabric.Path('M 537.5	39 C 537.5	37.5	574.5	37.5	574.5	38.5 L 589.5	55 C 588	70	527.5	68	523.5	57.5 L 537.5	39 Z');
	fig_g2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g2);

var fig_g3 = new fabric.Path('M 518.5	21.5 L 535.5	38 L 520.5	57 C 512	56	510.5	20.5	518.5	21.5 Z');
	fig_g3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g3);

var fig_g4 = new fabric.Path('M 589	20.5 L 576	37.5 L 591	54 C 600	56	600.5	23	589	20.5 Z');
	fig_g4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_g4);

	//+180

var fig_h1 = new fabric.Path('M 626.5	36.5 C 626.5	37.5	665	37	665	36 L 677.5	19 C 678	10.5	611	8.5	610	20 L 626.5	36.5 Z');
	fig_h1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h1);
var text = new fabric.Text('8', { left: 630, top: 62 });
canvas.add(text);

var fig_h2 = new fabric.Path('M 627.5	39 C 627.5	37.5	664.5	37.5	664.5	38.5 L 679.5	55 C 678	70	617.5	68	613.5	57.5 L 627.5	39 Z');
	fig_h2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h2);

var fig_h3 = new fabric.Path('M 608.5	21.5 L 625.5	38 L 610.5	57 C 602	56	600.5	20.5	608.5	21.5 Z');
	fig_h3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h3);

var fig_h4 = new fabric.Path('M 679	20.5 L 666	37.5 L 681	54 C 690	56	690.5	23	679	20.5 Z');
	fig_h4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_h4);

	//+180

var fig_i1 = new fabric.Path('M 716.5	36.5 C 716.5	37.5	755	37	755	36 L 767.5	19 C 768	10.5	701	8.5	700	20 L 716.5	36.5 Z');
	fig_i1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i1);
var text = new fabric.Text('9', { left: 730, top: 62 });
canvas.add(text);

var fig_i2 = new fabric.Path('M 717.5	39 C 717.5	37.5	754.5	37.5	754.5	38.5 L 769.5	55 C 768	70	707.5	68	703.5	57.5 L 717.5	39 Z');
	fig_i2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i2);

var fig_i3 = new fabric.Path('M 698.5	21.5 L 715.5	38 L 700.5	57 C 692	56	690.5	20.5	698.5	21.5 Z');
	fig_i3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i3);

var fig_i4 = new fabric.Path('M 769	20.5 L 756	37.5 L 771	54 C 780	56	780.5	23	769	20.5 Z');
	fig_i4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_i4);

	//+180

var fig_j1 = new fabric.Path('M 806.5	36.5 C 806.5	37.5	845	37	845	36 L 857.5	19 C 858	10.5	791	8.5	790	20 L 806.5	36.5 Z');
	fig_j1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j1);
var text = new fabric.Text('10', { left: 800, top: 62 });
canvas.add(text);

var fig_j2 = new fabric.Path('M 807.5	39 C 807.5	37.5	844.5	37.5	844.5	38.5 L 859.5	55 C 858	70	797.5	68	793.5	57.5 L 807.5	39 Z');
	fig_j2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j2);

var fig_j3 = new fabric.Path('M 788.5	21.5 L 805.5	38 L 790.5	57 C 782	56	780.5	20.5	788.5	21.5 Z');
	fig_j3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j3);

var fig_j4 = new fabric.Path('M 859	20.5 L 846	37.5 L 861	54 C 870	56	870.5	23	859	20.5 Z');
	fig_j4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_j4);

	//+180

var fig_k1 = new fabric.Path('M 896.5	36.5 C 896.5	37.5	935	37	935	36 L 947.5	19 C 948	10.5	881	8.5	880	20	#¡VALOR!	896.5	36.5 L 896.5	36.5 Z');
	fig_k1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k1);
var text = new fabric.Text('11', { left: 900, top: 62 });
canvas.add(text);

var fig_k2 = new fabric.Path('M 897.5	39 C 897.5	37.5	934.5	37.5	934.5	38.5 L 949.5	55 C 948	70	887.5	68	883.5	57.5 L 897.5	39 Z');
	fig_k2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k2);

var fig_k3 = new fabric.Path('M 878.5	21.5 L 895.5	38 L 880.5	57 C 872	56	870.5	20.5	878.5	21.5 Z');
	fig_k3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k3);

var fig_k4 = new fabric.Path('M 949	20.5 L 936	37.5 L 951	54 C 960	56	960.5	23	949	20.5 Z');
	fig_k4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_k4);

	//+180

var fig_l1 = new fabric.Path('M 986.5	36.5 C 986.5	37.5	1025	37	1025	36 L 1037.5	19 C 1038	10.5	971	8.5	970	20 L 986.5 36.5 Z');
	fig_l1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l1);
var text = new fabric.Text('12', { left: 990, top: 62 });
canvas.add(text);

var fig_l2 = new fabric.Path('M 987.5	39 C 987.5	37.5	1024.5	37.5	1024.5	38.5 L 1039.5	55 C 1038	70	977.5	68	973.5	57.5 L 987.5	39 Z');
	fig_l2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l2);

var fig_l3 = new fabric.Path('M 968.5	21.5 L 985.5	38 L 970.5	57 C 962	56	960.5	20.5	968.5	21.5 Z');
	fig_l3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l3);

var fig_l4 = new fabric.Path('M 1039	20.5 L 1026	37.5 L 1041	54 C 1050	56	1050.5	23	1039	20.5 Z');
	fig_l4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_l4);

	//+180

var fig_m1 = new fabric.Path('M 1076.5	36.5 C 1076.5	37.5	1115	37	1115	36 L 1127.5	19 C 1128	10.5	1061	8.5	1060	20 L 1076.5	36.5 Z');
	fig_m1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m1);
var text = new fabric.Text('13', { left: 1070, top: 62 });
canvas.add(text);
var fig_m2 = new fabric.Path('M 1077.5	39 C 1077.5	37.5	1114.5	37.5	1114.5	38.5 L 1129.5	55 C 1128	70	1067.5	68	1063.5	57.5 L 1077.5	39 Z');
	fig_m2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m2);

var fig_m3 = new fabric.Path('M 1058.5	21.5 L 1075.5	38 L 1060.5	57 C 1052	56	1050.5	20.5	1058.5	21.5 Z');
	fig_m3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m3);

var fig_m4 = new fabric.Path('M 1129	20.5 L 1116	37.5 L 1131	54 C 1140	56	1140.5	23	1129	20.5 Z');
	fig_m4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_m4);

	//+1800 +160 =1960

var fig_n1 = new fabric.Path('M 1169	36 L 1150	22.5 C 1149.5	11	1210	10.5	1211	22 L 1191.5	36 C 1192.5	32	1170.5	30	1169	36 Z');
	fig_n1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n1);
var text = new fabric.Text('14', { left: 1160, top: 62 });
canvas.add(text);
var fig_n2 = new fabric.Path('M 1167.5	37 L 1150	24 C 1143.5	24	1145	57	1151	57 L 1167.5	46.5 C 1164.5	47	1164	37.5	1167.5	37 Z');
	fig_n2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n2);

var fig_n3 = new fabric.Path('M 1168	48.5 L 1151.5	58.5 C 1151.5	72.5	1211.5	70.5	1211.5	58 L 1192.5	48.5 C 1193	52.5	1168.5	53	1168	48.5 Z');
	fig_n3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n3);

var fig_n4 = new fabric.Path('M 1193.5	36.5 L 1210	24.5 C 1215.5	22	1221.5	52	1212	56.5 L 1193.5	47.5 C 1196	48	1197.5	37.5	1193.5	36.5 Z');
	fig_n4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_n4);

var fig_n5 = new fabric.Path('M 1170.5	38 C 1171.5	33	1192	34.5	1191.5	38 C 1196	37.5	1195.5	47	1191.5	47.5 C 1192	50.5	1172	52.5	1171	47.5 C 1166	46	1166.5	36.5	1170.5	38 Z');
	fig_n5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n5);

	// +160 

var fig_o1 = new fabric.Path('M 1249	36 L 1230	22.5 C 1229.5	11	1290	10.5	1291	22 L 1271.5	36 C 1272.5	32	1250.5	30	1249	36 Z');
	fig_o1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o1);
var text = new fabric.Text('15', { left: 1240, top: 62 });
canvas.add(text);
var fig_o2 = new fabric.Path('M 1247.5	37 L 1230	24 C 1223.5	24	1225	57	1231	57 L 1247.5	46.5 C 1244.5	47	1244	37.5	1247.5	37 Z');
	fig_o2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o2);

var fig_o3 = new fabric.Path('M 1248	48.5 L 1231.5	58.5 C 1231.5	72.5	1291.5	70.5	1291.5	58 L 1272.5	48.5 C 1273	52.5	1248.5	53	1248	48.5 Z');
	fig_o3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o3);

var fig_o4 = new fabric.Path('M 1273.5	36.5 L 1290	24.5 C 1295.5	22	1301.5	52	1292	56.5 L 1273.5	47.5 C 1276	48	1277.5	37.5	1273.5	36.5 Z');
	fig_o4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_o4);

var fig_o5 = new fabric.Path('M 1250.5	38 C 1251.5	33	1272	34.5	1271.5	38 C 1276	37.5	1275.5	47	1271.5	47.5 C 1272	50.5	1252	52.5	1251	47.5 C 1246	46	1246.5	36.5	1250.5	38 Z');
	fig_o5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o5);

	// +160 

var fig_p1 = new fabric.Path('M 1329	36	 L 1310	22.5 C 1309.5	11	1370	10.5	1371	22 L 1351.5	36 C 1352.5	32	1330.5	30	1329	36 Z');
	fig_p1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p1);
var text = new fabric.Text('16', { left: 1320, top: 62 });
canvas.add(text);
var fig_p2 = new fabric.Path('M 1327.5	37 L 1310	24 C 1303.5	24	1305	57	1311	57 L 1327.5	46.5 C 1324.5	47	1324	37.5	1327.5	37 Z');
	fig_p2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p2);

var fig_p3 = new fabric.Path('M 1328	48.5 L 1311.5	58.5 C 1311.5	72.5	1371.5	70.5	1371.5	58 L 1352.5	48.5 C 1353	52.5	1328.5	53	1328	48.5 Z');
	fig_p3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p3);

var fig_p4 = new fabric.Path('M 1353.5	36.5 L 1370	24.5 C 1375.5	22	1381.5	52	1372	56.5 L 1353.5	47.5 C 1356	48	1357.5	37.5	1353.5	36.5 Z');
	fig_p4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_p4);

var fig_p5 = new fabric.Path('M 1330.5	38 C 1331.5	33	1352	34.5	1351.5	38 C 1356	37.5	1355.5	47	1351.5	47.5 C 1352	50.5	1332	52.5	1331	47.5 C 1326	46	1326.5	36.5	1330.5	38 Z');
	fig_p5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p5);
///
//Parte inferior
///
var fig_aa1 = new fabric.Path('M 39	136 L 20	122.5 C 19.5	111	80	110.5	81	122 L 61.5	136 C 62.5	132	40.5	130	39	136 Z');
	fig_aa1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa1);
var text = new fabric.Text('17', { left: 30, top: 180 });
canvas.add(text);

var fig_aa2 = new fabric.Path('M 37.5	137 L 20	124 C 13.5	124	15	157	21	157 L 37.5	146.5 C 34.5	147	34	137.5	37.5	137 Z');
	fig_aa2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa2);

var fig_aa3 = new fabric.Path('M 38	148.5 L 21.5	158.5 C 21.5	172.5	81.5	170.5	81.5	158 L 62.5	148.5 C 63	152.5	38.5	153	38	148.5 Z');
	fig_aa3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa3);

var fig_aa4 = new fabric.Path('M 63.5	136.5 L 80	124.5 C 85.5	122	91.5	152	82	156.5 L 63.5	147.5 C 66	148	67.5	137.5	63.5	136.5 Z');
	fig_aa4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_aa4);

var fig_aa5 = new fabric.Path('M 40.5	138 C 41.5	133	62	134.5	61.5	138 C 66	137.5	65.5	147	61.5	147.5 C 62	150.5	42	152.5	41	147.5 C 36	146	36.5	136.5	40.5	138 Z');
	fig_aa5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa5);
	//

var fig_bb1 = new fabric.Path('M 114	136 L 95	122.5 C 94.5	111	155	110.5	156	122 L 136.5	136 C 137.5	132	115.5	130	114	136 Z');
	fig_bb1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb1);
var text = new fabric.Text('18', { left: 100, top: 180 });
canvas.add(text);

var fig_bb2 = new fabric.Path('M 112.5	137 L 95	124 C 88.5	124	90	157	96	157 L 112.5	146.5 C 109.5	147	109	137.5	112.5	137 Z');
	fig_bb2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb2);

var fig_bb3 = new fabric.Path('M 113	148.5 L 96.5	158.5 C 96.5	172.5	156.5	170.5	156.5	158 L 137.5	148.5 C 138	152.5	113.5	153	113	148.5 Z');
	fig_bb3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb3);

var fig_bb4 = new fabric.Path('M 138.5	136.5 L 155	124.5 C 160.5	122	166.5	152	157	156.5 L 138.5	147.5 C 141	148	142.5	137.5	138.5	136.5 Z');
	fig_bb4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_bb4);

var fig_bb5 = new fabric.Path('M 115.5	138 C 116.5	133	137	134.5	136.5	138 C 141	137.5	140.5	147	136.5	147.5 C 137	150.5	117	152.5	116	147.5 C 111	146	111.5	136.5	115.5	138 Z');
	fig_bb5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb5);

	//

var fig_cc1 = new fabric.Path('M 189	136 L 170	122.5 C 169.5	111	230	110.5	231	122 L 211.5	136 C 212.5	132	190.5	130	189	136 Z');
	fig_cc1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc1);
var text = new fabric.Text('19', { left: 180, top: 180 });
canvas.add(text);

var fig_cc2 = new fabric.Path('M 187.5	137 L 170	124 C 163.5	124	165	157	171	157 L 187.5	146.5 C 184.5	147	184	137.5	187.5	137 Z');
	fig_cc2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc2);

var fig_cc3 = new fabric.Path('M 188	148.5 L 171.5	158.5 C 171.5	172.5	231.5	170.5	231.5	158 L 212.5	148.5 C 213	152.5	188.5	153	188	148.5 Z');
	fig_cc3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc3);

var fig_cc4 = new fabric.Path('M 213.5	136.5 L 230	124.5 C 235.5	122	241.5	152	232	156.5 L 213.5	147.5 C 216	148	217.5	137.5	213.5	136.5 Z');
	fig_cc4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_cc4);

var fig_cc5 = new fabric.Path('M 190.5	138	 C 191.5	133	212	134.5	211.5	138 C 216	137.5	215.5	147	211.5	147.5 C 212	150.5	192	152.5	191	147.5 C 186	146	186.5	136.5	190.5	138 Z');
	fig_cc5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc5);

	//

var fig_dd1 = new fabric.Path('M 266.5	136.5 C 266.5	137.5	305	137	305	136 L 317.5	119 C 318	110.5	251	108.5	250	120 L 266.5	136.5 Z');
	fig_dd1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd1);
var text = new fabric.Text('20', { left: 260, top: 180 });
canvas.add(text);

var fig_dd2 = new fabric.Path('M 267.5	139 C 267.5	137.5	304.5	137.5	304.5	138.5 L 319.5	155 C 318	170	257.5	168	253.5	157.5 L 267.5	139 Z');
	fig_dd2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd2);

var fig_dd3 = new fabric.Path('M 248.5	121.5 L 265.5	138 L 250.5	157 C 242	156	240.5	120.5	248.5	121.5 Z');
	fig_dd3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd3);

var fig_dd4 = new fabric.Path('M 319	120.5 L 306	137.5 L 321	154 C 330	156	330.5	123	319	120.5 Z');
	fig_dd4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_dd4);

	//+180

var fig_ee1 = new fabric.Path('M 356.5	136.5 C 356.5	137.5	395	137	395	136 L 407.5	119 C 408	110.5	341	108.5	340	120 L 356.5	136.5 Z');
	fig_ee1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee1);
var text = new fabric.Text('21', { left: 350, top: 180 });
canvas.add(text);

var fig_ee2 = new fabric.Path('M 357.5	139 C 357.5	137.5	394.5	137.5	394.5	138.5 L 409.5	155 C 408	170	347.5	168	343.5	157.5 L 357.5	139 Z');
	fig_ee2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee2);

var fig_ee3 = new fabric.Path('M 338.5	121.5 L 355.5	138 L 340.5	157 C 332	156	330.5	120.5	338.5	121.5 Z');
	fig_ee3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee3);

var fig_ee4 = new fabric.Path('M 409	120.5 L 396	137.5 L 411	154 C 420	156	420.5	123	409	120.5 Z');
	fig_ee4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ee4);

	//+180

var fig_ff1 = new fabric.Path('M 446.5	136.5 C 446.5	137.5	485	137	485	136 L 497.5	119 C 498	110.5	431	108.5	430	120 L 446.5	136.5 Z');
	fig_ff1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff1);
var text = new fabric.Text('22', { left: 440, top: 180 });
canvas.add(text);

var fig_ff2 = new fabric.Path('M 447.5	139 C 447.5	137.5	484.5	137.5	484.5	138.5 L 499.5	155 C 498	170	437.5	168	433.5	157.5 L 447.5	139 Z');
	fig_ff2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff2);

var fig_ff3 = new fabric.Path('M 428.5	121.5 L 445.5	138 L 430.5	157 C 422	156	420.5	120.5	428.5	121.5 Z');
	fig_ff3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff3);

var fig_ff4 = new fabric.Path('M 499	120.5 L 486	137.5 L 501	154 C 510	156	510.5	123	499	120.5 Z');
	fig_ff4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ff4);

	//+180

var fig_gg1 = new fabric.Path('M 536.5	136.5 C 536.5	137.5	575	137	575	136 L 587.5	119 C 588	110.5	521	108.5	520	120 L 536.5	136.5 Z');
	fig_gg1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg1);
var text = new fabric.Text('23', { left: 530, top: 180 });
canvas.add(text);

var fig_gg2 = new fabric.Path('M 537.5	139 C 537.5	137.5	574.5	137.5	574.5	138.5 L 589.5	155 C 588	170	527.5	168	523.5	157.5 L 537.5	139 Z');
	fig_gg2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg2);

var fig_gg3 = new fabric.Path('M 518.5	121.5 L 535.5	138 L 520.5	157 C 512	156	510.5	120.5	518.5	121.5 Z');
	fig_gg3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_gg3);

var fig_gg4 = new fabric.Path('M 589	120.5 L 576	137.5 L 591	154 C 600	156	600.5	123	589	120.5 Z');
	fig_gg4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg4);

	//+180

var fig_hh1 = new fabric.Path('M 626.5	136.5 C 626.5	137.5	665	137	665	136 L 677.5	119 C 678	110.5	611	108.5	610	120 L 626.5	136.5 Z');
	fig_hh1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_hh1);
var text = new fabric.Text('24', { left: 620, top: 180 });
canvas.add(text);

var fig_hh2 = new fabric.Path('M 627.5	139 C 627.5	137.5	664.5	137.5	664.5	138.5 L 679.5	155 C 678	170	617.5	168	613.5	157.5 L 627.5	139 Z');
	fig_hh2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_hh2);

var fig_hh3 = new fabric.Path('M 608.5	121.5 L 625.5	138 L 610.5	157 C 602	156	600.5	120.5	608.5	121.5 Z');
	fig_hh3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_hh3);

var fig_hh4 = new fabric.Path('M 679	120.5 L 666	137.5 L 681	154 C 690	156	690.5	123	679	120.5 Z');
	fig_hh4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_hh4);

	//+180

var fig_ii1 = new fabric.Path('M 716.5	136.5 C 716.5	137.5	755	137	755	136 L 767.5	119 C 768	110.5	701	108.5	700	120 L 716.5	136.5 Z');
	fig_ii1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii1);
var text = new fabric.Text('25', { left: 710, top: 180 });
canvas.add(text);

var fig_ii2 = new fabric.Path('M 717.5	139 C 717.5	137.5	754.5	137.5	754.5	138.5 L 769.5	155 C 768	170	707.5	168	703.5	157.5 L 717.5	139 Z');
	fig_ii2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii2);

var fig_ii3 = new fabric.Path('M 698.5	121.5 L 715.5	138 L 700.5	157 C 692	156	690.5	120.5	698.5	121.5 Z');
	fig_ii3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii3);

var fig_ii4 = new fabric.Path('M 769	120.5 L 756	137.5 L 771	154 C 780	156	780.5	123	769	120.5 Z');
	fig_ii4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ii4);

	//+180

var fig_jj1 = new fabric.Path('M 806.5	136.5 C 806.5	137.5	845	137	845	136 L 857.5	119 C 858	110.5	791	108.5	790	120 L 806.5	136.5 Z');
	fig_jj1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj1);
var text = new fabric.Text('26', { left: 800, top: 180 });
canvas.add(text);

var fig_jj2 = new fabric.Path('M 807.5	139 C 807.5	137.5	844.5	137.5	844.5	138.5 L 859.5	155 C 858	170	797.5	168	793.5	157.5 L 807.5	139 Z');
	fig_jj2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj2);

var fig_jj3 = new fabric.Path('M 788.5	121.5 L 805.5	138 L 790.5	157 C 782	156	780.5	120.5	788.5	121.5 Z');
	fig_jj3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj3);

var fig_jj4 = new fabric.Path('M 859	120.5 L 846	137.5 L 861	154 C 870	156	870.5	123	859	120.5 Z');
	fig_jj4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_jj4);

	//+180

var fig_kk1 = new fabric.Path('M 896.5	136.5 C 896.5	137.5	935	137	935	136 L 947.5	119 C 948	110.5	881	108.5	880	120 L 896.5	136.5 Z');
	fig_kk1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk1);
var text = new fabric.Text('27', { left: 890, top: 180 });
canvas.add(text);

var fig_kk2 = new fabric.Path('M 897.5	139 C 897.5	137.5	934.5	137.5	934.5	138.5 L 949.5	155 C 948	170	887.5	168	883.5	157.5 L 897.5	139 Z');
	fig_kk2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk2);

var fig_kk3 = new fabric.Path('M 878.5	121.5 L 895.5	138 L 880.5	157 C 872	156	870.5	120.5	878.5	121.5 Z');
	fig_kk3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk3);

var fig_kk4 = new fabric.Path('M 949	120.5 L 936	137.5 L 951	154 C 960	156	960.5	123	949	120.5 Z');
	fig_kk4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_kk4);

	//+180

var fig_ll1 = new fabric.Path('M 986.5	136.5 C 986.5	137.5	1025	137	1025	136 L 1037.5	119 C 1038	110.5	971	108.5	970	120 L 986.5	136.5 Z');

	fig_ll1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll1);
var text = new fabric.Text('28', { left: 980, top: 180 });
canvas.add(text);

var fig_ll2 = new fabric.Path('M 987.5	139 C 987.5	137.5	1024.5	137.5	1024.5	138.5 L 1039.5	155 C 1038	170	977.5	168	973.5	157.5 L 987.5	139 Z');
	fig_ll2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll2);

var fig_ll3 = new fabric.Path('M 968.5	121.5 L 985.5	138 L 970.5	157 C 962	156	960.5	120.5	968.5	121.5 Z');
	fig_ll3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll3);

var fig_ll4 = new fabric.Path('M 1039	120.5 L 1026	137.5 L 1041	154 C 1050	156	1050.5	123	1039	120.5 Z');
	fig_ll4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ll4);

	//+180

var fig_mm1 = new fabric.Path('M 1076.5	136.5 C 1076.5	137.5	1115	137	1115	136 L 1127.5	119 C 1128	110.5	1061	108.5	1060	120 L 1076.5	136.5 Z');
	fig_mm1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm1);
var text = new fabric.Text('29', { left: 1070, top: 180 });
canvas.add(text);

var fig_mm2 = new fabric.Path('M 1077.5	139 C 1077.5	137.5	1114.5	137.5	1114.5	138.5 L 1129.5	155 C 1128	170	1067.5	168	1063.5	157.5 L 1077.5	139 Z');
	fig_mm2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm2);

var fig_mm3 = new fabric.Path('M 1058.5	121.5 L 1075.5	138 L 1060.5	157 C 1052	156	1050.5	120.5	1058.5	121.5 Z');
	fig_mm3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm3);

var fig_mm4 = new fabric.Path('M 1129	120.5 L 1116	137.5 L 1131	154 C 1140	156	1140.5	123	1129	120.5 Z');
	fig_mm4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_mm4);

	//+1800 +160 =1960

var fig_nn1 = new fabric.Path('M 1169	136 L 1150	122.5 C 1149.5	111	1210	110.5	1211	122 L 1191.5	136 C 1192.5	132	1170.5	130	1169	136 Z');
	fig_nn1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn1);
var text = new fabric.Text('30', { left: 1160, top: 180 });
canvas.add(text);

var fig_nn2 = new fabric.Path('M 1167.5	137 L 1150	124 C 1143.5	124	1145	157	1151	157 L 1167.5	146.5 C 1164.5	147	1164	137.5	1167.5	137 Z');
	fig_nn2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn2);

var fig_nn3 = new fabric.Path('M 1168	148.5 L 1151.5	158.5 C 1151.5	172.5	1211.5	170.5	1211.5	158 L 1192.5	148.5 C 1193	152.5	1168.5	153	1168	148.5 Z');
	fig_nn3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn3);

var fig_nn4 = new fabric.Path('M 1193.5	136.5 L 1210	124.5 C 1215.5	122	1221.5	152	1212	156.5 L 1193.5	147.5 C 1196	148	1197.5	137.5	1193.5	136.5 Z');
	fig_nn4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_nn4);

var fig_nn5 = new fabric.Path('M 1170.5	138 C 1171.5	133	1192	134.5	1191.5	138 C 1196	137.5	1195.5	147	1191.5	147.5 C 1192	150.5	1172	152.5	1171	147.5 C 1166	146	1166.5	136.5	1170.5	138 Z');
	fig_nn5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn5);

	// +160 

var fig_oo1 = new fabric.Path('M 1249	136 L 1230	122.5 C 1229.5	111	1290	110.5	1291	122 L 1271.5	136 C 1272.5	132	1250.5	130	1249	136 Z');
	fig_oo1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo1);
var text = new fabric.Text('31', { left: 1240, top: 180 });
canvas.add(text);

var fig_oo2 = new fabric.Path('M 1247.5	137 L 1230	124 C 1223.5	124	1225	157	1231	157 L 1247.5	146.5 C 1244.5	147	1244	137.5	1247.5	137 Z');
	fig_oo2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo2);

var fig_oo3 = new fabric.Path('M 1248	148.5 L 1231.5	158.5 C 1231.5	172.5	1291.5	170.5	1291.5	158 L 1272.5	148.5 C 1273	152.5	1248.5	153	1248	148.5 Z');
	fig_oo3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo3);

var fig_oo4 = new fabric.Path('M 1273.5	136.5 L 1290	124.5 C 1295.5	122	1301.5	152	1292	156.5 L 1273.5	147.5 C 1276	148	1277.5	137.5	1273.5	136.5 Z');
	fig_oo4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_oo4);

var fig_oo5 = new fabric.Path('M 1250.5	138 C 1251.5	133	1272	134.5	1271.5	138 C 1276	137.5	1275.5	147	1271.5	147.5 C 1272	150.5	1252	152.5	1251	147.5 C 1246	146	1246.5	136.5	1250.5	138 Z');
	fig_oo5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo5);

	// +160 

var fig_pp1 = new fabric.Path('M 1329	136 L 1310	122.5 C 1309.5	111	1370	110.5	1371	122 L 1351.5	136 C 1352.5	132	1330.5	130	1329	136 Z');
	fig_pp1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp1);
var text = new fabric.Text('32', { left: 1320, top: 180 });
canvas.add(text);

var fig_pp2 = new fabric.Path('M 1327.5	137 L 1310	124 C 1303.5	124	1305	157	1311	157 L 1327.5	146.5 C 1324.5	147	1324	137.5	1327.5	137 Z');
	fig_pp2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp2);

var fig_pp3 = new fabric.Path('M 1328	148.5 L 1311.5	158.5 C 1311.5	172.5	1371.5	170.5	1371.5	158 L 1352.5	148.5 C 1353	152.5	1328.5	153	1328	148.5 Z');
	fig_pp3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp3);

var fig_pp4 = new fabric.Path('M 1353.5	136.5 L 1370	124.5 C 1375.5	122	1381.5	152	1372	156.5 L 1353.5	147.5 C 1356	148	1357.5	137.5	1353.5	136.5 Z');
	fig_pp4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_pp4);

var fig_pp5 = new fabric.Path('M 1330.5	138	 C 1331.5	133	1352	134.5	1351.5	138 C 1356	137.5	1355.5	147	1351.5	147.5 C 1352	150.5	1332	152.5	1331	147.5 C 1326	146	1326.5	136.5	1330.5	138 Z');
	fig_pp5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp5);
//Fin
//

//LINEAS VERTICAL
var linea_vertical = new fabric.Path('M 692 10 L 692 500 L 690 500 L 690 10');
	linea_vertical.set({fill: 'rgb(236, 120, 44)'});
canvas.add(linea_vertical);

//LINEAS HORIZONTAL
var linea_horizontal = new fabric.Path(' M 50 100 L 50 105 L 1350 105 L 1350 100');
	linea_horizontal.set({fill: 'rgb(236, 120, 44)'});
canvas.add(linea_horizontal);
//////
elegido_a1 = false;
fig_a1.on('mousedown',function(e){ 
	if (elegido_a1 == false){ 
		fig_a1.set({fill: 'rgb(240,0,0)'});
		elegido_a1 = true;
	}else{
		fig_a1.set({fill: 'rgb(200,200,200)'});
		elegido_a1 = false;
	}; 
});

elegido_a2 = false;
fig_a2.on('mousedown',function(e){ 
	if (elegido_a2 == false){ 
		fig_a2.set({fill: 'rgb(240,0,0)'});
		elegido_a2 = true;
	}else{
		fig_a2.set({fill: 'rgb(200,200,200)'});
		elegido_a2 = false;
	}; 
});

elegido_a3 = false;
fig_a3.on('mousedown',function(e){ 
	if (elegido_a3 == false){ 
		fig_a3.set({fill: 'rgb(240,0,0)'});
		elegido_a3 = true;
	}else{
		fig_a3.set({fill: 'rgb(200,200,200)'});
		elegido_a3 = false;
	}; 
});

elegido_a4 = false;
fig_a4.on('mousedown',function(e){ 
	if (elegido_a4 == false){ 
		fig_a4.set({fill: 'rgb(240,0,0)'});
		elegido_a4 = true;
	}else{
		fig_a4.set({fill: 'rgb(200,200,200)'});
		elegido_a4 = false;
	}; 
});

elegido_a5 = false;
fig_a5.on('mousedown',function(e){ 
	if (elegido_a5 == false){ 
		fig_a5.set({fill: 'rgb(240,0,0)'});
		elegido_a5 = true;
	}else{
		fig_a5.set({fill: 'rgb(200,200,200)'});
		elegido_a5 = false;
	}; 
});
///
elegido_b1 = false;
fig_b1.on('mousedown',function(e){ 
	if (elegido_b1 == false){ 
		fig_b1.set({fill: 'rgb(240,0,0)'});
		elegido_b1 = true;
	}else{
		fig_b1.set({fill: 'rgb(200,200,200)'});
		elegido_b1 = false;
	}; 
});

elegido_b2 = false;
fig_b2.on('mousedown',function(e){ 
	if (elegido_b2 == false){ 
		fig_b2.set({fill: 'rgb(240,0,0)'});
		elegido_b2 = true;
	}else{
		fig_b2.set({fill: 'rgb(200,200,200)'});
		elegido_b2 = false;
	}; 
});

elegido_b3 = false;
fig_b3.on('mousedown',function(e){ 
	if (elegido_b3 == false){ 
		fig_b3.set({fill: 'rgb(240,0,0)'});
		elegido_b3 = true;
	}else{
		fig_b3.set({fill: 'rgb(200,200,200)'});
		elegido_b3 = false;
	}; 
});

elegido_b4 = false;
fig_b4.on('mousedown',function(e){ 
	if (elegido_b4 == false){ 
		fig_b4.set({fill: 'rgb(240,0,0)'});
		elegido_b4 = true;
	}else{
		fig_b4.set({fill: 'rgb(200,200,200)'});
		elegido_b4 = false;
	}; 
});

elegido_b5 = false;
fig_b5.on('mousedown',function(e){ 
	if (elegido_b5 == false){ 
		fig_b5.set({fill: 'rgb(240,0,0)'});
		elegido_b5 = true;
	}else{
		fig_b5.set({fill: 'rgb(200,200,200)'});
		elegido_b5 = false;
	}; 
});
//
elegido_c1 = false;
fig_c1.on('mousedown',function(e){ 
	if (elegido_c1 == false){ 
		fig_c1.set({fill: 'rgb(240,0,0)'});
		elegido_c1 = true;
	}else{
		fig_c1.set({fill: 'rgb(200,200,200)'});
		elegido_c1 = false;
	}; 
});

elegido_c2 = false;
fig_c2.on('mousedown',function(e){ 
	if (elegido_c2 == false){ 
		fig_c2.set({fill: 'rgb(240,0,0)'});
		elegido_c2 = true;
	}else{
		fig_c2.set({fill: 'rgb(200,200,200)'});
		elegido_c2 = false;
	}; 
});

elegido_c3 = false;
fig_c3.on('mousedown',function(e){ 
	if (elegido_c3 == false){ 
		fig_c3.set({fill: 'rgb(240,0,0)'});
		elegido_c3 = true;
	}else{
		fig_c3.set({fill: 'rgb(200,200,200)'});
		elegido_c3 = false;
	}; 
});

elegido_c4 = false;
fig_c4.on('mousedown',function(e){ 
	if (elegido_c4 == false){ 
		fig_c4.set({fill: 'rgb(240,0,0)'});
		elegido_c4 = true;
	}else{
		fig_c4.set({fill: 'rgb(200,200,200)'});
		elegido_c4 = false;
	}; 
});

elegido_c5 = false;
fig_c5.on('mousedown',function(e){ 
	if (elegido_c5 == false){ 
		fig_c5.set({fill: 'rgb(240,0,0)'});
		elegido_c5 = true;
	}else{
		fig_c5.set({fill: 'rgb(200,200,200)'});
		elegido_c5 = false;
	}; 
});
//
elegido_d1 = false;
fig_d1.on('mousedown',function(e){ 
	if (elegido_d1 == false){ 
		fig_d1.set({fill: 'rgb(240,0,0)'});
		elegido_d1 = true;
	}else{
		fig_d1.set({fill: 'rgb(200,200,200)'});
		elegido_d1 = false;
	}; 
});

elegido_d2 = false;
fig_d2.on('mousedown',function(e){ 
	if (elegido_d2 == false){ 
		fig_d2.set({fill: 'rgb(240,0,0)'});
		elegido_d2 = true;
	}else{
		fig_d2.set({fill: 'rgb(200,200,200)'});
		elegido_d2 = false;
	}; 
});

elegido_d3 = false;
fig_d3.on('mousedown',function(e){ 
	if (elegido_d3 == false){ 
		fig_d3.set({fill: 'rgb(240,0,0)'});
		elegido_d3 = true;
	}else{
		fig_d3.set({fill: 'rgb(200,200,200)'});
		elegido_d3 = false;
	}; 
});

elegido_d4 = false;
fig_d4.on('mousedown',function(e){ 
	if (elegido_d4 == false){ 
		fig_d4.set({fill: 'rgb(240,0,0)'});
		elegido_d4 = true;
	}else{
		fig_d4.set({fill: 'rgb(200,200,200)'});
		elegido_d4 = false;
	}; 
});
//
elegido_e1 = false;
fig_e1.on('mousedown',function(e){ 
	if (elegido_e1 == false){ 
		fig_e1.set({fill: 'rgb(240,0,0)'});
		elegido_e1 = true;
	}else{
		fig_e1.set({fill: 'rgb(200,200,200)'});
		elegido_e1 = false;
	}; 
});

elegido_e2 = false;
fig_e2.on('mousedown',function(e){ 
	if (elegido_e2 == false){ 
		fig_e2.set({fill: 'rgb(240,0,0)'});
		elegido_e2 = true;
	}else{
		fig_e2.set({fill: 'rgb(200,200,200)'});
		elegido_e2 = false;
	}; 
});

elegido_e3 = false;
fig_e3.on('mousedown',function(e){ 
	if (elegido_e3 == false){ 
		fig_e3.set({fill: 'rgb(240,0,0)'});
		elegido_e3 = true;
	}else{
		fig_e3.set({fill: 'rgb(200,200,200)'});
		elegido_e3 = false;
	}; 
});

elegido_e4 = false;
fig_e4.on('mousedown',function(e){ 
	if (elegido_e4 == false){ 
		fig_e4.set({fill: 'rgb(240,0,0)'});
		elegido_e4 = true;
	}else{
		fig_e4.set({fill: 'rgb(200,200,200)'});
		elegido_e4 = false;
	}; 
});
//
elegido_f1 = false;
fig_f1.on('mousedown',function(e){ 
	if (elegido_f1 == false){ 
		fig_f1.set({fill: 'rgb(240,0,0)'});
		elegido_f1 = true;
	}else{
		fig_f1.set({fill: 'rgb(200,200,200)'});
		elegido_f1 = false;
	}; 
});

elegido_f2 = false;
fig_f2.on('mousedown',function(e){ 
	if (elegido_f2 == false){ 
		fig_f2.set({fill: 'rgb(240,0,0)'});
		elegido_f2 = true;
	}else{
		fig_f2.set({fill: 'rgb(200,200,200)'});
		elegido_f2 = false;
	}; 
});

elegido_f3 = false;
fig_f3.on('mousedown',function(e){ 
	if (elegido_f3 == false){ 
		fig_f3.set({fill: 'rgb(240,0,0)'});
		elegido_f3 = true;
	}else{
		fig_f3.set({fill: 'rgb(200,200,200)'});
		elegido_f3 = false;
	}; 
});

elegido_f4 = false;
fig_f4.on('mousedown',function(e){ 
	if (elegido_f4 == false){ 
		fig_f4.set({fill: 'rgb(240,0,0)'});
		elegido_f4 = true;
	}else{
		fig_f4.set({fill: 'rgb(200,200,200)'});
		elegido_f4 = false;
	}; 
});
//
elegido_g1 = false;
fig_g1.on('mousedown',function(e){ 
	if (elegido_g1 == false){ 
		fig_g1.set({fill: 'rgb(240,0,0)'});
		elegido_g1 = true;
	}else{
		fig_g1.set({fill: 'rgb(200,200,200)'});
		elegido_g1 = false;
	}; 
});

elegido_g2 = false;
fig_g2.on('mousedown',function(e){ 
	if (elegido_g2 == false){ 
		fig_g2.set({fill: 'rgb(240,0,0)'});
		elegido_g2 = true;
	}else{
		fig_g2.set({fill: 'rgb(200,200,200)'});
		elegido_g2 = false;
	}; 
});

elegido_g3 = false;
fig_g3.on('mousedown',function(e){ 
	if (elegido_g3 == false){ 
		fig_g3.set({fill: 'rgb(240,0,0)'});
		elegido_g3 = true;
	}else{
		fig_g3.set({fill: 'rgb(200,200,200)'});
		elegido_g3 = false;
	}; 
});

elegido_g4 = false;
fig_g4.on('mousedown',function(e){ 
	if (elegido_g4 == false){ 
		fig_g4.set({fill: 'rgb(240,0,0)'});
		elegido_g4 = true;
	}else{
		fig_g4.set({fill: 'rgb(200,200,200)'});
		elegido_g4 = false;
	}; 
});
//
elegido_h1 = false;
fig_h1.on('mousedown',function(e){ 
	if (elegido_h1 == false){ 
		fig_h1.set({fill: 'rgb(240,0,0)'});
		elegido_h1 = true;
	}else{
		fig_h1.set({fill: 'rgb(200,200,200)'});
		elegido_h1 = false;
	}; 
});

elegido_h2 = false;
fig_h2.on('mousedown',function(e){ 
	if (elegido_h2 == false){ 
		fig_h2.set({fill: 'rgb(240,0,0)'});
		elegido_h2 = true;
	}else{
		fig_h2.set({fill: 'rgb(200,200,200)'});
		elegido_h2 = false;
	}; 
});

elegido_h3 = false;
fig_h3.on('mousedown',function(e){ 
	if (elegido_h3 == false){ 
		fig_h3.set({fill: 'rgb(240,0,0)'});
		elegido_h3 = true;
	}else{
		fig_h3.set({fill: 'rgb(200,200,200)'});
		elegido_h3 = false;
	}; 
});

elegido_h4 = false;
fig_h4.on('mousedown',function(e){ 
	if (elegido_h4 == false){ 
		fig_h4.set({fill: 'rgb(240,0,0)'});
		elegido_h4 = true;
	}else{
		fig_h4.set({fill: 'rgb(200,200,200)'});
		elegido_h4 = false;
	}; 
});
//
elegido_i1 = false;
fig_i1.on('mousedown',function(e){ 
	if (elegido_i1 == false){ 
		fig_i1.set({fill: 'rgb(240,0,0)'});
		elegido_i1 = true;
	}else{
		fig_i1.set({fill: 'rgb(200,200,200)'});
		elegido_i1 = false;
	}; 
});

elegido_i2 = false;
fig_i2.on('mousedown',function(e){ 
	if (elegido_i2 == false){ 
		fig_i2.set({fill: 'rgb(240,0,0)'});
		elegido_i2 = true;
	}else{
		fig_i2.set({fill: 'rgb(200,200,200)'});
		elegido_i2 = false;
	}; 
});

elegido_i3 = false;
fig_i3.on('mousedown',function(e){ 
	if (elegido_i3 == false){ 
		fig_i3.set({fill: 'rgb(240,0,0)'});
		elegido_i3 = true;
	}else{
		fig_i3.set({fill: 'rgb(200,200,200)'});
		elegido_i3 = false;
	}; 
});

elegido_i4 = false;
fig_i4.on('mousedown',function(e){ 
	if (elegido_i4 == false){ 
		fig_i4.set({fill: 'rgb(240,0,0)'});
		elegido_i4 = true;
	}else{
		fig_i4.set({fill: 'rgb(200,200,200)'});
		elegido_i4 = false;
	}; 
});
//
elegido_j1 = false;
fig_j1.on('mousedown',function(e){ 
	if (elegido_j1 == false){ 
		fig_j1.set({fill: 'rgb(240,0,0)'});
		elegido_j1 = true;
	}else{
		fig_j1.set({fill: 'rgb(200,200,200)'});
		elegido_j1 = false;
	}; 
});

elegido_j2 = false;
fig_j2.on('mousedown',function(e){ 
	if (elegido_j2 == false){ 
		fig_j2.set({fill: 'rgb(240,0,0)'});
		elegido_j2 = true;
	}else{
		fig_j2.set({fill: 'rgb(200,200,200)'});
		elegido_j2 = false;
	}; 
});

elegido_j3 = false;
fig_j3.on('mousedown',function(e){ 
	if (elegido_j3 == false){ 
		fig_j3.set({fill: 'rgb(240,0,0)'});
		elegido_j3 = true;
	}else{
		fig_j3.set({fill: 'rgb(200,200,200)'});
		elegido_j3 = false;
	}; 
});

elegido_j4 = false;
fig_j4.on('mousedown',function(e){ 
	if (elegido_j4 == false){ 
		fig_j4.set({fill: 'rgb(240,0,0)'});
		elegido_j4 = true;
	}else{
		fig_j4.set({fill: 'rgb(200,200,200)'});
		elegido_j4 = false;
	}; 
});
//
elegido_k1 = false;
fig_k1.on('mousedown',function(e){ 
	if (elegido_k1 == false){ 
		fig_k1.set({fill: 'rgb(240,0,0)'});
		elegido_k1 = true;
	}else{
		fig_k1.set({fill: 'rgb(200,200,200)'});
		elegido_k1 = false;
	}; 
});

elegido_k2 = false;
fig_k2.on('mousedown',function(e){ 
	if (elegido_k2 == false){ 
		fig_k2.set({fill: 'rgb(240,0,0)'});
		elegido_k2 = true;
	}else{
		fig_k2.set({fill: 'rgb(200,200,200)'});
		elegido_k2 = false;
	}; 
});

elegido_k3 = false;
fig_k3.on('mousedown',function(e){ 
	if (elegido_k3 == false){ 
		fig_k3.set({fill: 'rgb(240,0,0)'});
		elegido_k3 = true;
	}else{
		fig_k3.set({fill: 'rgb(200,200,200)'});
		elegido_k3 = false;
	}; 
});

elegido_k4 = false;
fig_k4.on('mousedown',function(e){ 
	if (elegido_k4 == false){ 
		fig_k4.set({fill: 'rgb(240,0,0)'});
		elegido_k4 = true;
	}else{
		fig_k4.set({fill: 'rgb(200,200,200)'});
		elegido_k4 = false;
	}; 
});
//
elegido_l1 = false;
fig_l1.on('mousedown',function(e){ 
	if (elegido_l1 == false){ 
		fig_l1.set({fill: 'rgb(240,0,0)'});
		elegido_l1 = true;
	}else{
		fig_l1.set({fill: 'rgb(200,200,200)'});
		elegido_l1 = false;
	}; 
});

elegido_l2 = false;
fig_l2.on('mousedown',function(e){ 
	if (elegido_l2 == false){ 
		fig_l2.set({fill: 'rgb(240,0,0)'});
		elegido_l2 = true;
	}else{
		fig_l2.set({fill: 'rgb(200,200,200)'});
		elegido_l2 = false;
	}; 
});

elegido_l3 = false;
fig_l3.on('mousedown',function(e){ 
	if (elegido_l3 == false){ 
		fig_l3.set({fill: 'rgb(240,0,0)'});
		elegido_l3 = true;
	}else{
		fig_l3.set({fill: 'rgb(200,200,200)'});
		elegido_l3 = false;
	}; 
});

elegido_l4 = false;
fig_l4.on('mousedown',function(e){ 
	if (elegido_l4 == false){ 
		fig_l4.set({fill: 'rgb(240,0,0)'});
		elegido_l4 = true;
	}else{
		fig_l4.set({fill: 'rgb(200,200,200)'});
		elegido_l4 = false;
	}; 
});
//
elegido_m1 = false;
fig_m1.on('mousedown',function(e){ 
	if (elegido_m1 == false){ 
		fig_m1.set({fill: 'rgb(240,0,0)'});
		elegido_m1 = true;
	}else{
		fig_m1.set({fill: 'rgb(200,200,200)'});
		elegido_m1 = false;
	}; 
});

elegido_m2 = false;
fig_m2.on('mousedown',function(e){ 
	if (elegido_m2 == false){ 
		fig_m2.set({fill: 'rgb(240,0,0)'});
		elegido_m2 = true;
	}else{
		fig_m2.set({fill: 'rgb(200,200,200)'});
		elegido_m2 = false;
	}; 
});

elegido_m3 = false;
fig_m3.on('mousedown',function(e){ 
	if (elegido_m3 == false){ 
		fig_m3.set({fill: 'rgb(240,0,0)'});
		elegido_m3 = true;
	}else{
		fig_m3.set({fill: 'rgb(200,200,200)'});
		elegido_m3 = false;
	}; 
});

elegido_m4 = false;
fig_m4.on('mousedown',function(e){ 
	if (elegido_m4 == false){ 
		fig_m4.set({fill: 'rgb(240,0,0)'});
		elegido_m4 = true;
	}else{
		fig_m4.set({fill: 'rgb(200,200,200)'});
		elegido_m4 = false;
	}; 
});
//
elegido_n1 = false;
fig_n1.on('mousedown',function(e){ 
	if (elegido_n1 == false){ 
		fig_n1.set({fill: 'rgb(240,0,0)'});
		elegido_n1 = true;
	}else{
		fig_n1.set({fill: 'rgb(200,200,200)'});
		elegido_n1 = false;
	}; 
});

elegido_n2 = false;
fig_n2.on('mousedown',function(e){ 
	if (elegido_n2 == false){ 
		fig_n2.set({fill: 'rgb(240,0,0)'});
		elegido_n2 = true;
	}else{
		fig_n2.set({fill: 'rgb(200,200,200)'});
		elegido_n2 = false;
	}; 
});

elegido_n3 = false;
fig_n3.on('mousedown',function(e){ 
	if (elegido_n3 == false){ 
		fig_n3.set({fill: 'rgb(240,0,0)'});
		elegido_n3 = true;
	}else{
		fig_n3.set({fill: 'rgb(200,200,200)'});
		elegido_n3 = false;
	}; 
});

elegido_n4 = false;
fig_n4.on('mousedown',function(e){ 
	if (elegido_n4 == false){ 
		fig_n4.set({fill: 'rgb(240,0,0)'});
		elegido_n4 = true;
	}else{
		fig_n4.set({fill: 'rgb(200,200,200)'});
		elegido_n4 = false;
	}; 
});

elegido_n5 = false;
fig_n5.on('mousedown',function(e){ 
	if (elegido_n5 == false){ 
		fig_n5.set({fill: 'rgb(240,0,0)'});
		elegido_n5 = true;
	}else{
		fig_n5.set({fill: 'rgb(200,200,200)'});
		elegido_n5 = false;
	}; 
});
//
elegido_o1 = false;
fig_o1.on('mousedown',function(e){ 
	if (elegido_o1 == false){ 
		fig_o1.set({fill: 'rgb(240,0,0)'});
		elegido_o1 = true;
	}else{
		fig_o1.set({fill: 'rgb(200,200,200)'});
		elegido_o1 = false;
	}; 
});

elegido_o2 = false;
fig_o2.on('mousedown',function(e){ 
	if (elegido_o2 == false){ 
		fig_o2.set({fill: 'rgb(240,0,0)'});
		elegido_o2 = true;
	}else{
		fig_o2.set({fill: 'rgb(200,200,200)'});
		elegido_o2 = false;
	}; 
});

elegido_o3 = false;
fig_o3.on('mousedown',function(e){ 
	if (elegido_o3 == false){ 
		fig_o3.set({fill: 'rgb(240,0,0)'});
		elegido_o3 = true;
	}else{
		fig_o3.set({fill: 'rgb(200,200,200)'});
		elegido_o3 = false;
	}; 
});

elegido_o4 = false;
fig_o4.on('mousedown',function(e){ 
	if (elegido_o4 == false){ 
		fig_o4.set({fill: 'rgb(240,0,0)'});
		elegido_o4 = true;
	}else{
		fig_o4.set({fill: 'rgb(200,200,200)'});
		elegido_o4 = false;
	}; 
});

elegido_o5 = false;
fig_o5.on('mousedown',function(e){ 
	if (elegido_o5 == false){ 
		fig_o5.set({fill: 'rgb(240,0,0)'});
		elegido_o5 = true;
	}else{
		fig_o5.set({fill: 'rgb(200,200,200)'});
		elegido_o5 = false;
	}; 
});
//
elegido_p1 = false;
fig_p1.on('mousedown',function(e){ 
	if (elegido_p1 == false){ 
		fig_p1.set({fill: 'rgb(240,0,0)'});
		elegido_p1 = true;
	}else{
		fig_p1.set({fill: 'rgb(200,200,200)'});
		elegido_p1 = false;
	}; 
});

elegido_p2 = false;
fig_p2.on('mousedown',function(e){ 
	if (elegido_p2 == false){ 
		fig_p2.set({fill: 'rgb(240,0,0)'});
		elegido_p2 = true;
	}else{
		fig_p2.set({fill: 'rgb(200,200,200)'});
		elegido_p2 = false;
	}; 
});

elegido_p3 = false;
fig_p3.on('mousedown',function(e){ 
	if (elegido_p3 == false){ 
		fig_p3.set({fill: 'rgb(240,0,0)'});
		elegido_p3 = true;
	}else{
		fig_p3.set({fill: 'rgb(200,200,200)'});
		elegido_p3 = false;
	}; 
});

elegido_p4 = false;
fig_p4.on('mousedown',function(e){ 
	if (elegido_p4 == false){ 
		fig_p4.set({fill: 'rgb(240,0,0)'});
		elegido_p4 = true;
	}else{
		fig_p4.set({fill: 'rgb(200,200,200)'});
		elegido_p4 = false;
	}; 
});

elegido_p5 = false;
fig_p5.on('mousedown',function(e){ 
	if (elegido_p5 == false){ 
		fig_p5.set({fill: 'rgb(240,0,0)'});
		elegido_p5 = true;
	}else{
		fig_p5.set({fill: 'rgb(200,200,200)'});
		elegido_p5 = false;
	}; 
});
////
//Parte inferior
//
elegido_aa1 = false;
fig_aa1.on('mousedown',function(e){ 
	if (elegido_aa1 == false){ 
		fig_aa1.set({fill: 'rgb(240,0,0)'});
		elegido_aa1 = true;
	}else{
		fig_aa1.set({fill: 'rgb(200,200,200)'});
		elegido_aa1 = false;
	}; 
});

elegido_aa2 = false;
fig_aa2.on('mousedown',function(e){ 
	if (elegido_aa2 == false){ 
		fig_aa2.set({fill: 'rgb(240,0,0)'});
		elegido_aa2 = true;
	}else{
		fig_aa2.set({fill: 'rgb(200,200,200)'});
		elegido_aa2 = false;
	}; 
});

elegido_aa3 = false;
fig_aa3.on('mousedown',function(e){ 
	if (elegido_aa3 == false){ 
		fig_aa3.set({fill: 'rgb(240,0,0)'});
		elegido_aa3 = true;
	}else{
		fig_aa3.set({fill: 'rgb(200,200,200)'});
		elegido_aa3 = false;
	}; 
});

elegido_aa4 = false;
fig_aa4.on('mousedown',function(e){ 
	if (elegido_aa4 == false){ 
		fig_aa4.set({fill: 'rgb(240,0,0)'});
		elegido_aa4 = true;
	}else{
		fig_aa4.set({fill: 'rgb(200,200,200)'});
		elegido_aa4 = false;
	}; 
});

elegido_aa5 = false;
fig_aa5.on('mousedown',function(e){ 
	if (elegido_aa5 == false){ 
		fig_aa5.set({fill: 'rgb(240,0,0)'});
		elegido_aa5 = true;
	}else{
		fig_aa5.set({fill: 'rgb(200,200,200)'});
		elegido_aa5 = false;
	}; 
});
///
elegido_bb1 = false;
fig_bb1.on('mousedown',function(e){ 
	if (elegido_bb1 == false){ 
		fig_bb1.set({fill: 'rgb(240,0,0)'});
		elegido_bb1 = true;
	}else{
		fig_bb1.set({fill: 'rgb(200,200,200)'});
		elegido_bb1 = false;
	}; 
});

elegido_bb2 = false;
fig_bb2.on('mousedown',function(e){ 
	if (elegido_bb2 == false){ 
		fig_bb2.set({fill: 'rgb(240,0,0)'});
		elegido_bb2 = true;
	}else{
		fig_bb2.set({fill: 'rgb(200,200,200)'});
		elegido_bb2 = false;
	}; 
});

elegido_bb3 = false;
fig_bb3.on('mousedown',function(e){ 
	if (elegido_bb3 == false){ 
		fig_bb3.set({fill: 'rgb(240,0,0)'});
		elegido_bb3 = true;
	}else{
		fig_bb3.set({fill: 'rgb(200,200,200)'});
		elegido_bb3 = false;
	}; 
});

elegido_bb4 = false;
fig_bb4.on('mousedown',function(e){ 
	if (elegido_bb4 == false){ 
		fig_bb4.set({fill: 'rgb(240,0,0)'});
		elegido_bb4 = true;
	}else{
		fig_bb4.set({fill: 'rgb(200,200,200)'});
		elegido_bb4 = false;
	}; 
});

elegido_bb5 = false;
fig_bb5.on('mousedown',function(e){ 
	if (elegido_bb5 == false){ 
		fig_bb5.set({fill: 'rgb(240,0,0)'});
		elegido_bb5 = true;
	}else{
		fig_bb5.set({fill: 'rgb(200,200,200)'});
		elegido_bb5 = false;
	}; 
});
//
elegido_cc1 = false;
fig_cc1.on('mousedown',function(e){ 
	if (elegido_cc1 == false){ 
		fig_cc1.set({fill: 'rgb(240,0,0)'});
		elegido_cc1 = true;
	}else{
		fig_cc1.set({fill: 'rgb(200,200,200)'});
		elegido_cc1 = false;
	}; 
});

elegido_cc2 = false;
fig_cc2.on('mousedown',function(e){ 
	if (elegido_cc2 == false){ 
		fig_cc2.set({fill: 'rgb(240,0,0)'});
		elegido_cc2 = true;
	}else{
		fig_cc2.set({fill: 'rgb(200,200,200)'});
		elegido_cc2 = false;
	}; 
});

elegido_cc3 = false;
fig_cc3.on('mousedown',function(e){ 
	if (elegido_cc3 == false){ 
		fig_cc3.set({fill: 'rgb(240,0,0)'});
		elegido_cc3 = true;
	}else{
		fig_cc3.set({fill: 'rgb(200,200,200)'});
		elegido_cc3 = false;
	}; 
});

elegido_cc4 = false;
fig_cc4.on('mousedown',function(e){ 
	if (elegido_cc4 == false){ 
		fig_cc4.set({fill: 'rgb(240,0,0)'});
		elegido_cc4 = true;
	}else{
		fig_cc4.set({fill: 'rgb(200,200,200)'});
		elegido_cc4 = false;
	}; 
});

elegido_cc5 = false;
fig_cc5.on('mousedown',function(e){ 
	if (elegido_cc5 == false){ 
		fig_cc5.set({fill: 'rgb(240,0,0)'});
		elegido_cc5 = true;
	}else{
		fig_cc5.set({fill: 'rgb(200,200,200)'});
		elegido_cc5 = false;
	}; 
});
//
elegido_dd1 = false;
fig_dd1.on('mousedown',function(e){ 
	if (elegido_dd1 == false){ 
		fig_dd1.set({fill: 'rgb(240,0,0)'});
		elegido_dd1 = true;
	}else{
		fig_dd1.set({fill: 'rgb(200,200,200)'});
		elegido_dd1 = false;
	}; 
});

elegido_dd2 = false;
fig_dd2.on('mousedown',function(e){ 
	if (elegido_dd2 == false){ 
		fig_dd2.set({fill: 'rgb(240,0,0)'});
		elegido_dd2 = true;
	}else{
		fig_dd2.set({fill: 'rgb(200,200,200)'});
		elegido_dd2 = false;
	}; 
});

elegido_dd3 = false;
fig_dd3.on('mousedown',function(e){ 
	if (elegido_dd3 == false){ 
		fig_dd3.set({fill: 'rgb(240,0,0)'});
		elegido_dd3 = true;
	}else{
		fig_dd3.set({fill: 'rgb(200,200,200)'});
		elegido_dd3 = false;
	}; 
});

elegido_dd4 = false;
fig_dd4.on('mousedown',function(e){ 
	if (elegido_dd4 == false){ 
		fig_dd4.set({fill: 'rgb(240,0,0)'});
		elegido_dd4 = true;
	}else{
		fig_dd4.set({fill: 'rgb(200,200,200)'});
		elegido_dd4 = false;
	}; 
});
//
elegido_ee1 = false;
fig_ee1.on('mousedown',function(e){ 
	if (elegido_ee1 == false){ 
		fig_ee1.set({fill: 'rgb(240,0,0)'});
		elegido_ee1 = true;
	}else{
		fig_ee1.set({fill: 'rgb(200,200,200)'});
		elegido_ee1 = false;
	}; 
});

elegido_ee2 = false;
fig_ee2.on('mousedown',function(e){ 
	if (elegido_ee2 == false){ 
		fig_ee2.set({fill: 'rgb(240,0,0)'});
		elegido_ee2 = true;
	}else{
		fig_ee2.set({fill: 'rgb(200,200,200)'});
		elegido_ee2 = false;
	}; 
});

elegido_ee3 = false;
fig_ee3.on('mousedown',function(e){ 
	if (elegido_ee3 == false){ 
		fig_ee3.set({fill: 'rgb(240,0,0)'});
		elegido_ee3 = true;
	}else{
		fig_ee3.set({fill: 'rgb(200,200,200)'});
		elegido_ee3 = false;
	}; 
});

elegido_ee4 = false;
fig_ee4.on('mousedown',function(e){ 
	if (elegido_ee4 == false){ 
		fig_ee4.set({fill: 'rgb(240,0,0)'});
		elegido_ee4 = true;
	}else{
		fig_ee4.set({fill: 'rgb(200,200,200)'});
		elegido_ee4 = false;
	}; 
});
//
elegido_ff1 = false;
fig_ff1.on('mousedown',function(e){ 
	if (elegido_ff1 == false){ 
		fig_ff1.set({fill: 'rgb(240,0,0)'});
		elegido_ff1 = true;
	}else{
		fig_ff1.set({fill: 'rgb(200,200,200)'});
		elegido_ff1 = false;
	}; 
});

elegido_ff2 = false;
fig_ff2.on('mousedown',function(e){ 
	if (elegido_ff2 == false){ 
		fig_ff2.set({fill: 'rgb(240,0,0)'});
		elegido_ff2 = true;
	}else{
		fig_ff2.set({fill: 'rgb(200,200,200)'});
		elegido_ff2 = false;
	}; 
});

elegido_ff3 = false;
fig_ff3.on('mousedown',function(e){ 
	if (elegido_ff3 == false){ 
		fig_ff3.set({fill: 'rgb(240,0,0)'});
		elegido_ff3 = true;
	}else{
		fig_ff3.set({fill: 'rgb(200,200,200)'});
		elegido_ff3 = false;
	}; 
});

elegido_ff4 = false;
fig_ff4.on('mousedown',function(e){ 
	if (elegido_ff4 == false){ 
		fig_ff4.set({fill: 'rgb(240,0,0)'});
		elegido_ff4 = true;
	}else{
		fig_ff4.set({fill: 'rgb(200,200,200)'});
		elegido_ff4 = false;
	}; 
});
//
elegido_gg1 = false;
fig_gg1.on('mousedown',function(e){ 
	if (elegido_gg1 == false){ 
		fig_gg1.set({fill: 'rgb(240,0,0)'});
		elegido_gg1 = true;
	}else{
		fig_gg1.set({fill: 'rgb(200,200,200)'});
		elegido_gg1 = false;
	}; 
});

elegido_gg2 = false;
fig_gg2.on('mousedown',function(e){ 
	if (elegido_gg2 == false){ 
		fig_gg2.set({fill: 'rgb(240,0,0)'});
		elegido_gg2 = true;
	}else{
		fig_gg2.set({fill: 'rgb(200,200,200)'});
		elegido_gg2 = false;
	}; 
});

elegido_gg3 = false;
fig_gg3.on('mousedown',function(e){ 
	if (elegido_gg3 == false){ 
		fig_gg3.set({fill: 'rgb(240,0,0)'});
		elegido_gg3 = true;
	}else{
		fig_gg3.set({fill: 'rgb(200,200,200)'});
		elegido_gg3 = false;
	}; 
});

elegido_gg4 = false;
fig_gg4.on('mousedown',function(e){ 
	if (elegido_gg4 == false){ 
		fig_gg4.set({fill: 'rgb(240,0,0)'});
		elegido_gg4 = true;
	}else{
		fig_gg4.set({fill: 'rgb(200,200,200)'});
		elegido_gg4 = false;
	}; 
});
//
elegido_hh1 = false;
fig_hh1.on('mousedown',function(e){ 
	if (elegido_hh1 == false){ 
		fig_hh1.set({fill: 'rgb(240,0,0)'});
		elegido_hh1 = true;
	}else{
		fig_hh1.set({fill: 'rgb(200,200,200)'});
		elegido_hh1 = false;
	}; 
});

elegido_hh2 = false;
fig_hh2.on('mousedown',function(e){ 
	if (elegido_hh2 == false){ 
		fig_hh2.set({fill: 'rgb(240,0,0)'});
		elegido_hh2 = true;
	}else{
		fig_hh2.set({fill: 'rgb(200,200,200)'});
		elegido_hh2 = false;
	}; 
});

elegido_hh3 = false;
fig_hh3.on('mousedown',function(e){ 
	if (elegido_hh3 == false){ 
		fig_hh3.set({fill: 'rgb(240,0,0)'});
		elegido_hh3 = true;
	}else{
		fig_hh3.set({fill: 'rgb(200,200,200)'});
		elegido_hh3 = false;
	}; 
});

elegido_hh4 = false;
fig_hh4.on('mousedown',function(e){ 
	if (elegido_hh4 == false){ 
		fig_hh4.set({fill: 'rgb(240,0,0)'});
		elegido_hh4 = true;
	}else{
		fig_hh4.set({fill: 'rgb(200,200,200)'});
		elegido_hh4 = false;
	}; 
});
//
elegido_ii1 = false;
fig_ii1.on('mousedown',function(e){ 
	if (elegido_ii1 == false){ 
		fig_ii1.set({fill: 'rgb(240,0,0)'});
		elegido_ii1 = true;
	}else{
		fig_ii1.set({fill: 'rgb(200,200,200)'});
		elegido_ii1 = false;
	}; 
});

elegido_ii2 = false;
fig_ii2.on('mousedown',function(e){ 
	if (elegido_ii2 == false){ 
		fig_ii2.set({fill: 'rgb(240,0,0)'});
		elegido_ii2 = true;
	}else{
		fig_ii2.set({fill: 'rgb(200,200,200)'});
		elegido_ii2 = false;
	}; 
});

elegido_ii3 = false;
fig_ii3.on('mousedown',function(e){ 
	if (elegido_ii3 == false){ 
		fig_ii3.set({fill: 'rgb(240,0,0)'});
		elegido_ii3 = true;
	}else{
		fig_ii3.set({fill: 'rgb(200,200,200)'});
		elegido_ii3 = false;
	}; 
});

elegido_ii4 = false;
fig_ii4.on('mousedown',function(e){ 
	if (elegido_ii4 == false){ 
		fig_ii4.set({fill: 'rgb(240,0,0)'});
		elegido_ii4 = true;
	}else{
		fig_ii4.set({fill: 'rgb(200,200,200)'});
		elegido_ii4 = false;
	}; 
});
//
elegido_jj1 = false;
fig_jj1.on('mousedown',function(e){ 
	if (elegido_jj1 == false){ 
		fig_jj1.set({fill: 'rgb(240,0,0)'});
		elegido_jj1 = true;
	}else{
		fig_jj1.set({fill: 'rgb(200,200,200)'});
		elegido_jj1 = false;
	}; 
});

elegido_jj2 = false;
fig_jj2.on('mousedown',function(e){ 
	if (elegido_jj2 == false){ 
		fig_jj2.set({fill: 'rgb(240,0,0)'});
		elegido_jj2 = true;
	}else{
		fig_jj2.set({fill: 'rgb(200,200,200)'});
		elegido_jj2 = false;
	}; 
});

elegido_jj3 = false;
fig_jj3.on('mousedown',function(e){ 
	if (elegido_jj3 == false){ 
		fig_jj3.set({fill: 'rgb(240,0,0)'});
		elegido_jj3 = true;
	}else{
		fig_jj3.set({fill: 'rgb(200,200,200)'});
		elegido_jj3 = false;
	}; 
});

elegido_jj4 = false;
fig_jj4.on('mousedown',function(e){ 
	if (elegido_jj4 == false){ 
		fig_jj4.set({fill: 'rgb(240,0,0)'});
		elegido_jj4 = true;
	}else{
		fig_jj4.set({fill: 'rgb(200,200,200)'});
		elegido_jj4 = false;
	}; 
});
//
elegido_kk1 = false;
fig_kk1.on('mousedown',function(e){ 
	if (elegido_kk1 == false){ 
		fig_kk1.set({fill: 'rgb(240,0,0)'});
		elegido_kk1 = true;
	}else{
		fig_kk1.set({fill: 'rgb(200,200,200)'});
		elegido_kk1 = false;
	}; 
});

elegido_kk2 = false;
fig_kk2.on('mousedown',function(e){ 
	if (elegido_kk2 == false){ 
		fig_kk2.set({fill: 'rgb(240,0,0)'});
		elegido_kk2 = true;
	}else{
		fig_kk2.set({fill: 'rgb(200,200,200)'});
		elegido_kk2 = false;
	}; 
});

elegido_kk3 = false;
fig_kk3.on('mousedown',function(e){ 
	if (elegido_kk3 == false){ 
		fig_kk3.set({fill: 'rgb(240,0,0)'});
		elegido_kk3 = true;
	}else{
		fig_kk3.set({fill: 'rgb(200,200,200)'});
		elegido_kk3 = false;
	}; 
});

elegido_kk4 = false;
fig_kk4.on('mousedown',function(e){ 
	if (elegido_kk4 == false){ 
		fig_kk4.set({fill: 'rgb(240,0,0)'});
		elegido_kk4 = true;
	}else{
		fig_kk4.set({fill: 'rgb(200,200,200)'});
		elegido_kk4 = false;
	}; 
});
//
elegido_ll1 = false;
fig_ll1.on('mousedown',function(e){ 
	if (elegido_ll1 == false){ 
		fig_ll1.set({fill: 'rgb(240,0,0)'});
		elegido_ll1 = true;
	}else{
		fig_ll1.set({fill: 'rgb(200,200,200)'});
		elegido_ll1 = false;
	}; 
});

elegido_ll2 = false;
fig_ll2.on('mousedown',function(e){ 
	if (elegido_ll2 == false){ 
		fig_ll2.set({fill: 'rgb(240,0,0)'});
		elegido_ll2 = true;
	}else{
		fig_ll2.set({fill: 'rgb(200,200,200)'});
		elegido_ll2 = false;
	}; 
});

elegido_ll3 = false;
fig_ll3.on('mousedown',function(e){ 
	if (elegido_ll3 == false){ 
		fig_ll3.set({fill: 'rgb(240,0,0)'});
		elegido_ll3 = true;
	}else{
		fig_ll3.set({fill: 'rgb(200,200,200)'});
		elegido_ll3 = false;
	}; 
});

elegido_ll4 = false;
fig_ll4.on('mousedown',function(e){ 
	if (elegido_ll4 == false){ 
		fig_ll4.set({fill: 'rgb(240,0,0)'});
		elegido_ll4 = true;
	}else{
		fig_ll4.set({fill: 'rgb(200,200,200)'});
		elegido_ll4 = false;
	}; 
});
//
elegido_mm1 = false;
fig_mm1.on('mousedown',function(e){ 
	if (elegido_mm1 == false){ 
		fig_mm1.set({fill: 'rgb(240,0,0)'});
		elegido_mm1 = true;
	}else{
		fig_mm1.set({fill: 'rgb(200,200,200)'});
		elegido_mm1 = false;
	}; 
});

elegido_mm2 = false;
fig_mm2.on('mousedown',function(e){ 
	if (elegido_mm2 == false){ 
		fig_mm2.set({fill: 'rgb(240,0,0)'});
		elegido_mm2 = true;
	}else{
		fig_mm2.set({fill: 'rgb(200,200,200)'});
		elegido_mm2 = false;
	}; 
});

elegido_mm3 = false;
fig_mm3.on('mousedown',function(e){ 
	if (elegido_mm3 == false){ 
		fig_mm3.set({fill: 'rgb(240,0,0)'});
		elegido_mm3 = true;
	}else{
		fig_mm3.set({fill: 'rgb(200,200,200)'});
		elegido_mm3 = false;
	}; 
});

elegido_mm4 = false;
fig_mm4.on('mousedown',function(e){ 
	if (elegido_mm4 == false){ 
		fig_mm4.set({fill: 'rgb(240,0,0)'});
		elegido_m4 = true;
	}else{
		fig_mm4.set({fill: 'rgb(200,200,200)'});
		elegido_mm4 = false;
	}; 
});
//
elegido_nn1 = false;
fig_nn1.on('mousedown',function(e){ 
	if (elegido_nn1 == false){ 
		fig_nn1.set({fill: 'rgb(240,0,0)'});
		elegido_nn1 = true;
	}else{
		fig_nn1.set({fill: 'rgb(200,200,200)'});
		elegido_nn1 = false;
	}; 
});

elegido_nn2 = false;
fig_nn2.on('mousedown',function(e){ 
	if (elegido_nn2 == false){ 
		fig_nn2.set({fill: 'rgb(240,0,0)'});
		elegido_nn2 = true;
	}else{
		fig_nn2.set({fill: 'rgb(200,200,200)'});
		elegido_nn2 = false;
	}; 
});

elegido_nn3 = false;
fig_nn3.on('mousedown',function(e){ 
	if (elegido_nn3 == false){ 
		fig_nn3.set({fill: 'rgb(240,0,0)'});
		elegido_nn3 = true;
	}else{
		fig_nn3.set({fill: 'rgb(200,200,200)'});
		elegido_nn3 = false;
	}; 
});

elegido_nn4 = false;
fig_nn4.on('mousedown',function(e){ 
	if (elegido_nn4 == false){ 
		fig_nn4.set({fill: 'rgb(240,0,0)'});
		elegido_nn4 = true;
	}else{
		fig_nn4.set({fill: 'rgb(200,200,200)'});
		elegido_nn4 = false;
	}; 
});

elegido_nn5 = false;
fig_nn5.on('mousedown',function(e){ 
	if (elegido_nn5 == false){ 
		fig_nn5.set({fill: 'rgb(240,0,0)'});
		elegido_nn5 = true;
	}else{
		fig_nn5.set({fill: 'rgb(200,200,200)'});
		elegido_nn5 = false;
	}; 
});
//
elegido_oo1 = false;
fig_oo1.on('mousedown',function(e){ 
	if (elegido_oo1 == false){ 
		fig_oo1.set({fill: 'rgb(240,0,0)'});
		elegido_oo1 = true;
	}else{
		fig_oo1.set({fill: 'rgb(200,200,200)'});
		elegido_oo1 = false;
	}; 
});

elegido_oo2 = false;
fig_oo2.on('mousedown',function(e){ 
	if (elegido_oo2 == false){ 
		fig_oo2.set({fill: 'rgb(240,0,0)'});
		elegido_oo2 = true;
	}else{
		fig_oo2.set({fill: 'rgb(200,200,200)'});
		elegido_oo2 = false;
	}; 
});

elegido_oo3 = false;
fig_oo3.on('mousedown',function(e){ 
	if (elegido_oo3 == false){ 
		fig_oo3.set({fill: 'rgb(240,0,0)'});
		elegido_oo3 = true;
	}else{
		fig_oo3.set({fill: 'rgb(200,200,200)'});
		elegido_oo3 = false;
	}; 
});

elegido_oo4 = false;
fig_oo4.on('mousedown',function(e){ 
	if (elegido_oo4 == false){ 
		fig_oo4.set({fill: 'rgb(240,0,0)'});
		elegido_oo4 = true;
	}else{
		fig_oo4.set({fill: 'rgb(200,200,200)'});
		elegido_oo4 = false;
	}; 
});

elegido_oo5 = false;
fig_oo5.on('mousedown',function(e){ 
	if (elegido_oo5 == false){ 
		fig_oo5.set({fill: 'rgb(240,0,0)'});
		elegido_oo5 = true;
	}else{
		fig_oo5.set({fill: 'rgb(200,200,200)'});
		elegido_oo5 = false;
	}; 
});
//
elegido_pp1 = false;
fig_pp1.on('mousedown',function(e){ 
	if (elegido_pp1 == false){ 
		fig_pp1.set({fill: 'rgb(240,0,0)'});
		elegido_pp1 = true;
	}else{
		fig_pp1.set({fill: 'rgb(200,200,200)'});
		elegido_pp1 = false;
	}; 
});

elegido_pp2 = false;
fig_pp2.on('mousedown',function(e){ 
	if (elegido_pp2 == false){ 
		fig_pp2.set({fill: 'rgb(240,0,0)'});
		elegido_pp2 = true;
	}else{
		fig_pp2.set({fill: 'rgb(200,200,200)'});
		elegido_pp2 = false;
	}; 
});

elegido_pp3 = false;
fig_pp3.on('mousedown',function(e){ 
	if (elegido_pp3 == false){ 
		fig_pp3.set({fill: 'rgb(240,0,0)'});
		elegido_pp3 = true;
	}else{
		fig_pp3.set({fill: 'rgb(200,200,200)'});
		elegido_pp3 = false;
	}; 
});

elegido_pp4 = false;
fig_pp4.on('mousedown',function(e){ 
	if (elegido_pp4 == false){ 
		fig_pp4.set({fill: 'rgb(240,0,0)'});
		elegido_pp4 = true;
	}else{
		fig_pp4.set({fill: 'rgb(200,200,200)'});
		elegido_pp4 = false;
	}; 
});

elegido_pp5 = false;
fig_pp5.on('mousedown',function(e){ 
	if (elegido_pp5 == false){ 
		fig_pp5.set({fill: 'rgb(240,0,0)'});
		elegido_pp5 = true;
	}else{
		fig_pp5.set({fill: 'rgb(200,200,200)'});
		elegido_pp5 = false;
	}; 
});
</script>

</body>

</html>