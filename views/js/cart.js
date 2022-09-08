window.scroll({top:400,left:100,behavior:'smooth'})
const formCart = document.getElementById('form-control');
formCart.addEventListener('click',(e)=>{
    if(e.target.nodeName == 'INPUT'){
        let group = e.target.parentElement.children;
        group[0].style.top = '-5px';
        group[0].style.fontSize = '12px';
        e.target.addEventListener('blur',(e)=> {
            if(group[1].value.length === 0){
                group[0].style.top = '12px';
                group[0].style.fontSize = '16px';
            }
        })
    }
    document.getElementById('form-control').addEventListener('submit',(e)=> infoPayment(e));
});
