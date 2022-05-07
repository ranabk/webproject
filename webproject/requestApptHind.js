window.addEventListener('load',start(),false);

function start(){
const addButton= document.getElementById('addbtn');
const cancelButton= document.getElementById('cancelbtn');
addButton.addEventListener('click',addAppointment);
cancelButton.addEventListener('click', cancelAppointment);
}

function addAppointment(event){
//send info

var service= document.getElementById('service-choice');
service.value='';
var date= document.getElementById('date-choice');
date.value='';
var time= document.getElementById('time-choice');
time.value='';
var textarea= document.getElementById('textarea-choice');
textarea.value='';
swal("Service added!", "The service is added to your available services!", "success");

}

function cancelAppointment(event){
  
    }
window.addEventListener('load',start(),false);