const form = document.getElementById('form')
const firstname_input = document.getElementById('firstname-input')
const email_input = document.getElementById('email-input')
const password_input = document.getElementById('password-input')
const repeat_password_input = document.getElementById('repeat-password-input')
const error_message = document.getElementById('error-message')

form.addEventListener('submit', (e) => {
  let errors = []

  if (firstname_input) {
    // Se tivermos uma entrada de primeiro nome, estaremos na inscrição
    errors = getSignupFormErrors(firstname_input.value, email_input.value, password_input.value, repeat_password_input.value)
  }
  else {
    // Se não tivermos uma entrada de primeiro nome, estaremos no login
    errors = getLoginFormErrors(email_input.value, password_input.value)
  }

  if (errors.length > 0) {
    // Se não houver erros
    e.preventDefault()
    error_message.innerText = errors.join(". ")
  }
})

function getSignupFormErrors(firstname, email, password, repeatPassword) {
  let errors = []

  if (firstname === '' || firstname == null) {
    errors.push('O campo primeiro nome é obrigatório!')
    firstname_input.parentElement.classList.add('Incorreto')
  }
  if (email === '' || email == null) {
    errors.push('O campo email é obrigatório!')
    email_input.parentElement.classList.add('Incorreto')
  }
  if (password === '' || password == null) {
    errors.push('O campo senha é obrigatório!')
    password_input.parentElement.classList.add('Incorreto')
  }
  if (password.length < 8) {
    errors.push('A senha deve conter no mínimo 8 caracteres')
    password_input.parentElement.classList.add('Incorreto')
  }
  if (password !== repeatPassword) {
    errors.push('As senhas não coincidem repita')
    password_input.parentElement.classList.add('Incorreto')
    repeat_password_input.parentElement.classList.add('Incorreto')
  }


  return errors;
}

function getLoginFormErrors(email, password) {
  let errors = []

  if (email === '' || email == null) {
    errors.push('Email é obrigatório')
    email_input.parentElement.classList.add('Incorreto')
  }
  if (password === '' || password == null) {
    errors.push('Senha é obrigatória')
    password_input.parentElement.classList.add('Incorreto')
  }

  return errors;
}

const allInputs = [firstname_input, email_input, password_input, repeat_password_input].filter(input => input != null)

allInputs.forEach(input => {
  input.addEventListener('input', () => {
    if (input.parentElement.classList.contains('Incorreto')) {
      input.parentElement.classList.remove('Incorreto')
      error_message.innerText = ''
    }
  })
})