function sumTotal(){
    var table = document.getElementById("table");
    var sumVal=0;
    for (var i=1; i<table.rows.length; i++){
        sumVal = sumVal + parseInt(table.rows[i].cells[4].innerHTML);
    }
    console.log(sumVal);
}

function sumaTotal(){
   setTimeout('sumTotal()',10000); 
}

function mul(){
    var mul=0;
    mul = parseInt(table.cells[4].innerHTML) * parseInt(table.cells[2].innerHTML);
    return mul;
}