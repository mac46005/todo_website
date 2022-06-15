var isDescriptionFilled = false;
var isDueDateFilled = false;
var isImpListFilled = false;

var elAddBtn = document.querySelector("#addFormButton");

// function chkDescription(value){
//     value = value.trim();
//     isDescriptionFilled = isPatternMatch(/^*$/, value);
// }




function isPatternMatch(pattern = RegExp, value ){
    var reg = new RegExp(pattern);
    return reg.test(value);
}

// A function that enables the add button if the form is filled out correctly
function enableAddBtn(){
    if(isDescriptionFilled == true && isDueDateFilled == true && isImpListFilled == true){
        elAddBtn.removeAttribute('disabled');
        elAddBtn.classList.remove('disabled');
    }
}
// var isDescriptionFilled = true;
// var isDueDateFilled = true;
// var isImpListFilled = true;

enableAddBtn();