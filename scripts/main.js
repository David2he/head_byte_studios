// const canvas = document.querySelector("canvas");
// const ctx = canvas.getContext("2d");

// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;

// draw_canvas=()=>{
// ctx.fillStyle = "white";
// ctx.beginPath();
// ctx.moveTo(150, 100);
// ctx.lineTo(200, 150);
// ctx.lineTo(200, 200);
// ctx.lineTo(150, 250);
// ctx.lineTo(100, 250);
// ctx.lineTo(50, 200);
// ctx.lineTo(50, 150);
// ctx.lineTo(100, 100);
// ctx.closePath();
// ctx.fill();
// }
// draw_canvas()


// window.addEventListener("resize",()=>{
//     canvas.width = window.innerWidth 
//     canvas.height = window.innerHeight;
//     draw_canvas();
//   })

let $link_center = document.querySelector('.svg_center_container_link')
// let test_var = "--scale_hexa_w";
// // $link_center.addEventListener('click',()=>{
// //     var style = getComputedStyle(document.body);
// //     console.log(style.getPropertyValue('--scale_hexa_w'));
// //     document.documentElement.style.setProperty('--scale_hexa_w', '5');
// //     console.log(style.getPropertyValue('--scale_hexa_w'));
// // })

// $link_center.addEventListener('click',()=>{
//     document.documentElement.style.setProperty(test_var, '8')
//     console.log( document.documentElement.style.getPropertyValue(test_var));
// })
let i  = window.innerWidth *0.0002
let i2  = window.innerHeight * 0.0004


let $svg = document.querySelector('.testouille')

$link_center.addEventListener('click',()=>{
    $svg.style.transform =   `scale(${i}, ${i2})`;

    }
)

window.addEventListener('resize', ()=>{
    console.log(window.innerWidth)
    console.log(window.innerHeight)
    // i += 0.1
    // i2 += 0.1
    $svg.style.transform =   `scale(${i}, ${i2})`;
})


