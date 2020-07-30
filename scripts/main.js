const swup = new Swup();
let $svg = document.querySelector('.svg_bg')
let $all_path = $svg.querySelectorAll('.js_path_bg')

test =()=>{
    for(i = 0; i < $all_path.length; i++){
        random = Math.floor(Math.random(1)*$all_path.length)
        // console.log(random)
        $all_path[random].classList.toggle('orange_test')
        // console.log('coucou')
    }
}
setInterval(test, 1000)

