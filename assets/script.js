
document.querySelectorAll('.menu-btn').forEach(btn=>{
  btn.addEventListener('click',()=>document.querySelector('.links')?.classList.toggle('open'));
});
