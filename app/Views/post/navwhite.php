<script>

const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
}

let selectHeader = select('#header')
let logo = select('.logo')
let logowhite = select('.logo-white')
let navlinks = document.querySelectorAll('.navbar a')

selectHeader.classList.add('header-scrolled')
logo.classList.add('hidden')
logowhite.classList.remove('hidden')
navlinks.forEach(navlink => {
    navlink.classList.add('white')
});

</script>