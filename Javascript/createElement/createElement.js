function create(elem, where, className) {
    const item = document.createElement(elem);
    item.setAttribute("class", className);
    where.append(item);
    return item;
}