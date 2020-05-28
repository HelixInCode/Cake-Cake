const $hamburger = document.getElementById('hamburger')
const $navHam = document.getElementById('navHam')

$hamburger.addEventListener('click', () =>{

  if ($navHam.classList.contains('hide')) {

    $navHam.classList.remove('hide')

  } else{

    $navHam.classList.add('hide')
  }
})