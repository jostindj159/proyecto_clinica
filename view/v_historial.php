<!DOCTYPE html>
<html>
<head>
	<title>Dientes</title>
<script type="text/javascript" src="../js/fabric.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="body">

<canvas id="c" name="c" width="2800" height="500"></canvas>
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
var text = new fabric.Text('1', { left: 100, top: 150 });
canvas.add(text);

var fig_a2 = new fabric.Path('M 37.5 37 L 20 24 C 13.5	24	15	57	21	57 L 37.5 46.5 C 34.5	47	34	37.5	37.5	37 Z');
	fig_a2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a2);

var fig_a3 = new fabric.Path('M 38	48.5 L 21.5	58.5 C 21.5	72.5	81.5	70.5	81.5	58 L 125 97 C 126 105 77 106 76 97 Z');
	fig_a3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a3);

var fig_a4 = new fabric.Path('M 127 73 L 160 49 C 171 44 183 104 164 113 L 127 95 C 132 96 135 75 127 73 Z');
	fig_a4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_a4);

var fig_a5 = new fabric.Path('M 81 76 C 83 66 124 69 123 76 C 132 75 131 94 123 95 C 124 101 84 105 82 95 C 72 92 73 73 81 76 Z');
	fig_a5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a5);
	//

var fig_b1 = new fabric.Path('M 228 72 L 190 45 C 189 22 310 21 312 44 L 273 72 C 275 64 231 60 228 72 Z');
	fig_b1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b1);
var text = new fabric.Text('2', { left: 250, top: 150 });
canvas.add(text);

var fig_b2 = new fabric.Path('M 225 74 L 190 48 C 177 48 180 114 192 114 L 225 93 C 219 94 218 75 225 74 Z');
	fig_b2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b2);

var fig_b3 = new fabric.Path('M 226 97 L 193 117 C 193 145 313 141 313 116 L 275 97 C 276 105 227 106 226 97 Z');
	fig_b3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b3);

var fig_b4 = new fabric.Path('M 277 73 L 310 49 C 321 44 333 104 314 113 L 277 95 C 282 96 285 75 277 73 Z');
	fig_b4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_b4);

var fig_b5 = new fabric.Path('M 231 76 C 233 66 274 69 273 76 C 282 75 281 94 273 95 C 274 101 234 105 232 95 C 222 92 223 73 231 76 Z');
	fig_b5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b5);

	//

var fig_c1 = new fabric.Path('M 378 72 L 340 45 C 339 22 460 21 462 44 L 423 72 C 425 64 381 60 378 72 Z');
	fig_c1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c1);
var text = new fabric.Text('3', { left: 400, top: 150 });
canvas.add(text);

var fig_c2 = new fabric.Path('M 375 74 L 340 48 C 327 48 330 114 342 114 L 375 93 C 369 94 368 75 375 74 Z');
	fig_c2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c2);

var fig_c3 = new fabric.Path('M 376 97 L 343 117 C 343 145 463 141 463 116 L 425 97 C 426 105 377 106 376 97 Z');
	fig_c3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c3);

var fig_c4 = new fabric.Path('M 427 73 L 460 49 C 471 44 483 104 464 113 L 427 95 C 432 96 435 75 427 73 Z');
	fig_c4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_c4);

var fig_c5 = new fabric.Path('M 381 76 C 383 66 424 69 423 76 C 432 75 431 94 423 95 C 424 101 384 105 382 95 C 372 92 373 73 381 76 Z');
	fig_c5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c5);

	//

var fig_d1 = new fabric.Path('M 533 73 C 533 75 610 74 610 72 L 635 38 C 636 21 502 17 500 40 L 533 73 Z');
	fig_d1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d1);
var text = new fabric.Text('4', { left: 550, top: 150 });
canvas.add(text);
var fig_d2 = new fabric.Path('M 535 78 C 535 75 609 75 609 77 L 639 110 C 636 140 515 136 507 115 L 535 78 Z');
	fig_d2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d2);

var fig_d3 = new fabric.Path('M 497 43 L 531 76 L 501 114 C 484 112 481 41 497 43 Z');
	fig_d3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d3);

var fig_d4 = new fabric.Path('M 638 41 L 612 75 L 642 108 C 660 112 661 46 638 41 Z');
	fig_d4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_d4);

	//+180

var fig_e1 = new fabric.Path('M 713 73 C 713 75 790 74 790 72 L 815 38 C 816 21 682 17 680 40 L 713 73 Z');
	fig_e1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e1);
var text = new fabric.Text('5', { left: 750, top: 150 });
canvas.add(text);

var fig_e2 = new fabric.Path('M 715 78 C 715 75 789 75 789 77 L 819 110 C 816 140 695 136 687 115 L 715 78 Z');
	fig_e2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e2);

var fig_e3 = new fabric.Path('M 677 43 L 711 76 L 681 114 C 664 112 661 41 677 43 Z');
	fig_e3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e3);

var fig_e4 = new fabric.Path('M 818 41 L 792 75 L 822 108 C 840 112 841 46 818 41 Z');
	fig_e4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_e4);

	//+180

var fig_f1 = new fabric.Path('M 893 73 C 893 75 970 74 970 72 L 995 38 C 996 21 862 17 860 40 L 893 73 Z');
	fig_f1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f1);
var text = new fabric.Text('6', { left: 925, top: 150 });
canvas.add(text);

var fig_f2 = new fabric.Path('M 895 78 C 895 75 969 75 969 77 L 999 110 C 996 140 875 136 867 115 L 895 78 Z');
	fig_f2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f2);

var fig_f3 = new fabric.Path('M 857 43 L 891 76 L 861 114 C 844 112 841 41 857 43 Z');
	fig_f3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f3);

var fig_f4 = new fabric.Path('M 998 41 L 972 75 L 1002 108 C 1020 112 1021 46 998 41 Z');
	fig_f4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_f4);

	//+180

var fig_g1 = new fabric.Path('M 1073 73 C 1073 75 1150 74 1150 72 L 1175 38 C 1176 21 1042 17 1040 40 L 1073 73 Z');
	fig_g1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g1);
var text = new fabric.Text('7', { left: 1100, top: 150 });
canvas.add(text);

var fig_g2 = new fabric.Path('M 1075 78 C 1075 75 1149 75 1149 77 L 1179 110 C 1176 140 1055 136 1047 115 L 1075 78 Z');
	fig_g2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g2);

var fig_g3 = new fabric.Path('M 1037 43 L 1071 76 L 1041 114 C 1024 112 1021 41 1037 43 Z');
	fig_g3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g3);

var fig_g4 = new fabric.Path('M 1178 41 L 1152 75 L 1182 108 C 1200 112 1201 46 1178 41 Z');
	fig_g4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_g4);

	//+180

var fig_h1 = new fabric.Path('M 1253 73 C 1253 75 1330 74 1330 72 L 1355 38 C 1356 21 1222 17 1220 40 L 1253 73 Z');
	fig_h1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h1);
var text = new fabric.Text('8', { left: 1275, top: 150 });
canvas.add(text);

var fig_h2 = new fabric.Path('M 1255 78 C 1255 75 1329 75 1329 77 L 1359 110 C 1356 140 1235 136 1227 115 L 1255 78 Z');
	fig_h2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h2);

var fig_h3 = new fabric.Path('M 1217 43 L 1251 76 L 1221 114 C 1204 112 1201 41 1217 43 Z');
	fig_h3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h3);

var fig_h4 = new fabric.Path('M 1358 41 L 1332 75 L 1362 108 C 1380 112 1381 46 1358 41 Z');
	fig_h4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_h4);

	//+180

var fig_i1 = new fabric.Path('M 1433 73 C 1433 75 1510 74 1510 72 L 1535 38 C 1536 21 1402 17 1400 40 L 1433 73 Z');
	fig_i1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i1);
var text = new fabric.Text('9', { left: 1460, top: 150 });
canvas.add(text);

var fig_i2 = new fabric.Path('M 1435 78 C 1435 75 1509 75 1509 77 L 1539 110 C 1536 140 1415 136 1407 115 L 1435 78 Z');
	fig_i2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i2);

var fig_i3 = new fabric.Path('M 1397 43 L 1431 76 L 1401 114 C 1384 112 1381 41 1397 43 Z');
	fig_i3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i3);

var fig_i4 = new fabric.Path('M 1538 41 L 1512 75 L 1542 108 C 1560 112 1561 46 1538 41 Z');
	fig_i4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_i4);

	//+180

var fig_j1 = new fabric.Path('M 1613 73 C 1613 75 1690 74 1690 72 L 1715 38 C 1716 21 1582 17 1580 40 L 1613 73 Z');
	fig_j1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j1);
var text = new fabric.Text('10', { left: 1630, top: 150 });
canvas.add(text);

var fig_j2 = new fabric.Path('M 1615 78 C 1615 75 1689 75 1689 77 L 1719 110 C 1716 140 1595 136 1587 115 L 1615 78 Z');
	fig_j2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j2);

var fig_j3 = new fabric.Path('M 1577 43 L 1611 76 L 1581 114 C 1564 112 1561 41 1577 43 Z');
	fig_j3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j3);

var fig_j4 = new fabric.Path('M 1718 41 L 1692 75 L 1722 108 C 1740 112 1741 46 1718 41 Z');
	fig_j4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_j4);

	//+180

var fig_k1 = new fabric.Path('M 1793 73 C 1793 75 1870 74 1870 72 L 1895 38 C 1896 21 1762 17 1760 40 L 1793 73 Z');
	fig_k1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k1);
var text = new fabric.Text('11', { left: 1810, top: 150 });
canvas.add(text);

var fig_k2 = new fabric.Path('M 1795 78 C 1795 75 1869 75 1869 77 L 1899 110 C 1896 140 1775 136 1767 115 L 1795 78 Z');
	fig_k2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k2);

var fig_k3 = new fabric.Path('M 1757 43 L 1791 76 L 1761 114 C 1744 112 1741 41 1757 43 Z');
	fig_k3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k3);

var fig_k4 = new fabric.Path('M 1898 41 L 1872 75 L 1902 108 C 1920 112 1921 46 1898 41 Z');
	fig_k4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_k4);

	//+180

var fig_l1 = new fabric.Path('M 1973 73 C 1973 75 2050 74 2050 72 L 2075 38 C 2076 21 1942 17 1940 40 L 1973 73 Z');
	fig_l1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l1);
var text = new fabric.Text('12', { left: 1990, top: 150 });
canvas.add(text);

var fig_l2 = new fabric.Path('M 1975 78 C 1975 75 2049 75 2049 77 L 2079 110 C 2076 140 1955 136 1947 115 L 1975 78 Z');
	fig_l2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l2);

var fig_l3 = new fabric.Path('M 1937 43 L 1971 76 L 1941 114 C 1924 112 1921 41 1937 43 Z');
	fig_l3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l3);

var fig_l4 = new fabric.Path('M 2078 41 L 2052 75 L 2082 108 C 2100 112 2101 46 2078 41 Z');
	fig_l4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_l4);

	//+180

var fig_m1 = new fabric.Path('M 2153 73 C 2153 75 2230 74 2230 72 L 2255 38 C 2256 21 2122 17 2120 40 L 2153 73 Z');
	fig_m1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m1);
var text = new fabric.Text('13', { left: 2170, top: 150 });
canvas.add(text);
var fig_m2 = new fabric.Path('M 2155 78 C 2155 75 2229 75 2229 77 L 2259 110 C 2256 140 2135 136 2127 115 L 2155 78 Z');
	fig_m2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m2);

var fig_m3 = new fabric.Path('M 2117 43 L 2151 76 L 2121 114 C 2104 112 2101 41 2117 43 Z');
	fig_m3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m3);

var fig_m4 = new fabric.Path('M 2258 41 L 2232 75 L 2262 108 C 2280 112 2281 46 2258 41 Z');
	fig_m4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_m4);

	//+1800 +160 =1960

var fig_n1 = new fabric.Path('M 2338 72 L 2300 45 C 2299 22 2420 21 2422 44 L 2383 72 C 2385 64 2341 60 2338 72 Z');
	fig_n1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n1);
var text = new fabric.Text('14', { left: 2340, top: 150 });
canvas.add(text);
var fig_n2 = new fabric.Path('M 2335 74 L 2300 48 C 2287 48 2290 114 2302 114 L 2335 93 C 2329 94 2328 75 2335 74 Z');
	fig_n2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n2);

var fig_n3 = new fabric.Path('M 2336 97 L 2303 117 C 2303 145 2423 141 2423 116 L 2385 97 C 2386 105 2337 106 2336 97 Z');
	fig_n3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n3);

var fig_n4 = new fabric.Path('M 2387 73 L 2420 49 C 2431 44 2443 104 2424 113 L 2387 95 C 2392 96 2395 75 2387 73 Z');
	fig_n4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_n4);

var fig_n5 = new fabric.Path('M 2341 76 C 2343 66 2384 69 2383 76 C 2392 75 2391 94 2383 95 C 2384 101 2344 105 2342 95 C 2332 92 2333 73 2341 76 Z');
	fig_n5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n5);

	// +160 

var fig_o1 = new fabric.Path('M 2498 72 L 2460 45 C 2459 22 2580 21 2582 44 L 2543 72 C 2545 64 2501 60 2498 72 Z');
	fig_o1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o1);
var text = new fabric.Text('15', { left: 2500, top: 150 });
canvas.add(text);
var fig_o2 = new fabric.Path('M 2495 74 L 2460 48 C 2447 48 2450 114 2462 114 L 2495 93 C 2489 94 2488 75 2495 74 Z');
	fig_o2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o2);

var fig_o3 = new fabric.Path('M 2496 97 L 2463 117 C 2463 145 2583 141 2583 116 L 2545 97 C 2546 105 2497 106 2496 97 Z');
	fig_o3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o3);

var fig_o4 = new fabric.Path('M 2547 73 L 2580 49 C 2591 44 2603 104 2584 113 L 2547 95 C 2552 96 2555 75 2547 73 Z');
	fig_o4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_o4);

var fig_o5 = new fabric.Path('M 2501 76 C 2503 66 2544 69 2543 76 C 2552 75 2551 94 2543 95 C 2544 101 2504 105 2502 95 C 2492 92 2493 73 2501 76 Z');
	fig_o5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o5);

	// +160 

var fig_p1 = new fabric.Path('M 2658 72 L 2620 45 C 2619 22 2740 21 2742 44 L 2703 72 C 2705 64 2661 60 2658 72 Z');
	fig_p1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p1);
var text = new fabric.Text('16', { left: 2660, top: 150 });
canvas.add(text);
var fig_p2 = new fabric.Path('M 2655 74 L 2620 48 C 2607 48 2610 114 2622 114 L 2655 93 C 2649 94 2648 75 2655 74 Z');
	fig_p2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p2);

var fig_p3 = new fabric.Path('M 2656 97 L 2623 117 C 2623 145 2743 141 2743 116 L 2705 97 C 2706 105 2657 106 2656 97 Z');
	fig_p3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p3);

var fig_p4 = new fabric.Path('M 2707 73 L 2740 49 C 2751 44 2763 104 2744 113 L 2707 95 C 2712 96 2715 75 2707 73 Z');
	fig_p4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_p4);

var fig_p5 = new fabric.Path('M 2661 76 C 2663 66 2704 69 2703 76 C 2712 75 2711 94 2703 95 C 2704 101 2664 105 2662 95 C 2652 92 2653 73 2661 76 Z');
	fig_p5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p5);
///
//Parte inferior
///
var fig_aa1 = new fabric.Path('M 78 272 L 40 245 C 39 222 160 221 162 244 L 123 272 C 125 264 81 260 78 272 Z');
	fig_aa1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa1);
var text = new fabric.Text('17', { left: 100, top: 400 });
canvas.add(text);

var fig_aa2 = new fabric.Path('M 75 274 L 40 248 C 27 248 30 314 42 314 L 75 293 C 69 294 68 275 75 274 Z');
	fig_aa2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa2);

var fig_aa3 = new fabric.Path('M 76 297 L 43 317 C 43 345 163 341 163 316 L 125 297 C 126 305 77 306 76 297 Z');
	fig_aa3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa3);

var fig_aa4 = new fabric.Path('M 127 273 L 160 249 C 171 244 183 304 164 313 L 127 295 C 132 296 135 275 127 273 Z');
	fig_aa4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_aa4);

var fig_aa5 = new fabric.Path('M 81 276 C 83 266 124 269 123 276 C 132 275 131 294 123 295 C 124 301 84 305 82 295 C 72 292 73 273 81 276 Z');
	fig_aa5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa5);
	//

var fig_bb1 = new fabric.Path('M 228 272 L 190 245 C 189 222 310 221 312 244 L 273 272 C 275 264 231 260 228 272 Z');
	fig_bb1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb1);
var text = new fabric.Text('18', { left: 250, top: 400 });
canvas.add(text);

var fig_bb2 = new fabric.Path('M 225 274 L 190 248 C 177 248 180 314 192 314 L 225 293 C 219 294 218 275 225 274 Z');
	fig_bb2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb2);

var fig_bb3 = new fabric.Path('M 226 297 L 193 317 C 193 345 313 341 313 316 L 275 297 C 276 305 227 306 226 297 Z');
	fig_bb3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb3);

var fig_bb4 = new fabric.Path('M 277 273 L 310 249 C 321 244 333 304 314 313 L 277 295 C 282 296 285 275 277 273 Z');
	fig_bb4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_bb4);

var fig_bb5 = new fabric.Path('M 231 276 C 233 266 274 269 273 276 C 282 275 281 294 273 295 C 274 301 234 305 232 295 C 222 292 223 273 231 276 Z');
	fig_bb5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb5);

	//

var fig_cc1 = new fabric.Path('M 378 272 L 340 245 C 339 222 460 221 462 244 L 423 272 C 425 264 381 260 378 272 Z');
	fig_cc1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc1);
var text = new fabric.Text('19', { left: 400, top: 400 });
canvas.add(text);

var fig_cc2 = new fabric.Path('M 375 274 L 340 248 C 327 248 330 314 342 314 L 375 293 C 369 294 368 275 375 274 Z');
	fig_cc2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc2);

var fig_cc3 = new fabric.Path('M 376 297 L 343 317 C 343 345 463 341 463 316 L 425 297 C 426 305 377 306 376 297 Z');
	fig_cc3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc3);

var fig_cc4 = new fabric.Path('M 427 273 L 460 249 C 471 244 483 304 464 313 L 427 295 C 432 296 435 275 427 273 Z');
	fig_cc4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_cc4);

var fig_cc5 = new fabric.Path('M 381 276 C 383 266 424 269 423 276 C 432 275 431 294 423 295 C 424 301 384 305 382 295 C 372 292 373 273 381 276 Z');
	fig_cc5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc5);

	//

var fig_dd1 = new fabric.Path('M 533 273 C 533 275 610 274 610 272 L 635 238 C 636 221 502 217 500 240 L 533 273 Z');
	fig_dd1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd1);
var text = new fabric.Text('20', { left: 550, top: 400 });
canvas.add(text);

var fig_dd2 = new fabric.Path('M 535 278 C 535 275 609 275 609 277 L 639 310 C 636 340 515 336 507 315 L 535 278 Z');
	fig_dd2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd2);

var fig_dd3 = new fabric.Path('M 497 243 L 531 276 L 501 314 C 484 312 481 241 497 243 Z');
	fig_dd3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd3);

var fig_dd4 = new fabric.Path('M 638 241 L 612 275 L 642 308 C 660 312 661 246 638 241 Z');
	fig_dd4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_dd4);

	//+180

var fig_ee1 = new fabric.Path('M 713 273 C 713 275 790 274 790 272 L 815 238 C 816 221 682 217 680 240 L 713 273 Z');
	fig_ee1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee1);
var text = new fabric.Text('21', { left: 750, top: 400 });
canvas.add(text);

var fig_ee2 = new fabric.Path('M 715 278 C 715 275 789 275 789 277 L 819 310 C 816 340 695 336 687 315 L 715 278 Z');
	fig_ee2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee2);

var fig_ee3 = new fabric.Path('M 677 243 L 711 276 L 681 314 C 664 312 661 241 677 243 Z');
	fig_ee3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee3);

var fig_ee4 = new fabric.Path('M 818 241 L 792 275 L 822 308 C 840 312 841 246 818 241 Z');
	fig_ee4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ee4);

	//+180

var fig_ff1 = new fabric.Path('M 893 273 C 893 275 970 274 970 272 L 995 238 C 996 221 862 217 860 240 L 893 273 Z');
	fig_ff1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff1);
var text = new fabric.Text('22', { left: 925, top: 400 });
canvas.add(text);

var fig_ff2 = new fabric.Path('M 895 278 C 895 275 969 275 969 277 L 999 310 C 996 340 875 336 867 315 L 895 278 Z');
	fig_ff2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff2);

var fig_ff3 = new fabric.Path('M 857 243 L 891 276 L 861 314 C 844 312 841 241 857 243 Z');
	fig_ff3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff3);

var fig_ff4 = new fabric.Path('M 998 241 L 972 275 L 1002 308 C 1020 312 1021 246 998 241 Z');
	fig_ff4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ff4);

	//+180

var fig_gg1 = new fabric.Path('M 1073 273 C 1073 275 1150 274 1150 272 L 1175 238 C 1176 221 1042 217 1040 240 L 1073 273 Z');
	fig_gg1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg1);
var text = new fabric.Text('23', { left: 1100, top: 400 });
canvas.add(text);

var fig_gg2 = new fabric.Path('M 1075 278 C 1075 275 1149 275 1149 277 L 1179 310 C 1176 340 1055 336 1047 315 L 1075 278 Z');
	fig_gg2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg2);

var fig_gg3 = new fabric.Path('M 1037 243 L 1071 276 L 1041 314 C 1024 312 1021 241 1037 243 Z');
	fig_gg3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_gg3);

var fig_gg4 = new fabric.Path('M 1178 241 L 1152 275 L 1182 308 C 1200 312 1201 246 1178 241 Z');
	fig_gg4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg4);

	//+180

var fig_hh1 = new fabric.Path('M 1253 273 C 1253 275 1330 274 1330 272 L 1355 238 C 1356 221 1222 217 1220 240 L 1253 273 Z');
	fig_hh1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_hh1);
var text = new fabric.Text('24', { left: 1275, top: 400 });
canvas.add(text);

var fig_hh2 = new fabric.Path('M 1255 278 C 1255 275 1329 275 1329 277 L 1359 310 C 1356 340 1235 336 1227 315 L 1255 278 Z');
	fig_hh2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_hh2);

var fig_hh3 = new fabric.Path('M 1217 243 L 1251 276 L 1221 314 C 1204 312 1201 241 1217 243 Z');
	fig_hh3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_hh3);

var fig_hh4 = new fabric.Path('M 1358 241 L 1332 275 L 1362 308 C 1380 312 1381 246 1358 241 Z');
	fig_hh4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_hh4);

	//+180

var fig_ii1 = new fabric.Path('M 1433 273 C 1433 275 1510 274 1510 272 L 1535 238 C 1536 221 1402 217 1400 240 L 1433 273 Z');
	fig_ii1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii1);
var text = new fabric.Text('25', { left: 1460, top: 400 });
canvas.add(text);

var fig_ii2 = new fabric.Path('M 1435 278 C 1435 275 1509 275 1509 277 L 1539 310 C 1536 340 1415 336 1407 315 L 1435 278 Z');
	fig_ii2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii2);

var fig_ii3 = new fabric.Path('M 1397 243 L 1431 276 L 1401 314 C 1384 312 1381 241 1397 243 Z');
	fig_ii3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii3);

var fig_ii4 = new fabric.Path('M 1538 241 L 1512 275 L 1542 308 C 1560 312 1561 246 1538 241 Z');
	fig_ii4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ii4);

	//+180

var fig_jj1 = new fabric.Path('M 1613 273 C 1613 275 1690 274 1690 272 L 1715 238 C 1716 221 1582 217 1580 240 L 1613 273 Z');
	fig_jj1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj1);
var text = new fabric.Text('26', { left: 1630, top: 400 });
canvas.add(text);

var fig_jj2 = new fabric.Path('M 1615 278 C 1615 275 1689 275 1689 277 L 1719 310 C 1716 340 1595 336 1587 315 L 1615 278 Z');
	fig_jj2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj2);

var fig_jj3 = new fabric.Path('M 1577 243 L 1611 276 L 1581 314 C 1564 312 1561 241 1577 243 Z');
	fig_jj3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj3);

var fig_jj4 = new fabric.Path('M 1718 241 L 1692 275 L 1722 308 C 1740 312 1741 246 1718 241 Z');
	fig_jj4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_jj4);

	//+180

var fig_kk1 = new fabric.Path('M 1793 273 C 1793 275 1870 274 1870 272 L 1895 238 C 1896 221 1762 217 1760 240 L 1793 273 Z');
	fig_kk1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk1);
var text = new fabric.Text('27', { left: 1810, top: 400 });
canvas.add(text);

var fig_kk2 = new fabric.Path('M 1795 278 C 1795 275 1869 275 1869 277 L 1899 310 C 1896 340 1775 336 1767 315 L 1795 278 Z');
	fig_kk2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk2);

var fig_kk3 = new fabric.Path('M 1757 243 L 1791 276 L 1761 314 C 1744 312 1741 241 1757 243 Z');
	fig_kk3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk3);

var fig_kk4 = new fabric.Path('M 1898 241 L 1872 275 L 1902 308 C 1920 312 1921 246 1898 241 Z');
	fig_kk4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_kk4);

	//+180

var fig_ll1 = new fabric.Path('M 1973 273 C 1973 275 2050 274 2050 272 L 2075 238 C 2076 221 1942 217 1940 240 L 1973 273 Z');
	fig_ll1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll1);
var text = new fabric.Text('28', { left: 1990, top: 400 });
canvas.add(text);

var fig_ll2 = new fabric.Path('M 1975 278 C 1975 275 2049 275 2049 277 L 2079 310 C 2076 340 1955 336 1947 315 L 1975 278 Z');
	fig_ll2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll2);

var fig_ll3 = new fabric.Path('M 1937 243 L 1971 276 L 1941 314 C 1924 312 1921 241 1937 243 Z');
	fig_ll3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll3);

var fig_ll4 = new fabric.Path('M 2078 241 L 2052 275 L 2082 308 C 2100 312 2101 246 2078 241 Z');
	fig_ll4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ll4);

	//+180

var fig_mm1 = new fabric.Path('M 2153 273 C 2153 275 2230 274 2230 272 L 2255 238 C 2256 221 2122 217 2120 240 L 2153 273 Z');
	fig_mm1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm1);
var text = new fabric.Text('29', { left: 2170, top: 400 });
canvas.add(text);

var fig_mm2 = new fabric.Path('M 2155 278 C 2155 275 2229 275 2229 277 L 2259 310 C 2256 340 2135 336 2127 315 L 2155 278 Z');
	fig_mm2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm2);

var fig_mm3 = new fabric.Path('M 2117 243 L 2151 276 L 2121 314 C 2104 312 2101 241 2117 243 Z');
	fig_mm3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm3);

var fig_mm4 = new fabric.Path('M 2258 241 L 2232 275 L 2262 308 C 2280 312 2281 246 2258 241 Z');
	fig_mm4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_mm4);

	//+1800 +160 =1960

var fig_nn1 = new fabric.Path('M 2338 272 L 2300 245 C 2299 222 2420 221 2422 244 L 2383 272 C 2385 264 2341 260 2338 272 Z');
	fig_nn1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn1);
var text = new fabric.Text('30', { left: 2340, top: 400 });
canvas.add(text);

var fig_nn2 = new fabric.Path('M 2335 274 L 2300 248 C 2287 248 2290 314 2302 314 L 2335 293 C 2329 294 2328 275 2335 274 Z');
	fig_nn2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn2);

var fig_nn3 = new fabric.Path('M 2336 297 L 2303 317 C 2303 345 2423 341 2423 316 L 2385 297 C 2386 305 2337 306 2336 297 Z');
	fig_nn3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn3);

var fig_nn4 = new fabric.Path('M 2387 273 L 2420 249 C 2431 244 2443 304 2424 313 L 2387 295 C 2392 296 2395 275 2387 273 Z');
	fig_nn4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_nn4);

var fig_nn5 = new fabric.Path('M 2341 276 C 2343 266 2384 269 2383 276 C 2392 275 2391 294 2383 295 C 2384 301 2344 305 2342 295 C 2332 292 2333 273 2341 276 Z');
	fig_nn5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn5);

	// +160 

var fig_oo1 = new fabric.Path('M 2498 272 L 2460 245 C 2459 222 2580 221 2582 244 L 2543 272 C 2545 264 2501 260 2498 272 Z');
	fig_oo1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo1);
var text = new fabric.Text('31', { left: 2500, top: 400 });
canvas.add(text);

var fig_oo2 = new fabric.Path('M 2495 274 L 2460 248 C 2447 248 2450 314 2462 314 L 2495 293 C 2489 294 2488 275 2495 274 Z');
	fig_oo2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo2);

var fig_oo3 = new fabric.Path('M 2496 297 L 2463 317 C 2463 345 2583 341 2583 316 L 2545 297 C 2546 305 2497 306 2496 297 Z');
	fig_oo3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo3);

var fig_oo4 = new fabric.Path('M 2547 273 L 2580 249 C 2591 244 2603 304 2584 313 L 2547 295 C 2552 296 2555 275 2547 273 Z');
	fig_oo4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_oo4);

var fig_oo5 = new fabric.Path('M 2501 276 C 2503 266 2544 269 2543 276 C 2552 275 2551 294 2543 295 C 2544 301 2504 305 2502 295 C 2492 292 2493 273 2501 276 Z');
	fig_oo5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo5);

	// +160 

var fig_pp1 = new fabric.Path('M 2658 272 L 2620 245 C 2619 222 2740 221 2742 244 L 2703 272 C 2705 264 2661 260 2658 272 Z');
	fig_pp1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp1);
var text = new fabric.Text('32', { left: 2660, top: 400 });
canvas.add(text);

var fig_pp2 = new fabric.Path('M 2655 274 L 2620 248 C 2607 248 2610 314 2622 314 L 2655 293 C 2649 294 2648 275 2655 274 Z');
	fig_pp2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp2);

var fig_pp3 = new fabric.Path('M 2656 297 L 2623 317 C 2623 345 2743 341 2743 316 L 2705 297 C 2706 305 2657 306 2656 297 Z');
	fig_pp3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp3);

var fig_pp4 = new fabric.Path('M 2707 273 L 2740 249 C 2751 244 2763 304 2744 313 L 2707 295 C 2712 296 2715 275 2707 273 Z');
	fig_pp4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_pp4);

var fig_pp5 = new fabric.Path('M 2661 276 C 2663 266 2704 269 2703 276 C 2712 275 2711 294 2703 295 C 2704 301 2664 305 2662 295 C 2652 292 2653 273 2661 276 Z');
	fig_pp5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp5);
//Fin
//

//LINEAS VERTICAL
var linea_vertical = new fabric.Path('M 1378 10 L 1378 500 L 1383 500 L 1383 10');
	linea_vertical.set({fill: 'rgb(236, 120, 44)'});
canvas.add(linea_vertical);

//LINEAS HORIZONTAL
var linea_horizontal = new fabric.Path(' M 50 205 L 50 200 L 2750 200 L 2750 205');
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