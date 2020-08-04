const swup = new Swup({
    plugins: [new SwupOverlayTheme({
        color: '#df8d52',
        duration: 350,
        direction: 'to-bottom',
    })]
  });

// setInterval(test, 2800)




function init_first_page() {
    if(document.querySelector('.svg_bg') != null) {
        let $svg = document.querySelector('.svg_bg')
        let $all_path = $svg.querySelectorAll('.js_path_bg')
        let testouille = 1
        let random = Math.floor(Math.random(1)*($all_path.length/2))
        test =()=>{
            for(i = 0; i < 2; i++){
                let random = Math.floor(Math.random(1)*($all_path.length/2))
                $all_path[random].classList.toggle('orange_test')
                // console.log('coucou')
            }
        }
        delete_test =()=>{
            for(i = 0; i < 2; i++){
                let random = Math.floor(Math.random(1)*($all_path.length/2))
                $all_path[random].classList.toggle('orange_test_remove')
                // console.log('coucou')
            }
        }
        delete_test()
        test()
        setInterval(test, 900)
        setInterval(test, 1800)
        setInterval(test, 2700)
        setInterval(test, 3600)
        
        setInterval(delete_test, 900)
        setInterval(delete_test, 1800)
        setInterval(delete_test, 2700)
        setInterval(delete_test, 3600)
        // setInterval(test, 2800)
    }
}







function init() {
    if(document.querySelector(".container_second_page") != null) {
        const svg_test = document.querySelectorAll('.svg_test_canvas')
        console.log(svg_test)

//         imged = "./images/HBS.png" 
//         const canvas = document.querySelector("canvas");
//         const context = canvas.getContext("2d");

//         let tryImg = document.createElement("img")
// tryImg.src = "./images/HBS.png"
// let sizeOfRadius = window.innerWidth / 4 // size of the radius which "drawn" image

// window.addEventListener("resize",()=>{
//     sizeOfRadius =  window.innerWidth / 4 // define again the size of radius to adapt it depending to the screen width 

//   })



// const mouse = {
//   x: undefined,
//   y: undefined
// }

// window.addEventListener("mousemove", (event)=>{
//   mouse.x = event.clientX
//   mouse.y = event.clientY
// })

// const loop = () =>{
//     window.requestAnimationFrame(loop)
//     context.globalAlpha = 0.2 // cool effect we saw in classes with you (tbh this is the same lol)
//     context.fillStyle = '#fff' // color of the background
//     context.fillRect(0, 0, canvas.width, canvas.height)
    
    
//     context.beginPath() // start drawing ! 
//     const pattern = context.createPattern(tryImg, "repeat"); 
//     context.arc(mouse.x, mouse.y, sizeOfRadius, 0, Math.PI * 2) // create the circle which reveal the image
//     context.globalAlpha = 1
//     context.fillStyle = pattern // bacground became the image 
//     context.fill()
    

    
// }
// loop()
        
    }
}


init_first_page();
document.addEventListener('swup:contentReplaced', init_first_page);

init();
document.addEventListener('swup:contentReplaced', init);

