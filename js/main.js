let Total = 0;

document.addEventListener('click', function(e){
    
    if(cont(e, 'drop-down') || e.target.parentElement.classList.contains('drop-down')){
        const dropDownMenu = document.querySelector('.drop-down-menu');
        dropDownMenu.classList.toggle('hide');
    }else {
        const dropDownMenu = document.querySelector('.drop-down-menu');
        if(!dropDownMenu.classList.contains('hide')){
            dropDownMenu.classList.toggle('hide');
        }
    }

    if(cont(e, 'open-setting') || cont(e, 'close-settin') || cont(e, 'nav-my-profile')){
        const settingPage = document.querySelector('.setting-page');
        settingPage.classList.toggle('hide');
    } 

    if(cont(e, 'fa-plus')){
        var number = parseInt(e.target.parentElement.querySelector('input').value) + 1
        e.target.parentElement.querySelector('input').value = number
        calcSum()
    }

    if(cont(e, 'fa-minus')){
        var number = parseInt(e.target.parentElement.querySelector('input').value)
        if(number > 1 ){
            number -= 1
        }
        e.target.parentElement.querySelector('input').value = number
        calcSum()
    }

    if(cont(e, 'complete-order')){
        const form = document.getElementById('buy-form')
        form.submit()
    }

    // to calculate the sum in the summary when check the checkbox
    if(cont(e, 'check-box-yellow')){
        calcSum();
    }

    // to prevent the checkbox from being checked when click on the label
    if((cont(e, 'cart-product') || e.target.closest('label')) && !cont(e, 'remove')){
        e.preventDefault()
    }

    // to check all the boxes in the cart
    if(cont(e, 'sellect-all')){
        checkAll()
        calcSum();
    }
})

calcSum()

function calcSum(){
    const checkboxes = document.querySelectorAll('.check-box-yellow')
    const sum = document.querySelector('.sum');
    if(checkboxes){
        Total = 0;
        checkboxes.forEach(e => {
            if(e.checked){
                const att = e.getAttribute('id'); // id of the checkbox
                const element =document.querySelector(`.n${att}`); //label of the checkbox 

                let price = element.querySelector('.price').querySelector('span').innerHTML
                const quantity = element.querySelector('.quantity').querySelector('input').value;
                Total += +price * +quantity
            }
        })
        sum.innerHTML = Total
    }
}

function checkAll(){
    const checkboxes = document.querySelectorAll('.check-box-yellow')
    checkboxes.forEach(e => {
        e.checked = true;
    })
}


function cont(e, value){
    return e.target.classList.contains(value);
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 48 || charCode > 57))
        return false;
    return true;
}