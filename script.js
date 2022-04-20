function oblicz2(){
    var pi = 3.14;
    var b = (4/3);
    var r = document.getElementById('promien').value ;
    var wynik = pi * b  * r;

    document.getElementById("wynik").value=wynik;
 
}

function noNumbers(e)
{
var keynum;
var keychar;
var numcheck;

if(window.event) 
        {
        keynum = e.keyCode;
        }
else if(e.which) 
        {
        keynum = e.which;
        }
keychar = String.fromCharCode(keynum);

numcheck = /\d/;
return numcheck.test(keychar);
}

function clean(){
    document.getElementById("wynik").value = " "
    document.getElementById("promien").value = " "
}

