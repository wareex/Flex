//Functions and Objects

//Functions
function glassOnion(plyr1,plyr2){
    var plyrs = (plyr1 > plyr2) ? plyr1 : plyr2;
    // alert(plyrs);
    // return plyrs; 
  }
  
  //Argumentin the functions parameters
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
  //helldog1.logDetails();
 // helldog3.logDetails();
  //helldog2.logDetails();


  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Array
var mean= Array(5), nums;
for(let i=1; i >= mean; i++){
  nums = parseInt(prompt("Array values"));
   mean += nums ;
}
alert(mean);

  
  
//DOM

var shiftcontent = document.getElementById("firstcontent");
shiftcontent.setAttribute("text-align","right");

console.log(shiftcontent.innerHTML);

//creating

var newHead =document.createElement("h2");
var newPara = document.createElement("p");

//adding content using innerHTML

newHead.innerHTML = "And Here we are!";
newPara.innerHTML = "Foreign governments may use hackers to spy on U.S. intelligence communications in order to learn about where our troops are located or otherwise gain a tactical advantage at war. ";

// Attaching innerhtml to doc using appendchild
document.getElementById("secondcontent").appendChild("newHead");
document.getElementById("secondcontent").appendChild("newPara");

///////////
var newHeadn =document.createElement("h2");
var newParan = document.createElement("p");

//using childs node to create

var newHeadtxt = document.createTextNode("And Here we are!");
var newParantxt = document.createTextNode("Foreign governments may use hackers to spy on U.S. intelligence communications in order to learn about where our troops are located or otherwise gain a tactical advantage at war. ");

//attch the node to the element
newHeadn.appendChild("newHeadtxt");
newParan.appendChild("newParatxt");

//////////

//getting an element into list of similar elment(i.e <li>)
var newTr = document.createElement("tr");
var flr = FLRs.getElementById("FLRs")[3];
flr.insertBefore(newTr, flr);

  
  
  
  
  
  
  
  
  
  
  
  