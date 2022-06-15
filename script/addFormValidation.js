var isDescriptionFilled = false;
var isDueDateFilled = false;
var isImpListFilled = false;

var elAddBtn = document.getElementById('addFormButton');

function chkDescription(value){
    value = value.trim();
    isDescriptionFilled = isPatternMatch(/^*$/, value);
}




function isPatternMatch(pattern = RegExp, value ){
    var reg = new RegExp(pattern);
    return reg.test(value);
}

function enableAddBtn(){
    if(isDescriptionFilled == true && isDueDateFilled == true && isImpListFilled == true){
        elAddBtn.classList.remove('disabled');
    }
    else{
        if(!elAddBtn.classList.contains('disabled')){
            elAddBtn.classList.add('disabled');
        }
    }
}


enableAddBtn();