const swup = new Swup({
    plugins: [new SwupOverlayTheme({
        color: '#df8d52',
        duration: 500,
        direction: 'to-bottom',
    })]
  });
// let $svg = document.querySelector('.svg_bg')
// let $all_path = $svg.querySelectorAll('.js_path_bg')

// test =()=>{
//     for(i = 0; i < $all_path.length; i++){
//         random = Math.floor(Math.random(1)*($all_path.length/2))
//         // console.log(random)
//         $all_path[random].classList.toggle('orange_test')
//         // console.log('coucou')
//     }
// }
// setInterval(test, 2100)
// // setInterval(test, 2800)




function init_first_page() {
    if(document.querySelector('.svg_bg') != null) {
        let $svg = document.querySelector('.svg_bg')
        let $all_path = $svg.querySelectorAll('.js_path_bg')

        test =()=>{
            for(i = 0; i < $all_path.length; i++){
                random = Math.floor(Math.random(1)*($all_path.length/2))
                // console.log(random)
                $all_path[random].classList.toggle('orange_test')
                // console.log('coucou')
            }
        }
        setInterval(test, 2100)
        // setInterval(test, 2800)
    }
}


init_first_page();
document.addEventListener('swup:contentReplaced', init_first_page);




function init() {
    if(document.querySelector(".link_test") != null) {
        console.log('coucou')
    }
}


init();
document.addEventListener('swup:contentReplaced', init);