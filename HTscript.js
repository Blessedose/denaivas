let menu = document.querySelector('.ham');
let navlist = document.querySelector('.navbar');
const menuClose = document.querySelector('.hamclose')

// menu.onclick = () => {
// 	menu.classlist.toggle('#mbars');
// 	navlist.classlist.toggle('active');
// };

menu.addEventListener('click', () => {
	navlist.style.display = 'flex';
	menuClose.style.display = 'block'
	menu.style.display = 'none';

})
menuClose.addEventListener('click',()=>{
navlist.style.display = 'none';
menu.style.display = 'block';
menuClose.style.display = 'none';
}
)