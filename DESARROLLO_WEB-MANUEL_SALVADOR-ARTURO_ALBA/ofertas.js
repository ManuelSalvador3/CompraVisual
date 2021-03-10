const productosofertados = [
    {
        Producto: "Millenium 49",
        Categoria: "Diseño",
        Info: "Ultra Wide",
        Precio: "90",
        Foto: "imagenes/ofertas/millenium4949.jpg"
    },
    {
        Producto: "Aoc C24G1",
        Categoria: "Gaming",
        Info: "23.8 pulgadas",
        Precio: "110",
        Foto: "imagenes/ofertas/aocC24G124.jpg"
    },
    {
        Producto: "Benq ZOWIE XL11",
        Categoria: "Gaming",
        Info: "24 pulgadas",
        Precio: "95",
        Foto: "imagenes/ofertas/benq.jpg"
    },
    {
        Producto: "Asus TUF2H3",
        Categoria: "Gaming",
        Info: "23 pulgadas",
        Precio: "85",
        Foto: "imagenes/ofertas/asustuf.jpg"
    },
    {
        Producto: "Aoc B2H",
        Categoria: "Diseño",
        Info: "27 pulgadas",
        Precio: "100",
        Foto: "imagenes/ofertas/aoc27B2H27.jpg"
    },
    {
        Producto: "Aoc 24B2XH",
        Categoria: "Ofimática",
        Info: "23.8 pulgadas",
        Precio: "70",
        Foto: "imagenes/ofertas/aoc24B2XH23.8.jpg"
    }
];

function plantillaofertas (producto) {
    return `
        <div class="col-md-4">
            <div class="card border-0" style="width: 18rem;">
                <img class="card-img-top" src="${producto.Foto}">
                <div class="card-body">
                    <h5 class="card-title">${producto.Producto}</h5>
                    <p> ${producto.Precio}€</p>
                    <p class="card-text">${producto.Categoria}</p>
                    <a href="#" class="btn btn-success">Añadir al carrito</a>
                </div>
            </div>
        </div>
        
    `;
}
document.getElementById("app").innerHTML = `
    ${productosofertados.map(plantillaofertas).join("")}
`;