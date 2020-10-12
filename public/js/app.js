document.addEventListener('DOMContentLoaded', e => {
  addTaskAction('addTask')
  darkMode()
})
const darkMode = () => {
  const $dark = document.querySelector('.switch__slider')
  const $switch = document.getElementById('dark-check')
  document.addEventListener('click', e => {
    if (
      e.target.matches('.switch__slider') ||
      e.target.matches('.switch__slider *')
    ) {
      console.log(localStorage.getItem('dark_mode'))
    }
  })
}
// const $themeToggle = document.getElementById('dark-check')
// $themeToggle.addEventListener('click', () => {

//   console.log(localStorage.getItem('dark_mode'))
//   if (localStorage.getItem('dark_mode')) {
//     document.body.classList.remove('dark')
//     localStorage.setItem('dark_mode', false)
//     $switch.setAttribute('class', 'switch__slider')
//   } else {
//     document.body.classList.add('dark')
//     localStorage.setItem('dark_mode', true)
//     $switch.setAttribute('class', 'switch__slider active')
//   }
// })
//add task element
const addTaskAction = id => {
  const $formTask = document.getElementById('taskform')
  const $iconBtnAdd = document.getElementById('icn')
  document.addEventListener('click', e => {
    if (e.target.matches(`#${id}`) || e.target.matches(`#${id} *`)) {
      $formTask.classList.toggle('active-taskform')
      toggleData($formTask)
      toggleBtn($iconBtnAdd, $formTask)
    }
  })
}
const toggleData = $element => {
  if ($element.dataset.active === 'false') {
    $element.setAttribute('data-active', 'true')
  } else {
    $element.setAttribute('data-active', 'false')
  }
}
const toggleBtn = ($icon, $element) => {
  if ($element.dataset.active === 'false') {
    $icon.classList.remove('fa-plus')
    $icon.classList.add('fa-times')
  } else {
    $icon.classList.remove('fa-times')
    $icon.classList.add('fa-plus')
  }
}
