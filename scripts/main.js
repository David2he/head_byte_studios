let svg_top_start = document.querySelector(".svg_container_top")
let svg_bot_start = document.querySelector(".svg_container_bot")
let svg_center_container_link = document.querySelector(".svg_center_container_link")

let underline_behind_start_container = document.querySelector(".underline_behind_start_container")
let hexa_center = document.querySelector(".hexa_center")
let follow_the_read_section = document.querySelector(".follow_the_read_section")

let $link_to_trigger_career_join_us = document.querySelectorAll('.link_to_trigger_career_join_us')
let $career_join_us = document.querySelector('.career_join_us')
let $close_career_join_us = document.querySelector('.close_career_join_us')

// HAMBURGEUR MENUE SECTION 
let toggle_menue_hamburgeur = document.querySelector(".toggle_menue_hamburgeur")
let span_hamburgeur_menue_1 = document.querySelector(".span_hamburgeur_menue_1")
let span_hamburgeur_menue_2 = document.querySelector(".span_hamburgeur_menue_2")
let span_hamburgeur_menue_3 = document.querySelector(".span_hamburgeur_menue_3")
let hamburgeur_menue_list = document.querySelector(".hamburgeur_menue_list")
let link_to_scroll_in_hamburgeur = document.querySelectorAll(".link_to_scroll")


for(i = 0; i < $link_to_trigger_career_join_us.length; i++){
  $link_to_trigger_career_join_us[i].addEventListener('click',(event)=>{
    event.preventDefault()
    $career_join_us.classList.add('career_join_us_triggered')
  })
}

$close_career_join_us.addEventListener('click',()=>{
  $career_join_us.classList.remove('career_join_us_triggered')
})

toggle_menue_hamburgeur.addEventListener("click", (event) => {
  event.preventDefault()
  hamburgeur_menue_list.classList.toggle("take_place")
  span_hamburgeur_menue_1.classList.toggle("HB_1_transition_active")
  span_hamburgeur_menue_2.classList.toggle("HB_2_transition_active")
  span_hamburgeur_menue_3.classList.toggle("HB_3_transition_active")
  span_hamburgeur_menue_1.classList.toggle("HB_1_transition_unnactive")
  span_hamburgeur_menue_2.classList.toggle("HB_2_transition_unnactive")
  span_hamburgeur_menue_3.classList.toggle("HB_3_transition_unnactive")
})

for (i = 0; i < link_to_scroll_in_hamburgeur.length;i++) {
  link_to_scroll_in_hamburgeur[i].addEventListener("click", () => {
    hamburgeur_menue_list.classList.toggle("take_place")
    span_hamburgeur_menue_1.classList.toggle("HB_1_transition_active")
    span_hamburgeur_menue_2.classList.toggle("HB_2_transition_active")
    span_hamburgeur_menue_3.classList.toggle("HB_3_transition_active")
    span_hamburgeur_menue_1.classList.toggle("HB_1_transition_unnactive")
    span_hamburgeur_menue_2.classList.toggle("HB_2_transition_unnactive")
    span_hamburgeur_menue_3.classList.toggle("HB_3_transition_unnactive")
  })
}

page_scroll_0 = () => {
  document.body.classList.toggle("overflow_body")
  // window.scrollTo(0, 0)
}

let window_height = window.innerHeight * 0.1

// EACH CELLS AT THE BEGINNING
window.addEventListener("mousemove", (event) => {
  y_pos = event.clientY * 0.1
  if (y_pos > window_height / 2) {
    svg_bot_start.classList.add("testmother")
    svg_top_start.classList.remove("testmother")
  } else {
    svg_top_start.classList.add("testmother")
    svg_bot_start.classList.remove("testmother")
  }
})
window.addEventListener("resize", () => {
  window_height = window.innerHeight * 0.1

})

// START THE WEBSITE
svg_center_container_link.addEventListener("click", () => {
  svg_top_start.classList.toggle("go_up")
  svg_bot_start.classList.toggle("go_down")
  document.body.classList.add("overflow_body")
  follow_the_read_section.classList.toggle("opacity_follow")
  window.scrollTo(0, 0)
  svg_center_container_link.style.transform = "translateX(100vw)"
  svg_center_container_link.style.opacity= "0"
  underline_behind_start_container.style.opacity= "0"

})



const $home_div_container = document.getElementById("home")
const $our_games_div_container = document.getElementById("our_games")
const $about_us_div_container = document.getElementById("about_us")
const $career_div_container = document.getElementById("career")
const $contact_div_container = document.getElementById("contact")
const $q_and_a_div_container = document.getElementById("q_and_a")

const $stick = document.querySelectorAll(".stick")

const $stick_1 = document.querySelector(".stick_1")
const $stick_2 = document.querySelector(".stick_2")
const $stick_3 = document.querySelector(".stick_3")
const $stick_4 = document.querySelector(".stick_4")
const $stick_5 = document.querySelector(".stick_5")
const $stick_6 = document.querySelector(".stick_6")

const ratio = 0.7
const option = {
  root: null,
  rootMargin: "0px",
  threshold: ratio,
}

const handleIntersect_home = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      $stick_1.style.opacity = 1
    } else {
      $stick_1.style.opacity = 0
    }
  })
}

const handleIntersect_our_games = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      $stick_2.style.opacity = 1
    } else {
      $stick_2.style.opacity = 0
    }
  })
}

const handleIntersect_about_us = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      $stick_3.style.opacity = 1
    } else {
      $stick_3.style.opacity = 0
    }
  })
}

const handleIntersect_carrer = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      $stick_4.style.opacity = 1
    } else {
      $stick_4.style.opacity = 0
    }
  })
}

const handleIntersect_contact = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      $stick_5.style.opacity = 1
    } else {
      $stick_5.style.opacity = 0
    }
  })
}

const handleIntersect_q_and_a = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      $stick_6.style.opacity = 1
    } else {
      $stick_6.style.opacity = 0
    }
  })
}

const observer_home = new IntersectionObserver(handleIntersect_home, option)
observer_home.observe($home_div_container)

const observer_our_game = new IntersectionObserver(
  handleIntersect_our_games,
  option
)
observer_our_game.observe($our_games_div_container)

// const observer_our_game = new IntersectionObserver(handleIntersect_our_games, option)
// observer_our_game.observe($our_games_div_container)

const observer_about_us = new IntersectionObserver(
  handleIntersect_about_us,
  option
)
observer_about_us.observe($about_us_div_container)

const observer_carrer = new IntersectionObserver(
  handleIntersect_carrer,
  option
)
observer_carrer.observe($career_div_container)

const observer_our_contact = new IntersectionObserver(
  handleIntersect_contact,
  option
)
observer_our_contact.observe($contact_div_container)

const observer_q_and_a = new IntersectionObserver(
  handleIntersect_q_and_a,
  option
)
observer_q_and_a.observe($q_and_a_div_container)

if (window.performance) {
  // console.info("window.performance works fine on this browser")
}
console.info(performance.navigation.type)
if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
  // console.info( "This page is reloaded" )
  page_scroll_0()
  // svg_top.classList.add("go_up")
  // svg_bot.classList.add("go_down")
  // follow_the_read_section.classList.add('opacity_follow')
  

} else {
  // console.info( "This page is not reloaded")
}
