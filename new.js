
var sodiki = "45", tall = "sop" , plr2 = 56.7;
// 
var waht;
    waht= "whener";
// structure
       // alert(sodiki);
       // alert(tall);
       // alert(plr2);
       // alert(waht);


//console.log()

//conditional
var shola = 48;
var Ade = "57.78";

if (shola == Ade){
    //alert('Yes');
} else {
    //alert("No");
}

//Teneray operator
var buket = shola > Ade ? shola : Ade;
//alert(buket); 

//Oprands (second class)
var a = 21;
--a;
//alert(a);


//loops
//var b =11;
//while(b<=10){
//alert("Happy birday to Aziz");
//b++;
//}
//var c = 6;
//do {
  //  alert('IIIRG is the best');
 //   c++;
//} while (c<5);

//for(var e = 1; e < 7; e++){
 //alert('Till we all win');
//}


//correction

//var pi =3.142, r =48.67, AreaC;
//AreaC = pi * r * r;
//alert(AreaC);

//var Cone, cr = 34, l = 60.45, Cpi= 3.142;
//Cone = Cpi * cr  * (l + cr);
//alert(Cone);

//var fct = 1;
//var n = parseInt(prompt("Find the factorial of: "));

//for (let j = 1; j <= n; j++){
  //  fct *= j;
//}
//alert(fct);

//ODD

//var nmb = prompt("Enter value ");

//if ((nmb % 2) == 0 ){
//alert(nmb + " is Even ");
//}else {
  //  alert(nmb + " is Odd");
//}

//permutation
var fact1 = 1, n = prompt("Enter value of n ");
var fact2= 1, r = prompt('Enter value r ');
var c = n - r;
var nPr;

for (let i = 1; i <= n ; i++){
    fact1 *= i;

    for (let j =1; j <= c ; j++ ){
    fact2 *= j;
    }
}
    nPr = fact1/fact2;
   alert(nPr);
    //alert(fact1);

  //Array
var mean= Array(5), nums;
for(let i=1; i >= mean; i++){
  nums = parseInt(prompt("Array values"));
   mean += nums ;
}
alert(mean);






