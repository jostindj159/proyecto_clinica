<!DOCTYPE html>
<html>
<head>
	<title>Dientes</title>
<script type="text/javascript" src="../js/fabric.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="body">

<canvas id="c" name="c" width="920" height="220"></canvas>
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

var fig_a1 = new fabric.Path('M 26	24 L 13.33333333	15 C 13	7.333333333	53.33333333	7	54	14.66666667 L 41	24 C 41.66666667	21.33333333	27	20	26	24 Z');
	fig_a1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a1);
var text = new fabric.Text('1', { left: 24, top: 38 });
canvas.add(text);

var fig_a2 = new fabric.Path('M 25	24.66666667 L 13.33333333	16 C 9	16	10	38	14	38 L 25	31 C 23	31.33333333	22.66666667	25	25	24.66666667 Z');
	fig_a2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a2);

var fig_a3 = new fabric.Path('M 25.33333333	32.33333333 L 14.33333333	39 C 14.33333333	48.33333333	54.33333333	47	54.33333333	38.66666667 L 41.66666667	32.33333333 C 42	35	25.66666667	35.33333333	25.33333333	32.33333333 Z');
	fig_a3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a3);

var fig_a4 = new fabric.Path('M 42.33333333	24.33333333 L 53.33333333	16.33333333 C 57	14.66666667	61	34.66666667	54.66666667	37.66666667 L 42.33333333	31.66666667 C 44	32	45	25	42.33333333	24.33333333 Z');
	fig_a4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_a4);

var fig_a5 = new fabric.Path('M 27	25.33333333 C 27.66666667	22	41.33333333	23	41	25.33333333 C 44	25	43.66666667	31.33333333	41	31.66666667 C 41.33333333	33.66666667	28	35	27.33333333	31.66666667 C 24	30.66666667	24.33333333	24.33333333	27	25.33333333 Z');
	fig_a5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_a5);
	//

var fig_b1 = new fabric.Path('M 76	24 L 63.33333333	15 C 63	7.333333333	103.3333333	7	104	14.66666667 L 91	24 C 91.66666667	21.33333333	77	20	76	24 Z');
	fig_b1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b1);
var text = new fabric.Text('2', { left: 73, top: 38 });
canvas.add(text);

var fig_b2 = new fabric.Path('M 75	24.66666667 L 63.33333333	16 C 59	16	60	38	64	38 L 75	31 C 73	31.33333333	72.66666667	25	75	24.66666667 Z');
	fig_b2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b2);

var fig_b3 = new fabric.Path('M 75.33333333	32.33333333 L 64.33333333	39 C 64.33333333	48.33333333	104.3333333	47	104.3333333	38.66666667 L 91.66666667	32.33333333 C 92	35	75.66666667	35.33333333	75.33333333	32.33333333 Z');
	fig_b3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b3);

var fig_b4 = new fabric.Path('M 92.33333333	24.33333333 L 103.3333333	16.33333333 C 107	14.66666667	111	34.66666667	104.6666667	37.66666667 L 92.33333333	31.66666667 C 94	32	95	25	92.33333333	24.33333333 Z');
	fig_b4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_b4);

var fig_b5 = new fabric.Path('M 77	25.33333333 C 77.66666667	22	91.33333333	23	91	25.33333333 C 94	25	93.66666667	31.33333333	91	31.66666667 C 91.33333333	33.66666667	78	35	77.33333333	31.66666667 C 74	30.66666667	74.33333333	24.33333333	77	25.33333333 Z');
	fig_b5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_b5);

	//

var fig_c1 = new fabric.Path('M 126	24 L 113.3333333	15 C 113	7.333333333	153.3333333	7	154	14.66666667 L 141	24 C 141.6666667	21.33333333	127	20	126	24 Z');
	fig_c1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c1);
var text = new fabric.Text('3', { left: 122, top: 38 });
canvas.add(text);

var fig_c2 = new fabric.Path('M 125	24.66666667 L 113.3333333	16 C 109	16	110	38	114	38 L 125	31 C 123	31.33333333	122.6666667	25	125	24.66666667 Z');
	fig_c2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c2);

var fig_c3 = new fabric.Path('M 125.3333333	32.33333333L 114.3333333	39 C 114.3333333	48.33333333	154.3333333	47	154.3333333	38.66666667 L 141.6666667	32.33333333 C 142	35	125.6666667	35.33333333	125.3333333	32.33333333 Z');
	fig_c3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c3);

var fig_c4 = new fabric.Path('M 142.3333333	24.33333333 L 153.3333333	16.33333333 C 157	14.66666667	161	34.66666667	154.6666667	37.66666667 L 142.3333333	31.66666667 C 144	32	145	25	142.3333333	24.33333333 Z');
	fig_c4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_c4);

var fig_c5 = new fabric.Path('M 127	25.33333333 C 127.6666667	22	141.3333333	23	141	25.33333333 C 144	25	143.6666667	31.33333333	141	31.66666667 C 141.3333333	33.66666667	128	35	127.3333333	31.66666667 C 124	30.66666667	124.3333333	24.33333333	127	25.33333333 Z');
	fig_c5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_c5);

	//

var fig_d1 = new fabric.Path('M 177.6666667	24.33333333 C 177.6666667	25	203.3333333	24.66666667	203.3333333	24 L 211.6666667	12.66666667 C 212	7	167.3333333	5.666666667	166.6666667	13.33333333 L 177.6666667	24.33333333 Z');
	fig_d1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d1);
var text = new fabric.Text('4', { left: 176, top: 38 });
canvas.add(text);
var fig_d2 = new fabric.Path('M 178.3333333	26 C 178.3333333	25	203	25	203	25.66666667 L 213	36.66666667 C 212	46.66666667	171.6666667	45.33333333	169	38.33333333 L 178.3333333	26 Z');
	fig_d2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d2);

var fig_d3 = new fabric.Path('M 165.6666667	14.33333333 L 177	25.33333333 L 167	38 C 161.3333333	37.33333333	160.3333333	13.66666667	165.6666667	14.33333333 Z');
	fig_d3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_d3);

var fig_d4 = new fabric.Path('M 212.6666667	13.66666667 L 204	25 L 214	36 C 220	37.33333333	220.3333333	15.33333333	212.6666667	13.66666667 Z');
	fig_d4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_d4);

	//+180

var fig_e1 = new fabric.Path('M 237.6666667	24.33333333	 C 237.6666667	25	263.3333333	24.66666667	263.3333333	24 L 271.6666667	12.66666667 C 272	7	227.3333333	5.666666667	226.6666667	13.33333333 L 237.6666667	24.33333333 Z');
	fig_e1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e1);
var text = new fabric.Text('5', { left: 242, top: 38 });
canvas.add(text);

var fig_e2 = new fabric.Path('M 238.3333333	26 C 238.3333333	25	263	25	263	25.66666667 L 273	36.66666667 C 272	46.66666667	231.6666667	45.33333333	229	38.33333333 L 238.3333333	26 Z');
	fig_e2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e2);

var fig_e3 = new fabric.Path('M 225.6666667	14.33333333 L 237	25.33333333 L 227	38 C 221.3333333	37.33333333	220.3333333	13.66666667	225.6666667	14.33333333 Z');
	fig_e3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_e3);

var fig_e4 = new fabric.Path('M 272.6666667	13.66666667 L 264	25 L 274	36 C 280	37.33333333	280.3333333	15.33333333	272.6666667 13.66666667 Z');
	fig_e4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_e4);

	//+180

var fig_f1 = new fabric.Path('M 297.6666667	24.33333333 C 297.6666667	25	323.3333333	24.66666667	323.3333333	24 L 331.6666667	12.66666667 C 332	7	287.3333333	5.666666667	286.6666667	13.33333333 L 297.6666667	24.33333333 Z');
	fig_f1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f1);
var text = new fabric.Text('6', { left: 298, top: 38 });
canvas.add(text);

var fig_f2 = new fabric.Path('M 298.3333333	26 C 298.3333333	25	323	25	323	25.66666667 L 333	36.66666667 C 332	46.66666667	291.6666667	45.33333333	289	38.33333333 L 298.3333333	26 Z');
	fig_f2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f2);

var fig_f3 = new fabric.Path('M 285.6666667	14.33333333 L 297	25.33333333 L 287	38 C 281.3333333	37.33333333	280.3333333	13.66666667	285.6666667	14.33333333 Z');
	fig_f3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_f3);

var fig_f4 = new fabric.Path('M 332.6666667	13.66666667 L 324	25 L 334	36 C 340	37.33333333	340.3333333	15.33333333	332.6666667	13.66666667 Z');
	fig_f4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_f4);

	//+180

var fig_g1 = new fabric.Path('M 357.6666667	24.33333333 C 357.6666667	25	383.3333333	24.66666667	383.3333333	24 L 391.6666667	12.66666667 C 392	7	347.3333333	5.666666667	346.6666667	13.33333333 L 357.6666667	24.33333333 Z');
	fig_g1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g1);
var text = new fabric.Text('7', { left: 356, top: 38 });
canvas.add(text);

var fig_g2 = new fabric.Path('M 358.3333333	26 C 358.3333333	25	383	25	383	25.66666667 L 393	36.66666667 C 392	46.66666667	351.6666667	45.33333333	349	38.33333333 L 358.3333333	26 Z');
	fig_g2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g2);

var fig_g3 = new fabric.Path('M 345.6666667	14.33333333 L 357	25.33333333 L 347	38 C 341.3333333	37.33333333	340.3333333	13.66666667	345.6666667	14.33333333 Z');
	fig_g3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_g3);

var fig_g4 = new fabric.Path('M 392.6666667	13.66666667 L 384	25 L 394	36 C 400	37.33333333	400.3333333	15.33333333	392.6666667	13.66666667 Z');
	fig_g4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_g4);

	//+180

var fig_h1 = new fabric.Path('M 417.6666667	24.33333333 C 417.6666667	25	443.3333333	24.66666667	443.3333333	24 L 451.6666667	12.66666667 C 452	7	407.3333333	5.666666667	406.6666667	13.33333333 L 417.6666667	24.33333333 Z');
	fig_h1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h1);
var text = new fabric.Text('8', { left: 420, top: 38 });
canvas.add(text);

var fig_h2 = new fabric.Path('M 418.3333333	26 C 418.3333333	25	443	25	443	25.66666667 L 453	36.66666667 C 452	46.66666667	411.6666667	45.33333333	409	38.33333333 L 418.3333333	26 Z');
	fig_h2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h2);

var fig_h3 = new fabric.Path('M 405.6666667	14.33333333 L 417	25.33333333 L 407	38 C 401.3333333	37.33333333	400.3333333	13.66666667	405.6666667	14.33333333 Z');
	fig_h3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_h3);

var fig_h4 = new fabric.Path('M 452.6666667	13.66666667 L 444	25 L 454	36 C 460	37.33333333	460.3333333	15.33333333	452.6666667	13.66666667 Z');
	fig_h4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_h4);

	//+180

var fig_i1 = new fabric.Path('M 477.6666667	24.33333333 C 477.6666667	25	503.3333333	24.66666667	503.3333333	24 L 511.6666667	12.66666667 C 512	7	467.3333333	5.666666667	466.6666667	13.33333333 L 477.6666667	24.33333333 Z');
	fig_i1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i1);
var text = new fabric.Text('9', { left: 480, top: 38 });
canvas.add(text);

var fig_i2 = new fabric.Path('M 478.3333333	26 C 478.3333333	25	503	25	503	25.66666667 L 513	36.66666667 C 512	46.66666667	471.6666667	45.33333333	469	38.33333333 L 478.3333333	26 Z');
	fig_i2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i2);

var fig_i3 = new fabric.Path('M 465.6666667	14.33333333 L 477	25.33333333 L 467	38 C 461.3333333	37.33333333	460.3333333	13.66666667	465.6666667	14.33333333 Z');
	fig_i3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_i3);

var fig_i4 = new fabric.Path('M 512.6666667	13.66666667 L 504	25 L 514	36 C 520	37.33333333	520.3333333	15.33333333	512.6666667	13.66666667 Z');
	fig_i4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_i4);

	//+180

var fig_j1 = new fabric.Path('M 537.6666667	24.33333333 C 537.6666667	25	563.3333333	24.66666667	563.3333333	24 L 571.6666667	12.66666667 C 572	7	527.3333333	5.666666667	526.6666667	13.33333333 L 537.6666667	24.33333333 Z');
	fig_j1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j1);
var text = new fabric.Text('10', { left: 530, top: 38 });
canvas.add(text);

var fig_j2 = new fabric.Path('M 538.3333333	26 C 538.3333333	25	563	25	563	25.66666667 L 573	36.66666667 C 572	46.66666667	531.6666667	45.33333333	529	38.33333333 L 538.3333333	26 Z');
	fig_j2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j2);

var fig_j3 = new fabric.Path('M 525.6666667	14.33333333 L 537	25.33333333 L 527	38 C 521.3333333	37.33333333	520.3333333	13.66666667	525.6666667	14.33333333 Z');
	fig_j3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_j3);

var fig_j4 = new fabric.Path('M 572.6666667	13.66666667 L 564	25 L 574	36 C 580	37.33333333	580.3333333	15.33333333	572.6666667	13.66666667 Z');
	fig_j4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_j4);

	//+180

var fig_k1 = new fabric.Path('M 597.6666667	24.33333333 C 597.6666667	25	623.3333333	24.66666667	623.3333333	24 L 631.6666667	12.66666667 C 632	7	587.3333333	5.666666667	586.6666667	13.33333333 L 597.6666667	24.33333333 Z');
	fig_k1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k1);
var text = new fabric.Text('11', { left: 588, top: 38 });
canvas.add(text);

var fig_k2 = new fabric.Path('M 598.3333333	26 C 598.3333333	25	623	25	623	25.66666667 L 633	36.66666667 C 632	46.66666667	591.6666667	45.33333333	589	38.33333333 L 598.3333333	26 Z');
	fig_k2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k2);

var fig_k3 = new fabric.Path('M 585.6666667	14.33333333 L 597	25.33333333 L 587	38 C 581.3333333	37.33333333	580.3333333	13.66666667	585.6666667	14.33333333 Z');
	fig_k3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_k3);

var fig_k4 = new fabric.Path('M 632.6666667	13.66666667 L 624	25 L 634	36 C 640	37.33333333	640.3333333	15.33333333	632.6666667	13.66666667 Z');
	fig_k4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_k4);

	//+180

var fig_l1 = new fabric.Path('M 657.6666667	24.33333333 C 657.6666667	25	683.3333333	24.66666667	683.3333333	24 L 691.6666667	12.66666667 C 692	7	647.3333333	5.666666667	646.6666667	13.33333333 L 657.6666667	24.33333333 Z');
	fig_l1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l1);
var text = new fabric.Text('12', { left: 646, top: 38 });
canvas.add(text);

var fig_l2 = new fabric.Path('M 658.3333333	26 C 658.3333333	25	683	25	683	25.66666667 L 693	36.66666667 C 692	46.66666667	651.6666667	45.33333333	649	38.33333333 L 658.3333333	26 Z');
	fig_l2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l2);

var fig_l3 = new fabric.Path('M 645.6666667	14.33333333 L 657	25.33333333 L 647	38 C 641.3333333	37.33333333	640.3333333	13.66666667	645.6666667	14.33333333 Z');
	fig_l3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_l3);

var fig_l4 = new fabric.Path('M 692.6666667	13.66666667 L 684	25 L 694	36 C 700	37.33333333	700.3333333	15.33333333	692.6666667	13.66666667 Z');
	fig_l4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_l4);

	//+180

var fig_m1 = new fabric.Path('M 717.6666667	24.33333333	 C 717.6666667	25	743.3333333	24.66666667	743.3333333	24 L 751.6666667	12.66666667 C 752	7	707.3333333	5.666666667	706.6666667	13.33333333 L 717.6666667	24.33333333 Z');
	fig_m1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m1);
var text = new fabric.Text('13', { left: 710, top: 38 });
canvas.add(text);
var fig_m2 = new fabric.Path('M 718.3333333	26 C 718.3333333	25	743	25	743	25.66666667 L 753	36.66666667 C 752	46.66666667	711.6666667	45.33333333	709	38.33333333 L 718.3333333	26 Z');
	fig_m2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m2);

var fig_m3 = new fabric.Path('M 705.6666667	14.33333333 L 717	25.33333333 L 707	38 C 701.3333333	37.33333333	700.3333333	13.66666667	705.6666667	14.33333333 Z');
	fig_m3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_m3);

var fig_m4 = new fabric.Path('M 752.6666667	13.66666667 L 744	25 L 754	36 C 760	37.33333333	760.3333333	15.33333333	752.6666667	13.66666667 Z');
	fig_m4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_m4);

	//+1800 +160 =1960

var fig_n1 = new fabric.Path('M 779.3333333	24 L 766.6666667	15 C 766.3333333	7.333333333	806.6666667	7	807.3333333	14.66666667 L 794.3333333	24 C 795	21.33333333	780.3333333	20	779.3333333	24 Z');
	fig_n1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n1);
var text = new fabric.Text('14', { left: 765, top: 38 });
canvas.add(text);
var fig_n2 = new fabric.Path('M 778.3333333	24.66666667 L 766.6666667	16 C 762.3333333	16	763.3333333	38	767.3333333	38 L 778.3333333	31 C 776.3333333	31.33333333	776	25	778.3333333	24.66666667 Z');
	fig_n2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n2);

var fig_n3 = new fabric.Path('M 778.6666667 32.33333333 L 767.6666667	39 C 767.6666667	48.33333333	807.6666667	47	807.6666667	38.66666667 L 795	32.33333333 C 795.3333333	35	779	35.33333333	778.6666667	32.33333333 Z');
	fig_n3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n3);

var fig_n4 = new fabric.Path('M 795.6666667	24.33333333 L 806.6666667	16.33333333 C 810.3333333	14.66666667	814.3333333	34.66666667	808	37.66666667 L 795.6666667	31.66666667 C 797.3333333	32	798.3333333	25	795.6666667	24.33333333 Z');
	fig_n4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_n4);

var fig_n5 = new fabric.Path('M 780.3333333	25.33333333 C 781	22	794.6666667	23	794.3333333	25.33333333 C 797.3333333	25	797	31.33333333	794.3333333	31.66666667 C 794.6666667	33.66666667	781.3333333	35	780.6666667	31.66666667 C 777.3333333	30.66666667	777.6666667	24.33333333	780.3333333	25.33333333 Z');
	fig_n5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_n5);

	// +160 

var fig_o1 = new fabric.Path('M 832.6666667	24 L 820	15 C 819.6666667	7.333333333	860	7	860.6666667	14.66666667 L 847.6666667	24 C 848.3333333	21.33333333	833.6666667	20	832.6666667	24 Z');
	fig_o1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o1);
var text = new fabric.Text('15', { left: 822, top: 38 });
canvas.add(text);
var fig_o2 = new fabric.Path('M 831.6666667	24.66666667 L 820	16 C 815.6666667	16	816.6666667	38	820.6666667	38 L 831.6666667	31 C 829.6666667	31.33333333	829.3333333	25	831.6666667	24.66666667 Z');
	fig_o2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o2);

var fig_o3 = new fabric.Path('M 832	32.33333333 L 821	39 C 821	48.33333333	861	47	861	38.66666667 L 848.3333333	32.33333333 C 848.6666667	35	832.3333333	35.33333333	832	32.33333333 Z');
	fig_o3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o3);

var fig_o4 = new fabric.Path('M 849	24.33333333 L 860	16.33333333 C 863.6666667	14.66666667	867.6666667	34.66666667	861.3333333	37.66666667 L 849	31.66666667 C 850.6666667	32	851.6666667	25	849	24.33333333 Z');
	fig_o4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_o4);

var fig_o5 = new fabric.Path('M 833.6666667	25.33333333 C 834.3333333	22	848	23	847.6666667	25.33333333 C 850.6666667	25	850.3333333	31.33333333	847.6666667	31.66666667 C 848	33.66666667	834.6666667	35	834	31.66666667 C 830.6666667	30.66666667	831	24.33333333	833.6666667	25.33333333 Z');
	fig_o5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_o5);

	// +160 

var fig_p1 = new fabric.Path('M 886	24 L 873.3333333	15 C 873	7.333333333	913.3333333	7	914	14.66666667 L 901	24 C 901.6666667	21.33333333	887	20	886	24 Z');
	fig_p1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p1);
var text = new fabric.Text('16', { left: 873, top: 38 });
canvas.add(text);
var fig_p2 = new fabric.Path('M 885	24.66666667	 L 873.3333333	16 C 869	16	870	38	874	38 L 885	31 C 883	31.33333333	882.6666667	25	885	24.66666667 Z');
	fig_p2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p2);

var fig_p3 = new fabric.Path('M 885.3333333	32.33333333 L 874.3333333	39 C 874.3333333	48.33333333	914.3333333	47	914.3333333	38.66666667 L 901.6666667	32.33333333 C 902	35	885.6666667	35.33333333	885.3333333	32.33333333 Z');
	fig_p3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p3);

var fig_p4 = new fabric.Path('M 902.3333333	24.33333333 L 913.3333333	16.33333333 C 917	14.66666667	921	34.66666667	914.6666667	37.66666667 L 902.3333333	31.66666667 C 904	32	905	25	902.3333333	24.33333333 Z');
	fig_p4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_p4);

var fig_p5 = new fabric.Path('M 887	25.33333333 C 887.6666667	22	901.3333333	23	901	25.33333333 C 904	25	903.6666667	31.33333333	901	31.66666667 C 901.3333333	33.66666667	888	35	887.3333333	31.66666667 C 884	30.66666667	884.3333333	24.33333333	887	25.33333333 Z');
	fig_p5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_p5);
///
//Parte inferior
///
var fig_aa1 = new fabric.Path('M 26	90.66666667	 L 13.33333333	81.66666667 C 13	74	53.33333333	73.66666667	54	81.33333333 L 41	90.66666667 C 41.66666667	88	27	86.66666667	26	90.66666667 Z');
	fig_aa1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa1);
var text = new fabric.Text('17', { left: 13, top: 120 });
canvas.add(text);

var fig_aa2 = new fabric.Path('M 25	91.33333333 L 13.33333333	82.66666667 C 9	82.66666667	10	104.6666667	14	104.6666667 L 25	97.66666667 C 23	98	22.66666667	91.66666667	25	91.33333333 Z');
	fig_aa2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa2);

var fig_aa3 = new fabric.Path('M 25.33333333	99 L 14.33333333	105.6666667 C 14.33333333	115	54.33333333	113.6666667	54.33333333	105.3333333 L 41.66666667	99 C 42	101.6666667	25.66666667	102	25.33333333	99 Z');
	fig_aa3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa3);

var fig_aa4 = new fabric.Path('M 42.33333333	91 L 53.33333333	83 C 57	81.33333333	61	101.3333333	54.66666667	104.3333333 L 42.33333333	98.33333333 C 44	98.66666667	45	91.66666667	42.33333333	91 Z');
	fig_aa4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_aa4);

var fig_aa5 = new fabric.Path('M 27	92 C 27.66666667	88.66666667	41.33333333	89.66666667	41	92 C 44	91.66666667	43.66666667	98	41	98.33333333 C 41.33333333	100.3333333	28	101.6666667	27.33333333	98.33333333 C 24	97.33333333	24.33333333	91	27	92 Z');
	fig_aa5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_aa5);
	//

var fig_bb1 = new fabric.Path('M 76	90.66666667 L 63.33333333	81.66666667 C 63	74	103.3333333	73.66666667	104	81.33333333 L 91	90.66666667 C 91.66666667	88	77	86.66666667	76	90.66666667 Z');
	fig_bb1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb1);
var text = new fabric.Text('18', { left: 63, top: 120 });
canvas.add(text);

var fig_bb2 = new fabric.Path('M 75	91.33333333 L 63.33333333	82.66666667 C 59	82.66666667	60	104.6666667	64	104.6666667 L 75	97.66666667	 C 73	98	72.66666667	91.66666667	75	91.33333333 Z');
	fig_bb2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb2);

var fig_bb3 = new fabric.Path('M 75.33333333	99 L 64.33333333	105.6666667 C 64.33333333	115	104.3333333	113.6666667	104.3333333	105.3333333 L 91.66666667	99 C 92	101.6666667	75.66666667	102	75.33333333	99 Z');
	fig_bb3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb3);

var fig_bb4 = new fabric.Path('M 92.33333333	91 L 103.3333333	83 C 107	81.33333333	111	101.3333333	104.6666667	104.3333333 L 92.33333333	98.33333333 C 94	98.66666667	95	91.66666667	92.33333333	91 Z');
	fig_bb4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_bb4);

var fig_bb5 = new fabric.Path('M 77	92 C 77.66666667	88.66666667	91.33333333	89.66666667	91	92 C 94	91.66666667	93.66666667	98	91	98.33333333 C 91.33333333	100.3333333	78	101.6666667	77.33333333	98.33333333 C 74	97.33333333	74.33333333	91	77	92 Z');
	fig_bb5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_bb5);

	//

var fig_cc1 = new fabric.Path('M 126	90.66666667 L 113.3333333	81.66666667 C 113	74	153.3333333	73.66666667	154	81.33333333 L 141	90.66666667 C 141.6666667	88	127	86.66666667	126	90.66666667 Z');
	fig_cc1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc1);
var text = new fabric.Text('19', { left: 114, top: 120 });
canvas.add(text);

var fig_cc2 = new fabric.Path('M 125	91.33333333 L 113.3333333	82.66666667 C 109	82.66666667	110	104.6666667	114	104.6666667 L 125	97.66666667 C 123	98	122.6666667	91.66666667	125	91.33333333 Z');
	fig_cc2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc2);

var fig_cc3 = new fabric.Path('M 125.3333333	99 L 114.3333333	105.6666667 C 114.3333333	115	154.3333333	113.6666667	154.3333333	105.3333333 L 141.6666667	99 C 142	101.6666667	125.6666667	102	125.3333333	99 Z');
	fig_cc3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc3);

var fig_cc4 = new fabric.Path('M 142.3333333	91 L 153.3333333	83 C 157	81.33333333	161	101.3333333	154.6666667	104.3333333 L 142.3333333	98.33333333 C 144	98.66666667	145	91.66666667	142.3333333	91 Z');
	fig_cc4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_cc4);

var fig_cc5 = new fabric.Path('M 127	92 C 127.6666667	88.66666667	141.3333333	89.66666667	141	92 C 144	91.66666667	143.6666667	98	141	98.33333333 C 141.3333333	100.3333333	128	101.6666667	127.3333333	98.33333333 C 124	97.33333333	124.3333333	91	127	92 Z');
	fig_cc5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_cc5);

	//

var fig_dd1 = new fabric.Path('M 177.6666667	91 C 177.6666667	91.66666667	203.3333333	91.33333333	203.3333333	90.66666667 L 211.6666667	79.33333333 C 212	73.66666667	167.3333333	72.33333333	166.6666667	80 L 177.6666667	91 Z');
	fig_dd1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd1);
var text = new fabric.Text('20', { left: 168, top: 120 });
canvas.add(text);

var fig_dd2 = new fabric.Path('M 178.3333333	92.66666667 C 178.3333333	91.66666667	203	91.66666667	203	92.33333333 L 213	103.3333333 C 212	113.3333333	171.6666667	112	169	105 L 178.3333333	92.66666667 Z');
	fig_dd2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd2);

var fig_dd3 = new fabric.Path('M 165.6666667	81 L 177	92 L 167	104.6666667 C 161.3333333	104	160.3333333	80.33333333	165.6666667	81 Z');
	fig_dd3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_dd3);

var fig_dd4 = new fabric.Path('M 212.6666667	80.33333333 L 204	91.66666667 L 214	102.6666667 C 220	104	220.3333333	82	212.6666667	80.33333333 Z');
	fig_dd4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_dd4);

	//+180

var fig_ee1 = new fabric.Path('M 237.6666667	91 C 237.6666667	91.66666667	263.3333333	91.33333333	263.3333333	90.66666667 L 271.6666667	79.33333333 C 272	73.66666667	227.3333333	72.33333333	226.6666667	80 L 237.6666667	91 Z');
	fig_ee1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee1);
var text = new fabric.Text('21', { left: 232, top: 120 });
canvas.add(text);

var fig_ee2 = new fabric.Path('M 238.3333333	92.66666667 C 238.3333333	91.66666667	263	91.66666667	263	92.33333333 L 273	103.3333333 C 272	113.3333333	231.6666667	112	229	105 L 238.3333333	92.66666667 Z');
	fig_ee2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee2);

var fig_ee3 = new fabric.Path('M 225.6666667	81 L 237	92 L 227	104.6666667 C 221.3333333	104	220.3333333	80.33333333	225.6666667	81 Z');
	fig_ee3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ee3);

var fig_ee4 = new fabric.Path('M 272.6666667	80.33333333 L 264	91.66666667 L 274	102.6666667 C 280	104	280.3333333	82	272.6666667	80.33333333 Z');
	fig_ee4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ee4);

	//+180

var fig_ff1 = new fabric.Path('M 297.6666667	91 C 297.6666667	91.66666667	323.3333333	91.33333333	323.3333333	90.66666667 L 331.6666667	79.33333333 C 332	73.66666667	287.3333333	72.33333333	286.6666667	80 L 297.6666667	91 Z');
	fig_ff1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff1);
var text = new fabric.Text('22', { left: 290, top: 120 });
canvas.add(text);

var fig_ff2 = new fabric.Path('M 298.3333333	92.66666667 C 298.3333333	91.66666667	323	91.66666667	323	92.33333333 L 333	103.3333333 C 332	113.3333333	291.6666667	112	289	105 L 298.3333333	92.66666667 Z');
	fig_ff2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff2);

var fig_ff3 = new fabric.Path('M 285.6666667	81 L 297	92 L 287	104.6666667 C 281.3333333	104	280.3333333	80.33333333	285.6666667	81 Z');
	fig_ff3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ff3);

var fig_ff4 = new fabric.Path('M 332.6666667	80.33333333 L 324	91.66666667 L 334	102.6666667 C 340	104	340.3333333	82	332.6666667	80.33333333 Z');
	fig_ff4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ff4);

	//+180

var fig_gg1 = new fabric.Path('M 357.6666667	91 C 357.6666667	91.66666667	383.3333333	91.33333333	383.3333333	90.66666667 L 391.6666667	79.33333333 C 392	73.66666667	347.3333333	72.33333333	346.6666667	80 L 357.6666667	91 Z');
	fig_gg1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg1);
var text = new fabric.Text('23', { left: 350, top: 120 });
canvas.add(text);

var fig_gg2 = new fabric.Path('M 358.3333333	92.66666667 C 358.3333333	91.66666667	383	91.66666667	383	92.33333333 L 393	103.3333333 C 392	113.3333333	351.6666667	112	349	105 L 358.3333333	92.66666667 Z');
	fig_gg2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg2);

var fig_gg3 = new fabric.Path('M 392.6666667	80.33333333 L 384	91.66666667 L 394	102.6666667 C 400	104	400.3333333	82	392.6666667	80.33333333 Z');
	fig_gg3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_gg3);

var fig_gg4 = new fabric.Path('M 345.6666667	81 L 357	92 L 347	104.6666667 C 341.3333333	104	340.3333333	80.33333333	345.6666667	81 Z');
	fig_gg4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_gg4);

	//+180

var fig_hh1 = new fabric.Path('M 417.6666667	91 C 417.6666667	91.66666667	443.3333333	91.33333333	443.3333333	90.66666667 L 451.6666667	79.33333333 C 452	73.66666667	407.3333333	72.33333333	406.6666667	80 L 417.6666667	91 Z');
	fig_hh1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_hh1);
var text = new fabric.Text('24', { left: 410, top: 120 });
canvas.add(text);

var fig_hh2 = new fabric.Path('M 418.3333333	92.66666667 C 418.3333333	91.66666667	443	91.66666667	443	92.33333333 L 453	103.3333333 C 452	113.3333333	411.6666667	112	409	105 L 418.3333333	92.66666667 Z');
	fig_hh2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_hh2);

var fig_hh3 = new fabric.Path('M 405.6666667	81 L 417	92 L 407	104.6666667 C 401.3333333	104	400.3333333	80.33333333	405.6666667	81 Z');
	fig_hh3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_hh3);

var fig_hh4 = new fabric.Path('M 452.6666667	80.33333333 L 444	91.66666667 L 454	102.6666667 C 460	104	460.3333333	82	452.6666667	80.33333333 Z');
	fig_hh4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_hh4);

	//+180

var fig_ii1 = new fabric.Path('M 477.6666667	91 C 477.6666667	91.66666667	503.3333333	91.33333333	503.3333333	90.66666667 L 511.6666667	79.33333333 C 512	73.66666667	467.3333333	72.33333333	466.6666667	80 L 477.6666667	91 Z');
	fig_ii1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii1);
var text = new fabric.Text('25', { left: 470, top: 120 });
canvas.add(text);

var fig_ii2 = new fabric.Path('M 478.3333333	92.66666667 C 478.3333333	91.66666667	503	91.66666667	503	92.33333333 L 513	103.3333333 C 512	113.3333333	471.6666667	112	469	105 L 478.3333333	92.66666667 Z');
	fig_ii2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii2);

var fig_ii3 = new fabric.Path('M 465.6666667	81 L 477	92 L 467	104.6666667	C 461.3333333	104	460.3333333	80.33333333	465.6666667	81 Z');
	fig_ii3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ii3);

var fig_ii4 = new fabric.Path('M 512.6666667	80.33333333 L 504	91.66666667 L 514	102.6666667 C520	104	520.3333333	82	512.6666667	80.33333333 Z');
	fig_ii4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ii4);

	//+180

var fig_jj1 = new fabric.Path('M 537.6666667	91 C 537.6666667	91.66666667	563.3333333	91.33333333	563.3333333	90.66666667 L 571.6666667	79.33333333 C 572	73.66666667	527.3333333	72.33333333	526.6666667	80 L 537.6666667	91 Z');
	fig_jj1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj1);
var text = new fabric.Text('26', { left: 530, top: 120 });
canvas.add(text);

var fig_jj2 = new fabric.Path('M 538.3333333	92.66666667 C 538.3333333	91.66666667	563	91.66666667	563	92.33333333 L 573	103.3333333 C 572	113.3333333	531.6666667	112	529	105 L 538.3333333	92.66666667 Z');
	fig_jj2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj2);

var fig_jj3 = new fabric.Path('M 525.6666667	81 L 537	92 L 527	104.6666667 C 521.3333333	104	520.3333333	80.33333333	525.6666667	81 Z');
	fig_jj3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_jj3);

var fig_jj4 = new fabric.Path('M 572.6666667	80.33333333 L 564	91.66666667 L 574	102.6666667 C 580	104	580.3333333	82	572.6666667	80.33333333 Z');
	fig_jj4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_jj4);

	//+180

var fig_kk1 = new fabric.Path('M 597.6666667	91 C 597.6666667	91.66666667	623.3333333	91.33333333	623.3333333	90.66666667 L 631.6666667	79.33333333 C 632	73.66666667	587.3333333	72.33333333	586.6666667	80 L 597.6666667	91 Z');
	fig_kk1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk1);
var text = new fabric.Text('27', { left: 590, top: 120 });
canvas.add(text);

var fig_kk2 = new fabric.Path('M 598.3333333	92.66666667 C 598.3333333	91.66666667	623	91.66666667	623	92.33333333 L 633	103.3333333 C 632	113.3333333	591.6666667	112	589	105 L 598.3333333	92.66666667 Z');
	fig_kk2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk2);

var fig_kk3 = new fabric.Path('M 585.6666667	81 L 597	92 L 587	104.6666667 C 581.3333333	104	580.3333333	80.33333333	585.6666667	81 Z');
	fig_kk3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_kk3);

var fig_kk4 = new fabric.Path('M 632.6666667	80.33333333 L 624	91.66666667 L 634	102.6666667 C 640	104	640.3333333	82	632.6666667	80.33333333 Z');
	fig_kk4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_kk4);

	//+180

var fig_ll1 = new fabric.Path('M 657.6666667	91 C 657.6666667	91.66666667	683.3333333	91.33333333	683.3333333	90.66666667 L 691.6666667	79.33333333 C 692	73.66666667	647.3333333	72.33333333	646.6666667	80 L 657.6666667	91 Z');
	fig_ll1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll1);
var text = new fabric.Text('28', { left: 650, top: 120 });
canvas.add(text);

var fig_ll2 = new fabric.Path('M 658.3333333	92.66666667 C 658.3333333	91.66666667	683	91.66666667	683	92.33333333 L 693	103.3333333 C 692	113.3333333	651.6666667	112	649	105 L 658.3333333	92.66666667 Z');
	fig_ll2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll2);

var fig_ll3 = new fabric.Path('M 645.6666667	81 L 657	92 L 647	104.6666667 C 641.3333333	104	640.3333333	80.33333333	645.6666667	81 Z');
	fig_ll3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_ll3);

var fig_ll4 = new fabric.Path('M 692.6666667	80.33333333 L 684	91.66666667 L 694	102.6666667 C 700	104	700.3333333	82	692.6666667	80.33333333 Z');
	fig_ll4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_ll4);

	//+180

var fig_mm1 = new fabric.Path('M 717.6666667	91 C 717.6666667	91.66666667	743.3333333	91.33333333	743.3333333	90.66666667 L 751.6666667	79.33333333 C 752	73.66666667	707.3333333	72.33333333	706.6666667	80 L 717.6666667	91 Z');
	fig_mm1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm1);
var text = new fabric.Text('29', { left: 710, top: 120 });
canvas.add(text);

var fig_mm2 = new fabric.Path('M 718.3333333	92.66666667 C 718.3333333	91.66666667	743	91.66666667	743	92.33333333 L 753	103.3333333 C 752	113.3333333	711.6666667	112	709	105 L 718.3333333	92.66666667 Z');
	fig_mm2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm2);

var fig_mm3 = new fabric.Path('M 705.6666667	81 L 717	92 L 707	104.6666667 C 701.3333333	104	700.3333333	80.33333333	705.6666667	81 Z');
	fig_mm3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_mm3);

var fig_mm4 = new fabric.Path('M 752.6666667	80.33333333 L 744	91.66666667 L 754	102.6666667 C 760	104	760.3333333	82	752.6666667	80.33333333 Z');
	fig_mm4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_mm4);

	//+1800 +160 =1960

var fig_nn1 = new fabric.Path('M 779.3333333	90.66666667 L 766.6666667	81.66666667 C 766.3333333	74	806.6666667	73.66666667	807.3333333	81.33333333 L 794.3333333	90.66666667 C 795	88	780.3333333	86.66666667	779.3333333	90.66666667 Z');
	fig_nn1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn1);
var text = new fabric.Text('30', { left: 770, top: 120 });
canvas.add(text);

var fig_nn2 = new fabric.Path('M 778.3333333	91.33333333 L 766.6666667	82.66666667 C 762.3333333	82.66666667	763.3333333	104.6666667	767.3333333	104.6666667 L 778.3333333	97.66666667 C 776.3333333	98	776	91.66666667	778.3333333	91.33333333 Z');
	fig_nn2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn2);

var fig_nn3 = new fabric.Path('M 778.6666667	99 L 767.6666667	105.6666667 C 767.6666667	115	807.6666667	113.6666667	807.6666667	105.3333333 L 795	99 C 795.3333333	101.6666667	779	102	778.6666667	99 Z');
	fig_nn3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn3);

var fig_nn4 = new fabric.Path('M 795.6666667	91 L 806.6666667	83 C 810.3333333	81.33333333	814.3333333	101.3333333	808	104.3333333 L 795.6666667	98.33333333 C 797.3333333	98.66666667	798.3333333	91.66666667	795.6666667	91 Z');
	fig_nn4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_nn4);

var fig_nn5 = new fabric.Path('M 780.3333333	92 C 781	88.66666667	794.6666667	89.66666667	794.3333333	92 C 797.3333333	91.66666667	797	98	794.3333333	98.33333333 C 794.6666667	100.3333333	781.3333333	101.6666667	780.6666667	98.33333333 C 777.3333333	97.33333333	777.6666667	91	780.3333333	92 Z');
	fig_nn5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_nn5);

	// +160 

var fig_oo1 = new fabric.Path('M 832.6666667	90.66666667 L 820	81.66666667 C 819.6666667	74	860	73.66666667	860.6666667	81.33333333 L 847.6666667	90.66666667 C 848.3333333	88	833.6666667	86.66666667	832.6666667	90.66666667 Z');
	fig_oo1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo1);
var text = new fabric.Text('31', { left: 825, top: 120 });
canvas.add(text);

var fig_oo2 = new fabric.Path('M 831.6666667	91.33333333 L 820	82.66666667 C 815.6666667	82.66666667	816.6666667	104.6666667	820.6666667	104.6666667 L 831.6666667	97.66666667 C 829.6666667	98	829.3333333	91.66666667	831.6666667	91.33333333 Z');
	fig_oo2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo2);

var fig_oo3 = new fabric.Path('M 832	99 L 821	105.6666667 C 821	115	861	113.6666667	861	105.3333333 L 848.3333333	99 C 848.6666667	101.6666667	832.3333333	102	832	99 Z');
	fig_oo3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo3);

var fig_oo4 = new fabric.Path('M 849	91 L 860	83 C 863.6666667	81.33333333	867.6666667	101.3333333	861.3333333	104.3333333 L 849	98.33333333 C 850.6666667	98.66666667	851.6666667	91.66666667	849	91 Z');
	fig_oo4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_oo4);

var fig_oo5 = new fabric.Path('M 833.6666667	92 C 834.3333333	88.66666667	848	89.66666667	847.6666667	92 C 850.6666667	91.66666667	850.3333333	98	847.6666667	98.33333333	C 848	100.3333333	834.6666667	101.6666667	834	98.33333333 C 830.6666667	97.33333333	831	91	833.6666667	92 Z');
	fig_oo5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_oo5);

	// +160 

var fig_pp1 = new fabric.Path('M 886	90.66666667 L873.3333333	81.66666667 C 873	74	913.3333333	73.66666667	914	81.33333333 L 901	90.66666667 C 901.6666667	88	887	86.66666667	886	90.66666667 Z');
	fig_pp1.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp1);
var text = new fabric.Text('32', { left: 875, top: 120 });
canvas.add(text);

var fig_pp2 = new fabric.Path('M 885	91.33333333	 L 873.3333333	82.66666667 C 869	82.66666667	870	104.6666667	874	104.6666667 L 885	97.66666667 C 883	98	882.6666667	91.66666667	885	91.33333333 Z');
	fig_pp2.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp2);

var fig_pp3 = new fabric.Path('M 885.3333333	99 L 874.3333333	105.6666667 C 874.3333333	115	914.3333333	113.6666667	914.3333333	105.3333333 L 901.6666667	99 C 902	101.6666667	885.6666667	102	885.3333333	99 Z');
	fig_pp3.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp3);

var fig_pp4 = new fabric.Path('M 902.3333333	91 L 913.3333333	83 C 917	81.33333333	921	101.3333333	914.6666667	104.3333333 L 902.3333333	98.33333333 C 904	98.66666667	905	91.66666667	902.3333333	91 Z');
	fig_pp4.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)'});
	canvas.add(fig_pp4);

var fig_pp5 = new fabric.Path('M 887	92 C 887.6666667	88.66666667	901.3333333	89.66666667	901	92 C 904	91.66666667	903.6666667	98	901	98.33333333 C 901.3333333	100.3333333	888	101.6666667	887.3333333	98.33333333 C 884	97.33333333	884.3333333	91	887	92 Z');
	fig_pp5.set({scaleX:nEscala , scaleY:nEscala, fill: 'rgb(237, 247, 250)' });
	canvas.add(fig_pp5);
//Fin
//

//LINEAS VERTICAL
var linea_vertical = new fabric.Path('M 461 5 L 458 5 L 458 200 461 200');
	linea_vertical.set({fill: 'rgb(236, 120, 44)'});
canvas.add(linea_vertical);

//LINEAS HORIZONTAL
/*var linea_horizontal = new fabric.Path(' M 50 205 L 50 200 L 2750 200 L 2750 205');
	linea_horizontal.set({fill: 'rgb(236, 120, 44)'});
canvas.add(linea_horizontal);*/
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