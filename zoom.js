const container = document.getElementById("zoomContainer");
const img = document.getElementById("zoomedImg");
container.addEventListener("mousemove", onZoom);
container.addEventListener("mouseover", onZoom);
container.addEventListener("mouseleave", offZoom);
function onZoom(e) {
    const x = e.clientX - e.target.offsetLeft;
    const y = e.clientY - e.target.offsetTop;
    img.style.transformOrigin = `${x}px ${y}px`;
    img.style.transform = "scale(2.5)";
    img.style.border = "0px";
}
function offZoom(e) {
    img.style.transformOrigin = `center center`;
    img.style.transform = "scale(1)";
    img.style.border = "1px solid black";
}