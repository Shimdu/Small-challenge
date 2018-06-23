window.onload=init;
function init(){
    var trs = document.getElementsByTagName('tr');
    for(var i=0;i<trs.length;i++){
        trs[i].onclick=doclick;
    }
}

function doclick(){
    alert(this.innerHTML);
}