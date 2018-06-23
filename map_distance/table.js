/*
window.onload=init;
function init(){
    var table = document.getElementById('map').rows;
    for(var i=0;i<table.length;i++){
        table[i].onmouseover=function(){
            this.style.backgroundColor = "#ccc";
        }
        table[i].onmouseout=function(){
            this.style.backgroundColor = "#fff";
        }
    }
}
*/

/*
document.onclick = function(e) {
    var e = e || window.event;
    var target = e.target || e.srcElement;
    if(target.tagName.toLowerCase() === "td") {
        var rowIdx = target.parentNode.rowIndex;
        alert("第 " + rowIdx + " 行");
    }
};
*/

function chgbg(id){
	var obj=window.document.getElementById(id);
	var bg=obj.style.backgroundColor;
	if(bg=='') {
        obj.style.backgroundColor='#f00';
    }else{
        obj.style.backgroundColor='';
    }
}

function colorChange(t) {
    for (var i=0; i<t.rows.length; i++){
        for (var j=0; j<t.rows[i].cells.length; j++){
            t.rows[i].cells[j].className = t.rows[i].cells[j] == event.srcElement ? 'clickTD' : '';
        }
    }
}