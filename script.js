function click(){
    document.querySelector('.btnn').classList.add('btnload');
}
function fclose(){
    document.querySelector('#for').classList.remove('formload')
}
var lock=document.getElementById('lockbtn');
var frm=document.getElementById('for')
lock.addEventListener('click',()=>{
    frm.style.display=`block`;
})