
// For loader
document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};

const copyright = (year) => {
    let currYear = new Date().getFullYear();
    return year === currYear ? year : `${year}-${currYear % 100}`;
}