var isDescriptionFilled = false;
var isDueDateFilled = false;
var isImpListFilled = false;

var elAddBtn = document.querySelector("#addFormButton");

function chkDescription(value){
    isDescriptionFilled = isPatternMatch(/^[A-Za-z0-9]*$/, value);
}

function chkDate(){
    var elDueDate = document.getElementById('dateDue');
    var date = new Date(elDueDate.value);
    console.log(date.toString());
    if(date != null){
        if(date > new Date()){
            console.log('Selected Date is more than today');
            isDueDateFilled = true;
        }else{
            console.log('Selected Date is less than today');
            isDueDateFilled = false;
        }
    }
}
function chkImportance(){
    var rdBtns = document.querySelectorAll('.rdBtn');
    for (let i = 0; i < rdBtns.length; i++) {
        if(rdBtns[i].checked == true){
            isImpListFilled = true;
            break;
        }
    }

}


function isPatternMatch(pattern = RegExp, value ){
    var reg = new RegExp(pattern);
    return reg.test(value);
}

// A function that enables the add button if the form is filled out correctly
function enableAddBtn(){
    chkDescription();
    
    if(isDescriptionFilled == true && isDueDateFilled == true && isImpListFilled == true){
        elAddBtn.removeAttribute('disabled');
        elAddBtn.classList.remove('disabled');
    }
}
// var isDescriptionFilled = true;
// var isDueDateFilled = true;
// var isImpListFilled = true;

enableAddBtn();