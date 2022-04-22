function Loaddataaec(){
	$.ajax("../maymoc/dataaec.php")
	.done(function(rs){
		$('#idtable').html(rs);
	});
}
function Loaddatatsc(){
	$.ajax("../maymoc/datatsc.php")
	.done(function(rs){
		$('#idtable').html(rs);
	});
}
function Loaddataaps(){
	$.ajax("../maymoc/dataaps.php")
	.done(function(rs){
		$('#idtable').html(rs);
	});
}
function Loaddataaec1(){
	$.ajax("../maymoc/dataaec1.php")
	.done(function(rs){
		$('#idtable').html(rs);
	});
}
function Loaddatatsc1(){
	$.ajax("../maymoc/datatsc1.php")
	.done(function(rs){
		$('#idtable').html(rs);
	});
}
function Loaddataaps1(){
	$.ajax("../maymoc/dataaps1.php")
	.done(function(rs){
		$('#idtable').html(rs);
	});
}