// Create an element what you want and where you want

function create(elem, where, className) {
    const item = document.createElement(elem);
    item.setAttribute("class", className);
    where.append(item);
    return item;
}