
function glassOnion(plyr1,plyr2){
  var plyrs = (plyr1 > plyr2) ? plyr1 : plyr2;
   alert(plyrs);
  // return plyrs; 
}

glassOnion(400,400.9);

// Playing with objects 
var helldog1 = {name: "Yisagi Okrewa", rank: "1" , field: "Assault" , takes: "300" }; 
var helldog2 = {name: " Mikasa Uyongi", rank: "3" , field: "Sniper" , takes: "100" };
var helldog3 = {name: "Ogah Kesuma", rank: "2" , field: "Explosives" , takes: "250" };

//Functions for the objects
function mjInfo() {
    //loading the function with the inherited features of object
    alert(this.name + " is an " + this.field +" expert, having ranked " + this.rank + " and  " + this.takes +"  kills." );
}

//loading the recived object details into a log function for each object refrencing

helldog1.logDetails = mjInfo;
helldog3.logDetails = mjInfo;
helldog2.logDetails = mjInfo;

//calling the functions
helldog1.logDetails();
helldog3.logDetails();
helldog2.logDetails();

