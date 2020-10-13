document.addEventListener('DOMContentLoaded', e => {
  initStyle()
  addTaskAction('addTask')
  darkMode()
})
const initStyle = () => {
  if (localStorage.getItem('dark_mode') === 'true') {
    activeDark()
    activeSwitch()
  } else {
    activeLight()
    destroySwitch()
  }
}
const darkMode = () => {
  const $dark = document.querySelector('.switch__slider')
  document.addEventListener('click', e => {
    if (
      e.target.matches('.switch__slider') ||
      e.target.matches('.switch__slider *')
    ) {
      if ($dark.classList.contains('active')) {
        activeLight()
        destroyStorageDark()
        destroySwitch()
      } else {
        activeStorageDark()
        activeDark()
        activeSwitch()
      }
    }
  })
}
function activeLight() {
  document.body.classList.remove('dark')
}
function activeStorageDark() {
  localStorage.setItem('dark_mode', true)
}
function destroyStorageDark() {
  localStorage.setItem('dark_mode', false)
}
function activeDark() {
  document.body.classList.add('dark')
}
function activeSwitch() {
  const $dark = document.querySelector('.switch__slider')
  $dark.classList.add('active')
}
function destroySwitch() {
  const $dark = document.querySelector('.switch__slider')
  $dark.classList.remove('active')
}
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
