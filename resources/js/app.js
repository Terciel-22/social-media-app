import './bootstrap';
import './jquery';

// Home
$(".open-btn").on("click", ()=>{
    $(".sidebar").addClass("active");
});
$(".close-btn").on("click", ()=>{
    $(".sidebar").removeClass("active");
});