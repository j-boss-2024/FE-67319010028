// function stdForm(){
//     var std = document.getElementById("stdForm")
//     var tch = document.getElementById("tchForm")
//     var reg = document.getElementById("stdForm")

//     std.classList.remove("hide")
//     std.classList.add("unhide")
//     tch.classList.remove("hide")
//     tch.classList.add("unhide")
//     reg.classList.remove("hide")
//     reg.classList.add("unhide")
// }
// function tchForm(){
//     var std = document.getElementById("stdForm")
//     var tch = document.getElementById("tchForm")
//     var reg = document.getElementById("stdForm")

//     std.classList.remove("hide")
//     std.classList.add("unhide")
//     tch.classList.remove("hide")
//     tch.classList.add("unhide")
//     reg.classList.remove("hide")
//     reg.classList.add("unhide")
// }
// function regForm(){
//     var std = document.getElementById("stdForm")
//     var tch = document.getElementById("tchForm")
//     var reg = document.getElementById("stdForm")

//     std.classList.remove("hide")
//     std.classList.add("unhide")
//     tch.classList.remove("hide")
//     tch.classList.add("unhide")
//     reg.classList.remove("hide")
//     reg.classList.add("unhide")
// }

function stdForm() {
    document.getElementById("stdForm").style.display = "block";
    document.getElementById("tchForm").style.display = "none";
    document.getElementById("regForm").style.display = "none";
}

function tchForm() {
    document.getElementById("stdForm").style.display = "none";
    document.getElementById("tchForm").style.display = "block";
    document.getElementById("regForm").style.display = "none";
}

function regForm() {
    document.getElementById("stdForm").style.display = "none";
    document.getElementById("tchForm").style.display = "none";
    document.getElementById("regForm").style.display = "block";
}
