const hotelname ="NOBLE HEAVEN";
const roomprice = 1500;
let availablerooms =5;
let bookingStatus ="rooms available";
console.log("hotel name:",hotelname);
console.log("room price:",roomprice);
console.log("available rooms:",availablerooms);
console.log("status:",bookingStatus);
document.getElementById("hotelname").innerHTML=hotelname;
document.getElementById("roomprice").innerHTML=roomprice;
document.getElementById("availablerooms").innerHTML=availablerooms;
document.getElementById("bookingStatus").innerHTML=bookingStatus;
function bookroom(){
    if(availablerooms>0)
    {
        availabilerooms--;
        bookingStatus="BOOKING CONFIRMED";
        console.log("room booked");
        console.log("remaining rooms:",availablerooms);
        document.getElementById("roomcount").innerHTML=availablerooms;
        document.getElementById("bookingStatus").innerHTML=bookingStatus;
        showpopup();
    }
    else{
        bookingStatus="no rooms";
        console.log("booking failed");
        document.getElementById("availablerooms").innerHTML=availablerooms;
        document.getElementById("bookingStatus").innerHTML=bookingStatus;
        alert("sorry no rooms");
    }
}
function showpopup(){
    document.getElementById("popup").style.display="block";
     document.getElementById("popuprooms").innerText="availablerooms";
}
function closepopup(){
     document.getElementById("popup").style.display="none";
}